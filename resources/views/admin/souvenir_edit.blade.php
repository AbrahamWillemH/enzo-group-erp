<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Souvenir Form Edit</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#fcfffa] font-mont">
  <!-- Navigation Bar -->
  <div class="fixed w-full flex justify-between items-center px-4 sm:px-6 py-4 bg-green-main text-brown-enzo shadow-md z-50">
    <div class="flex text-left text-lg sm:text-xl font-bold items-center">
      <h1>Enzo Group</h1>
    </div>
    <div class="font-medium">
      <a href="{{route('admin.souvenir.detail', ['id' => $souvenir->id])}}" class="flex flex-col justify-center items-center group">
        Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center min-h-screen justify-start py-24 text-green-main font-sans" style="letter-spacing: 3px">
    <h2 class="text-lg sm:text-xl md:text-2xl tracking-widest font-medium">EDIT SOUVENIR : {{$souvenir->user_name}}</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 sm:w-1/4 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{route('admin.souvenir.update', ['id' => $souvenir->id])}}" method="POST" class="flex flex-col gap-5 items-center" enctype="multipart/form-data">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col">
                <label class="ml-2" for="user_name">Nama Pemesan</label>
                <input type="text" id="user_name" name="user_name" value="{{ $souvenir->user_name }}" required
                  placeholder="Nama Pemesan"
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('user_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="phone_number">Nomor HP</label>
                <input type="text" id="phone_number" name="phone_number" value="{{ $souvenir->phone_number }}" required
                  placeholder="08XX-XXXX-XXXX"
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('phone_number')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="bridegroom_name">Nama Mempelai</label>
                <input type="text" id="bridegroom_name" name="bridegroom_name" value="{{ $souvenir->bridegroom_name }}" required
                  placeholder="Nama Mempelai"
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('bridegroom_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="event_date">Tanggal Acara</label>
                <input type="date" id="event_date" name="event_date" value="{{ $souvenir->event_date }}" required
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('event_date')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="product_name">Jenis Souvenir</label>
                <input type="text" id="product_name" name="product_name" value="{{ $souvenir->product_name }}" required
                  placeholder="Jenis Souvenir"
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('product_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
              <label class="ml-2" for="size">Ukuran Jadi</label>
              <input type="text" id="size" name="size" value="{{ $souvenir->size }}" required
                placeholder="Ukuran Jadi"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('pack')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col">
                <label class="ml-2" for="address">Alamat Lengkap</label>
                <textarea id="address" rows="5" name="address"
                  placeholder="Alamat Lengkap"
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{$souvenir->address}}</textarea>
                @error('address')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="flex flex-col gap-5">
            <div class="flex items-center flex-col ">
                <label class="ml-2" for="design">Desain Emboss / Label Nama / Sablon</label>
                <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1"
                  id="design" name="design" required>
                  <option value="Desain Pribadi/Template" {{ old('design', $souvenir->design) == 'Desain Pribadi/Template' ? 'selected' : '' }}>Desain Pribadi/Template</option>
                  <option value="Desain Custom Enzo" {{ old('design', $souvenir->design) == 'Desain Custom Enzo' ? 'selected' : '' }}>Desain Custom Enzo</option>
                </select>
                <input type="file" id="desain_emboss_path" name="desain_emboss_path"
                    accept=".jpg,.jpeg,.png,.pdf"
                    class=" text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full px-0 py-0.45 sm:py-0.45 md:py-0.45 lg:py-0.45 mt-3">
                @error('design')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                @error('desain_emboss_path')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="thankscard">Desain Thankscard</label>
                <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1"
                  id="thankscard" name="thankscard" required>
                  <option value="Desain Pribadi/Template" {{ old('thankscard', $souvenir->thankscard) == 'Desain Pribadi/Template' ? 'selected' : '' }}>Desain Pribadi/Template</option>
                  <option value="Desain Custom Enzo" {{ old('thankscard', $souvenir->thankscard) == 'Desain Custom Enzo' ? 'selected' : '' }}>Desain Custom Enzo</option>
                </select>
                <input type="file" id="desain_thankscard_path" name="desain_thankscard_path"
                    accept=".jpg,.jpeg,.png,.pdf"
                    class=" text-[#9ca3af] outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full px-0 py-0.45 sm:py-0.45 md:py-0.45 lg:py-0.45 mt-3">
                @error('thankscard')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="color_motif">Warna / Motif</label>
                <input type="text" id="color_motif" name="color_motif" value="{{ $souvenir->color_motif }}" required
                placeholder="Warna / Motif"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('color_motif')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="motif_backup">Motif Cadangan</label>
                <input type="text" id="motif_backup" name="motif_backup" value="{{ $souvenir->motif_backup }} "
                placeholder="Motif Cadangan"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('motif_backup')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="quantity">Jumlah</label>
                <input type="number" id="quantity" name="quantity" value="{{ $souvenir->quantity }}" required
                  placeholder="Jumlah"
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                @error('quantity')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center flex-col ">
              <label class="ml-2" for="pack">Kemas</label>
              <input type="text" id="pack" name="pack" value="{{ $souvenir->pack }}" required
                placeholder="Kemas"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('pack')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="flex items-center flex-col ">
                <label class="ml-2" for="note_design">Note Desain</label>
                <textarea id="note_design" rows="5" name="note_design"
                  placeholder="Tuliskan note desain disini"
                  class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{$souvenir->note_design}}</textarea>
                @error('note_design')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>


      <!-- Detail Souvenir -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <!-- Desain -->
        <div class="grid grid-rows-7 gap-5">
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Desain dan Pembayaran</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>

          <div class="flex items-center flex-col  mb-3">
            <label for="progress">Progress</label>
            <select id="progress" name="progress"
                class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                <option value="Pending" {{ old('progress', $souvenir->progress) == 'Pending' ? 'selected' : '' }}>Menunggu Pembayaran dan Desain</option>
                <option value="Fix" {{ old('progress', $souvenir->progress) == 'Fix' ? 'selected' : '' }}>Menentukan Deadline</option>
                <option value="Pemesanan Bahan" {{ old('progress', $souvenir->progress) == 'Pemesanan Bahan' ? 'selected' : '' }}>Pemesanan Bahan</option>
                <option value="Proses Produksi" {{ old('progress', $souvenir->progress) == 'Proses Produksi' ? 'selected' : '' }}>Proses Produksi</option>
                <option value="Selesai" {{ old('progress', $souvenir->progress) == 'Selesai' ? 'selected' : '' }}>Menunggu Ambil / Kirim</option>
                <option value="Selesai Beneran" {{ old('progress', $souvenir->progress) == 'Selesai Beneran' ? 'selected' : '' }}>Pesanan Selesai</option>
            </select>
            @error('progress')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="payment_status">Status Bayar</label>
            <select id="payment_status" name="payment_status" class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
                <option value="Pending" {{ old('payment_status', $souvenir->payment_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="DP 1" {{ old('payment_status', $souvenir->payment_status) == 'DP 1' ? 'selected' : '' }}>DP 1</option>
                <option value="DP 2" {{ old('payment_status', $souvenir->payment_status) == 'DP 2' ? 'selected' : '' }}>DP 2</option>
                <option value="Lunas" {{ old('payment_status', $souvenir->payment_status) == 'Lunas' ? 'selected' : '' }}>Lunas</option>            </select>
            @error('payment_status')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="dp1_date">Tanggal Pembayaran DP1</label>
            <input type="date" id="dp1_date" name="dp1_date" value="{{ $souvenir->dp1_date }}"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('dp1_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="dp2_date">Tanggal Pembayaran DP2</label>
            <input type="date" id="dp2_date" name="dp2_date" value="{{ $souvenir->dp2_date }}"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('dp2_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="paid_off_date">Tanggal Pelunasan</label>
            <input type="date" id="paid_off_date" name="paid_off_date" value="{{ $souvenir->paid_off_date }}"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('paid_off_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="fix_desain_date">Tanggal Fix Desain</label>
            <input type="date" id="fix_desain_date" name="fix_desain_date" value="{{ $souvenir->fix_desain_date }}"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('fix_desain_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <!-- Informasi Tambahan -->
        <div class="grid grid-rows-5 gap-5">
          <div class="flex items-center flex-col">
            <h2 class="text-center font-medium"><br>Informasi Tambahan</h2>
            <hr class="border-b-2 border-brown-enzo w-full mb-4">
          </div>

          <div class="flex items-center flex-col  mb-3">
            <label for="price_per_pcs">Harga /Pcs</label>
            <input type="text" id="price_per_pcs" name="price_per_pcs" value="{{ $souvenir->price_per_pcs }}"
              placeholder="Harga /Pcs"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('price_per_pcs')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="printout">Printilan</label>
            <input type="text" id="printout" name="printout" value="{{ $souvenir->printout }}"
              placeholder="Printilan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('printout')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="expedition">Ekspedisi</label>
            <input type="text" id="expedition" name="expedition" value="{{ $souvenir->expedition }}"
              placeholder="Ekspedisi"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('expedition')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="design_status">Acc Client</label>
            <select id="design_status" name="design_status"
              class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" required>
              <option value="Pending" {{ old('design_status', $souvenir->design_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
              <option value="ACC" {{ old('design_status', $souvenir->design_status) == 'ACC' ? 'selected' : '' }}>ACC</option>
              <option value="DECL" {{ old('design_status', $souvenir->design_status) == 'DECL' ? 'selected' : '' }}>DECL</option>
            </select>
            @error('design_status')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col ">
            <label for="note_cs">Note Admin</label>
            <textarea id="note_cs" rows="5" name="note_cs"
              placeholder="Tulis catatan tambahan disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{$souvenir->note_cs}}</textarea>
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

</html>
