<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In | Enzo Group</title>
  @vite('resources/css/app.css')
</head>
<body id="register" class="font-mont flex items-center justify-center text-center min-h-screen bg-green-main">
  <div class="container mx-auto flex justify-center items-center">
    <div
      class="flex flex-col items-center bg-green-shadow shadow-2xl py-4 px-4 sm:px-6 md:px-8 lg:px-12 sm:py-6 md:py-8 lg:py-12 min-w-md rounded-lg">
      <h1 class="text-cream font-bold text-4xl sm:text-4xl md:text-5xl lg:text-6xl">Login</h1>

      @if ($errors->any())
      <div class="alert alert-danger mt-5 text-green-light">
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
          <input type="email" id="email" name="email"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1"
            required placeholder="Email" />
        </div>
        <div class="mt-6">
          <input type="password" id="password" name="password"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1"
            required placeholder="Password" />
        </div>
        <div class="mt-14">
          <p class="text-center text-sm sm:text-base md:text-lg text-cream">
            Belum memiliki akun?
            <a href="/register" class="text-[#e0e0e0] underline">Register</a>
          </p>
        </div>
        <div class="text-center mt-5">
          <button type="submit"
            class="bg-cream text-green-main w-full h-11 px-5 py-1 rounded-lg hover:bg-green-main hover:text-cream border hover:border-cream">
            Login
          </button>
        </div>
        <div class="flex flex-row text-center mt-5 items-center justify-center">
          <a href="{{route('auth.google')}}"
                class="bg-cream flex flex-row gap-4 text-green-main w-full h-11 px-5 py-2 rounded-lg hover:bg-green-main hover:text-cream border hover:border-cream">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="28px" height="28px"><path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                <div class="mt-0.5">Login dengan Google</div>
        </a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
