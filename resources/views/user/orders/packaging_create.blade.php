<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packaging Form</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-[#F7FCF5] font-mont">
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
      
      <a href="{{ url('/' . auth()->user()->role . '/dashboard') }}" class="flex flex-col justify-center items-center group font-semibold">Kembali
        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
      </a>
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
            <label class="ml-2" for="address">Alamat Lengkap</label>
            <textarea id="address" rows="7" name="address" value="{{ old('address') }}" required
              placeholder="Alamat Lengkap"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="kemas">Kemas</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="kemas" name="kemas"required>
              <option value="Bubble 1-1">Bubble 1-1</option>
              <option value="Bubble 1-1 + Bubble Luar">Bubble 1-1 + Bubble Luar</option>
              <option value="Bubble Luar">Bubble Luar</option>
              <option value="Tanpa Bubble">Tanpa Bubble</option>
            </select>
            @error('kemas')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="flex flex-col gap-5">
          <div class="flex items-center flex-col">
            <label class="ml-2" for="model">Model</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="model" name="model" onchange="updatePackageTypes()" required>
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
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="package_type" name="package_type" required>
              <option value="">Pilih Tipe</option>
            </select>
            @error('package_type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="finishing">Finishing</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="finishing" name="finishing" required>
              <option value="Laminasi Doff">Laminasi Doff</option>
              <option value="Laminasi Glossy">Laminasi Glossy</option>
              <option value="Tanpa Laminasi">Tanpa Laminasi</option>
              <option value="Foil">Foil</option>
              <option value="Emboss">Emboss</option> 
              <option value="Attire">Attire</option> 
              <option value="Sekat">Sekat</option> 
              <option value="Brosur">Brosur</option> 
              <option value="Lainnya">Lainnya</option> 
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

          <div class="flex items-center flex-col">
            <label class="ml-2" for="note_design">Note Desain</label>
            <textarea id="note_design" rows="4" name="note_design" value="{{ old('note_design') }}" required
              placeholder="Tulis catatan tambahan disini"
              class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5"></textarea>
            @error('note_design')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex items-center flex-col">
            <label class="ml-2" for="source">Source</label>
            <select class="form-control outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-80 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5" id="source" name="source" required>
              <option value="Shopee">Shopee</option>
              <option value="Deonkraft">Deonkraft</option>
              <option value="Enzo Wedding">Enzo Wedding</option>
              <option value="Grizelle">Grizelle</option>
            </select>
            @error('source')
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
            const modelSelect = document.getElementById('model');
            const packageTypeSelect = document.getElementById('package_type');
            const selectedModel = modelSelect.value;

            packageTypeSelect.innerHTML = '<option value="">Pilih Tipe</option>';

            const packageTypes = {
                'Hardbox': [
                    'Hardbox Pita',
                    'Hardbox Magnet',
                    'Hardbox Tutup Lepas',
                    'Hardbox Sliding',
                    'Hardbox Magnet 2 Pintu'
                ],
                'Softbox': [
                    'Folding Box',
                    'Toplock',
                    'Tutup Lepas',
                    'Earlock',
                    'Snack Box',
                    'Sliding Luar Papperbag',
                    'Lainnya'
                ],
                'Corrugatedbox': [
                    'Sleeve Box',
                    'Lainnya'
                ]
            };

            if (selectedModel && packageTypes[selectedModel]) {
                packageTypes[selectedModel].forEach(type => {
                    const option = document.createElement('option');
                    option.value = type;
                    option.textContent = type;
                    packageTypeSelect.appendChild(option);
                });
            }
        }

        document.addEventListener('DOMContentLoaded', updatePackageTypes);
  </script>
</body>

</html>
