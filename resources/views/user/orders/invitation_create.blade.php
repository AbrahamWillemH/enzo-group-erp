<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitation Form</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-[#F7FCF5] font-mont">
  <!-- Navigation Bar -->
  <div class="fixed top-0 left-0 right-0 ht grid grid-cols-[70%_30%] px-4 py-5 bg-green-main">
    <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
        <a href="{{route('loginRedirect')}}">Enzo Group</a>
    </div>
    <div class="grid grid-cols-3 gap-1 font-medium">
      <a href="{{ url('/' . auth()->user()->role . '/dashboard') }}" class="text-brown-enzo flex flex-col justify-center items-center group mr-7">Dashboard
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
          <a href="/orders/invitation/create" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Invitation</a>
          <a href="/orders/souvenir/create" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Souvenir</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Seminar Kit</a>
          <a href="/orders/packaging/create" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Packaging</a>
        </div>
      </div>

      <a href="" class="text-brown-enzo flex flex-col justify-center items-center group">Admin
          <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
      </a>
    </div>
  </div>

  <div style="letter-spacing: 3px" class="font-sans text-green-main container flex items-center flex-col min-h-screen justify-start py-24">
    <h2 style="font-size: 22px">FORM ORDER UNDANGAN</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('user.orders.invitation.store') }}" method="POST" class="flex flex-col gap-5 items-center">
    @csrf

      <!-- Customer Info -->
      <div class="grid grid-cols-[50%_50%] gap-40 justify-center">
        <div class="grid grid-rows-3 gap-5">

          <div class="flex items-center flex-col">
            <label for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" value="{{ old('instagram') }}" required
              placeholder="Akun Instagram"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('instagram')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="grid grid-rows-3 gap-5">

          <div class="flex items-center flex-col">
            <label for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="product_name">Tipe Produk</label>
            <input type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" required
              placeholder="Tipe Produk"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('product_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="finishing">Finishing</label>
            <input type="text" id="finishing" name="finishing" value="{{ old('finishing') }}" required placeholder="Finishing"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('finishing')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-60 justify-center">
        <div class="flex items-center flex-col">
          <label for="address">Alamat Lengkap</label>
          <textarea id="address" rows="5" name="address" value="{{ old('address') }}" required
            placeholder="Alamat Lengkap"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('address')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="flex items-center flex-col">
          <label for="note">Note</label>
          <textarea id="note" rows="5" name="note" value="{{ old('note') }}" required
            placeholder="Tulis catatan tambahan disini"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('note')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>

      <div class="grid grid-cols-[50%_50%] gap-40 justify-center">
        <!-- Groom's Section -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Data Mempelai Pria</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="grid grid-rows-4 gap-5">
            <div class="flex items-center flex-col">
              <label for="groom_name">Nama Lengkap</label>
              <input type="text" id="groom_name" name="groom_name" value="{{ old('groom_name') }}" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_nickname">Nama Panggilan</label>
              <input type="text" id="groom_nickname" name="groom_nickname" value="{{ old('groom_nickname') }}" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_father">Nama Ayah</label>
              <input type="text" id="groom_father" name="groom_father" value="{{ old('groom_father') }}" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_mother">Nama Ibu</label>
              <input type="text" id="groom_mother" name="groom_mother" value="{{ old('groom_mother') }}" required
                placeholder="Nama Lengkap Ibu"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_mother')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

        <!-- Bride's Section -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Data Mempelai Wanita</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="grid grid-rows-4 gap-5">
            <div class="flex items-center flex-col">
              <label for="bride_name">Nama Lengkap</label>
              <input type="text" id="bride_name" name="bride_name" value="{{ old('bride_name') }}" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_nickname">Nama Panggilan</label>
              <input type="text" id="bride_nickname" name="bride_nickname" value="{{ old('bride_nickname') }}" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_father">Nama Ayah</label>
              <input type="text" id="bride_father" name="bride_father" value="{{ old('bride_father') }}" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_mother">Nama Ibu</label>
              <input type="text" id="bride_mother" name="bride_mother" value="{{ old('bride_mother') }}" required
                placeholder="Nama Lengkap Ibu"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_mother')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-60 justify-center">
        <div class="flex items-center flex-col">
          <label for="groom_parents_address">Alamat Orang Tua</label>
          <textarea type="text" id="groom_parents_address" rows="5" name="groom_parents_address" value="{{ old('groom_parents_address') }}" required
            placeholder="Alamat Orang Tua"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('groom_parents_address')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="flex items-center flex-col">
          <label for="bride_parents_address">Alamat Orang Tua</label>
          <textarea type="text" id="bride_parents_address" rows="5" name="bride_parents_address" value="{{ old('bride_parents_address') }}" required
            placeholder="Alamat Orang Tua"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('bride_parents_address')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>

      <div class="grid grid-cols-[50%_50%] gap-40 justify-center">
        <!-- Akad & Pemberkatan -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Data Akad / Pemberkatan</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="grid grid-rows-2 gap-5">
            <div class="flex items-center flex-col">
              <label for="akad_pemberkatan_date">Tanggal Acara</label>
              <input type="date" id="akad_pemberkatan_date" name="akad_pemberkatan_date" value="{{ old('akad_pemberkatan_date') }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('akad_pemberkatan_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="akad_pemberkatan_time">Waktu Acara</label>
              <input type="time" id="akad_pemberkatan_time" name="akad_pemberkatan_time" value="{{ old('akad_pemberkatan_location') }}"
                required class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('akad_pemberkatan_time')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

        <!-- Reception -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Data Resepsi</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="grid grid-rows-2 gap-5">
            <div class="flex items-center flex-col">
              <label for="reception_date">Tanggal Acara</label>
              <input type="date" id="reception_date" name="reception_date" value="{{ old('reception_date') }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('reception_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="reception_time">Waktu Acara</label>
              <input type="time" id="reception_time" name="reception_time" value="{{ old('reception_time') }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('reception_time')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-60 justify-center">
        <div class="flex items-center flex-col">
          <label for="akad_pemberkatan_location">Lokasi Acara</label>
          <textarea id="akad_pemberkatan_location" rows="5" name="akad_pemberkatan_location" value="{{ old('akad_pemberkatan_location') }}" required
            placeholder="Lokasi Akad Pemberkatan"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('akad_pemberkatan_location')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="flex items-center flex-col">
          <label for="reception_location">Lokasi Acara</label>
          <textarea id="reception_location" rows="5" name="reception_location" value="{{ old('reception_location') }}" required
            placeholder="Lokasi Resepsi"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('reception_location')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>

      <div>
        <!-- Submit Button -->
        <button type="submit" class="bg-brown-main text-white px-5 py-2 rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center mt-5">
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
