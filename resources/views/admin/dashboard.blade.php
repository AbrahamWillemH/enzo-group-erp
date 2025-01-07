<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  @vite('resources/css/app.css')
</head>

<!-- <body class="font-mont">
  <div class="container flex flex-col items-center min-h-screen justify-center">
    <h1>Hello, {{ auth()->user()->name }}</h1>
    <p>This is the Admin dashboard page, accessible only for Admin.</p>

    @if($invitations->isEmpty() && $souvenirs->isEmpty() && $seminarkits->isEmpty() && $packagings->isEmpty())
    <p class="mt-5">There's no order yet.</p>
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
  <aside class="z-40 w-1/5 fixed top-0 left-0">
    <div class="bg-green-main min-h-screen">
      <ul class="space-y-5 py-10">
        <li>
          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-cream rounded-full flex items-center justify-center ml-4">
              <span class="text-green-main font-medium">A</span>
            </div>
            <span style="letter-spacing: 3px" class="font-sans ms-3 text-2xl font-medium text-cream px-1">ADMIN</span>
          </div>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl bg-cream text-green-main">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Data Pesanan</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Inventory</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Reminder</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Calendar</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- Main Container -->
  <div class="grid grid-cols-[80%_20%] ml-[20%] bg-green-light">
    <!-- main content -->
    <div class="container h-screen">
      <div class="h-screen grid grid-rows-[70%_30%]">
        <div class="grid grid-rows-[25%_75%]">

          <div class="flex flex-col justify-center items-center bg-green-main/10">
            <h1>Hello, {{ auth()->user()->name }}</h1>
            <p>This is the admin dashboard page, accessible only for admin.</p>
          </div>

          <div class="grid grid-cols-4 px-5 pt-8 pb-6 gap-3">

            <div class="carousel rounded-lg w-full h-[265px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
              <div class="carousel-inner flex w-[300%] h-full hover:animate-carousel">
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/40 hover:bg-black/10"></div>
                  <img src="{{ asset('img/undanganA.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/undanganB.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/undanganC.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/undanganA.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
              </div>
              
              <a href="{{ route('user.orders.invitation.create') }}"
                class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center">
                Order Invitation
              </a>
              
            </div>

            <div class="carousel rounded-lg w-full h-[265px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
              <div class="carousel-inner flex w-[300%] h-full hover:animate-carousel">
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/40 hover:bg-black/10"></div>
                  <img src="{{ asset('img/souvenirA.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/souvenirB.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/souvenirC.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/souvenirA.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
              </div>
              
              <a href="{{ route('user.orders.invitation.create') }}"
                class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center">
                Order Souvenir
              </a>
              
            </div>

            <div class="carousel rounded-lg w-full h-[265px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
              <div class="carousel-inner flex w-[300%] h-full hover:animate-carousel">
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/40 hover:bg-black/10"></div>
                  <img src="{{ asset('img/coming1.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/coming2.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/coming3.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/coming1.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
              </div>
              
              <a href="{{ route('user.orders.invitation.create') }}"
                class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center">
                Order Seminarkit
              </a>
              
            </div>

            <div class="carousel rounded-lg w-full h-[265px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
              <div class="carousel-inner flex w-[300%] h-full hover:animate-carousel">
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/40 hover:bg-black/10"></div>
                  <img src="{{ asset('img/packagingD.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/packagingB.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/packagingC.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/packagingD.jpeg') }}" alt="Gambar" class=" h-full w-full object-cover">
                </div>
              </div>
              
              <a href="{{ route('user.orders.invitation.create') }}"
                class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center">
                Order Packaging
              </a>
              
            </div>


          </div>
          
        </div>

        <div class="grid grid-cols-4 px-5 py-2 gap-3 h-full">
          <div style="letter-spacing: 3px" class="h-[9rem] font-sans w-100 bg-green-main/20 flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-5 hover:bg-green-main/30 transition transform color duration-300">
            <div class="flex-none h-[30%] flex items-center justify-center">Order</div>
            <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4">340</div>
          </div>
          <div style="letter-spacing: 3px" class="h-[9rem] font-sans w-100 bg-green-main/20 flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-5 hover:bg-green-main/30 transition transform color duration-300">
            <div class="flex-none h-[30%] flex items-center justify-center">Proses</div>
            <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4">40</div>
          </div>
          <div style="letter-spacing: 3px" class="h-[9rem] font-sans w-100 bg-green-main/20 flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-5 hover:bg-green-main/30 transition transform color duration-300">
            <div class="flex-none h-[30%] flex items-center justify-center">Finishing</div>
            <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4">20</div>
          </div>
          <div style="letter-spacing: 3px" class="h-[9rem] font-sans w-100 bg-green-main/20 flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-5 hover:bg-green-main/30 transition transform color duration-300">
            <div class="flex-none h-[30%] flex items-center justify-center">Ready</div>
            <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4">50</div>
          </div>
        </div>
        
      </div>

    </div>

    <!-- deadline -->
     <div class="container h-screen bg-green-shadow shadow-inner grid grid-rows-[15%_85%]">
      <div style="letter-spacing: 3px" class="font-sans bg-green-main flex items-center justify-center text-cream">
        <h1>DEADLINE</h1>
      </div>
      <div class="flex justify-start px-5 py-5 flex-col capitalize">
        <ul style="letter-spacing: 1px" class="text-cream font-sans space-y-5">
          <li>
            <a href="" class="flex flex-col group">Yanto
            <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[50%] transition-all duration-500"></div>
            </a>
          </li>
          <li>
            <a href="" class="flex flex-col group">John Doe
            <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[50%] transition-all duration-500"></div>
            </a>
          </li>
          <li>
            <a href="" class="flex flex-col group">Bejo
            <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[50%] transition-all duration-500"></div>
            </a>
          </li>
          <li>
            <a href="" class="flex flex-col group">Andi
            <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[50%] transition-all duration-500"></div>
            </a>
          </li>
        </ul>
        <br>
        <a href="" style="letter-spacing: 2px" class="font-sans bg-green-main text-cream rounded-lg px-3 py-2 flex justify-center mb-1  hover:bg-cream hover:text-green-main">Lihat Semua</a>
      </div>
     </div>

  </div>
</body>

</html>
