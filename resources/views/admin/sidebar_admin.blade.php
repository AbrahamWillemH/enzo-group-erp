<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link rel="icon" type="image/png" href="{{ asset('img/logo_enzo(1).png') }}">
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
</head>

<body class="font-mont">
  <aside class="z-40 w-1/5 fixed top-0 left-0">
    <div class="bg-green-main min-h-screen">
      <ul class="space-y-5 py-10">
        <li>
          <div class="flex items-center space-x-3">
            <!-- <img src="{{ asset('img/logo_enzo(1).png') }}" alt="Gambar" class=" h-[70px] w-[70px]"> -->
            <div class="w-10 h-10 bg-cream rounded-full flex items-center justify-center ml-4">
              <img src="{{ asset('img/logo_enzo(1).png') }}" alt="Gambar" class=" h-[40px] w-[40px]">
            </div>
            <span style="letter-spacing: 3px" class="font-sans ms-3 text-2xl font-medium text-cream px-1">{{auth()->user()->name}}</span>
          </div>
        </li>
        <li>
          <a href="{{route('admin.dashboard')}}" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
              <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
              <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
            </svg>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <!-- button -->
          <button type="button" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main" id="dropdown-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
              <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
            </svg>

            <span>Data Pesanan</span>
            <svg class="w-3 h-3 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
          <!-- dropdown -->
          <ul class="hidden bg-white/10 mt-4" id="dropdown-menu">
            <li>
              <a href="{{route('admin.invitation.view')}}" style="letter-spacing: 3px" class="font-sans flex py-3 px-4 w-4/5 text-cream flex-col group">Invitation
              <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[70%] transition-all duration-500"></div>
              </a>
            </li>
            <li>
              <a href="{{route('admin.souvenir.view')}}" style="letter-spacing: 3px" class="font-sans flex py-3 px-4 w-4/5 text-cream flex-col group">Souvenir
              <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[70%] transition-all duration-500"></div>
              </a>
            </li>
            <li>
              <a href="{{route('admin.packaging.view')}}" style="letter-spacing: 3px" class="font-sans flex py-3 px-4 w-4/5 text-cream flex-col group">Packaging
              <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[70%] transition-all duration-500"></div>
              </a>
            </li>
            <li>
              <a href="{{route('admin.done.view')}}" style="letter-spacing: 3px" class="font-sans flex py-3 px-4 w-4/5 text-cream flex-col group">Pesanan Selesai
              <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[70%] transition-all duration-500"></div>
              </a>
            </li>

          </ul>
        </li>
        <li>
          <!-- button -->
          {{-- <button type="button" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main" id="dropdown-button2">
            <span>Purchase</span>
            <svg class="w-3 h-3 ml-[65px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button> --}}
          <!-- dropdown -->
          <ul class="hidden bg-white/10 mt-4" id="dropdown-menu2">
            <li>
              <a href="" style="letter-spacing: 3px" class="font-sans flex py-3 px-4 w-4/5 text-cream flex-col group">Invitation
              <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[70%] transition-all duration-500"></div>
              </a>
            </li>
            <li>
              <a href="" style="letter-spacing: 3px" class="font-sans flex py-3 px-4 w-4/5 text-cream flex-col group">Souvenir
              <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[70%] transition-all duration-500"></div>
              </a>
            </li>
            <li>
              <a href="" style="letter-spacing: 3px" class="font-sans flex py-3 px-4 w-4/5 text-cream flex-col group">Packaging
              <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[70%] transition-all duration-500"></div>
              </a>
            </li>

          </ul>
        </li>
        {{-- <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
              <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
              <path fill-rule="evenodd" d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
            </svg>
            <span>Inventory</span>
          </a>
        </li> --}}
        <li>
          <a href="{{route('admin.reminder')}}" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
              <path d="M5.85 3.5a.75.75 0 0 0-1.117-1 9.719 9.719 0 0 0-2.348 4.876.75.75 0 0 0 1.479.248A8.219 8.219 0 0 1 5.85 3.5ZM19.267 2.5a.75.75 0 1 0-1.118 1 8.22 8.22 0 0 1 1.987 4.124.75.75 0 0 0 1.48-.248A9.72 9.72 0 0 0 19.266 2.5Z" />
              <path fill-rule="evenodd" d="M12 2.25A6.75 6.75 0 0 0 5.25 9v.75a8.217 8.217 0 0 1-2.119 5.52.75.75 0 0 0 .298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 1 0 7.48 0 24.583 24.583 0 0 0 4.83-1.244.75.75 0 0 0 .298-1.205 8.217 8.217 0 0 1-2.118-5.52V9A6.75 6.75 0 0 0 12 2.25ZM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 0 0 4.496 0l.002.1a2.25 2.25 0 1 1-4.5 0Z" clip-rule="evenodd" />
            </svg>
            <span>Reminder</span>
          </a>
        </li>
        <li>
          <a href="{{route('admin.calendar')}}" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
              <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
              <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
            </svg>
            <span>Calendar</span>
          </a>
        </li>
        <li>
        <form action="{{route('logout')}}" method="POST">
        @csrf
          <button type="submit" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
            </svg>
            <span>Logout</span>
          </button>
        </form>
        </li>
      </ul>
    </div>
  </aside>
  <!-- Main Container -->
   @yield('konten')

</body>

<script>
  const button = document.getElementById('dropdown-button');
  const menu = document.getElementById('dropdown-menu');
  const button2 = document.getElementById('dropdown-button2');
  const menu2 = document.getElementById('dropdown-menu2');

  button.addEventListener('click', () => {
    // Toggle dropdown visibility
    menu.classList.toggle('hidden');
  });

  // Menutup dropdown ketika klik di luar
  window.addEventListener('click', (event) => {
    if (!button.contains(event.target) && !menu.contains(event.target)) {
      menu.classList.add('hidden');
    }
  });

  button2.addEventListener('click', () => {
    // Toggle dropdown visibility
    menu2.classList.toggle('hidden');
  });

  window.addEventListener('click', (event) => {
    if (!button2.contains(event.target) && !menu2.contains(event.target)) {
      menu2.classList.add('hidden');
    }
  });
</script>


</html>
