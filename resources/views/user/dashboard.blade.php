  @extends('user/sidebar_user')
  @section('title', 'User Dashboard')
  @section('konten')
  <!-- Main Container -->
  <div class="ml-[50px] lg:ml-[20%] bg-green-light">
    <!-- main content -->
    <div class="container h-screen">
      <div class="h-screen">
        <div class="grid grid-rows-[70px_auto] lg:grid-rows-[100px_auto]">

          <div class="flex flex-col justify-center items-center bg-green-main/20">
            <h1 class="font-quattro text-3xl lg:text-5xl font-bold">Hello, {{ auth()->user()->name }}</h1>
            <p class="font-azeret mt-1 text-center">Welcome to Enzo Creatives!</p>
          </div>

          <div class="grid grid-rows-[520px_auto] lg:grid-rows-[350px_auto]">
            <div class="flex items-center justify-center">
              <div class="grid grid-cols-2 p-3 lg:grid-cols-4 lg:p-4 gap-4 lg:gap-8">
                <div class="carousel rounded-lg w-[130px] h-[210px] lg:w-[210px] lg:h-[280px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
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
                      class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center text-xs lg:text-base">
                      Order Invitation
                    </a>
                  </a>
                </div>

                <div class="carousel rounded-lg w-[130px] h-[210px] lg:w-[210px] lg:h-[280px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
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
                    class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center text-xs lg:text-base">
                    Order Souvenir
                  </a>
                </a>
                </div>
    
                <div class="carousel rounded-lg w-[130px] h-[210px] lg:w-[210px] lg:h-[280px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
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
                    class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center text-xs lg:text-base">
                    Order Packaging
                  </a>
                </a>
                </div>
    
                <div class="carousel rounded-lg w-[130px] h-[210px] lg:w-[210px] lg:h-[280px] grid grid-rows-[1fr_30px] overflow-hidden relative hover:scale-110 transition duration-300 shadow-lg">
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
                    class=" text-black font-medium rounded-b-lg bg-green-main/50 hover:bg-green-main/90 hover:text-cream transition duration-300 text-center flex items-center justify-center text-xs lg:text-base">
                    Order Seminarkit
                  </a>
    
                </div>
    
    
              </div>
            </div>

            <div class="grid grid-cols-[140px_140px] lg:grid-cols-[250px_330px_auto] gap-2 pt-2 pb-3 px-3 lg:gap-5 overflow-hidden lg:px-8 lg:py-3 place-content-center">
              <a href="https://maps.app.goo.gl/dSC6Z8tvWC19vseSA" target="_blank" class="w-[140px] lg:w-[250px] h-full overflow-hidden rounded-md relative hover:scale-105 transition transform duration-300">
                <div class="absolute bottom-0 bg-black bg-opacity-60 w-full px-2 py-1">
                  <p class="text-white text-center text-xs lg:text-base">Lihat Lokasi</p>
                </div>
                <img src="{{ asset('img/enzo-office.jpg') }}" alt="" class="w-full h-full object-cover">
              </a>
              <a href="https://www.detik.com/jateng/berita/d-6453925/suvenir-tasyakuran-kaesang-erina-dibuat-perajin-sukoharjo" target="_blank" class="w-[140px] h-full lg:w-[330px] lg:h-[190px] overflow-hidden rounded-md relative hover:scale-105 transition transform duration-300">
                <div class="absolute bottom-0 bg-black bg-opacity-60 w-full p-1">
                  <p class="text-xs text-white mb-0.5">detik.com</p>
                  <p class="text-white text-xs lg:text-base">Suvenir Tasyakuran Kaesang...</p>
                </div>
                <img src="{{ asset('img/souvenir-kaesang.jpeg') }}" alt="" class="w-full h-full object-cover">
              </a>
              <div class="w-[288px] lg:w-full h-full grid grid-rows-2 gap-3 place-items-center">
                <button type="button" id="button-panduan" class="bg-green-main/40 w-[180px] h-[40px] lg:w-full lg:h-full rounded-lg p-3 flex flex-row gap-2 justify-center items-center tracking-wider hover:bg-green-main/70 hover:text-white hover:scale-105 transition transform duration-300 mt-3 lg:mt-0">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 lg:size-8">
                    <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                  </svg>
                  <p class="text-sm lg:text-2xl">Panduan Pesan</p>
                </button>
                <button type="button" id="button-contact" class="bg-green-main/40 w-[180px] h-[40px] lg:w-full lg:h-full rounded-lg p-3 flex flex-row gap-2 justify-center items-center tracking-wider hover:bg-green-main/70 hover:text-white hover:scale-105 transition transform duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 lg:size-8">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                  </svg>
                  <p class="text-sm lg:text-2xl">Hubungi Kami</p>
                </button>
              </div>
            </div>

            <div id="page-panduan" class="hidden">
                <div tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-screen bg-black/50 px-2 lg:px-0">
                  <div class="opacity-0 mr-0.5 lg:mr-1 h-8 w-8"></div>

                  <div class="relative p-3 lg:p-1 w-full max-w-md max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white/70 backdrop-blur-lg rounded-lg shadow-sm">
                              <!-- Modal header -->
                              <div class="flex items-center justify-between p-4 border-b rounded-t border-gray-900">
                                  <h3 class="text-lg font-semibold text-gray-900">
                                      Panduan Pemesanan
                                  </h3>
                                  <button type="button" class="button-close text-gray-900 bg-transparent hover:bg-gray-200 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center">
                                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                      </svg>
                                      <span class="sr-only">Close</span>
                                  </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-4 md:p-5 border-b border-gray-900 text-sm lg:text-base">
                                <ol class="ms-3.5 mb-3 list-none space-y-6 border-s border-gray-200 relative">
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path fill-rule="evenodd" d="M12 1.5a.75.75 0 0 1 .75.75V4.5a.75.75 0 0 1-1.5 0V2.25A.75.75 0 0 1 12 1.5ZM5.636 4.136a.75.75 0 0 1 1.06 0l1.592 1.591a.75.75 0 0 1-1.061 1.06l-1.591-1.59a.75.75 0 0 1 0-1.061Zm12.728 0a.75.75 0 0 1 0 1.06l-1.591 1.592a.75.75 0 0 1-1.06-1.061l1.59-1.591a.75.75 0 0 1 1.061 0Zm-6.816 4.496a.75.75 0 0 1 .82.311l5.228 7.917a.75.75 0 0 1-.777 1.148l-2.097-.43 1.045 3.9a.75.75 0 0 1-1.45.388l-1.044-3.899-1.601 1.42a.75.75 0 0 1-1.247-.606l.569-9.47a.75.75 0 0 1 .554-.68ZM3 10.5a.75.75 0 0 1 .75-.75H6a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 10.5Zm14.25 0a.75.75 0 0 1 .75-.75h2.25a.75.75 0 0 1 0 1.5H18a.75.75 0 0 1-.75-.75Zm-8.962 3.712a.75.75 0 0 1 0 1.061l-1.591 1.591a.75.75 0 1 1-1.061-1.06l1.591-1.592a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                                      </svg>
                                    </span>
                                    <h3 class="flex items-start text-gray-900">Klik 'Dashboard', klik jenis item yang hendak dipesan.</h3>
                                  </li>
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                      </svg>
                                    </span>
                                    <h3 class="flex items-start text-gray-900">Isi form dengan data yang lengkap dan benar.</h3>
                                  </li>
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                        <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                      </svg>

                                    </span>
                                    <h3 class="flex items-start text-gray-900">Pastikan data yang diisi sudah benar, lalu klik 'Buat Pesanan'.</h3>
                                  </li>
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                      </svg>
                                    </span>
                                    <h3 class="flex items-start text-gray-900">Lihat detail pesanan Anda pada menu 'Pesanan Saya'.</h3>
                                  </li>
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z" />
                                        <path d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z" />
                                      </svg>
                                    </span>
                                    <h3 class="flex items-start text-gray-900">Jika terdapat kesalahan data, harap hubungi Admin.</h3>
                                  </li>
                                </ol>
                              </div>
                          </div>
                  </div>

                  <button id="next-guide" class="relative bg-white/70 backdrop-blur-xl rounded-full shadow-sm ml-0.5 lg:ml-1 flex items-center justify-center text-gray-900 hover:bg-gray-200 text-sm h-6 w-7 lg:h-8 lg:w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 lg:size-6">
                      <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
            </div>

            <div id="page-panduan-next" class="hidden">
                <div tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-screen bg-black/50 px-2 lg:px-0">

                  <button id="previous-guide" class="relative bg-white/70 backdrop-blur-xl rounded-full shadow-sm mr-0.5 lg:mr-1 flex items-center justify-center text-gray-900 hover:bg-gray-200 text-sm h-6 w-7 lg:h-8 lg:w-8"">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 lg:size-6">
                      <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                    </svg>

                  </button>

                  <div class="relative p-3 lg:p-1 w-full max-w-md max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white/70 backdrop-blur-lg rounded-lg shadow-sm">
                              <!-- Modal header -->
                              <div class="flex items-center justify-between p-4 border-b rounded-t border-gray-900">
                                  <h3 class="text-lg font-semibold text-gray-900">
                                      Proses Produksi
                                  </h3>
                                  <button type="button" class="button-close text-gray-900 bg-transparent hover:bg-gray-200 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center">
                                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                      </svg>
                                      <span class="sr-only">Close</span>
                                  </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-4 md:p-5 border-b border-gray-900 text-sm lg:text-base">
                                <ol class="ms-3.5 mb-3 list-decimal space-y-3">
                                  <li>Pembayaran akan dibagi menjadi 3 tahap, yaitu DP 1, DP 2, dan pelunasan.</li>
                                  <li>Desain produk akan diproses setelah Anda melakukan pembayaran DP 1.</li>
                                  <li>Pantau desain produk pada menu 'Pesanan Saya'.</li>
                                  <li>Konfirmasi desain melalui chat Admin.</li>
                                  <li>Desain yang telah disetujui tidak dapat dibatalkan.</li>
                                  <li>Proses produksi akan dilakukan setelah Anda mekakukan pembayaran DP 2 dan menyetujui desain.</li>
                                  <li>Pengiriman produk dilakukan setelah Anda melakukan pelunasan.</li>
                                </ol>
                              </div>
                          </div>
                  </div>

                  <div class="opacity-0 ml-0.5 lg:ml-1 h-8 w-8"></div>
                </div>
            </div>

            <div id="page-contact" class="hidden">
                <div tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-screen bg-black/50 px-2 lg:px-0">
                  <div class="opacity-0 mr-0.5 lg:mr-1 h-8 w-8"></div>

                  <div class="relative p-3 lg:p-1 w-full max-w-md max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white/70 backdrop-blur-lg rounded-lg shadow-sm">
                              <!-- Modal header -->
                              <div class="flex items-center justify-between p-4 border-b rounded-t border-gray-900">
                                  <h3 class="text-lg font-semibold text-gray-900">
                                      Hubungi Kami
                                  </h3>
                                  <button type="button" id="close-contact" class="text-gray-900 bg-transparent hover:bg-gray-200 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center">
                                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                      </svg>
                                      <span class="sr-only">Close</span>
                                  </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-4 md:p-5 border-b border-gray-900 text-sm lg:text-base grid grid-rows-3 gap-2 h-[15rem] place-items-center">
                                <a href="https://wa.me/62895377696312" target="_blank" class="w-[80%] h-full bg-green-main/30 hover:bg-brown-enzo hover:text-white transition transform duration-300 rounded-lg flex justify-center items-center"><h1 class="font-bold">Enzo Wedding</h1></a>
                                <a href="https://wa.me/62882005607949" target="_blank" class="w-[80%] h-full bg-green-main/30 hover:bg-brown-enzo hover:text-white transition transform duration-300 rounded-lg flex justify-center items-center"><h1 class="font-bold">Grizelle Souvenir</h1></a>
                                <a href="https://wa.me/6281321080145" target="_blank" class="w-[80%] h-full bg-green-main/30 hover:bg-brown-enzo hover:text-white transition transform duration-300 rounded-lg flex justify-center items-center"><h1 class="font-bold">Deonkraft</h1></a>
                                {{--<ol class="ms-3.5 mb-3 list-none space-y-6 border-s border-gray-200 relative">
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path fill-rule="evenodd" d="M12 1.5a.75.75 0 0 1 .75.75V4.5a.75.75 0 0 1-1.5 0V2.25A.75.75 0 0 1 12 1.5ZM5.636 4.136a.75.75 0 0 1 1.06 0l1.592 1.591a.75.75 0 0 1-1.061 1.06l-1.591-1.59a.75.75 0 0 1 0-1.061Zm12.728 0a.75.75 0 0 1 0 1.06l-1.591 1.592a.75.75 0 0 1-1.06-1.061l1.59-1.591a.75.75 0 0 1 1.061 0Zm-6.816 4.496a.75.75 0 0 1 .82.311l5.228 7.917a.75.75 0 0 1-.777 1.148l-2.097-.43 1.045 3.9a.75.75 0 0 1-1.45.388l-1.044-3.899-1.601 1.42a.75.75 0 0 1-1.247-.606l.569-9.47a.75.75 0 0 1 .554-.68ZM3 10.5a.75.75 0 0 1 .75-.75H6a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 10.5Zm14.25 0a.75.75 0 0 1 .75-.75h2.25a.75.75 0 0 1 0 1.5H18a.75.75 0 0 1-.75-.75Zm-8.962 3.712a.75.75 0 0 1 0 1.061l-1.591 1.591a.75.75 0 1 1-1.061-1.06l1.591-1.592a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                                      </svg>
                                    </span>
                                    <h3 class="flex items-start text-gray-900">Klik 'Dashboard', klik jenis item yang hendak dipesan.</h3>
                                  </li>
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                      </svg>
                                    </span>
                                    <h3 class="flex items-start text-gray-900">Isi form dengan data yang lengkap dan benar.</h3>
                                  </li>
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                        <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                      </svg>

                                    </span>
                                    <h3 class="flex items-start text-gray-900">Pastikan data yang diisi sudah benar, lalu klik 'Buat Pesanan'.</h3>
                                  </li>
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                      </svg>
                                    </span>
                                    <h3 class="flex items-start text-gray-900">Lihat detail pesanan Anda pada menu 'Pesanan Saya'.</h3>
                                  </li>
                                  <li class="ms-8">
                                    <span class="absolute flex items-center justify-center w-[2.5rem] h-[2.5rem] bg-gray-900 rounded-full -start-[20px]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-white">
                                        <path d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z" />
                                        <path d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z" />
                                      </svg>
                                    </span>
                                    <h3 class="flex items-start text-gray-900">Jika terdapat kesalahan data, harap hubungi Admin.</h3>
                                  </li>
                                </ol>--}}
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
  const pages = [
      'page-panduan',
      'page-panduan-next'
  ];

  let currentIndex = 0;

  function showPage(index) {
      pages.forEach((id, i) => {
          document.getElementById(id).classList.toggle('hidden', i !== index);
      });
      currentIndex = index;
  }

  document.getElementById('button-panduan').addEventListener('click', () => showPage(0));
  document.getElementById('next-guide').addEventListener('click', () => showPage(1));
  document.getElementById('previous-guide').addEventListener('click', () => showPage(0));

  document.querySelectorAll('.button-close').forEach(button => {
      button.addEventListener('click', () => pages.forEach(id => document.getElementById(id).classList.add('hidden')));
  });

  const buttonContact = document.getElementById('button-contact');
  const pageContact = document.getElementById('page-contact');
  const closeContact = document.getElementById('close-contact');

  buttonContact.addEventListener('click', () => {
    // Toggle dropdown visibility
    pageContact.classList.remove('hidden');

    closeContact.addEventListener('click', () =>{
      pageContact.classList.add('hidden');
    })
  });
  
  </script>
  @endsection
<!-- </body>

</html> -->
