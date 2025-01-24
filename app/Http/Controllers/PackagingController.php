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
    public function index()
    {
        $packaging = Packaging::all()->map(function ($item) {
            $item->type = 'packaging';
            return $item;
        });

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
            'address' => 'required|string|max:1000',
            'finishing' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'package_type' => 'required|string|max:255',
            'note_design' => 'required|string|max:255',
            'size' => 'required|string|max:255'
        ]);


        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Proses simpan data jika validasi berhasil
        $validated = $validator->validated();
        $user = auth()->user();
        $order = new Packaging($validated);
        $order->user_id = $user->id;
        $order->type = 'Packaging';
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
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'quantity' => 'required|integer',
            'deadline_date' => 'nullable|date',
            'progress' => 'required|string',
            'address' => 'required|string|max:1000',
            'finishing' => 'required|string|max:255',
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
            'desain_path' => 'nullable|mimes:jpg,jpeg,png,pdf'
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
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('invitations', $fileName, 'public');

            $validated['desain_path'] = $filePath;
        }

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

    public function updatePaymentStatus(Request $request)
    {
        // Perbarui status pembayaran di database
        $order = Packaging::findOrFail($request->order_id);
        $order->payment_status = $request->payment_status;
        $order->save();

        return $this->index();
    }
}
