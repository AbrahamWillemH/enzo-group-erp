<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In | Enzo Group</title>
  @vite('resources/css/app.css')
</head>
<body id="register" class="font-mont flex items-center justify-center text-center min-h-screen bg-brown-light">
  <div class="container mx-auto flex justify-center items-center">
    <div
      class="flex flex-col items-center bg-white shadow-2xl py-4 px-4 sm:px-6 md:px-8 lg:px-12 sm:py-6 md:py-8 lg:py-12 min-w-md rounded-lg">
      <h1 class="font-bold text-4xl sm:text-4xl md:text-5xl lg:text-6xl">Login</h1>

      @if ($errors->any())
      <div class="alert alert-danger mt-5">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <!-- FORM -->
      <form action="{{ route('login') }}" method="POST" class="flex-col text-left align-left justify-left">
        @csrf
        <div class="mt-14">
          <input type="name" id="name" name="name"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1"
            required placeholder="Nama Lengkap" />
        </div>
        <div class="mt-6">
          <input type="password" id="password" name="password"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1"
            required placeholder="Password" />
        </div>
        <div class="mt-14">
          <p class="text-center text-sm sm:text-base md:text-lg">
            Belum memiliki akun?
            <a href="/register" class="text-blue-600 underline">Register</a>
          </p>
        </div>
        <div class="text-center mt-5">
          <button type="submit"
            class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
