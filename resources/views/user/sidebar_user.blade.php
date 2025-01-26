<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body class="font-mont">
  <aside class="z-40 w-1/5 fixed top-0 left-0">
    <div class="bg-green-main min-h-screen">
      <ul class="space-y-5 py-10">
        <li>
          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-cream rounded-full flex items-center justify-center ml-4">
              <span class="text-green-main font-medium">U</span>
            </div>
            <span style="letter-spacing: 3px" class="font-sans ms-3 text-2xl font-medium text-cream px-1">{{auth()->user()->name}}</span>
          </div>
        </li>
        <li>
          <a href="/user/dashboard" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/user/orders" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main">
            <span>Pesanan Saya</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Contact</span>
          </a>
        </li>
        <li>
        <form action="{{route('logout')}}" method="POST">
        @csrf
            <button type="submit" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
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

</html>
