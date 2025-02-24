<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
</head>

<body class="font-mont bg-green-light">
  <aside class="z-40 lg:w-1/5 md:w-[50px] w-[50px] fixed top-0 left-0 h-full lg:min-h-screen bg-green-main">
    <div>
      <ul class="space-y-5 py-10">
        <li>
          <div class="flex items-center space-x-3">
            <div class="hidden lg:block">
              <div class="lg:w-10 lg:h-10 w-8 h-8 bg-cream rounded-full flex items-center justify-center ml-4">
                <span class="text-green-main font-medium">{{Str::substr(auth()->user()->name, 0, 1)}}</span>
              </div>
            </div>

            <!-- icon hamburger saat mobile -->
            <div class="ml-4 lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-cream">
                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
              </svg>
            </div>

            <span style="letter-spacing: 3px" class="font-sans ms-3 text-2xl font-medium text-cream px-1 hidden lg:block">{{auth()->user()->name}}</span>
          </div>
        </li>
        <li>
          <a href="/user/dashboard" style="letter-spacing: 3px" class="font-sans flex items-center pl-3 pr-1 py-2 w-[45px] lg:py-3 lg:px-4 lg:w-[87%] rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 lg:size-5 lg:mr-2">
              <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
              <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
            </svg>
            <span class="hidden lg:block">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/user/orders" style="letter-spacing: 3px" class="font-sans flex items-center pl-3 pr-1 py-2 w-[45px] lg:py-3 lg:px-4 lg:w-[87%] rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 lg:size-5 lg:mr-2">
              <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
            </svg>
            <span class="hidden lg:block">Pesanan Saya</span>
          </a>
        </li>
        @if(auth()->user() && auth()->user()->role == 'admin')
          <li>
            <a href="{{route('admin.dashboard.invitation')}}" style="letter-spacing: 3px" class="font-sans flex items-center pl-3 pr-1 py-2 w-[45px] lg:py-3 lg:px-4 lg:w-[87%] rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 lg:size-5 lg:mr-2">
                <path fill-rule="evenodd" d="M15.97 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H7.5a.75.75 0 0 1 0-1.5h11.69l-3.22-3.22a.75.75 0 0 1 0-1.06Zm-7.94 9a.75.75 0 0 1 0 1.06l-3.22 3.22H16.5a.75.75 0 0 1 0 1.5H4.81l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
              </svg>
              <span class="hidden lg:block">Switch to Admin</span>
            </a>
          </li>
        @endif
        <li>
          <form action="{{route('logout')}}" method="POST">
          @csrf
              <button type="submit" style="letter-spacing: 3px" class="font-sans flex items-center pl-3 pr-1 py-2 w-[45px] lg:py-3 lg:px-4 lg:w-[87%] rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 lg:size-5 lg:mr-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                </svg>
                <span class="hidden lg:block">Logout</span>
              </button>
          </form>
        </li>
      </ul>
    </div>
  </aside>
  <!-- Main Container -->
   @yield('konten')

</body>

</html>
