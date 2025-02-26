<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitation Form Edit</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#fcfffa] font-mont">
  <!-- Navigation Bar -->
  <nav class="fixed w-full flex justify-between items-center px-4 sm:px-6 py-4 bg-green-main text-brown-enzo shadow-md z-50">
    <a href="{{route('loginRedirect')}}" class="text-xl font-bold">Enzo Group</a>
    <div class="font-medium">
      <a href="{{route('admin.invitation.detail', ['id' => $invitation->id])}}" class="flex flex-col justify-center items-center group">
        Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
    </div>
  </nav>

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center min-h-screen justify-start py-24 text-green-main font-sans" style="letter-spacing: 3px">
    <h2 class="text-lg sm:text-xl md:text-2xl tracking-widest font-medium">EDIT INVITATION : {{$invitation->user_name}}</h2>
    <hr class="border-b-4 border-brown-enzo w-3/4 sm:w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('admin.invitation.update', ['id' => $invitation->id]) }}" method="POST" class="flex flex-col gap-5 items-center" enctype="multipart/form-data">
    @csrf

      <!-- Customer Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col">
            <label for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="{{ $invitation->user_name }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $invitation->phone_number }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" value="{{ $invitation->instagram }}" required
              placeholder="Akun Instagram"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('instagram')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="address">Alamat Lengkap</label>
            <textarea id="address" rows="7" name="address" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->address }}</textarea>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col">
            <label for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="{{ $invitation->quantity }}" required placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="product_name">Tipe Produk</label>
            <input product_name="text" id="product_name" name="product_name" value="{{ $invitation->product_name }}" required
              placeholder="Tipe Produk"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('product_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="finishing">Finishing</label>
            <input type="text" id="finishing" name="finishing" value="{{ $invitation->finishing }}" required placeholder="Finishing"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('finishing')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="source">Source</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" id="source" name="source"required>
              <option value="Shopee" {{ old('source', $invitation->source) == 'Shopee' ? 'selected' : '' }}>Shopee</option>
              <option value="Deonkraft" {{ old('source', $invitation->source) == 'Deonkraft' ? 'selected' : '' }}>Deonkraft</option>
              <option value="Enzo Wedding" {{ old('source', $invitation->source) == 'Enzo Wedding' ? 'selected' : '' }}>Enzo Wedding</option>
              <option value="Grizelle" {{ old('source', $invitation->source) == 'Grizelle' ? 'selected' : '' }}>Grizelle</option>
            </select>
            @error('kemas')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="note_design">Note</label>
            <textarea id="note_design" rows="4" name="note_design"
              placeholder="Tulis catatan tambahan disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->note_design }}</textarea>
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
            <h2 class="text-center font-medium"><br>Data Mempelai Pria</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="groom_name">Nama Lengkap</label>
              <input type="text" id="groom_name" name="groom_name" value="{{ $invitation->groom_name }}" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_nickname">Nama Panggilan</label>
              <input type="text" id="groom_nickname" name="groom_nickname" value="{{ $invitation->groom_nickname }}" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_father">Nama Ayah</label>
              <input type="text" id="groom_father" name="groom_father" value="{{ $invitation->groom_father }}" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_mother">Nama Ibu</label>
              <input type="text" id="groom_mother" name="groom_mother" value="{{ $invitation->groom_mother }}" required
                placeholder="Nama Lengkap Ibu"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_mother')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_parents_address">Alamat Orang Tua</label>
              <textarea id="groom_parents_address" rows="5" name="groom_parents_address" required
                placeholder="Alamat Orang Tua"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->groom_parents_address }}</textarea>
              @error('groom_parents_address')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

        <!-- Bride's Section -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Data Mempelai Wanita</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="bride_name">Nama Lengkap</label>
              <input type="text" id="bride_name" name="bride_name" value="{{ $invitation->bride_name }}" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_nickname">Nama Panggilan</label>
              <input type="text" id="bride_nickname" name="bride_nickname" value="{{ $invitation->bride_nickname }}" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_father">Nama Ayah</label>
              <input type="text" id="bride_father" name="bride_father" value="{{ $invitation->bride_father }}" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_mother">Nama Ibu</label>
              <input type="text" id="bride_mother" name="bride_mother" value="{{ $invitation->bride_mother }}" required
                placeholder="Nama Lengkap Ibu"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_mother')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_parents_address">Alamat Orang Tua</label>
              <textarea id="bride_parents_address" rows="5" name="bride_parents_address" required
                placeholder="Alamat Orang Tua"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->bride_parents_address }}</textarea>
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
              <textarea type="text" id="turut_mengundang" rows="5" name="turut_mengundang"required
                placeholder="Turut Mengundang"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-[50%] rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->turut_mengundang}}</textarea>
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
            <h2 class="text-center font-medium"><br>Data Akad / Pemberkatan</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="akad_pemberkatan_date">Tanggal Acara</label>
              <input type="date" id="akad_pemberkatan_date" name="akad_pemberkatan_date" value="{{ $invitation->akad_pemberkatan_date }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('akad_pemberkatan_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex flex-col items-center">
                <label for="akad_pemberkatan_time">Waktu Acara</label>
                <div class="flex items-center space-x-2">
                    <!-- Input Waktu -->
                    <div class="relative w-70">
                        <input type="text" id="timePicker" name="akad_pemberkatan_time"
                            value="{{ $invitation->akad_pemberkatan_time }}" required
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
                        <option value="WIB" {{ $invitation->time_zone == 'WIB' ? 'selected' : '' }}>WIB</option>
                        <option value="WITA" {{ $invitation->time_zone == 'WITA' ? 'selected' : '' }}>WITA</option>
                        <option value="WIT" {{ $invitation->time_zone == 'WIT' ? 'selected' : '' }}>WIT</option>
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
                  <div class="relative w-70">
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
                      <option value="WIB" {{ $invitation->time_zone == 'WIB' ? 'selected' : '' }}>WIB</option>
                      <option value="WITA" {{ $invitation->time_zone == 'WITA' ? 'selected' : '' }}>WITA</option>
                      <option value="WIT" {{ $invitation->time_zone == 'WIT' ? 'selected' : '' }}>WIT</option>
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
              <textarea id="akad_pemberkatan_location" rows="5" name="akad_pemberkatan_location" required
                placeholder="Lokasi Akad Pemberkatan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->akad_pemberkatan_location }}</textarea>
              @error('akad_pemberkatan_location')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

        <!-- Reception -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Data Resepsi</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="reception_date">Tanggal Acara</label>
              <input type="date" id="reception_date" name="reception_date" value="{{ $invitation->reception_date }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('reception_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex flex-col items-center">
                <label for="reception_time">Waktu Acara</label>
                <div class="flex items-center space-x-2">
                    <!-- Input Waktu -->
                    <div class="relative w-70">
                        <input type="text" id="timePicker" name="reception_time"
                            value="{{ $invitation->reception_time }}" required
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
                        <option value="WIB" {{ $invitation->time_zone == 'WIB' ? 'selected' : '' }}>WIB</option>
                        <option value="WITA" {{ $invitation->time_zone == 'WITA' ? 'selected' : '' }}>WITA</option>
                        <option value="WIT" {{ $invitation->time_zone == 'WIT' ? 'selected' : '' }}>WIT</option>
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
                  <div class="relative w-70">
                      <input type="text" id="timePicker" name="reception_time_finish"
                          value="{{ $invitation->reception_time }}" required
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
                      <option value="WIB" {{ $invitation->time_zone == 'WIB' ? 'selected' : '' }}>WIB</option>
                      <option value="WITA" {{ $invitation->time_zone == 'WITA' ? 'selected' : '' }}>WITA</option>
                      <option value="WIT" {{ $invitation->time_zone == 'WIT' ? 'selected' : '' }}>WIT</option>
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
              <textarea id="reception_location" rows="5" name="reception_location" required
                placeholder="Lokasi Resepsi"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->reception_location }}</textarea>
              @error('reception_location')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>
      </div>

      <!-- Detail Undangan -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <!-- Desain -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Desain dan Pembayaran</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>

          <div class="flex flex-col gap-5">

            <div class="flex items-center flex-col">
              <label for="desain_path">Desain</label>
              <input type="file" id="desain_path" name="desain_path"
                accept=".jpg,.jpeg,.png,.pdf"
                class=" text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full px-0 py-0.45 sm:py-0.45 md:py-0.45 lg:py-0.45"
                value="{{$invitation->desain_path}}">
              @error('desain_path')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
                <label for="progress">Progress</label>
                <select id="progress" name="progress"
                  class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                  <option value="Pending" {{ old('progress', $invitation->progress) == 'Pending' ? 'selected' : '' }}>Menunggu Pembayaran dan Desain</option>
                  <option value="Fix" {{ old('progress', $invitation->progress) == 'Fix' ? 'selected' : '' }}>Menentukan Deadline</option>
                  <option value="Pemesanan Bahan" {{ old('progress', $invitation->progress) == 'Pemesanan Bahan' ? 'selected' : '' }}>Pemesanan Bahan</option>
                  <option value="Proses Produksi" {{ old('progress', $invitation->progress) == 'Proses Produksi' ? 'selected' : '' }}>Proses Produksi</option>
                  <option value="Selesai" {{ old('progress', $invitation->progress) == 'Selesai' ? 'selected' : '' }}>Menunggu Ambil / Kirim</option>
                  <option value="Selesai Beneran" {{ old('progress', $invitation->progress) == 'Selesai Beneran' ? 'selected' : '' }}>Pesanan Selesai</option>
                </select>
                @error('progress')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            <div class="flex items-center flex-col">
                <label for="payment_status">Status Bayar</label>
                <select id="payment_status" name="payment_status"
                  class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                  <option value="Pending" {{ old('payment_status', $invitation->payment_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                  <option value="DP 1" {{ old('payment_status', $invitation->payment_status) == 'DP 1' ? 'selected' : '' }}>DP 1</option>
                  <option value="DP 2" {{ old('payment_status', $invitation->payment_status) == 'DP 2' ? 'selected' : '' }}>DP 2</option>
                  <option value="Lunas" {{ old('payment_status', $invitation->payment_status) == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                </select>
                @error('payment_status')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="dp1_date">Tanggal Pembayaran DP1</label>
              <input type="date" id="dp1_date" name="dp1_date" value="{{ $invitation->dp1_date }}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('dp1_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="dp2_date">Tanggal Pembayaran DP2</label>
              <input type="date" id="dp2_date" name="dp2_date" value="{{ $invitation->dp2_date }}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('dp2_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="paid_off_date">Tanggal Pelunasan</label>
              <input type="date" id="paid_off_date" name="paid_off_date" value="{{ $invitation->paid_off_date }}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('paid_off_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col ">
              <label for="fix_design_date">Tanggal Fix Desain</label>
              <input type="date" id="fix_design_date" name="fix_design_date" value="{{ $invitation->fix_design_date }}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('fix_design_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col ">
              <label for="deadline_date">Tanggal Deadline</label>
              <input type="date" id="deadline_date" name="deadline_date" value="{{ $invitation->deadline_date }}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('deadline_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

        <!-- Informasi Tambahan -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Informasi Tambahan</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="price_per_pcs">Harga /Pcs</label>
              <div class="relative w-full">
                <span class="absolute left-2 top-[13px] transform -translate-y-1/2 text-gray-600">Rp</span>
                <input type="text" id="price_per_pcs" name="price_per_pcs"
                    value="{{ number_format($invitation->price_per_pcs, 0, ',', '.') }}"
                    placeholder="Harga /Pcs"
                    class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-8 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                <input type="hidden" id="price_per_pcs_hidden" name="price_per_pcs" value="{{ $invitation->price_per_pcs }}">
              </div>
            @error('price_per_pcs')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="printout">Percetakan</label>
              <input type="text" id="printout" name="printout" value="{{ $invitation->printout }}"
                placeholder="Percetakan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('printout')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="expedition">Ekspedisi</label>
              <input type="text" id="expedition" name="expedition" value="{{ $invitation->expedition }}"
                placeholder="Ekspedisi"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('expedition')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
                <label for="design_status">Acc Client</label>
                <select id="design_status" name="design_status"
                  class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                  <option value="Pending" {{ old('design_status', $invitation->design_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                  <option value="ACC" {{ old('design_status', $invitation->design_status) == 'ACC' ? 'selected' : '' }}>ACC</option>
                  <option value="DECL" {{ old('design_status', $invitation->design_status) == 'DECL' ? 'selected' : '' }}>DECL</option>
                </select>
                @error('design_status')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col">
                <label for="size_fix">Ukuran Jadi</label>
                <input type="text" id="size_fix" name="size_fix" value="{{ $invitation->size_fix }}"
                  placeholder="Ukuran Jadi"
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('size_fix')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

            <div class="flex items-center flex-col">
              <label for="note_cs">Note Admin</label>
              <textarea id="note_cs" rows="6" name="note_cs"
                placeholder="Tulis catatan tambahan disini"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{$invitation->note_cs}}</textarea>
              @error('note_cs')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          </div>
        </div>
      </div>

      <div>
        <!-- Submit Button -->
        <button type="submit"
                class="bg-brown-main text-white px-5 py-2 rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center mt-5">
          Perbarui Pesanan
        </button>
      </div>

    </form>
  </div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const priceInput = document.getElementById("price_per_pcs");
        const hiddenInput = document.getElementById("price_per_pcs_hidden");

        function formatRupiah(value) {
            return value.replace(/\D/g, "") // Hapus karakter non-digit
                        .replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Tambahkan titik setiap ribuan
        }

        priceInput.addEventListener("input", function() {
            let rawValue = this.value.replace(/\D/g, ""); // Simpan angka asli tanpa titik
            hiddenInput.value = rawValue; // Simpan angka asli di input hidden
            this.value = formatRupiah(rawValue); // Format tampilan pengguna
        });

        // Pastikan nilai input diformat saat halaman dimuat
        priceInput.value = formatRupiah(priceInput.value);
    });

    document.addEventListener("DOMContentLoaded", function() {
        let timeInput = document.getElementById("akad_pemberkatan_time");

        timeInput.addEventListener("change", function() {
            let [hours, minutes] = this.value.split(":");
            hours = hours.padStart(2, "0"); // Pastikan dua digit
            this.value = `${hours}:${minutes}`;
        });
    });

    flatpickr("#timePicker", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true
    });
</script>
</body>

</html>
