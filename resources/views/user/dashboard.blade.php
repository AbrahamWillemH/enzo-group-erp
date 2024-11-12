<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container flex flex-col items-center min-h-screen justify-center">
        <h1>Hello, {{ auth()->user()->name }} </h1>
        <p>This is the user dashboard page, accessible to regular users.</p>

        @if($orders_confirmation->isEmpty() && $orders_declined && $orders_final->isEmpty())
            <p class="mt-5">You have not made any orders yet.</p>
        @endif
        @if($orders_confirmation->isNotEmpty())
            <h2 class="mt-10">Order menunggu konfirmasi admin:</h2>
            <table class="mt-2">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Deadline Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders_confirmation as $order)
                        <tr>
                            <td>{{ $order->product_name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->deadline_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if($orders_final->isNotEmpty())
        <h2 class="mt-10">Order sudah dikonfirmasi:</h2>
        <table class="mt-2">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Deadline Date</th>
                    <th>Progress</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders_final as $order)
                    <tr>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->deadline_date }}</td>
                        <td>{{ $order->progress }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif

        @if ($orders_declined->isNotEmpty())
        <h2 class="mt-10">Order ditolak:</h2>
        <table class="mt-2">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Deadline Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders_declined as $order)
                    <tr>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->deadline_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif

        <div class="flex flex-col items-center mt-20">
            <a href="{{ route('user.orders.create') }}" class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
                <button type="submit">Order now</button>
            </a>
            <form method="POST" action="{{ route('logout') }}" class="mt-4 bg-[#606060] text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-[#606060] border hover:border-[#606060]">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
