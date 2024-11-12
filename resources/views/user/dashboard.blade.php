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
    <p class="mt-5">You have not made any orders yet.</p>
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
              </tr>
            </thead>
            <tbody>
              @foreach($filteredOrders as $order)
                <tr>
                  <td>{{ $order->product_name }}</td>
                  <td>{{ $order->quantity }}</td>
                  <td>{{ $order->deadline_date }}</td>
                  @if($status == 'Dikonfirmasi')
                    <td>{{ $order->progress }}</td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
        @endif
      @endforeach
    @endif

    <div class="flex flex-col items-center mt-20">
      <a href="{{ route('user.orders.create') }}"
        class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
        <button type="submit">Order now</button>
      </a>
      <form method="POST" action="{{ route('logout') }}"
        class="mt-4 bg-[#606060] text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-[#606060] border hover:border-[#606060]">
        @csrf
        <button type="submit">Logout</button>
      </form>
    </div>
  </div>
</body>

</html>
