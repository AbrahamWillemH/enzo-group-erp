<!-- Souvenir Edit -->
{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Souvenir Form Edit</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#F7FCF5] font-mont">
  <!-- Navigation Bar -->
  <div class="fixed w-full flex justify-between items-center px-4 sm:px-6 py-4 bg-green-main text-brown-enzo shadow-md z-50">
    <div class="flex text-left text-lg sm:text-xl font-bold items-center">
      <h1>Enzo Group</h1>
    </div>
    <div class="font-medium">
      <a href="/admin/dashboard" class="flex flex-col justify-center items-center group">
        Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="font-sans text-green-main w-full flex flex-col items-center min-h-screen justify-center py-16 sm:py-16">
    <h2 class="text-lg sm:text-xl md:text-2xl tracking-widest font-medium">EDIT SOUVENIR :</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 sm:w-1/4 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="" method="POST" class="flex flex-col gap-5 items-center">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 justify-center">
        <div class="flex flex-col gap-5">
          <div class="flex items-center flex-col mx-20 mb-3">
            <label class="ml-2" for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="bridegroom_name">Nama Mempelai</label>
            <input type="text" id="bridegroom_name" name="bridegroom_name" value="" required
              placeholder="Nama Mempelai"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('bridegroom_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>


          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="event_date">Tanggal Acara</label>
            <input type="date" id="event_date" name="event_date" value="" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('event_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="product_name">Jenis Souvenir</label>
            <input type="text" id="product_name" name="product_name" value="" required
              placeholder="Jenis Souvenir"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('product_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20 mt-5 mb-7">
            <label class="ml-2" for="address">Alamat Lengkap</label>
            <textarea id="address" rows="7" name="address" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="design">Desain Emboss / Label Nama / Sablon</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"
              id="design" name="design" required>
              <option value="Desain pribadi/template">Desain pribadi/template</option>
              <option value="Desain custom Enzo">Desain custom enzo</option>
            </select> 
            <input type="file" id="desain_emboss_path" name="desain_emboss_path"
                    accept=".jpg,.jpeg,.png,.pdf"
                    class=" text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full px-0 py-0.45 sm:py-0.45 md:py-0.45 lg:py-0.45 mt-3">
            @error('design')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="thankscard">Desain Thankscard</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"
              id="design" name="design" required>
              <option value="Desain pribadi/template">Desain pribadi/template</option>
              <option value="Desain custom Enzo">Desain custom enzo</option>
            </select>
            <input type="file" id="desain_thankscard_path" name="desain_thankscard_path"
                  accept=".jpg,.jpeg,.png,.pdf"
                  class=" text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full px-0 py-0.45 sm:py-0.45 md:py-0.45 lg:py-0.45 mt-3">
            @error('thankscard')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="color_motif">Warna / Motif</label>
            <input type="text" id="color_motif" name="color_motif" value="" required
            placeholder="Warna / Motif"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('color_motif')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="motif_backup">Motif Cadangan</label>
            <input type="text" id="motif_backup" name="motif_backup" value=""
            placeholder="Motif Cadangan"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('motif_backup')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="" required
              placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="pack">Kemas</label>
            <input type="text" id="pack" name="pack" value="" required
              placeholder="Kemas"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('pack')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label class="ml-2" for="note_design">Note Desain</label>
            <textarea id="note_design" rows="4" name="note_design"
              placeholder="Tuliskan note desain disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note_design')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

        </div>
      </div>

      <!-- Detail Souvenir -->
      <div class="grid grid-cols-1 sm:grid-cols-2 justify-center w-full">
        <!-- Desain -->
        <div class="flex flex-col gap-5">
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Progress dan Pembayaran</h2>
            <hr class="border-b-2 border-brown-enzo w-4/5 mb-4">
          </div>

          <div class="flex items-center flex-col mx-20 mb-3">
            <label for="progress">Progress</label>
            <select id="progress" name="progress"
                class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                <option value="Pending">Pending</option>
                <option value="Fix" >Fix</option>
                <option value="Pemesanan Bahan">Pemesanan Bahan</option>
                <option value="Proses Produksi">Proses Produksi</option>
                <option value="Finishing">Finishing</option>
                <option value="Selesai">Selesai</option>
            </select>
            @error('progress')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label for="payment_status">Status Bayar</label>
            <select id="payment_status" name="payment_status" class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                <option value="Pending">Pending</option>
                <option value="DP 1">DP 1</option>
                <option value="DP 2">DP 2</option>
                <option value="Lunas">Lunas</option>            </select>
            @error('payment_status')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label for="dp1_date">Tanggal Pembayaran DP1</label>
            <input type="date" id="dp1_date" name="dp1_date" value="" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('dp1_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label for="dp2_date">Tanggal Pembayaran DP2</label>
            <input type="date" id="dp2_date" name="dp2_date" value=""
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('dp2_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label for="payment_date">Tanggal Pelunasan</label>
            <input type="date" id="payment_date" name="payment_date" value="" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('payment_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <!-- Informasi Tambahan -->
        <div class="flex flex-col gap-5">
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Informasi Tambahan</h2>
            <hr class="border-b-2 border-brown-enzo w-4/5 mb-4">
          </div>

          <div class="flex items-center flex-col mx-20 mb-3">
            <label for="price_per_pcs">Harga /Pcs</label>
            <input type="text" id="price_per_pcs" name="price_per_pcs" value=""
              placeholder="Harga /Pcs"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('price_per_pcs')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label for="printout">Printilan</label>
            <input type="text" id="printout" name="printout" value=""
              placeholder="Printilan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('printout')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label for="expedition">Ekspedisi</label>
            <input type="text" id="expedition" name="expedition" value=""
              placeholder="Ekspedisi"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('expedition')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label for="design_status">Acc Client</label>
            <select id="design_status" name="design_status"
              class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
              <option value="Pending" >Pending</option>
              <option value="ACC">ACC</option>
              <option value="DECL">DECL</option>
            </select>
            @error('design_status')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col mx-20">
            <label for="note_cs">Note Admin</label>
            <textarea id="note_cs" rows="5" name="note_cs" value="" required
              placeholder="Tulis catatan tambahan disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note_cs')
            <small class="text-danger">{{ $message }}</small>
            @enderror
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
</body>

</html> --}}



<!-- Packaging Edit -->
{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packaging Form Edit</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#F7FCF5] font-mont">
  <!-- Navigation Bar -->
  <div class="fixed w-full flex justify-between items-center px-4 sm:px-6 py-4 bg-green-main text-brown-enzo shadow-md z-50">
    <div class="flex text-left text-lg sm:text-xl font-bold items-center">
      <h1>Enzo Group</h1>
    </div>
    <div class="font-medium">
      <a href="/admin/dashboard" class="flex flex-col justify-center items-center group">
        Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="font-sans text-green-main w-full flex flex-col items-center min-h-screen justify-center py-16 sm:py-16">
    <h2 class="text-lg sm:text-xl md:text-2xl tracking-widest font-medium">EDIT PACKAGING :</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 sm:w-1/4 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="" method="POST" class="flex flex-col gap-5 items-center">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col">
            <label class="ml-2" for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="" required
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
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="flex flex-col gap-5">
          <div class="flex items-center flex-col">
            <label class="ml-2" for="model">Model</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="model" name="model" required>
                <option value="Softbox">Softbox</option>
                <option value="Corrugatedbox">Corrugatedbox</option>
                <option value="Hardbox">Hardbox</option>
            </select>
            @error('model')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="package_type">Tipe</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="package_type" name="package_type" required>
                <option value="SB Diecut">SB Diecut</option>
                <option value="CB Diecut">CB Diecut</option>
                <option value="HB Tutup Lepas">HB Tutup Lepas</option>
                <option value="HB Pita">HB Pita</option>
                <option value="HB Magnet">HB Magnet</option>
            </select>
            @error('package_type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="finishing">Finishing</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="finishing" name="finishing" required>
                <option value="Foil">Foil</option>
                <option value="Laminasi Doff">Laminasi Doff</option>
            </select>
            @error('finishing')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="size">Ukuran</label>
            <input type="text" id="size" name="size" value="" required
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
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note_design')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
      </div> 

      <!-- Detail Packaging -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <!-- Desain -->
        <div>
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Desain dan Pembayaran</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>

          <div class="flex flex-col gap-5">

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
                  <option value="Pending">Pending</option>
                  <option value="Fix" >Fix</option>
                  <option value="Pemesanan Bahan">Pemesanan Bahan</option>
                  <option value="Proses Produksi">Proses Produksi</option>
                  <option value="Finishing">Finishing</option>
                  <option value="Selesai">Selesai</option>
                </select>
              @error('progress')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="payment_status">Status Bayar</label>
              <select id="payment_status" name="payment_status"
                class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                <option value="Pending">Pending</option>
                <option value="DP 1">DP 1</option>
                <option value="DP 2">DP 2</option>
                <option value="Lunas">Lunas</option>
              </select>
              @error('payment_status')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
                <label for="dp1_date">Tanggal Pembayaran DP1</label>
                <input type="date" id="dp1_date" name="dp1_date" value=""
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('dp1_date')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="dp2_date">Tanggal Pembayaran DP2</label>
              <input type="date" id="dp2_date" name="dp2_date" value=""
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
            <h2 class="text-center font-medium"><br>Informasi Tambahan</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="price_per_pcs">Harga /Pcs</label>
              <input type="text" id="price_per_pcs" name="price_per_pcs" value=""
                placeholder="Harga /Pcs"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('price_per_pcs')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="printout">Printilan</label>
              <input type="text" id="printout" name="printout" value=""
                placeholder="Printilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('printout')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="expedition">Ekspedisi</label>
              <input type="text" id="expedition" name="expedition" value=""
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
                <option value="Pending">Pending</option>
                <option value="ACC">ACC</option>
                <option value="DECL">DECL</option>
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
      </div>
    </form>
  </div>
</body>

</html> --}}



<!-- Invitation Edit -->
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
  <div class="fixed w-full flex justify-between items-center px-4 sm:px-6 py-4 bg-green-main text-brown-enzo shadow-md z-50">
    <div class="flex text-left text-lg sm:text-xl font-bold items-center">
      <h1>Enzo Group</h1>
    </div>
    <div class="font-medium">
      <a href="/admin/dashboard" class="flex flex-col justify-center items-center group">
        Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center min-h-screen justify-start py-24 text-green-main font-sans" style="letter-spacing: 3px">
    <h2 class="text-lg sm:text-xl md:text-2xl tracking-widest font-medium">EDIT UNDANGAN :</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 sm:w-1/4 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="" method="POST" class="flex flex-col gap-5 items-center">
    @csrf

      <!-- Customer Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col">
            <label for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" value="" required
              placeholder="Akun Instagram"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('instagram')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="address">Alamat Lengkap</label>
            <textarea id="address" rows="5" name="address" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="flex flex-col gap-5">

          <div class="flex items-center flex-col">
            <label for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="" required 
              placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="product_name">Tipe Produk</label>
            <input product_name="text" id="product_name" name="product_name" value="" required
              placeholder="Tipe Produk"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('product_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label for="finishing">Finishing</label>
            <input type="text" id="finishing" name="finishing" value="" required 
              placeholder="Finishing"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('finishing')
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
              <input type="text" id="groom_name" name="groom_name" value="" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_nickname">Nama Panggilan</label>
              <input type="text" id="groom_nickname" name="groom_nickname" value="" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_father">Nama Ayah</label>
              <input type="text" id="groom_father" name="groom_father" value="" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_mother">Nama Ibu</label>
              <input type="text" id="groom_mother" name="groom_mother" value="" required
                placeholder="Nama Lengkap Ibu"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('groom_mother')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="groom_parents_address">Alamat Orang Tua</label>
              <textarea id="groom_parents_address" rows="5" name="groom_parents_address" required
                placeholder="Alamat Orang Tua"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
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
              <input type="text" id="bride_name" name="bride_name" value="" required
                placeholder="Nama Lengkap"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_nickname">Nama Panggilan</label>
              <input type="text" id="bride_nickname" name="bride_nickname" value="" required
                placeholder="Nama Panggilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_nickname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_father">Nama Ayah</label>
              <input type="text" id="bride_father" name="bride_father" value="" required
                placeholder="Nama Lengkap Ayah"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_father')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_mother">Nama Ibu</label>
              <input type="text" id="bride_mother" name="bride_mother" value="" required
                placeholder="Nama Lengkap Ibu"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('bride_mother')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="bride_parents_address">Alamat Orang Tua</label>
              <textarea id="bride_parents_address" rows="5" name="bride_parents_address" required
                placeholder="Alamat Orang Tua"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
              @error('bride_parents_address')
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
              <input type="date" id="akad_pemberkatan_date" name="akad_pemberkatan_date" value="" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('akad_pemberkatan_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="akad_pemberkatan_time">Waktu Acara</label>
              <input type="time" id="akad_pemberkatan_time" name="akad_pemberkatan_time" value=""
                required class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('akad_pemberkatan_time')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="akad_pemberkatan_location">Lokasi Acara</label>
              <textarea id="akad_pemberkatan_location" rows="5" name="akad_pemberkatan_location" required
                placeholder="Lokasi Akad Pemberkatan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
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
              <input type="date" id="reception_date" name="reception_date" value="" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('reception_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="reception_time">Waktu Acara</label>
              <input type="time" id="reception_time" name="reception_time" value="" required
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('reception_time')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="reception_location">Lokasi Acara</label>
              <textarea id="reception_location" rows="5" name="reception_location" required
                placeholder="Lokasi Resepsi"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
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
                  <option value="Pending" >Pending</option>
                  <option value="Fix" >Fix</option>
                  <option value="Pemesanan Bahan">Pemesanan Bahan</option>
                  <option value="Proses Produksi">Proses Produksi</option>
                  <option value="Finishing">Finishing</option>
                  <option value="Selesai">Selesai</option>
                </select>
                @error('progress')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            <div class="flex items-center flex-col">
                <label for="payment_status">Status Bayar</label>
                <select id="payment_status" name="payment_status"
                  class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                  <option value="Pending">Pending</option>
                  <option value="DP 1">DP 1</option>
                  <option value="DP 2">DP 2</option>
                  <option value="Lunas">Lunas</option>
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
              <input type="date" id="dp2_date" name="dp2_date" value="" required
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
            <h2 class="text-center font-medium"><br>Informasi Tambahan</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>
          <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
              <label for="price_per_pcs">Harga /Pcs</label>
              <input type="text" id="price_per_pcs" name="price_per_pcs" value=""
                placeholder="Harga /Pcs"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('price_per_pcs')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="printout">Printilan</label>
              <input type="text" id="printout" name="printout" value=""
                placeholder="Printilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('printout')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="expedition">Ekspedisi</label>
              <input type="text" id="expedition" name="expedition" value=""
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
                  <option value="Pending">Pending</option>
                  <option value="ACC">ACC</option>
                  <option value="DECL">DECL</option>
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
      </div>

    </form>
  </div>
</body>

</html>
