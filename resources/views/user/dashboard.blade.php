<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Dashboard</title>
  @vite('resources/css/app.css')
</head>

<!-- <body class="font-mont">
  <div class="container flex flex-col items-center min-h-screen justify-center">
    <h1>Hello, {{ auth()->user()->name }}</h1>
    <p>This is the user dashboard page, accessible to regular users.</p>

    @if($invitations->isEmpty() && $souvenirs->isEmpty() && $seminarkits->isEmpty() && $packagings->isEmpty())
    <p class="mt-5">You have not made any orders yet.</p>
    @else
      @foreach(['Menunggu Konfirmasi', 'Dikonfirmasi', 'Ditolak'] as $status)
        @php
          $filteredOrders = $invitations->where('status', $status)
                          ->merge($souvenirs->where('status', $status))
                          ->merge($seminarkits->where('status', $status))
                          ->merge($packagings->where('status', $status));
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
      <a href="{{ route('user.orders.invitation.create') }}"
        class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
        <button type="submit">Order invitation</button>
      </a>
      <a href="{{ route('user.orders.souvenir.create') }}"
        class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
        <button type="submit">Order souvenir</button>
      </a>
      <a href="{{ route('user.orders.seminarkit.create') }}"
        class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
        <button type="submit">Order seminar kit</button>
      </a>
      <a href="{{ route('user.orders.packaging.create') }}"
        class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
        <button type="submit">Order packaging</button>
      </a>
      <form method="POST" action="{{ route('logout') }}"
        class="mt-4 bg-[#606060] text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-[#606060] border hover:border-[#606060]">
        @csrf
        <button type="submit">Logout</button>
      </form>
    </div>
  </div>
</body> -->

<body class="font-mont">
  <!-- Main Container -->
  <div class="grid grid-cols-[20%_65%_15%]">
    <!-- sidebar -->
    <div class="bg-green-main min-h-screen">
      <ul class="space-y-5 py-10">
        <li>
          <div>
            <span class="ms-3 text-2xl font-medium text-cream px-10">ADMIN</span>
          </div>
        </li>
        <li>
          <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl bg-cream text-green-main">
            <span>Beranda</span>
          </a>
        </li>
        <li>
          <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Data Pesanan</span>
          </a>
        </li>
        <li>
          <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Inventory</span>
          </a>
        </li>
        <li>
          <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Reminder</span>
          </a>
        </li>
        <li>
          <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Kalender</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- main content -->
    <div class="container h-screen">
      <div class="bg-cream h-screen grid grid-rows-[75%_25%]">
        <div class="grid grid-rows-[20%_80%]">

          <div class=" bg-slate-400 flex flex-col justify-center items-center">
            <h1>Hello, {{ auth()->user()->name }}</h1>
            <p>This is the user dashboard page, accessible to regular users.</p>
          </div>

          <div class="grid grid-cols-2 bg-blue-200 ">
            <div class="grid grid-rows-2">

              <div class="bg-cream px-5 py-5">
                <div class="bg-green-main w-50 h-full flex flex-col rounded-lg">
                  <h2>Undangan</h2>
                  <a href="{{ route('user.orders.invitation.create') }}"
                    class="bg-brown-main text-white px-5 py-1 rounded-b-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
                    Order invitation
                  </a>
                </div>
              </div>

              <div class="bg-cream px-5 py-5">
                <div class="bg-green-main w-50 h-full flex flex-col rounded-lg">
                  <h2>Souvenir</h2>
                  <a href="{{ route('user.orders.souvenir.create') }}"
                    class="bg-brown-main text-white px-5 py-1 rounded-b-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
                    <button type="submit">Order souvenir</button>
                  </a>
                </div>
                
              </div>

            </div>

            <div class="grid grid-rows-2">

              <div class="bg-cream px-5 py-5">
                <div class="bg-green-main w-50 h-full flex flex-col rounded-lg">
                  <h2>Seminar Kit</h2>
                  <a href="{{ route('user.orders.seminarkit.create') }}"
                    class="bg-brown-main text-white px-5 py-1 rounded-b-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
                    <button type="submit">Order seminar kit</button>
                  </a>
                </div>
              </div>

              <div class="bg-cream px-5 py-5">
                <div class="bg-green-main w-50 h-full flex flex-col rounded-lg">
                  <h2>Packaging</h2>
                  <a href="{{ route('user.orders.packaging.create') }}"
                    class="bg-brown-main text-white px-5 py-1 rounded-b-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
                    <button type="submit">Order packaging</button>
                  </a>
                </div>
                
              </div>

            </div>

          </div>
          
        </div>

        <div class="grid grid-cols-4 bg-cream px-2 py-2 gap-3">
          <div class="w-100 bg-slate-200 flex justify-center rounded-xl shadow-md hover:-translate-y-5 transition transform duration-300 py-3">
            <h2>Order</h2>
          </div>
          <div class="w-100 bg-slate-600 flex justify-center rounded-xl shadow-md hover:-translate-y-5 transition transform duration-300 py-3">
            <h2>Proses</h2>
          </div>
          <div class="w-100 bg-slate-200 flex justify-center rounded-xl shadow-md hover:-translate-y-5 transition transform duration-300 py-3">
            <h2>Finishing</h2>
          </div>
          <div class="w-100 bg-slate-600 flex justify-center rounded-xl shadow-md hover:-translate-y-5 transition transform duration-300 py-3">
            <h2>Ready</h2>
          </div>
        </div>
        
      </div>

    </div>

    <!-- deadline -->
     <div class="container h-screen bg-slate-200 shadow-inner grid grid-rows-[15%_85%]">
      <div class="bg-green-main flex items-center justify-center text-blue-50">
        <h1>DEADLINE</h1>
      </div>
      <div class="flex justify-start px-5 py-5 flex-col">
        <ul class="space-y-5 underline">
          <li>Yanto</li>
          <li>Yanto</li>
          <li>Bejo</li>
          <li>Andi</li>
          <li>John Doe</li>
          <li>Yanto</li>
          <li>Yanto</li>
          <li>Bejo</li>
          <li>Andi</li>
          <li>John Doe</li>
        </ul>
        <a href="" class="bg-green-main text-blue-50 rounded-lg px-3 py-2 flex justify-center mt-3">Lihat Semua</a>
      </div>
     </div>

  </div>
</body>

</html>
