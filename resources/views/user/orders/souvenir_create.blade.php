<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Souvenir Form</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-[#fcfffa] font-mont">
  <!-- Navigation Bar -->
  <nav class="fixed w-full flex flex-wrap justify-between items-center px-4 sm:px-6 py-4 bg-green-main text-brown-enzo shadow-md z-50">
    <a href="{{route('loginRedirect')}}" class="text-xl font-bold">Enzo Group</a>

    <div class="flex items-center space-x-4 sm:space-x-6">
      <!-- Dropdown Menu -->
      <div class="group relative">
        <!-- Dropdown Button -->
        <button class="flex flex-col justify-center items-center font-semibold mr-3 sm:mr-7">Form Order
          <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
        </button>

        <!-- Dropdown Content -->
        <div class="absolute mt-2 right-0 sm:right-2 w-40 sm:w-32 bg-green-light text-gray-700 shadow-lg rounded-md opacity-0 group-hover:opacity-100 transition-opacity">
          <a href="/orders/invitation/create" class="block px-4 py-2 hover:bg-cream rounded-md">Invitation</a>
          <a href="/orders/souvenir/create" class="block px-4 py-2 hover:bg-cream rounded-md">Souvenir</a>
          <a href="#" class="block px-4 py-2 hover:bg-cream rounded-md">Seminar Kit</a>
          <a href="/orders/packaging/create" class="block px-4 py-2 hover:bg-cream rounded-md">Packaging</a>
        </div>
      </div>

      @if(auth()->user()->role === 'user')
      <a href="{{ url('/user/dashboard') }}" class="flex flex-col justify-center items-center group font-semibold">
        Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
    @elseif(auth()->user()->role === 'admin')
      <a href="{{ url('/admin/dashboard/invitation') }}" class="flex flex-col justify-center items-center group font-semibold">
        Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
    @endif
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center min-h-screen justify-start py-24 text-green-main font-sans" style="letter-spacing: 3px">
    <h2 class="text-lg sm:text-xl md:text-2xl">FORM ORDER SOUVENIR</h2>
    <hr class="border-b-4 border-brown-enzo w-3/4 sm:w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 mb-5">


    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{route ('user.orders.souvenir.store')}}" method="POST" class="flex flex-col gap-5 items-center">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div class="flex flex-col gap-5">
          <div class="flex items-center flex-col">
            <label class="ml-2" for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="bridegroom_name">Nama Mempelai</label>
            <input type="text" id="bridegroom_name" name="bridegroom_name" value="{{ old('bridegroom_name') }}" required
              placeholder="Nama Mempelai"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('bridegroom_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="event_date">Tanggal Acara</label>
            <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('event_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="product_name">Jenis Souvenir</label>
            <input type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" required
              placeholder="Jenis Souvenir"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('product_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="size">Ukuran Jadi</label>
            <input type="text" id="size" name="size" value="{{ old('size') }}" required
              placeholder="Ukuran Jadi"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('size')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mt-5 mb-7">
            <label class="ml-2" for="address">Alamat Lengkap</label>
            <textarea id="address" rows="5" name="address" value="{{ old('address') }}" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col">
            <label class="ml-2" for="design">Desain Emboss / Label / Sablon</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1"
              id="design" name="design" required>
              <option value="Desain Template">Desain Template</option>
              <option value="Desain Custom">Desain Custom</option>
            </select>
            @error('design')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="thankscard">Desain Thankscard</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1"
              id="thankscard" name="thankscard" required>
              <option value="Desain Template">Desain Template</option>
              <option value="Desain Custom">Desain Custom</option>
            </select>
            @error('thankscard')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="color_motif">Warna / Motif</label>
            <input type="text" id="color_motif" name="color_motif" value="{{ old('color_motif') }}" required
              placeholder="Warna / Motif"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('color_motif')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="motif_backup">Motif Cadangan</label>
            <input type="text" id="motif_backup" name="motif_backup" value="{{ old('motif_backup') }}" required
              placeholder="Motif Cadangan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('motif_backup')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required
              placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="pack">Kemas</label>
            <input type="text" id="pack" name="pack" value="{{ old('pack') }}" required
              placeholder="Kemas"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('pack')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mt-5">
            <label class="ml-2" for="note_design">Note</label>
            <textarea id="note_design" rows="5" name="note_design" value="{{ old('note_design') }}" required
              placeholder="Tuliskan catatan tambahan disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note_design')
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
      </div>
    </form>
  </div>
@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}'
        });
    </script>
@endif
</body>

</html>
