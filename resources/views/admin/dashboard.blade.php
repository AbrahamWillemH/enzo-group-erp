  <!-- Main Container -->
  @extends('admin/sidebar_admin')
  @section('title', 'Admin Dashboard')
  @section('konten')
  <div class="grid grid-cols-[80%_20%] ml-[20%] bg-green-light">
    <!-- main content -->
    <div class="container h-screen">
      <div class="h-screen grid grid-rows-[70%_30%]">
        <div class="grid grid-rows-[25%_75%]">

          <div class="flex flex-col justify-center items-center bg-green-main/10">
            <h1>Hello, {{ auth()->user()->name }}</h1>
            <p>This is the Admin dashboard page, accessible only for Admin</p>
          </div>

          <div class="grid grid-cols-4 px-5 pt-8 pb-6 gap-3">

            <div class="carousel rounded-lg w-full h-[265px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
              <div class="carousel-inner flex w-[300%] h-full hover:animate-carousel">
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/40 hover:bg-black/10"></div>
                  <img src="{{ asset('img/invitationA.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/invitationB.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/invitationC.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/invitationA.png') }}" alt="Gambar" class=" h-full w-full">
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
                  <img src="{{ asset('img/souvenirsA.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/souvenirsB.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/souvenirsC.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/souvenirsA.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
              </div>

              <a href="{{ route('user.orders.souvenir.create') }}"
                class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center">
                Order Souvenir
              </a>

            </div>

            <div class="carousel rounded-lg w-full h-[265px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
              <div class="carousel-inner flex w-[300%] h-full hover:animate-carousel">
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/40 hover:bg-black/10"></div>
                  <img src="{{ asset('img/packageA.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/packageB.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/packageC.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
                <div class="carousel-item relative flex-shrink-0 w-1/3 h-full ">
                  <div class="absolute inset-0 bg-black/10 hover:bg-black/10"></div>
                  <img src="{{ asset('img/packageA.png') }}" alt="Gambar" class=" h-full w-full">
                </div>
              </div>

              <a href="{{ route('user.orders.packaging.create') }}"
                class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center">
                Order Packaging
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

              <a href="{{ route('user.orders.seminarkit.create') }}"
                class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center">
                Order Seminarkit
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
  @endsection
<!-- </body>

</html> -->
