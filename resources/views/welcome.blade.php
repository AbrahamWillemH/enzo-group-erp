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
        <div class="w-[95%] h-[90%] grid grid-cols-1 lg:grid-cols-[45%_55%]">
            <div class="order-2 lg:order-1 flex items-center justify-center h-[180px] lg:h-auto">
                <div class="w-full lg:w-[30rem] lg:h-[15rem] grid grid-rows-[110px_50px] gap-1 lg:gap-0 lg:grid-rows-[80%_20%]">
                    <div class="flex items-center flex-col justify-center gap-3 lg:gap-5 text-white">
                        <h1 class="text-4xl lg:text-6xl font-semibold tracking-wider ">Enzo Group</h1>
                        <div class="flex gap-2 lg:gap-4">
                            <h1 class="text-xs lg:text-base tracking-wider">INVITATION</h1>
                            <h1 class="text-xs lg:text-base tracking-wider">PACKAGING</h1>
                            <h1 class="text-xs lg:text-base tracking-wider">SOUVENIR</h1>
                        </div>
                    </div>
                    <div class="flex gap-4 lg:gap-10 justify-center">
                        <a href="{{route('login')}}" class="bg-green-500 w-[5.5rem] lg:w-[7rem] h-8 lg:h-10 flex items-center justify-center rounded-lg border hover:scale-110 hover:border-green-300 hover:border-3 hover:bg-black hover:text-white hover:shadow-green-500 hover:shadow-lg transition transform color duration-300 font-medium text-xs lg:text-base">LOGIN</a>
                        <a href="{{route('register')}}" class="bg-green-500 w-[5.5rem] lg:w-[7rem] h-8 lg:h-10 flex items-center justify-center rounded-lg border hover:scale-110 hover:border-green-300 hover:border-3 hover:bg-black hover:text-white hover:shadow-green-500 hover:shadow-lg transition transform color duration-300 font-medium text-xs lg:text-base">REGISTER</a>
                    </div>

                </div>
            </div>
            <div class="order-1 lg:order-2 flex gap-1 lg:gap-0 items-center justify-center relative h-[300px] lg:h-auto">
                <!-- Belakang 1 -->
                <div class="w-[105px] h-[140px] lg:w-[15rem] lg:h-[20rem] rounded-md overflow-hidden animate-rotateContainers1Mobile lg:animate-rotateContainers1">
                    <img src="{{ asset('img/packagingB.jpeg') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <!-- Depan -->
                <div class="w-[140px] h-[187px] lg:w-[20rem] lg:h-[25rem] rounded-md overflow-hidden animate-rotateContainers2Mobile lg:animate-rotateContainers2">
                    <img src="{{ asset('img/souvenirB.jpeg') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
                <!-- Belakang 2 -->
                <div class="w-[105px] h-[140px] lg:w-[15rem] lg:h-[20rem] rounded-md overflow-hidden animate-rotateContainers3Mobile lg:animate-rotateContainers3">
                    <img src="{{ asset('img/undanganA.jpeg') }}" alt="Gambar" class="h-full w-full object-cover">
                </div>
            </div>

    </div>


</body>
</html>
