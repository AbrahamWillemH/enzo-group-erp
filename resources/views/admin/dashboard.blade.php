<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Dashboard</title>
  @vite('resources/css/app.css')
</head>

<body class="font-mont">
  <div class="container flex flex-col items-center min-h-screen justify-center">
    <h1>Hello, {{ auth()->user()->name }}</h1>
    <p>This is the user dashboard page, accessible to regular users.</p>

    @if($orders->isEmpty())
    <p class="mt-5">There are no orders yet.</p>
    @else
      @foreach(['Menunggu Konfirmasi', 'Dikonfirmasi', 'Ditolak'] as $status)
        @php
          $filteredOrders = $orders->where('status', $status);
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
              @foreach($filteredOrders as $order)
                <tr>
                  <td>{{ $order->product_name }}</td>
                  <td>{{ $order->quantity }}</td>
                  <td>{{ $order->deadline_date }}</td>
                  @if ($status == 'Menunggu Konfirmasi')
                  <td>
                    <form action="{{ route('orders.approve', $order->id) }}" method="POST">
                      @csrf
                      <button type="submit">Approve</button>
                    </form>
                  </td>
                  @elseif ($status == 'Dikonfirmasi')
                  <td>{{ $order->progress }}</td>
                  <td>
                    <form action="{{ route('orders.updateProgress', $order->id) }}" method="POST">
                      @csrf
                      <button type="submit">Update Progress</button>
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
