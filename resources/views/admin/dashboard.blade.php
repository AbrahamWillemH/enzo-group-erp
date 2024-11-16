<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  @vite('resources/css/app.css')
</head>

<body class="font-mont">
  <div class="container flex flex-col items-center min-h-screen justify-center">
    <h1>Hello, {{ auth()->user()->name }}</h1>
    <p>This is the admin dashboard page.</p>

    @if($invitations->isEmpty())
    <p class="mt-5">There are no orders yet.</p>
    @else
      @foreach(['Menunggu Konfirmasi', 'Dikonfirmasi', 'Ditolak'] as $status)
        @php
          $filteredOrders = $invitations->where('status', $status);
        @endphp

        @if($filteredOrders->isNotEmpty())
          <h2 class="mt-10">Order dengan status <span class="font-bold">{{ $status }}:</span></h2>
          <table class="mt-2">
            <thead>
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Deadline Date</th>
                @if($status == 'Dikonfirmasi')
                  <th>Progress</th>
                @endif
                @if ($status == 'Menunggu Konfirmasi' || $status == 'Dikonfirmasi')
                <th>Action</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach($filteredOrders as $invitation)
                <tr>
                  <td>{{ $invitation->product_name }}</td>
                  <td>{{ $invitation->quantity }}</td>
                  <td>{{ $invitation->deadline_date }}</td>
                  @if ($status == 'Menunggu Konfirmasi')
                  <td class="flex flex-row gap-2">
                    <form action="{{ route('orders.approve', $invitation->id) }}" method="POST">
                      @csrf
                      <button type="submit" class="bg-accept text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-accept border hover:border-accept">Approve</button>
                    </form>
                    <form action="{{ route('orders.decline', $invitation->id) }}" method="POST">
                      @csrf
                      <button type="submit" class="bg-decline text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-decline border hover:border-decline">Decline</button>
                    </form>
                  </td>
                  @elseif ($status == 'Dikonfirmasi')
                  <td>{{ $invitation->progress }}</td>
                  <td>
                    <form action="{{ route('orders.updateProgress', $invitation->id) }}" method="POST">
                      @csrf
                      @if ($invitation->progress != 'Selesai')
                      <button type="submit"
                        class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
                        Update Progress
                      </button>
                      @else
                      <button type="submit"
                        class="bg-disabled text-white px-5 py-1 rounded-lg" disabled>
                        Sudah Selesai
                      </button>
                      @endif
                    </form>
                  </td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
        @endif
      @endforeach
    @endif
  </div>
</body>

</html>
