<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Souvenir Form</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#F7FCF5] font-mont">
  <!-- Navigation Bar -->
  <div class="fixed top-0 left-0 right-0 ht grid grid-cols-[70%_30%] px-4 py-5 bg-green-main">
    <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
      <h1>Enzo Group</h1>
    </div>
    <div class="grid grid-cols-3 gap-1 font-medium">
      <a href="" class="text-brown-enzo flex flex-col justify-center items-center group mr-7">Dashboard
          <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
      </a>

      <!-- Dropdown Menu -->
      <div class="flex flex-col justify-center items-center group relative">
        <!-- Dropdown Button -->
        <button class="text-brown-enzo flex flex-col justify-center items-center">Form Order
          <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
        </button>

        <!-- Dropdown Content -->
        <div class="absolute opacity-0 group-hover:opacity-100 bg-green-light shadow-lg mt-2 rounded-md z-10 top-full left-5 w-50 transition-opacity duration-500 delay-25">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Invitation</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Souvenir</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Seminar Kit</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Packaging</a>
        </div>
      </div>

      <a href="" class="text-brown-enzo flex flex-col justify-center items-center group">Admin
          <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
      </a>
    </div>
  </div>

  <div style="letter-spacing: 3px" class="font-sans text-green-main container flex flex-col items-center min-h-screen justify-start py-24">
    <h2 style="font-size: 22px">FORM ORDER SOUVENIR</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{route ('user.orders.souvenir.store')}}" method="POST" class="flex flex-col gap-5 items-center">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-2 justify-center">
        <div class="grid grid-rows-1 gap-5">
          <div class="flex items-center flex-col mx-20 mb-3">
            <label class="ml-2" for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="bridegroom_name">Nama Mempelai</label>
            <input type="text" id="bridegroom_name" name="bridegroom_name" value="{{ old('bridegroom_name') }}" required
              placeholder="Nama Mempelai"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('bridegroom_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>


          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="event_date">Tanggal Acara</label>
            <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('event_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="product_name">Jenis Souvenir</label>
            <input type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" required
              placeholder="Jenis Souvenir"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('product_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20 mt-5">
            <label class="ml-2" for="address">Alamat Lengkap</label>
            <textarea id="address" rows="7" name="address" value="{{ old('address') }}" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="grid grid-rows-6 gap-5">

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="design">Desain Emboss / Label / Sablon</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"
              id="design" name="design" required>
              <option value="Desain pribadi/template">Desain pribadi/template</option>
              <option value="Desain custom Enzo">Desain custom enzo</option>
            </select>
            @error('design')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="thankscard">Desain Thankscard</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"
              id="thankscard" name="thankscard" required>
              <option value="Desain pribadi/template">Desain pribadi/template</option>
              <option value="Desain custom Enzo">Desain custom enzo</option>
            </select>
            @error('thankscard')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="color_motif">Warna / Motif</label>
            <input type="text" id="color_motif" name="color_motif" value="{{ old('color_motif') }}" required
              placeholder="Warna / Motif"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('color_motif')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="motif_backup">Motif Cadangan</label>
            <input type="text" id="motif_backup" name="motif_backup" value="{{ old('motif_backup') }}" required
              placeholder="Motif Cadangan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('motif_backup')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required
              placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="pack">Kemas</label>
            <input type="text" id="pack" name="pack" value="{{ old('pack') }}" required
              placeholder="Kemas"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('pack')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20 mt-5">
            <label class="ml-2" for="note">Note Desain</label>
            <textarea id="note" rows="4" name="note" value="{{ old('note') }}" required
              placeholder="Tuliskan catatan tambahan disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        
      </div>

      <div>
        <!-- Submit Button -->
        <button type="submit"
                class="bg-brown-main text-white px-5 py-2 rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center mt-5">
          Buat Pesanan
        </button>
        <!-- tombol kembali -->
        <a href=""
           class="bg-brown-main text-white px-10 py-[11px] rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center ml-8">
          Kembali
        </a>
      </div>
    </form>
  </div>
</body>

</html>
