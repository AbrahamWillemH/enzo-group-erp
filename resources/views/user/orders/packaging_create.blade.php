<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packaging Form</title>
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
    <h2 class="text-lg sm:text-xl md:text-2xl">FORM ORDER PACKAGING</h2>
    <hr class="border-b-4 border-brown-enzo w-3/4 sm:w-1/2 my-3">
    <hr class="border-b-4 border-brown-enzo w-1/2 sm:w-1/3 mb-5">


    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{route('user.orders.packaging.store')}}" method="POST" class="flex flex-col gap-5 items-center">
      @csrf

      <!-- Orders Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 lg:gap-40 justify-center w-full max-w-5xl mx-auto px-4">
        <div class="flex flex-col gap-5">
          <div class="flex items-center flex-col">
            <label class="ml-2" for="user_name">Nama Pemesan</label>
            <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" required
              placeholder="Nama Pemesan"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('user_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="phone_number">Nomor HP</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
              placeholder="08XX-XXXX-XXXX"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
            @error('phone_number')
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

          <div class="flex items-center flex-col">
            <label class="ml-2" for="kemas">Kemas</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" id="kemas" name="kemas"required>
              <option value="Bubble 1-1">Bubble 1-1</option>
              <option value="Bubble 1-1 + Bubble Luar">Bubble 1-1 + Bubble Luar</option>
              <option value="Bubble Luar">Bubble Luar</option>
              <option value="Tanpa Bubble">Tanpa Bubble</option>
            </select>
            @error('kemas')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="address">Alamat Lengkap</label>
            <textarea id="address" rows="7" name="address" value="{{ old('address') }}" required
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
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" id="model" name="model" onchange="updatePackageTypes()" required>
              <option value="Hardbox">Hardbox</option>
              <option value="Softbox">Softbox</option>
              <option value="Corrugatedbox">Corrugated Box</option>
            </select>
            @error('model')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="package_type">Tipe</label>
            <textarea id="package_type" rows="1" name="package_type" value="{{ old('package_type') }}" required
              placeholder="Tipe Packaging"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('package_type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col items-center relative w-80">
            <label class="ml-2" for="finishing">Finishing</label>
        
            <!-- Dropdown Button -->
            <button id="dropdownButton" type="button" class="w-full text-left form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5 flex justify-between items-center">
                <span id="selectedOptions">Pilih Finishing</span>
                <svg class="w-4 h-4 ml-1 transition-transform duration-300 transform" id="dropdownIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        
            <!-- Dropdown List -->
            <div id="dropdownMenu" class="absolute w-full bg-white border border-[#e0e0e0] rounded-xl shadow-lg mt-1 hidden top-14">
                <div class="flex flex-col p-2 max-h-40 overflow-y-auto space-y-1">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Laminasi Doff" class="checkbox-finishing">
                        <span>Laminasi Doff</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Laminasi Glossy" class="checkbox-finishing">
                        <span>Laminasi Glossy</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Tanpa Laminasi" class="checkbox-finishing">
                        <span>Tanpa Laminasi</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Foil" class="checkbox-finishing">
                        <span>Foil</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Emboss" class="checkbox-finishing">
                        <span>Emboss</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Attire" class="checkbox-finishing">
                        <span>Attire</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Sekat" class="checkbox-finishing">
                        <span>Sekat</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Brosur" class="checkbox-finishing">
                        <span>Brosur</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="finishing[]" value="Lainnya" class="checkbox-finishing">
                        <span>Lainnya</span>
                    </label>
                </div>
            </div>
        
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

          <div class="flex items-center flex-col">
            <label class="ml-2" for="source">Source</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-1 sm:py-1 md:py-1 lg:py-1" id="source" name="source" required>
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
            <label class="ml-2" for="note_design">Note</label>
            <textarea id="note_design" rows="4" name="note_design" value="{{ old('note_design') }}" required
              placeholder="Tulis catatan tambahan disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
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
  <script>
     function updatePackageTypes() {
            // const modelSelect = document.getElementById('model');
            // const packageTypeSelect = document.getElementById('package_type');
            // const selectedModel = modelSelect.value;

            // packageTypeSelect.innerHTML = '<option value="">Pilih Tipe</option>';

            // const packageTypes = {
            //     'Hardbox': [
            //         'Hardbox Pita',
            //         'Hardbox Magnet',
            //         'Hardbox Tutup Lepas',
            //         'Hardbox Sliding',
            //         'Hardbox Magnet 2 Pintu'
            //     ],
            //     'Softbox': [
            //         'Folding Box',
            //         'Toplock',
            //         'Tutup Lepas',
            //         'Earlock',
            //         'Snack Box',
            //         'Sliding Luar Papperbag',
            //         'Lainnya'
            //     ],
            //     'Corrugatedbox': [
            //         'Sleeve Box',
            //         'Lainnya'
            //     ]
            // };

            // if (selectedModel && packageTypes[selectedModel]) {
            //     packageTypes[selectedModel].forEach(type => {
            //         const option = document.createElement('option');
            //         option.value = type;
            //         option.textContent = type;
            //         packageTypeSelect.appendChild(option);
            //     });
            // }
        }

        document.addEventListener('DOMContentLoaded', updatePackageTypes);

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

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener("change", () => {
                let selected = Array.from(checkboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);
                selectedOptions.textContent = selected.length ? selected.join(", ") : "Pilih Finishing";
            });
        });
  </script>
</body>

</html>
