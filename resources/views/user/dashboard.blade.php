  @extends('user/sidebar_user')
  @section('title', 'User Dashboard')
  @section('konten')
  <!-- Main Container -->
  <div class="ml-[20%] bg-green-light">
    <!-- main content -->
    <div class="container h-screen">
      <div class="h-screen">
        <div class="grid grid-rows-[100px_auto]">

          <div class="flex flex-col justify-center items-center bg-green-main/20">
            <h1 class="font-cookie text-5xl">Hello, {{ auth()->user()->name }}</h1>
            <p><strong>This is the user dashboard page, accessible to regular users.</strong></p>
          </div>

          <div class="grid grid-rows-[350px_auto]">
            <div class="flex items-center justify-center">
              <div class="grid grid-cols-4 px-4 py-4 gap-8">
                <div class="carousel rounded-lg w-[210px] h-[280px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
                  <a href="{{ route('user.orders.invitation.create') }}">
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
                  </a>
                </div>

                <div class="carousel rounded-lg w-[210px] h-[280px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
                    <a href="{{ route('user.orders.souvenir.create') }}">
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
                </a>
                </div>
    
                <div class="carousel rounded-lg w-[210px] h-[280px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
                    <a href="{{ route('user.orders.packaging.create') }}">
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
                </a>
                </div>
    
                <div class="carousel rounded-lg w-[210px] h-[280px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
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
    
                  <a href="#"
                    class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center">
                    Order Seminarkit
                  </a>
    
                </div>
    
    
              </div>
            </div>

            <div class="grid grid-cols-[250px_330px_auto] gap-5 overflow-hidden px-8 py-3">
              <a href="https://maps.app.goo.gl/dSC6Z8tvWC19vseSA" target="_blank" class="w-[250px] h-full overflow-hidden rounded-md relative hover:scale-105 transition transform duration-300">
                <div class="absolute bottom-0 bg-black bg-opacity-60 w-full px-2 py-1">
                  <p class="text-white text-center">Lihat Lokasi</p>
                </div>
                <img src="{{ asset('img/enzo-office.jpg') }}" alt="" class="w-full h-full object-cover">
              </a>
              <a href="https://www.detik.com/jateng/berita/d-6453925/suvenir-tasyakuran-kaesang-erina-dibuat-perajin-sukoharjo" target="_blank" class="w-[330px] h-[190px] overflow-hidden rounded-md relative hover:scale-105 transition transform duration-300">
                <div class="absolute bottom-0 bg-black bg-opacity-60 w-full px-2 py-1">
                  <p class="text-xs text-white mb-0.5">detik.com</p>
                  <p class="text-white">Suvenir Tasyakuran Kaesang-Erina...</p>
                </div>
                <img src="{{ asset('img/souvenir-kaesang.jpeg') }}" alt="" class="w-full h-full object-cover">
              </a>
              <div class="w-full h-full grid grid-rows-2 gap-3">
                <button type="button" class="button-panduan bg-green-main/40 w-full h-full rounded-lg p-3 flex flex-row gap-2 justify-center items-center tracking-wider hover:bg-green-main/70 hover:text-white hover:scale-105 transition transform duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                    <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                  </svg>
                  <p class="text-2xl">Panduan Pesan</p>
                </button>
                <a href="" class="bg-green-main/40 w-full h-full rounded-lg p-3 flex flex-row gap-2 justify-center items-center tracking-wider hover:bg-green-main/70 hover:text-white hover:scale-105 transition transform duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                  </svg>
                  <p class="text-2xl">Hubungi Kami</p>
                </a>
              </div>
            </div>

            <div id="page-panduan" class="hidden">
                <div tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-screen bg-black/50">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white/70 backdrop-blur-lg rounded-lg shadow-sm">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-900">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        Panduan Pemesanan
                                    </h3>
                                    <button type="button" class="button-panduan text-gray-900 bg-transparent hover:bg-gray-200 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <ol class="ms-3.5 mb-4 list-decimal space-y-3">
                                      <li>Pada menu 'Dashboard', pilih menu order jenis item yang hendak dipesan.</li>
                                      <li>Isi form order dengan data yang lengkap dan benar.</li>
                                      <li>Pastikan data yang diisi sudah benar, lalu klik 'Buat Pesanan'.</li>
                                      <li>Pantau progres dan lihat detail pesanan Anda pada menu 'Pesanan Saya'.</li>
                                      <li>Jika terdapat kesalahan data, harap hubungi Admin.</li>
                                    </ol>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            

          </div>

          


        </div>

      </div>

    </div>

  </div>

  <script>
    const buttonPanduan = document.querySelectorAll('.button-panduan');
    const pagePanduan = document.getElementById('page-panduan');

    buttonPanduan.forEach((button) => {
      button.addEventListener('click', () => {
          pagePanduan.classList.toggle('hidden');
      });
    })

  </script>
  @endsection
<!-- </body>

</html> -->
