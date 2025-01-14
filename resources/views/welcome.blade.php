<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Enzo Group</title>
    @vite('resources/css/app.css')
</head>
<body class="font-mont">
    <div class="bg-gradient-to-br from-green-main via-black to-green-main h-screen w-screen flex justify-center items-center">
        <div class="w-[95%] h-[90%] grid grid-cols-[45%_55%]">
            <div class="flex items-center justify-center">
                <div class="w-[30rem] h-[15rem] grid grid-rows-[80%_20%]">
                    <div class="flex items-center flex-col justify-center gap-5 text-white">
                        <h1 class="text-6xl font-semibold tracking-wider ">Enzo Group</h1>
                        <div class="flex gap-4">
                            <h1 class="text-base tracking-wider">INVITATION</h1>
                            <h1 class="text-base tracking-wider">PACKAGING</h1>
                            <h1 class="text-base tracking-wider">SOUVENIR</h1>
                        </div>
                    </div>
                    <div class="flex gap-10 justify-center">
                        <a href="{{route('login')}}" class="bg-green-500 w-[7rem] h-10 flex items-center justify-center rounded-lg border hover:scale-110 hover:border-green-300 hover:border-3 hover:bg-black hover:text-white hover:shadow-green-500 hover:shadow-lg transition transform color duration-300 font-medium">LOGIN</a>
                        <a href="{{route('register')}}" class="bg-green-500 w-[7rem] h-10 flex items-center justify-center rounded-lg border hover:scale-110 hover:border-green-300 hover:border-3 hover:bg-black hover:text-white hover:shadow-green-500 hover:shadow-lg transition transform color duration-300 font-medium">REGISTER</a>
                    </div>

                </div>
            </div>
            <div class="flex items-center justify-center relative">
                <!-- Belakang 1 -->
                <div class="w-[15rem] h-[20rem] rounded-md overflow-hidden animate-rotateContainers1">
                    <img src="{{ asset('img/packagingB.jpeg') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <!-- Depan -->
                <div class="w-[20rem] h-[25rem] rounded-md overflow-hidden animate-rotateContainers2">
                    <img src="{{ asset('img/souvenirB.jpeg') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <!-- Belakang 2 -->
                <div class="w-[15rem] h-[20rem] rounded-md overflow-hidden animate-rotateContainers3">
                    <img src="{{ asset('img/undanganA.jpeg') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
            </div>

    </div>


</body>
</html>
