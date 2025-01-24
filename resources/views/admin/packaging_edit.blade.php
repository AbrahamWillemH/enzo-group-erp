<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packaging Form Edit</title>
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

  <div style="letter-spacing: 3px" class="font-sans text-green-main container flex flex-col items-center min-h-screen justify-start py-24">
    <h2 style="font-size: 22px">EDIT PACKAGING</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{route('admin.packaging.update', ['id' => $packaging->id])}}" method="POST" class="flex flex-col gap-5 items-center" enctype="multipart/form-data">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-[50%_50%] gap-40 justify-center">
        <div class="grid grid-rows-3 gap-5">

          <div class="flex items-center flex-col">
            <label class="ml-2" for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="{{ $packaging->user_name }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $packaging->phone_number }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="deadline_date">Deadline</label>
            <input type="date" id="deadline_date" name="deadline_date" value="{{ $packaging->deadline_date }}"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('deadline_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="{{ $packaging->quantity }}" required
              placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="address">Alamat Lengkap</label>
            <textarea id="address" rows="7" name="address" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $packaging->address }}</textarea>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="grid grid-rows-4 gap-5">
          <div class="flex items-center flex-col">
            <label class="ml-2" for="model">Model</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="model" name="model" required>
                <option value="Softbox" {{ old('model', $packaging->model) == 'Softbox' ? 'selected' : '' }}>Softbox</option>
                <option value="Corrugatedbox" {{ old('model', $packaging->model) == 'Corrugatedbox' ? 'selected' : '' }}>Corrugatedbox</option>
                <option value="Hardbox" {{ old('model', $packaging->model) == 'Hardbox' ? 'selected' : '' }}>Hardbox</option>
            </select>
            @error('model')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="package_type">Tipe</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="package_type" name="package_type" required>
                <option value="SB Diecut" {{ old('package_type', $packaging->package_type) == 'SB Diecut' ? 'selected' : '' }}>SB Diecut</option>
                <option value="CB Diecut" {{ old('package_type', $packaging->package_type) == 'CB Diecut' ? 'selected' : '' }}>CB Diecut</option>
                <option value="HB Tutup Lepas" {{ old('package_type', $packaging->package_type) == 'HB Tutup Lepas' ? 'selected' : '' }}>HB Tutup Lepas</option>
                <option value="HB Pita" {{ old('package_type', $packaging->package_type) == 'HB Pita' ? 'selected' : '' }}>HB Pita</option>
                <option value="HB Magnet" {{ old('package_type', $packaging->package_type) == 'HB Magnet' ? 'selected' : '' }}>HB Magnet</option>
            </select>
            @error('package_type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="flex items-center flex-col">
            <label class="ml-2" for="finishing">Finishing</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="finishing" name="finishing" required>
                <option value="Foil" {{ old('finishing', $packaging->finishing) == 'Foil' ? 'selected' : '' }}>Foil</option>
                <option value="Laminasi Doff" {{ old('finishing', $packaging->finishing) == 'Laminasi Doff' ? 'selected' : '' }}>Laminasi Doff</option>
            </select>
            @error('finishing')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="size">Ukuran</label>
            <input type="text" id="size" name="size" value="{{ $packaging->size }}" required
              placeholder="Ukuran"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('size')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="note_design">Note Desain</label>
            <textarea id="note_design" rows="4" name="note_design"
              placeholder="Tuliskan note desain disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $packaging->note_design }}</textarea>
            @error('note_design')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
      </div>

      <!-- Detail Packaging -->
      <div class="grid grid-cols-[50%_50%] gap-40 justify-center">
        <!-- Desain -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center"><br>Desain dan Pembayaran</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>

          <div class="grid grid-rows-4 gap-5">

            <div class="flex items-center flex-col">
              <label for="desain_path">Desain</label>
              <input type="file" id="desain_path" name="desain_path"
                accept=".jpg,.jpeg,.png,.pdf"
                class=" text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 px-0 py-0.45 sm:py-0.45 md:py-0.45 lg:py-0.45">
              @error('desain_path')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="progress">Progress</label>
              <select id="progress" name="progress"
                  class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                  <option value="Pending" {{ old('progress', $packaging->progress) == 'Pending' ? 'selected' : '' }}>Pending</option>
                  <option value="Fix" {{ old('progress', $packaging->progress) == 'Fix' ? 'selected' : '' }}>Fix</option>
                  <option value="Pemesanan Bahan" {{ old('progress', $packaging->progress) == 'Pemesanan Bahan' ? 'selected' : '' }}>Pemesanan Bahan</option>
                  <option value="Proses Produksi" {{ old('progress', $packaging->progress) == 'Proses Produksi' ? 'selected' : '' }}>Proses Produksi</option>
                  <option value="Finishing" {{ old('progress', $packaging->progress) == 'Finishing' ? 'selected' : '' }}>Finishing</option>
                  <option value="Selesai" {{ old('progress', $packaging->progress) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
              @error('progress')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="payment_status">Status Bayar</label>
              <select id="payment_status" name="payment_status"
                class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                <option value="Pending" {{ old('payment_status', $packaging->payment_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="DP 1" {{ old('payment_status', $packaging->payment_status) == 'DP 1' ? 'selected' : '' }}>DP 1</option>
                <option value="DP 2" {{ old('payment_status', $packaging->payment_status) == 'DP 2' ? 'selected' : '' }}>DP 2</option>
                <option value="Lunas" {{ old('payment_status', $packaging->payment_status) == 'Lunas' ? 'selected' : '' }}>Lunas</option>
              </select>
              @error('payment_status')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="dp1_date">Tanggal Pembayaran DP1</label>
              <input type="date" id="dp1_date" name="dp1_date" value="{{$packaging->dp1_date}}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('dp1_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="dp2_date">Tanggal Pembayaran DP2</label>
              <input type="date" id="dp2_date" name="dp2_date" value="{{ $packaging->dp2_date }}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('dp2_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="paid_off_date">Tanggal Pelunasan</label>
              <input type="date" id="paid_off_date" name="paid_off_date" value="{{$packaging->paid_off_date}}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('paid_off_date')
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
              <input type="text" id="price_per_pcs" name="price_per_pcs" value="{{ $packaging->price_per_pcs }}"
                placeholder="Harga /Pcs"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('price_per_pcs')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="printout">Printilan</label>
              <input type="text" id="printout" name="printout" value="{{ $packaging->printout }}"
                placeholder="Printilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('printout')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="expedition">Ekspedisi</label>
              <input type="text" id="expedition" name="expedition" value="{{ $packaging->expedition }}"
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
                <option value="Pending" {{ old('design_status', $packaging->design_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="ACC" {{ old('design_status', $packaging->design_status) == 'ACC' ? 'selected' : '' }}>ACC</option>
                <option value="DECL" {{ old('design_status', $packaging->design_status) == 'DECL' ? 'selected' : '' }}>DECL</option>
              </select>
              @error('design_status')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="note_cs">Note Admin</label>
              <textarea id="note_cs" rows="5" name="note_cs" value="{{$packaging->note_cs}}"
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
        <a href="{{route('admin.packaging.detail', ['id' => $packaging->id])}}"
           class="bg-brown-main text-white px-10 py-[11px] rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center ml-8">
          Kembali
        </a>
      </div>
    </form>
  </div>
</body>

</html>
