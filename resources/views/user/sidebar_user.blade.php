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
          <a href="/user/dashboard" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
              <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
              <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
            </svg>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/user/orders" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
              <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
            </svg>
            <span>Pesanan Saya</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-5/6 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
              <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
            </svg>
            <span>Contact</span>
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

</html>
