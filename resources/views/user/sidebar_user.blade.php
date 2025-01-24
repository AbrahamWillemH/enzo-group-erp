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
            <span style="letter-spacing: 3px" class="font-sans ms-3 text-2xl font-medium text-cream px-1">USER</span>
          </div>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main focus:bg-cream focus:text-green-main">
            <span>Pesanan Saya</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            <span>Contact</span>
          </a>
        </li>
        <li>
          <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
            Logout
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- Main Container -->
   @yield('konten')

</body>

</html>
