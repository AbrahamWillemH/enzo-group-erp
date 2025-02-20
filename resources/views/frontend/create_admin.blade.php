@extends('admin/sidebar_admin')
@section('title', 'Create Admin')
@section('konten')
<div class="ml-[20%]">

    <div class="bg-green-light h-full relative">
        <!-- <header class="z-30 fixed top-0 right-0 h-[68px] w-[80%] grid grid-cols-[76%_24%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>CREATE ADMIN</h1>
            </div>
            <div class="font-medium flex flex-row">
                <a href="#spk" class="text-brown-enzo flex flex-col justify-center items-center group w-full">SPK
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
                <a href="/admin/orders/invitation" class="text-brown-enzo flex flex-col justify-center items-center group w-full">Kembali
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
            </div>

        </header> -->
        <main class="h-screen font-mont flex items-center justify-center text-center min-h-screen">
            <div class="container mx-auto flex justify-center items-center">
                <div class="flex flex-col items-center bg-green-shadow shadow-2xl py-4 px-4 sm:px-6 md:px-8 lg:px-12 sm:py-6 md:py-8 lg:py-12 min-w-md rounded-lg">
                <h1 class="text-cream font-bold text-2xl sm:text-2xl md:text-3xl lg:text-4xl">Create Admin</h1>

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
                    <div class="mt-10">
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
                    <div class="mt-10">
                    <p class="text-center text-sm sm:text-base md:text-lg text-cream">
                        <a href="" class="text-[#e0e0e0] underline">Ubah Password</a>
                    </p>
                    </div>
                    <div class="text-center mt-5">
                    <button type="submit"
                        class="bg-cream text-green-main w-full h-11 px-5 py-1 rounded-lg hover:bg-green-main hover:text-cream border hover:border-cream">
                        Create
                    </button>
                    </div>
                </form>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection