@extends('admin/sidebar_admin')
@section('title', 'Create Admin')
@section('konten')
<div class="ml-[20%]">

    <div class="bg-green-light h-full relative">
        <main class="h-screen font-mont flex items-center justify-center text-center min-h-screen">
            <div class="container mx-auto flex justify-center items-center">
                <div class="flex flex-col items-center bg-green-shadow shadow-2xl py-4 px-4 sm:px-6 md:px-8 lg:px-12 sm:py-6 md:py-8 lg:py-12 min-w-md rounded-lg">
                <h1 class="text-cream font-bold text-2xl sm:text-2xl md:text-3xl lg:text-4xl">Change Password</h1>

                @if ($errors->any())
                <div class="alert alert-danger mt-5 text-green-light">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success mt-5 text-green-light">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- FORM -->
                <form action="{{ route('admin.change.credentials') }}" method="POST" class="flex-col text-left align-left justify-left">
                    @csrf
                    <div class="mt-10">
                    <input type="name" id="name" name="name" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1" required placeholder="Nama"/>
                    </div>
                    <div class="mt-6">
                    <input type="email" id="email" name="email" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1" required placeholder="Email"/>
                    </div>
                    <div class="mt-6">
                    <input type="password" id="password" name="password" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1" required placeholder="Current Password"/>
                    </div>
                    <div class="mt-6">
                    <input type="password" id="new_password" name="new_password" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1" required placeholder="New Password"/>
                    </div>
                    <div class="text-center mt-10">
                    <button type="submit" class="bg-cream text-green-main w-full h-11 px-5 py-1 rounded-lg hover:bg-green-main hover:text-cream border hover:border-cream">
                        Change
                    </button>
                    </div>
                </form>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
