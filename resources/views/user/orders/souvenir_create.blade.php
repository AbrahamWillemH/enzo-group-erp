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
  <div class="z-10 fixed top-0 left-0 right-0 ht grid grid-cols-[70%_30%] px-4 py-5 bg-green-main">
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

    <form method="POST" class="flex flex-col gap-5 items-center">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-2 justify-center">
        <div class="grid grid-rows-6 gap-5">
          <div class="flex items-center flex-col mx-20 mb-3">
            <label class="ml-2" for="name">Nama Pemesan</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
            
          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="phone">Nomor HP</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          
          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="couples_name">Nama Mempelai</label>
            <input type="text" id="couples_name" name="couples_name" value="{{ old('couples_name') }}" required
              placeholder="Nama Mempelai"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('couples_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>


          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="event_date">Tanggal Acara</label>
            <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" required
              class="text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('event_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="type">Jenis Souvenir</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}" required
              placeholder="Jenis Souvenir"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="packaging">Kemas</label>
            <input type="text" id="packaging" name="packaging" value="{{ old('packaging') }}" required
              placeholder="Kemas"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('packaging')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="grid grid-rows-6 gap-5">

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="emboss_desain">Desain Emboss / Label Nama / Sablon</label>
            <input type="file" id="emboss_desain" name="emboss_desain" value="{{ old('emboss_desain') }}" required
            class="text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full px-0 py-0.45">
            @error('emboss_desain')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          
          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="thankscard_desain">Desain Thankscard</label>
            <input type="file" id="thankscard_desain" name="thankscard_desain" value="{{ old('thankscard_desain') }}" required
            class="text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full px-0 py-0.45">
            @error('thankscard_desain')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          
          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="colors">Warna / Motif</label>
            <input type="text" id="colors" name="colors" value="{{ old('colors') }}" required
            placeholder="Warna / Motif"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('colors')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          
          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="patterns_backup">Motif Cadangan</label>
            <input type="text" id="patterns_backup" name="patterns_backup" value="{{ old('patterns_backup') }}" required
            placeholder="Motif Cadangan"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('patterns_backup')
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
            <label class="ml-2" for="deadline_date">Deadline</label>
            <input type="date" id="deadline_date" name="deadline_date" value="{{ old('deadline_date') }}" required
              class="text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('deadline_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        
        <div class="flex items-center flex-col mx-20 mt-5">
          <label class="ml-2" for="address">Alamat Lengkap</label>
          <textarea id="address" rows="3" name="address" value="{{ old('address') }}" required
            placeholder="Alamat Lengkap"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('address')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>    

      <!-- Submit Button -->
      <button type="submit"
        class="bg-brown-main text-white px-5 py-2 rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center">Buat Pesanan</button>
    </form>
  </div>
</body>

</html>
