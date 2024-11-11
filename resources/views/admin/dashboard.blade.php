<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="align-center justify-center">
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is the admin dashboard page, accessible only to admins.</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <h2>Order List</h2>
    <table cellpadding="10" cellspacing="0">
        @if ($orders_confirmation->isNotEmpty())
            <h3>Waiting for confirmation:</h3>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Deadline Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders_confirmation as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_name }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->deadline_date }}</td>
                        <td class="flex flex-row gap-5">
                            <form action="{{ route('orders.approve', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-accept text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:textbr-own-main border hover:border-brown-main">
                                    Approve
                                </button>
                            </form>
                            <form action="{{ route('orders.decline', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
                                    Decline
                                </button>
                            </form>
                        </td>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        @endif

        @if ($orders_final->isNotEmpty())
            <h3>Confirmed orders:</h3>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Deadline Date</th>
                    <th>Progress</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders_final as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_name }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->deadline_date }}</td>
                        <td>{{ $order->progress }}</td>

                        @if ($order->progress != 'Selesai')
                            <td class="">
                                <form action="{{ route('orders.updateProgress', $order->id) }}" method="POST" id="updateProgressForm{{ $order->id }}">
                                    @csrf
                                    <button type="submit" onclick="event.preventDefault(); confirmUpdate({{ $order->id }});">Update Progress</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        @endif

        @if ($orders_declined->isNotEmpty())
            <h3>Declined orders:</h3>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Deadline Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders_declined as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_name }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->deadline_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        @endif

    </table>

    <script>
        function confirmUpdate(orderId) {
            // Menampilkan alert konfirmasi
            const isConfirmed = confirm("Are you sure you want to update the progress?");

            if (isConfirmed) {
                document.getElementById('updateProgressForm' + orderId).submit();
            }
        }
    </script>
</body>
</html>
