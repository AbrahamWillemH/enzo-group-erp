<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make A New Order</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#F7FCF5] font-mont">
  <div style="letter-spacing: 3px" class="font-sans text-green-main container flex flex-col items-center min-h-screen justify-center py-10">
    <h2 style="font-size: 22px">FORM ORDER UNDANGAN</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 mb-5">

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('user.orders.invitation.store') }}" method="POST" class="flex flex-col gap-5 items-center">
      @csrf

      <!-- Customer Info -->
      <div class="grid grid-cols-[50%_50%] gap-40">
        <div class="grid grid-rows-4 gap-8">

          <div class="flex flex-col">
            <label class="ml-2" for="order_name">Nama Pemesan</label>
            <input type="text" id="order_name" name="order_name" value="{{ old('order_name') }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('order_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="address">Alamat Lengkap</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="phone">Nomor HP</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required
              placeholder="Nomor HP"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" value="{{ old('instagram') }}" required
              placeholder="Akun Instagram"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('instagram')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          
        </div>

        <div class="grid grid-rows-4 gap-8">

          <div class="flex flex-col">
            <label class="ml-2" for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="type">Tipe Produk</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}" required
              placeholder="Tipe Produk"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="deadline_date">Deadline</label>
            <input type="date" id="deadline_date" name="deadline_date" value="{{ old('deadline_date') }}" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('deadline_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="finishing">Finishing</label>
            <input type="text" id="finishing" name="finishing" value="{{ old('finishing') }}" required placeholder="Finishing"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('finishing')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

        </div>
      </div>    
      <div class="grid grid-cols-[50%_50%] gap-40">
        <div class="grid gap-2">
          <div class="flex flex-col">
            <br>
            <h2>Data Mempelai Pria</h2>
            <hr class="border-b-2 border-brown-enzo w-1/1 mb-2">
          </div>
        </div>

        <div class="grid gap-2">
          <div class="flex flex-col">
            <br>
            <h2>Data Mempelai Wanita</h2>
            <hr class="border-b-2 border-brown-enzo w-1/1 mb-2">
          </div>
        </div>
      </div>

      {{-- Grooms Info --}}
      <div class="grid grid-cols-[50%_50%] gap-40">
        <div class="grid grid-rows-5 gap-8">

          <div class="flex flex-col">
            <label class="ml-2" for="grooms_name">Nama Lengkap</label>
            <input type="text" id="grooms_name" name="grooms_name" value="{{ old('grooms_name') }}" required
              placeholder="Nama Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('grooms_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="grooms_nickname">Nama Panggilan</label>
            <input type="text" id="grooms_nickname" name="grooms_nickname" value="{{ old('grooms_nickname') }}" required
              placeholder="Nama Panggilan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('grooms_nickname')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="dad_grooms">Nama Ayah</label>
            <input type="text" id="dad_grooms" name="dad_grooms" value="{{ old('dad_grooms') }}" required
              placeholder="Nama Lengkap Ayah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('dad_grooms')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="mom_grooms">Nama Ibu</label>
            <input type="text" id="mom_grooms" name="mom_grooms" value="{{ old('mom_grooms') }}" required
              placeholder="Nama Lengkap Ibu"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('mom_grooms')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="grooms_address">Alamat Orang Tua</label>
            <input type="text" id="grooms_address" name="grooms_address" value="{{ old('grooms_address') }}" required
              placeholder="Alamat Orang Tua"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('grooms_address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          
        </div>

        {{-- Brides Info --}}
        <div class="grid grid-rows-5 gap-8">
          <div class="flex flex-col">
            <label class="ml-2" for="brides_name">Nama Lengkap</label>
            <input type="text" id="brides_name" name="brides_name" value="{{ old('brides_name') }}" required
              placeholder="Nama Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('brides_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="brides_nickname">Nama Panggilan</label>
            <input type="text" id="brides_nickname" name="brides_nickname" value="{{ old('brides_nickname') }}" required
              placeholder="Nama Panggilan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('brides_nickname')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="dad_brides">Nama Ayah</label>
            <input type="text" id="dad_brides" name="dad_brides" value="{{ old('dad_brides') }}" required
              placeholder="Nama Lengkap Ayah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('dad_brides')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="mom_brides">Nama Ibu</label>
            <input type="text" id="mom_brides" name="mom_brides" value="{{ old('mom_brides') }}" required
              placeholder="Nama Lengkap Ibu"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('mom_brides')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="brides_address">Alamat Orang Tua</label>
            <input type="text" id="brides_address" name="brides_address" value="{{ old('brides_address') }}" required
              placeholder="Alamat Orang Tua"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('brides_address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          
        </div>
      </div>

      <div class="grid grid-cols-[50%_50%] gap-40">
        <div class="grid gap-2">
          <div class="flex flex-col">
            <br>
            <h2>Data Akad / Pemberkatan</h2>
            <hr class="border-b-2 border-brown-enzo w-1/1 mb-2">
          </div>
        </div>

        <div class="grid gap-2">
          <div class="flex flex-col">
            <br>
            <h2>Data Resepsi</h2>
            <hr class="border-b-2 border-brown-enzo w-1/1 mb-2">
          </div>
        </div>
      </div>
      
      <div class="grid grid-cols-[50%_50%] gap-40">
        <div class="grid grid-rows-3 gap-8">
          
          <!-- Akad & Pemberkatan -->
          <div class="flex flex-col">
            <label class="ml-2" for="akad_date">Tanggal Acara</label>
            <input type="date" id="akad_date" name="akad_date" value="{{ old('akad_date') }}" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('akad_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="akad_pemberkatan_time">Waktu Acara</label>
            <input type="time" id="akad_pemberkatan_time" name="akad_pemberkatan_time" value="{{ old('akad_pemberkatan_time') }}"
              required class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('akad_pemberkatan_time')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="akad_pemberkatan_location">Lokasi Acara</label>
            <input type="text" id="akad_pemberkatan_location" name="akad_pemberkatan_location" value="{{ old('akad_pemberkatan_location') }}"
              required placeholder="Lokasi Akad Pemberkatan" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('akad_pemberkatan_location')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

          <!-- Reception Date -->
        <div class="grid grid-rows-3 gap-8">
          <div class="flex flex-col">
            <label class="ml-2" for="reception_date">Tanggal Acara</label>
            <input type="date" id="reception_date" name="reception_date" value="{{ old('reception_date') }}" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('reception_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="reception_time">Waktu Acara</label>
            <input type="time" id="reception_time" name="reception_time" value="{{ old('reception_time') }}" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('reception_time')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col">
            <label class="ml-2" for="reception_location">Lokasi Acara</label>
            <input type="text" id="reception_location" name="reception_location" value="{{ old('reception_location') }}"
              required placeholder="Lokasi Resepsi" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('reception_location')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">Buat Pesanan</button>
    </form>
  </div>
</body>

</html>
