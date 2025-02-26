<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitation Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @vite('resources/css/app.css')
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
    <h2 class="text-lg sm:text-xl md:text-2xl">FORM ORDER UNDANGAN</h2>
    <hr class="border-b-4 border-brown-enzo w-3/4 sm:w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 mb-5">


    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('user.orders.invitation.store') }}" method="POST" class="flex flex-col gap-5 items-center">
    @csrf

      <!-- Customer Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col">
            <label for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" value="{{ old('instagram') }}" required
              placeholder="Akun Instagram"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('instagram')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="address">Alamat Lengkap</label>
            <textarea id="address" rows="7" name="address" value="{{ old('address') }}" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col">
            <label for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="product_name">Tipe Produk</label>
            <input type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" required
              placeholder="Tipe Produk"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('product_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="finishing">Finishing</label>
            <input type="text" id="finishing" name="finishing" value="{{ old('finishing') }}" required placeholder="Finishing"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('finishing')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="source">Source</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" id="source" name="source" required>
              <option value="Shopee">Shopee</option>
              <option value="Deonkraft">Deonkraft</option>
              <option value="Enzo Wedding">Enzo Wedding</option>
              <option value="Grizelle">Grizelle</option>
            </select>
            @error('source')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="note_design">Note</label>
            <textarea id="note_design" rows="4" name="note_design" value="{{ old('note_design') }}" required
              placeholder="Tulis catatan tambahan disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note_design')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <!-- Groom's Section -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Data Mempelai Pria</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="groom_name">Nama Lengkap</label>
              <input type="text" id="groom_name" name="groom_name" value="{{ old('groom_name') }}" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_nickname">Nama Panggilan</label>
              <input type="text" id="groom_nickname" name="groom_nickname" value="{{ old('groom_nickname') }}" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_father">Nama Ayah</label>
              <input type="text" id="groom_father" name="groom_father" value="{{ old('groom_father') }}" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_mother">Nama Ibu</label>
              <input type="text" id="groom_mother" name="groom_mother" value="{{ old('groom_mother') }}" required
                placeholder="Nama Lengkap Ibu"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_mother')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_parents_address">Alamat Orang Tua</label>
              <textarea type="text" id="groom_parents_address" rows="5" name="groom_parents_address" value="{{ old('groom_parents_address') }}" required
                placeholder="Alamat Orang Tua"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
              @error('groom_parents_address')
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
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="bride_name">Nama Lengkap</label>
              <input type="text" id="bride_name" name="bride_name" value="{{ old('bride_name') }}" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_nickname">Nama Panggilan</label>
              <input type="text" id="bride_nickname" name="bride_nickname" value="{{ old('bride_nickname') }}" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_father">Nama Ayah</label>
              <input type="text" id="bride_father" name="bride_father" value="{{ old('bride_father') }}" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_mother">Nama Ibu</label>
              <input type="text" id="bride_mother" name="bride_mother" value="{{ old('bride_mother') }}" required
                placeholder="Nama Lengkap Ibu"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_mother')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_parents_address">Alamat Orang Tua</label>
              <textarea type="text" id="bride_parents_address" rows="5" name="bride_parents_address" value="{{ old('bride_parents_address') }}" required
                placeholder="Alamat Orang Tua"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
              @error('bride_parents_address')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div>
          <div class="flex flex-col">
            <div class="flex items-center flex-col">
              <label for="turut_mengundang">Turut Mengundang</label>
              <textarea type="text" id="turut_mengundang" rows="5" name="turut_mengundang" value="{{ old('turut_mengundang') }}" required
                placeholder="Turut Mengundang"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
              @error('turut_mengundang')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <!-- Akad & Pemberkatan -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Data Akad / Pemberkatan</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="akad_pemberkatan_date">Tanggal Acara</label>
              <input type="date" id="akad_pemberkatan_date" name="akad_pemberkatan_date" value="{{ old('akad_pemberkatan_date') }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('akad_pemberkatan_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex flex-col items-center">
                <label for="akad_pemberkatan_time">Waktu Acara</label>
                <div class="flex items-center space-x-2">
                    <!-- Input Waktu -->
                    <div class="relative w-60">
                        <input type="text" id="timePicker" name="akad_pemberkatan_time"
                            value="{{ old('akad_pemberkatan_time') }}" required
                            placeholder="Pilih Waktu Acara"
                            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-10 py-2"
                        >
                        <!-- SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-clock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
                    </div>

                    <!-- Dropdown Timezone -->
                    <select name="time_zone" id="time_zone"
                        class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl px-3 py-2 w-30">
                        <option value="WIB" {{ old('time_zone') == 'WIB' ? 'selected' : '' }}>WIB</option>
                        <option value="WITA" {{ old('time_zone') == 'WITA' ? 'selected' : '' }}>WITA</option>
                        <option value="WIT" {{ old('time_zone') == 'WIT' ? 'selected' : '' }}>WIT</option>
                    </select>
                </div>

                <!-- Error Handling -->
                @error('akad_pemberkatan_time')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                @error('time_zone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col items-center">
              <label for="akad_pemberkatan_time_finish">Waktu Selesai</label>
              <div class="flex items-center space-x-2">
                  <!-- Input Waktu -->
                  <div class="relative w-60">
                      <input type="text" id="timePicker" name="akad_pemberkatan_time_finish"
                          value="" required
                          placeholder="Pilih Waktu Selesai"
                          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-10 py-2"
                      >
                      <!-- SVG Icon -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-clock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"
                          viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                      </svg>
                  </div>

                  <!-- Dropdown Timezone -->
                  <select name="time_zone" id="time_zone"
                      class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl px-3 py-2 w-30">
                      <option value="WIB" {{ old('time_zone') == 'WIB' ? 'selected' : '' }}>WIB</option>
                      <option value="WITA" {{ old('time_zone') == 'WITA' ? 'selected' : '' }}>WITA</option>
                      <option value="WIT" {{ old('time_zone') == 'WIT' ? 'selected' : '' }}>WIT</option>
                  </select>
              </div>

                <!-- Error Handling -->
                @error('akad_pemberkatan_time')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                @error('time_zone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="akad_pemberkatan_location">Lokasi Acara</label>
              <textarea id="akad_pemberkatan_location" rows="5" name="akad_pemberkatan_location" value="{{ old('akad_pemberkatan_location') }}" required
                placeholder="Lokasi Akad Pemberkatan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
              @error('akad_pemberkatan_location')
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
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="reception_date">Tanggal Acara</label>
              <input type="date" id="reception_date" name="reception_date" value="{{ old('reception_date') }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('reception_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex flex-col items-center">
                <label for="reception_time">Waktu Acara</label>
                <div class="flex items-center space-x-2">
                    <!-- Input Waktu -->
                    <div class="relative w-60">
                        <input type="text" id="timePicker" name="reception_time"
                            value="{{ old('reception_time') }}" required
                            placeholder="Pilih Waktu Acara"
                            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-10 py-2"
                        >
                        <!-- SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-clock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
                    </div>

                    <!-- Dropdown Timezone -->
                    <select name="time_zone" id="time_zone"
                        class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl px-3 py-2 w-30">
                        <option value="WIB" {{ old('time_zone') == 'WIB' ? 'selected' : '' }}>WIB</option>
                        <option value="WITA" {{ old('time_zone') == 'WITA' ? 'selected' : '' }}>WITA</option>
                        <option value="WIT" {{ old('time_zone') == 'WIT' ? 'selected' : '' }}>WIT</option>
                    </select>
                </div>

                <!-- Error Handling -->
                @error('reception_time')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                @error('time_zone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col items-center">
              <label for="reception_time_finish">Waktu Selesai</label>
              <div class="flex items-center space-x-2">
                  <!-- Input Waktu -->
                  <div class="relative w-60">
                      <input type="text" id="timePicker" name="reception_time_finish"
                          value="" required
                          placeholder="Pilih Waktu Selesai"
                          class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-10 py-2"
                      >
                      <!-- SVG Icon -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-clock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"
                          viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                      </svg>
                  </div>

                  <!-- Dropdown Timezone -->
                  <select name="time_zone" id="time_zone"
                      class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl px-3 py-2 w-30">
                      <option value="WIB" {{ old('time_zone') == 'WIB' ? 'selected' : '' }}>WIB</option>
                      <option value="WITA" {{ old('time_zone') == 'WITA' ? 'selected' : '' }}>WITA</option>
                      <option value="WIT" {{ old('time_zone') == 'WIT' ? 'selected' : '' }}>WIT</option>
                  </select>
              </div>

              <!-- Error Handling -->
              @error('reception_time')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
              @error('time_zone')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="reception_location">Lokasi Acara</label>
              <textarea id="reception_location" rows="5" name="reception_location" value="{{ old('reception_location') }}" required
                placeholder="Lokasi Resepsi"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
              @error('reception_location')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>
      </div>

      <div>
        <!-- Submit Button -->
        <button type="submit" class="bg-brown-main text-white px-5 py-2 rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center mt-5">
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

<script>
    flatpickr("#timePicker", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true
    });
</script>
</body>

</html>
