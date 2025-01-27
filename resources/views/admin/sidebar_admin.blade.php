<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="font-mont">
  <aside class="z-40 w-1/5 fixed top-0 left-0">
    <div class="bg-green-main min-h-screen">
      <ul class="space-y-5 py-10">
        <li>
          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-cream rounded-full flex items-center justify-center ml-4">
              <span class="text-green-main font-medium">A</span>
            </div>
            <span style="letter-spacing: 3px" class="font-sans ms-3 text-2xl font-medium text-cream px-1">{{auth()->user()->name}}</span>
          </div>
        </li>
        <li>
          <a href="{{route('admin.dashboard')}}" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <!-- button -->
          <button type="button" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main" id="dropdown-button">
            <span>Data Pesanan</span>
            <svg class="w-3 h-3 ml-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
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

          </ul>
        </li>
        <li>
          <!-- button -->
          <button type="button" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main" id="dropdown-button2">
            <span>Purchase</span>
            <svg class="w-3 h-3 ml-[65px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
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
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Inventory</span>
          </a>
        </li>
        <li>
          <a href="{{('/admin/reminder')}}" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Reminder</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Calendar</span>
          </a>
        </li>
        <li>
        <form action="{{route('logout')}}" method="POST">
        @csrf
          <button type="submit" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-3 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
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
