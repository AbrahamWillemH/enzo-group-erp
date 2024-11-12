<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat Pesanan Baru</title>
  @vite('resources/css/app.css')
</head>

<body class="font-mont">
  <div class="container flex flex-col items-center min-h-screen justify-center py-10">
    <h2>Buat Pesanan Baru</h2>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('user.orders.invitation.store') }}" method="POST" class="flex flex-col gap-5 items-center">
      @csrf

      <div class="">
        <input type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" required
          placeholder="Nama Produk"
          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('product_name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="">
        <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required placeholder="Jumlah"
          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('quantity')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="flex flex-col">
        <label for="deadline_date">Tanggal barang diinginkan</label>
        <input type="date" id="deadline_date" name="deadline_date" value="{{ old('deadline_date') }}" required
          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('deadline_date')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Additional Fields -->

      <div class="flex flex-col">
        <label for="type">Tipe Produk</label>
        <input type="text" id="type" name="type" value="{{ old('type') }}" required placeholder="Tipe Produk"
          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('type')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="flex flex-col">
        <label for="finishing">Finishing</label>
        <input type="text" id="finishing" name="finishing" value="{{ old('finishing') }}" required placeholder="Finishing"
          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('finishing')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Bride & Groom Info -->
      <div class="flex flex-col">
        <label for="bride_name">Nama Pengantin Wanita</label>
        <input type="text" id="bride_name" name="bride_name" value="{{ old('bride_name') }}" required
          placeholder="Nama Pengantin Wanita" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('bride_name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="flex flex-col">
        <label for="groom_name">Nama Pengantin Pria</label>
        <input type="text" id="groom_name" name="groom_name" value="{{ old('groom_name') }}" required
          placeholder="Nama Pengantin Pria" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('groom_name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Akad & Reception Dates -->
      <div class="flex flex-col">
        <label for="akad_pemberkatan_date">Tanggal Akad / Pemberkatan</label>
        <input type="date" id="akad_pemberkatan_date" name="akad_pemberkatan_date" value="{{ old('akad_pemberkatan_date') }}"
          required class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('akad_pemberkatan_date')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="flex flex-col">
        <label for="akad_pemberkatan_time">Waktu Akad / Pemberkatan</label>
        <input type="time" id="akad_pemberkatan_time" name="akad_pemberkatan_time" value="{{ old('akad_pemberkatan_time') }}"
          required class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('akad_pemberkatan_time')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="flex flex-col">
        <label for="akad_pemberkatan_location">Lokasi Akad / Pemberkatan</label>
        <input type="text" id="akad_pemberkatan_location" name="akad_pemberkatan_location" value="{{ old('akad_pemberkatan_location') }}"
          required placeholder="Lokasi Akad Pemberkatan" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('akad_pemberkatan_location')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Reception Date -->
      <div class="flex flex-col">
        <label for="reception_date">Tanggal Resepsi</label>
        <input type="date" id="reception_date" name="reception_date" value="{{ old('reception_date') }}" required
          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('reception_date')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="flex flex-col">
        <label for="reception_time">Waktu Resepsi</label>
        <input type="time" id="reception_time" name="reception_time" value="{{ old('reception_time') }}" required
          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('reception_time')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="flex flex-col">
        <label for="reception_location">Lokasi Resepsi</label>
        <input type="text" id="reception_location" name="reception_location" value="{{ old('reception_location') }}"
          required placeholder="Lokasi Resepsi" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
        @error('reception_location')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">Buat Pesanan</button>
    </form>
  </div>
</body>

</html>
