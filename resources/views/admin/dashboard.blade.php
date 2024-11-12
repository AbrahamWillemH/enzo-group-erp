<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  @vite('resources/css/app.css')
</head>

<body class="flex flex-col items-center">
  <div class="flex flex-col items-center">
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is the admin dashboard page, accessible only to admins.</p>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit"
        class="bg-decline text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-decline border hover:border-decline">
        Logout
      </button>
    </form>
  </div>


  <h2 class="text-3xl mt-10">Order List</h2>
  <div class="flex flex-col text-center mt-10 py-5">
    @if ($orders_confirmation->isNotEmpty())
    <h3 class="font-bold">Waiting for confirmation:</h3>
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>User Name</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Deadline Date</th>
          <th>Action</th>
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
              <button type="submit"
                class="bg-accept text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-accept border hover:border-accept">
                Approve
              </button>
            </form>
            <form action="{{ route('orders.decline', $order->id) }}" method="POST">
              @csrf
              <button type="submit"
                class="bg-decline text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-decline border hover:border-decline">
                Decline
              </button>
            </form>
          </td>
  </div>
  </tr>
  @endforeach
  </tbody>
  </table>
  @endif

  @if ($orders_final->isNotEmpty())
  <table>
    <h3 class="font-bold mt-10">Confirmed orders:</h3>
    <thead>
      <tr>
        <th>Order ID</th>
        <th>User Name</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Deadline Date</th>
        <th>Progress</th>
        <th>Action</th>
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
          <form action="{{ route('orders.updateProgress', $order->id) }}" method="POST"
            id="updateProgressForm{{ $order->id }}">
            @csrf
            <button type="submit" onclick="event.preventDefault(); confirmUpdate({{ $order->id }});"
              class="bg-accept text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-accept border hover:border-accept">
              Update Progress
            </button>
          </form>
        </td>
        @else
        <td class="">
          <form action="{{ route('orders.updateProgress', $order->id) }}" method="POST"
            id="updateProgressForm{{ $order->id }}">
            @csrf
            <button type="submit" disabled class="bg-disabled text-white px-5 py-1 rounded-lg">
              Update Progress
            </button>
          </form>
          @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif

  @if ($orders_declined->isNotEmpty())
  <table>
    <h3 class="font-bold mt-10">Declined orders:</h3>
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
  </table>
  @endif
  </div>

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
