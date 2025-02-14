<?php

namespace App\Http\Controllers;

use App\Models\Packaging;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Storage;
use Validator;

class PackagingController extends Controller
{
    public function index(Request $request)
    {
        $packaging = Packaging::query();
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'alphabetical':
                    $packaging->orderBy('user_name', 'asc');
                    break;
                case 'order':
                    $packaging->orderBy('created_at', 'asc');
                    break;
                case 'deadline':
                    $packaging->orderBy('deadline_date', 'asc');
                    break;
                default:
                    $packaging->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            $packaging->orderBy('created_at', 'desc');
        }

        $packaging = $packaging->get();

        return view('admin.packaging', compact('packaging'));
    }

    public function create()
    {
        return view('user.orders.packaging_create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'quantity' => 'required|integer',
            'deadline_date' => 'nullable|date',
            'address' => 'required|string|max:1000',
            'finishing' => 'required|array',
            'model' => 'required|string|max:255',
            'package_type' => 'required|string|max:255',
            'note_design' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'kemas'=>'required|string|max:255',
            'source'=>'required|string|max:255'
        ]);


        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Proses simpan data jika validasi berhasil
        $validated = $validator->validated();
        $validated['finishing'] = implode(', ', $request->input('finishing'));
        $user = auth()->user();
        $order = new Packaging($validated);
        $order->user_id = $user->id;
        $order->type = 'packaging';
        $order->id = Packaging::generatePackagingId();

        $order->save();

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id){
        $packaging = Packaging::findOrFail($id);
        // dd($packaging);
        return view('admin.packaging_edit', compact('packaging'));
    }

    public function update(Request $request, $id)
    {
        $finishing = json_decode($request->finishing);
        $request->merge(['finishing' => $finishing]);

        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'quantity' => 'required|integer',
            'deadline_date' => 'nullable|date',
            'progress' => 'required|string',
            'address' => 'required|string|max:1000',
            'finishing' => 'required|array|min:1',
            'model' => 'required|string',
            'package_type' => 'required|string',
            'size' => 'required|string',
            'note_design' => 'nullable|string',
            'payment_status' => 'nullable|string',
            'price_per_pcs' => 'nullable|string',
            'printout' => 'nullable|string',
            'dp1_date' => 'nullable|date',
            'dp2_date' => 'nullable|date',
            'paid_off_date' => 'nullable|date',
            'expedition' => 'nullable|string',
            'design_status' => 'nullable|string',
            'note_cs' => 'nullable|string',
            'desain_path' => 'nullable|mimes:jpg,jpeg,png,pdf',
            'subprocess' => 'nullable|enum',
            'kemas'=>'required|string|max:255',
            'source'=>'required|string|max:255'
        ]);

        $order = Packaging::findOrFail($id);

        if ($request->hasFile('desain_path') && $request->file('desain_path')->isValid()) {
            if ($order->desain_path) {
                // dd(Storage::path( $order->desain_path));
                if (Storage::exists($order->desain_path)) {
                    try {
                        Storage::delete($order->desain_path);
                    } catch (\Exception $e) {
                        dd($e->getMessage());
                    }
                }
            }
            $file = $request->file('desain_path');
            $fileName = $order->user_name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('packaging', $fileName, 'public');

            $validated['desain_path'] = $filePath;
            $validated['design_status'] = 'Pending';
        }

        $validated['finishing'] = implode(', ', $finishing);

        $order->update($validated);

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function packagingDetails($id){
        $packaging = DB::table('packaging')->find($id);
        $purchase = DB::table('purchase_packaging')
        ->where('packaging_id', $id)
        ->get()
        ->map(function ($item) {
            $item->date = Carbon::parse($item->date)->format('d/m/Y');
            return $item;
        });
        return view('admin.packaging_detail', compact('packaging', 'purchase'));
    }

    public function updatePaymentSubprocess(Request $request)
    {
        // Perbarui status pembayaran di database
        $order = Packaging::findOrFail($request->order_id);

        if ($request->has('payment_status')) {
            $order->payment_status = $request->payment_status;
        }

        if ($request->has('subprocess')) {
            $order->subprocess = $request->subprocess;
        }

        $order->save();

        return $this->index($request);
    }

    public function getDeadlinesPackagings()
    {
        // $invitations = Invitation::select('id', 'user_name', 'type', 'deadline_date')->get();
        // $souvenirs = Souvenir::select('id', 'user_name', 'type', 'deadline_date')->get();
        $packagings = Packaging::select('id', 'user_name', 'type', 'deadline_date')->get();

        // $orders = $invitations->concat($souvenirs)->concat($packagings);

        // Format data untuk kalender
        $events = $packagings->map(function ($order) {
            return [
                'id' => $order->id,
                'title' => $order->user_name. ' - ' . ucwords(strtolower($order->type)),
                'start' => $order->deadline_date,
            ];
        });

        return response()->json($events);
    }

    public function calendar(){
        return view('admin.calendar_packaging');
    }

    public function reminder()
    {
        $reminderDays = 30;
        $today = Carbon::today()->toDateString();

        $packagings = Packaging::where('progress', '!=', 'Selesai Beneran')
            ->whereRaw('DATEDIFF(deadline_date, ?) <= ?', [$today, $reminderDays])
            ->get()
            ->map(function ($item) {
                $item->type = 'packaging';
                return $item;
            });

        // Gabungkan semua data
        $orders = $packagings;

        $sortedOrders = $orders->sortBy('deadline_date');

        // Kirim data ke view
        return view('admin.reminder_packaging', ['orders' => $sortedOrders]);
    }

}
