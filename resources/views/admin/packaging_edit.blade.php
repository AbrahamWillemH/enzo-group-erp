<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packaging Form Edit</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#fcfffa] font-mont">
  <!-- Navigation Bar -->
  <nav class="fixed w-full flex flex-wrap justify-between items-center px-4 sm:px-6 py-4 bg-green-main text-brown-enzo shadow-md z-50">
    <a href="{{route('loginRedirect')}}" class="text-xl font-bold">Enzo Group</a>
    <div class="font-medium">
      <a href="{{route('admin.packaging.detail', ['id' => $packaging->id])}}" class="flex flex-col justify-center items-center group">
        Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center min-h-screen justify-start py-24 text-green-main font-sans" style="letter-spacing: 3px">
    <h2 class="text-lg sm:text-xl md:text-2xl tracking-widest font-medium">EDIT PACKAGING : {{$packaging->user_name}}</h2>
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/3 sm:w-1/4 mb-5">
    <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{route('admin.packaging.update', ['id' => $packaging->id])}}" method="POST" class="flex flex-col gap-5 items-center" enctype="multipart/form-data">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div class="flex flex-col gap-5">

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
            <label class="ml-2" for="kemas">Kemas</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" id="kemas" name="kemas"required>
              <option value="Bubble 1-1" {{ old('kemas', $packaging->kemas) == 'Bubble 1-1' ? 'selected' : '' }}>Bubble 1-1</option>
              <option value="Bubble 1-1 + Bubble Luar" {{ old('kemas', $packaging->kemas) == 'Bubble 1-1 + Bubble Luar' ? 'selected' : '' }}>Bubble 1-1 + Bubble Luar</option>
              <option value="Bubble Luar" {{ old('kemas', $packaging->kemas) == 'Bubble Luar' ? 'selected' : '' }}>Bubble Luar</option>
              <option value="Tanpa Bubble" {{ old('kemas', $packaging->kemas) == 'Tanpa Bubble' ? 'selected' : '' }}>Tanpa Bubble</option>
            </select>
            @error('kemas')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="address">Alamat Lengkap</label>
            <textarea id="address" rows="4" name="address" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $packaging->address }}</textarea>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="flex flex-col gap-5">
          <div class="flex items-center flex-col">
            <label class="ml-2" for="model">Model</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" id="model" name="model" required>
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
            <textarea id="package_type" rows="1" name="package_type" required
              placeholder="Tipe Packaging"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $packaging->package_type }}</textarea>
            @error('package_type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col items-center relative w-80">
            <label class="ml-2" for="finishing">Finishing</label>

            <input type="hidden" id="finishing_validation" name="finishing_validation" required>
      
            <!-- Custom Dropdown Button -->
            <button id="dropdownButton" type="button" class="w-full text-left form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5 flex justify-between items-center">
                <span id="selectedOptions">
                    {{ implode(', ', old('finishing', explode(',', $packaging->finishing))) ?: 'Pilih Finishing' }}
                </span>
                <svg class="w-4 h-4 ml-2 transition-transform duration-300 transform" id="dropdownIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        
            <!-- Dropdown List -->
            <div id="dropdownMenu" class="absolute w-full bg-white border border-[#e0e0e0] rounded-xl shadow-lg mt-1 hidden top-14">
                <div class="flex flex-col p-2 max-h-40 overflow-y-auto space-y-1">
                    @php
                        $selectedFinishing = explode(', ', old('finishing', $packaging->finishing)); 
                    @endphp
                    @foreach(['Laminasi Doff', 'Laminasi Glossy', 'Tanpa Laminasi', 'Foil', 'Emboss', 'Attire', 'Sekat', 'Brosur', 'Lainnya'] as $option)
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="finishing[]" value="{{ $option }}" class="checkbox-finishing"
                                {{ in_array($option, $selectedFinishing) ? 'checked' : '' }}>
                            <span>{{ $option }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
        
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
            <label class="ml-2" for="source">Source</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" id="source" name="source"required>
              <option value="Shopee" {{ old('source', $packaging->source) == 'Shopee' ? 'selected' : '' }}>Shopee</option>
              <option value="Deonkraft" {{ old('source', $packaging->source) == 'Deonkraft' ? 'selected' : '' }}>Deonkraft</option>
              <option value="Enzo Wedding" {{ old('source', $packaging->source) == 'Enzo Wedding' ? 'selected' : '' }}>Enzo Wedding</option>
              <option value="Grizelle" {{ old('source', $packaging->source) == 'Grizelle' ? 'selected' : '' }}>Grizelle</option>
            </select>
            @error('kemas')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          
          <div class="flex items-center flex-col">
            <label class="ml-2" for="note_design">Note</label>
            <textarea id="note_design" rows="7" name="note_design"
              placeholder="Tuliskan note desain disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{ $packaging->note_design }}</textarea>
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
                  <option value="Pending" {{ old('progress', $packaging->progress) == 'Pending' ? 'selected' : '' }}>Menunggu Pembayaran dan Desain</option>
                  <option value="Fix" {{ old('progress', $packaging->progress) == 'Fix' ? 'selected' : '' }}>Menentukan Deadline</option>
                  <option value="Pemesanan Bahan" {{ old('progress', $packaging->progress) == 'Pemesanan Bahan' ? 'selected' : '' }}>Pemesanan Bahan</option>
                  <option value="Proses Produksi" {{ old('progress', $packaging->progress) == 'Proses Produksi' ? 'selected' : '' }}>Proses Produksi</option>
                  <option value="Selesai" {{ old('progress', $packaging->progress) == 'Selesai' ? 'selected' : '' }}>Menunggu Ambil / Kirim</option>
                  <option value="Selesai Beneran" {{ old('progress', $packaging->progress) == 'Selesai Beneran' ? 'selected' : '' }}>Pesanan Selesai</option>
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

            <div class="flex items-center flex-col ">
              <label for="fix_desain_date">Tanggal Fix Desain</label>
              <input type="date" id="fix_desain_date" name="fix_desain_date" value="{{ $packaging->fix_desain_date }}"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-full rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
              @error('fix_desain_date')
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
              <textarea id="note_cs" rows="6" name="note_cs"
                placeholder="Tulis catatan tambahan disini"
                class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">{{$packaging->note_cs}}</textarea>
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
  const dropdownButton = document.getElementById("dropdownButton");
  const dropdownMenu = document.getElementById("dropdownMenu");
  const dropdownIcon = document.getElementById("dropdownIcon");
  const checkboxes = document.querySelectorAll(".checkbox-finishing");
  const selectedOptions = document.getElementById("selectedOptions");

  dropdownButton.addEventListener("click", () => {
      dropdownMenu.classList.toggle("hidden");
      dropdownIcon.classList.toggle("rotate-180");
  });

  document.addEventListener("click", (event) => {
      if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
          dropdownMenu.classList.add("hidden");
          dropdownIcon.classList.remove("rotate-180");
      }
  });

  // Create a hidden input to store all selected values
  const form = document.querySelector('form');
  const hiddenInput = document.createElement('input');
  hiddenInput.type = 'hidden';
  hiddenInput.name = 'finishing';
  form.appendChild(hiddenInput);

  checkboxes.forEach(checkbox => {
      checkbox.addEventListener("change", () => {
          let selected = Array.from(checkboxes)
              .filter(checkbox => checkbox.checked)
              .map(checkbox => checkbox.value);
          
          selectedOptions.textContent = selected.length ? selected.join(", ") : "Pilih Finishing";
          
          // Update hidden input value with selected options
          hiddenInput.value = JSON.stringify(selected);
      });
  });

    // Form validation
    form.addEventListener("submit", (event) => {
      const selected = Array.from(checkboxes).filter(checkbox => checkbox.checked);
      
      if (selected.length === 0) {
          event.preventDefault();
          finishingError.classList.remove("hidden");
          dropdownButton.classList.add("border-red-500");
          dropdownButton.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
  });

  // Initialize the hidden input with any pre-selected values
  window.addEventListener('load', () => {
      let selected = Array.from(checkboxes)
          .filter(checkbox => checkbox.checked)
          .map(checkbox => checkbox.value);
      hiddenInput.value = JSON.stringify(selected);
  });
  </script>

</body>

</html>
