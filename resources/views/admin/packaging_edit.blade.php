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
    <h2 style="font-size: 22px">FORM ORDER PACKAGING</h2>
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
      <div class="grid grid-cols-[50%_50%] gap-40 justify-center">
        <div class="grid grid-rows-4 gap-5">

          <div class="flex items-center flex-col">
            <label class="ml-2" for="name">Nama Pemesan</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="phone">Nomor HP</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="deadline_date">Deadline</label>
            <input type="date" id="deadline_date" name="deadline_date" value="{{ old('deadline_date') }}" required
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('deadline_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required 
              placeholder="Jumlah"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="grid grid-rows-4 gap-5">
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
            <label class="ml-2" for="type">Tipe</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="type" name="type" required>
              <option value="SB Diecut">SB Diecut</option>
              <option value="CB Diecut">CB Diecut</option>
              <option value="HB Tutup Lepas">HB Tutup Lepas</option>
              <option value="HB Pita">HB Pita</option>
              <option value="HB Magnet">HB Magnet</option>
            </select>
            @error('type')
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
            <input type="text" id="size" name="size" value="{{ old('size') }}" required
              placeholder="Ukuran"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('size')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
      </div>
      
      <div class="grid grid-cols-2 gap-60 justify-center">
        <div class="flex items-center flex-col">
          <label class="ml-2" for="address">Alamat Lengkap</label>
          <textarea id="address" rows="5" name="address" value="{{ old('address') }}" required 
            placeholder="Alamat Lengkap"
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('note')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="flex items-center flex-col">
          <label class="ml-2" for="note">Note Desain</label>
          <textarea id="note" rows="5" name="note" value="{{ old('note') }}" required 
            placeholder="Tuliskan note desain disini..."
            class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
          @error('note')
          <small class="text-danger">{{ $message }}</small>
          @enderror
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
              <label for="invitation_desain">Desain</label>
              <input type="file" id="invitation_desain" name="invitation_desain" 
                accept=".jpg,.jpeg,.png,.pdf" required
                class=" text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 px-0 py-0.45 sm:py-0.45 md:py-0.45 lg:py-0.45">
              @error('invitation_desain')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="progess_status">Progress</label>
              <input type="text" id="progess_status" name="progess_status" value="{{ old('progess_status') }}" required
                placeholder="Progress"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('progess_status')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="payment_status">Status Bayar</label>
              <select id="payment_status" name="payment_status"
                class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                <option value="Belum Bayar">Belum Bayar</option>
                <option value="DP 1">DP 1</option>
                <option value="DP 2">DP 2</option>
                <option value="Lunas">Lunas</option>
              </select>
              @error('payment_status')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="payment_date">Tanggal Pembayaran</label>
              <input type="date" id="payment_date" name="payment_date" value="{{ old('payment_date') }}" required
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
              <label for="item_price">Harga /Pcs</label>
              <input type="text" id="item_price" name="item_price" value="{{ old('item_price') }}" required
                placeholder="Harga /Pcs"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('item_price')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="additional_items">Printilan</label>
              <input type="text" id="additional_items" name="additional_items" value="{{ old('additional_items') }}" required
                placeholder="Printilan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('additional_items')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="expedition">Ekspedisi</label>
              <input type="text" id="expedition" name="expedition" value="{{ old('expedition') }}" required
                placeholder="Ekspedisi"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('expedition')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
              <label for="client_acc">Acc Client</label>
              <select id="client_acc" name="client_acc"
                class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                <option value="Acc">Acc</option>
                <option value="Belum">Belum</option>
              </select>
              @error('client_acc')
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
        <a href=""
           class="bg-brown-main text-white px-10 py-[11px] rounded-xl drop-shadow-xl hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main justify-center ml-8">
          Kembali
        </a>
      </div>
    </form>
  </div>
</body>

</html>