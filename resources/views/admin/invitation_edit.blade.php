<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitation Form Edit</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#F7FCF5] font-mont">
  <!-- Navigation Bar -->
  <div class="fixed top-0 left-0 right-0 ht grid grid-cols-[80%_20%] px-4 py-5 bg-green-main">
    <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
      <h1>Enzo Group</h1>
    </div>
    <div class="grid grid-cols-2 font-medium">
      <a href="" class="text-brown-enzo flex flex-col justify-center items-center group mr-0">Dashboard
          <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
      </a>

      <a href="" class="text-brown-enzo flex flex-col justify-center items-center group">Admin
          <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
      </a>
    </div>
  </div>

  <div style="letter-spacing: 3px" class="font-sans text-green-main container flex items-center flex-col min-h-screen justify-start py-24">
    <h2 style="font-size: 22px">EDIT UNDANGAN</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('admin.invitation.update', ['id' => $invitation->id]) }}" method="POST" class="flex flex-col gap-5 items-center">
    @csrf

      <!-- Customer Info -->
      <div class="grid grid-cols-[50%_50%] gap-40 justify-center">
        <div class="grid grid-rows-3 gap-5">

          <div class="flex items-center flex-col">
            <label for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="{{ $invitation->user_name }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $invitation->phone_number }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" value="{{ $invitation->instagram }}" required
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
            <input type="number" id="quantity" name="quantity" value="{{ $invitation->quantity }}" required placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="product_name">Tipe Produk</label>
            <input product_name="text" id="product_name" name="product_name" value="{{ $invitation->product_name }}" required
              placeholder="Tipe Produk"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('product_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="finishing">Finishing</label>
            <input type="text" id="finishing" name="finishing" value="{{ $invitation->finishing }}" required placeholder="Finishing"
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
          <textarea id="address" rows="5" name="address" required
            placeholder="Alamat Lengkap"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->address }}</textarea>
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
              <input type="text" id="groom_name" name="groom_name" value="{{ $invitation->groom_name }}" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_nickname">Nama Panggilan</label>
              <input type="text" id="groom_nickname" name="groom_nickname" value="{{ $invitation->groom_nickname }}" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_father">Nama Ayah</label>
              <input type="text" id="groom_father" name="groom_father" value="{{ $invitation->groom_father }}" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_mother">Nama Ibu</label>
              <input type="text" id="groom_mother" name="groom_mother" value="{{ $invitation->groom_mother }}" required
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
              <input type="text" id="bride_name" name="bride_name" value="{{ $invitation->bride_name }}" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_nickname">Nama Panggilan</label>
              <input type="text" id="bride_nickname" name="bride_nickname" value="{{ $invitation->bride_nickname }}" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_father">Nama Ayah</label>
              <input type="text" id="bride_father" name="bride_father" value="{{ $invitation->bride_father }}" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_mother">Nama Ibu</label>
              <input type="text" id="bride_mother" name="bride_mother" value="{{ $invitation->bride_mother }}" required
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
          <textarea id="groom_parents_address" rows="5" name="groom_parents_address" required
            placeholder="Alamat Orang Tua"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->groom_parents_address }}</textarea>
          @error('groom_parents_address')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="flex items-center flex-col">
          <label for="bride_parents_address">Alamat Orang Tua</label>
          <textarea id="bride_parents_address" rows="5" name="bride_parents_address" required
            placeholder="Alamat Orang Tua"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->bride_parents_address }}</textarea>
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
              <input type="date" id="akad_pemberkatan_date" name="akad_pemberkatan_date" value="{{ $invitation->akad_pemberkatan_date }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('akad_pemberkatan_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="akad_pemberkatan_time">Waktu Acara</label>
              <input type="time" id="akad_pemberkatan_time" name="akad_pemberkatan_time" value="{{ $invitation->akad_pemberkatan_time }}"
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
              <input type="date" id="reception_date" name="reception_date" value="{{ $invitation->reception_date }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('reception_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="reception_time">Waktu Acara</label>
              <input type="time" id="reception_time" name="reception_time" value="{{ $invitation->reception_time }}" required
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
          <textarea id="akad_pemberkatan_location" rows="5" name="akad_pemberkatan_location" required
            placeholder="Lokasi Akad Pemberkatan"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->akad_pemberkatan_location }}</textarea>
          @error('akad_pemberkatan_location')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="flex items-center flex-col">
          <label for="reception_location">Lokasi Acara</label>
          <textarea id="reception_location" rows="5" name="reception_location" required
            placeholder="Lokasi Resepsi"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $invitation->reception_location }}</textarea>
          @error('reception_location')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>

      <!-- Detail Undangan -->
      <div class="grid grid-cols-[50%_50%] gap-40 justify-center">
        <!-- Desain -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Desain dan Pembayaran</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>

          <div class="grid grid-rows-4 gap-5">

            <div class="flex items-center flex-col">
              <label for="invitation_desain">Desain</label>
              <input type="file" id="invitation_desain" name="invitation_desain"
                accept=".jpg,.jpeg,.png,.pdf"
                class=" text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 px-0 py-0.45 sm:py-0.45 md:py-0.45 lg:py-0.45">
              @error('invitation_desain')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
                <label for="progress">Progress</label>
                <select id="progress" name="progress"
                  class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                  <option value="Pending" {{ old('progress', $invitation->progress) == 'Pending' ? 'selected' : '' }}>Pending</option>
                  <option value="Fix" {{ old('progress', $invitation->progress) == 'Fix' ? 'selected' : '' }}>Fix</option>
                  <option value="Pemesanan Bahan" {{ old('progress', $invitation->progress) == 'Pemesanan Bahan' ? 'selected' : '' }}>Pemesanan Bahan</option>
                  <option value="Proses Produksi" {{ old('progress', $invitation->progress) == 'Proses Produksi' ? 'selected' : '' }}>Proses Produksi</option>
                  <option value="Finishing" {{ old('progress', $invitation->progress) == 'Finishing' ? 'selected' : '' }}>Finishing</option>
                  <option value="Selesai" {{ old('progress', $invitation->progress) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
                @error('progress')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            <div class="flex items-center flex-col">
                <label for="payment_status">Status Bayar</label>
                <select id="payment_status" name="payment_status"
                  class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
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
              <input type="date" id="dp1_date" name="dp1_date" value="" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('dp1_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="dp2_date">Tanggal Pembayaran DP2</label>
              <input type="date" id="dp2_date" name="dp2_date" value="{{ $invitation->dp2_date }}" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('dp2_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="payment_date">Tanggal Pelunasan</label>
              <input type="date" id="payment_date" name="payment_date" value="" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('payment_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          </div>
        </div>

        <!-- Informasi Tambahan -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Informasi Tambahan</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="grid grid-rows-4 gap-5">
            <div class="flex items-center flex-col">
              <label for="price_per_pcs">Harga /Pcs</label>
              <input type="text" id="price_per_pcs" name="price_per_pcs" value="{{ $invitation->price_per_pcs }}"
                placeholder="Harga /Pcs"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('price_per_pcs')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="printout">Printilan</label>
              <input type="text" id="printout" name="printout" value="{{ $invitation->printout }}"
                placeholder="Printilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('printout')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="expedition">Ekspedisi</label>
              <input type="text" id="expedition" name="expedition" value="{{ $invitation->expedition }}"
                placeholder="Ekspedisi"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('expedition')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
                <label for="design_status">Acc Client</label>
                <select id="design_status" name="design_status"
                  class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                  <option value="Pending" {{ old('design_status', $invitation->design_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                  <option value="ACC" {{ old('design_status', $invitation->design_status) == 'ACC' ? 'selected' : '' }}>ACC</option>
                  <option value="DECL" {{ old('design_status', $invitation->design_status) == 'DECL' ? 'selected' : '' }}>DECL</option>
                </select>
                @error('design_status')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="note_cs">Note Admin</label>
              <textarea id="note_cs" rows="5" name="note_cs" value="" required
                placeholder="Tulis catatan tambahan disini"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
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
        <!-- tombol kembali -->
        <a href="{{route('admin.invitation.detail', ['id' => $invitation->id])}}"
           class="bg-brown-main text-white px-10 py-[11px] rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center ml-8">
          Kembali
        </a>
      </div>

    </form>
  </div>
</body>

</html>
