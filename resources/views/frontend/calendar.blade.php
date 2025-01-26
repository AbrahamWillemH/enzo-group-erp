@extends('admin/sidebar_admin')
@section('title', 'Calendar')
@section('konten')

<div class="ml-[20%]">
    <!-- Header -->
    <header class="fixed top-0 right-0 w-[80%] bg-green-shadow h-[68px] flex items-center justify-between px-4">
        <h1 class="text-xl font-bold text-brown-enzo" style="letter-spacing: 1px">Januari 2025</h1>
        <div class="relative group z-20">
            <button class="text-brown-enzo font-semibold flex flex-col justify-center items-center w-[140px] mr-5" style="letter-spacing: 1px">
                Produk
                <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
            </button>
        </div>
        <div class="relative group z-20">
            <button class="text-brown-enzo font-semibold flex flex-col justify-center items-center w-[140px] mr-5" style="letter-spacing: 1px">
                Produk
                <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
            </button>

            <!-- Dropdown Filter -->
            <div class="absolute bg-green-light shadow-lg rounded-md z-30 top-full left-0 w-[140px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-500">
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-[#e3e3e8] hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 border-invit-cal accent-invit-cal" value="Invitation" checked>
                        Invitation
                    </label>
                </div>
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-[#dddfe5] hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 border-pack-cal accent-pack-cal" value="Packaging" checked>
                        Packaging
                    </label>
                </div>
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-[#dfe4dc] hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 border-souv-cal accent-souv-cal" value="Souvenir" checked>
                        Souvenir
                    </label>
                </div>
            </div>
        </div>
        
    </header>
</div>