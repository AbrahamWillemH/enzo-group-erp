  <!-- Main Container -->
  @extends('admin/sidebar_admin')
  @section('title', 'Admin Dashboard')
  @section('konten')
  <div class="ml-[20%] bg-green-light">
    <!-- main content -->
    <div class="container h-screen">
      <div class="h-screen grid grid-rows-[7%_1%_92%]">
        <div class="m-auto p-1">
          <div class="flex flex-row justify-center items-center rounded-lg w-[1000px] h-[45px] p-2">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2 text-green-main">
              <path fill-rule="evenodd" d="M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z" clip-rule="evenodd" />
            </svg> --}}
            <p class="font-quattro text-3xl lg:text-4xl font-bold text-green-main">Hello, {{ auth()->user()->name }}</p>
          </div>
        </div>
        <hr class="border-b-2 border-green-main/20 w-full">
        <div class="grid grid-rows-[70%_30%]">
          <div class="grid grid-cols-[35%_65%]">
            <!-- order -->
            <div class="m-auto">
              <div class="grid grid-cols-1 px-5 pb-5 pt-6 gap-3 bg-green-light rounded-lg w-[330px] h-[420px] place-items-center border border-brown-main shadow-md shadow-gray-600">
                <div class="w-[315px] h-[60px] rounded-lg flex gap-3 items-center">
                  <div class="bg-green-shadow w-[60px] h-[60px] rounded-lg ml-3 -mt-4 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 text-cream">
                      <path d="M19.5 22.5a3 3 0 0 0 3-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 1 1-.712 1.321l-5.683-3.06a1.5 1.5 0 0 0-1.422 0l-5.683 3.06a.75.75 0 0 1-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 0 0 3 3h15Z" />
                      <path d="M1.5 9.589v-.745a3 3 0 0 1 1.578-2.642l7.5-4.038a3 3 0 0 1 2.844 0l7.5 4.038A3 3 0 0 1 22.5 8.844v.745l-8.426 4.926-.652-.351a3 3 0 0 0-2.844 0l-.652.351L1.5 9.589Z" />
                    </svg>
                  </div>
                  <a href="{{ route('user.orders.invitation.create') }}" class="bg-green-shadow w-[215px] h-[40px] text-cream font-semibold rounded-lg border-2 border-transparent hover:bg-transparent hover:text-green-shadow hover:border-green-shadow hover:-translate-y-2 transition transform duration-300 text-center flex items-center justify-center">
                    Order Invitation
                  </a>
                </div>
                <div class="w-[315px] h-[60px] rounded-lg flex gap-3 items-center">
                  <div class="bg-green-shadow w-[60px] h-[60px] rounded-lg ml-3 -mt-4 flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 text-cream">
                    <path d="M9.375 3a1.875 1.875 0 0 0 0 3.75h1.875v4.5H3.375A1.875 1.875 0 0 1 1.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0 1 12 2.753a3.375 3.375 0 0 1 5.432 3.997h3.943c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 1 0-1.875-1.875V6.75h-1.5V4.875C11.25 3.839 10.41 3 9.375 3ZM11.25 12.75H3v6.75a2.25 2.25 0 0 0 2.25 2.25h6v-9ZM12.75 12.75v9h6.75a2.25 2.25 0 0 0 2.25-2.25v-6.75h-9Z" />
                  </svg>
                  </div>
                  <a href="{{route('user.orders.souvenir.create')}}" class="bg-green-shadow w-[215px] h-[40px] text-cream font-semibold rounded-lg border-2 border-transparent hover:bg-transparent hover:text-green-shadow hover:border-green-shadow hover:-translate-y-2 transition transform duration-300 text-center flex items-center justify-center">
                    Order Souvenir
                  </a>
                </div>
                <div class="w-[315px] h-[60px] rounded-lg flex gap-3 items-center">
                  <div class="bg-green-shadow w-[60px] h-[60px] rounded-lg ml-3 -mt-4 flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 text-cream">
                    <path d="M12.378 1.602a.75.75 0 0 0-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03ZM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 0 0 .372-.648V7.93ZM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 0 0 .372.648l8.628 5.033Z" />
                  </svg>
                  </div>
                  <a href="{{route('user.orders.packaging.create')}}" class="bg-green-shadow w-[215px] h-[40px] text-cream font-semibold rounded-lg border-2 border-transparent hover:bg-transparent hover:text-green-shadow hover:border-green-shadow hover:-translate-y-2 transition transform duration-300 text-center flex items-center justify-center">
                    Order Packaging
                  </a>
                </div>
                <div class="w-[315px] h-[60px] rounded-lg flex gap-3 items-center">
                  <div class="bg-green-shadow w-[60px] h-[60px] rounded-lg ml-3 -mt-4 flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 text-cream">
                    <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                    <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                    <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                  </svg>
                  </div>
                  <div href="" class="bg-green-shadow w-[215px] h-[40px] text-cream font-semibold rounded-lg border-2 border-transparent hover:bg-transparent hover:text-green-shadow hover:border-green-shadow hover:-translate-y-2 transition transform duration-300 text-center flex items-center justify-center">
                    Order Seminar Kit
                  </div>
                </div>
              </div>
            </div>
            <!-- chart -->
            <div class="w-full h-full grid grid-rows-[55%_45%]">
              <div class="w-full h-full grid grid-cols-3 px-2 pb-2 pt-8 gap-4">
                <div class="bg-green-white rounded-lg shadow-md shadow-gray-600 h-[195px] p-1 border border-brown-main mr-4">
                  <h2 class="text-sm text-center mb-1 font-medium text-green-main">Pembayaran</h2>
                  <canvas id="payChart" class="h-full w-full"></canvas>
                </div>
                <div class="bg-green-white rounded-lg shadow-md shadow-gray-600 h-[195px] p-1 border border-brown-main mr-4">
                  <h2 class="text-sm text-center mb-1 font-medium text-green-main">Desain</h2>
                  <canvas id="desainChart" class="h-full w-full"></canvas>
                </div>
                <div class="bg-green-white rounded-lg shadow-md shadow-gray-600 h-[195px] p-1 border border-brown-main mr-4">
                  <h2 class="text-sm text-center mb-1 font-medium text-green-main">PPIC</h2>
                  <canvas id="ppicChart" class="h-full w-full"></canvas>
                </div>
                <div class="col-span-3 bg-green-white rounded-lg shadow-md shadow-gray-600 h-[180px] p-1 border border-brown-main mr-4 mt-6">
                    <h2 class="text-sm text-center mb-1 font-semibold text-green-main">Total Orderan</h2>
                    <canvas id="totalOrderChart" class="h-full w-full"></canvas>
                </div>
              </div>
            </div>
          </div>

          <!-- jumlah data tiap proses -->
          <div class="grid grid-cols-6 px-5 py-4 gap-3 h-full">
            <!-- Tunggu Bayar/Desain -->
            <div onclick="showModal('Tunggu Bayar/Desain');"
                class="h-[9rem] font-sans w-100 bg-green-shadow flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-3 hover:bg-green-main transition transform duration-300 cursor-pointer">
                <div class="flex-none h-[30%] flex items-center justify-center text-cream p-1 text-sm">Tunggu Bayar/Desain</div>
                <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4 text-cream">{{$pendingCount}}</div>
            </div>

            <!-- Tentukan Deadline -->
            <div onclick="showModal('Tentukan Deadline');"
                class="h-[9rem] font-sans w-100 bg-green-shadow flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-3 hover:bg-green-main transition transform duration-300 cursor-pointer">
                <div class="flex-none h-[30%] flex items-center justify-center text-cream p-1 text-sm">Tentukan Deadline</div>
                <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4 text-cream">{{$fixCount}}</div>
            </div>

            <!-- Pemesanan Bahan -->
            <div onclick="showModal('Pemesanan Bahan');"
                class="h-[9rem] font-sans w-100 bg-green-shadow flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-3 hover:bg-green-main transition transform duration-300 cursor-pointer">
                <div class="flex-none h-[30%] flex items-center justify-center text-cream p-1 text-sm">Pemesanan Bahan</div>
                <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4 text-cream">{{$orderCount}}</div>
            </div>

            <!-- Proses Produksi -->
            <div onclick="showModal('Proses Produksi');"
                class="h-[9rem] font-sans w-100 bg-green-shadow flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-3 hover:bg-green-main transition transform duration-300 cursor-pointer">
                <div class="flex-none h-[30%] flex items-center justify-center text-cream p-1 text-sm">Proses Produksi</div>
                <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4 text-cream">{{$productionCount}}</div>
            </div>

            <!-- Tunggu Ambil/Kirim -->
            <div onclick="showModal('Tunggu Ambil/Kirim');"
                class="h-[9rem] font-sans w-100 bg-green-shadow flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-3 hover:bg-green-main transition transform duration-300 cursor-pointer">
                <div class="flex-none h-[30%] flex items-center justify-center text-cream p-1 text-sm">Tunggu Ambil/Kirim</div>
                <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4 text-cream">{{$readyCount}}</div>
            </div>

            <!-- Pesanan Selesai -->
            <div onclick="showModal('Pesanan Selesai');"
                class="h-[9rem] font-sans w-100 bg-green-shadow flex flex-col justify-center rounded-xl shadow-md hover:-translate-y-3 hover:bg-green-main transition transform duration-300 cursor-pointer">
                <div class="flex-none h-[30%] flex items-center justify-center text-cream p-1 text-sm">Pesanan Selesai</div>
                <div class="flex-grow flex items-center justify-center font-bold text-5xl pb-4 text-cream">{{$doneCount}}</div>
            </div>
          </div>
          <!-- Modal -->
          <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg p-6 w-96 max-h-[70vh] flex flex-col">
                <h2 id="statusTitle" class="text-xl font-bold mb-4"></h2>
                <div class="overflow-y-auto max-h-[40vh]">
                    <ul id="customerList" class="list-disc pl-5 space-y-2"></ul>
                </div>
                <button onclick="closeModal()"
                    class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition">Tutup</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  @endsection
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Sample data for customers
  const customerData = {
      'Tunggu Bayar/Desain': ['Customer A', 'Customer B', 'Customer C', 'Customer D', 'Customer E', 'Customer F', 'Customer G', 'Customer H', 'Customer I', 'Customer J', 'Customer K'],
      'Tentukan Deadline': ['Customer L', 'Customer M'],
      'Pemesanan Bahan': ['Customer N', 'Customer O', 'Customer P', 'Customer Q'],
      'Proses Produksi': ['Customer R', 'Customer S'],
      'Tunggu Ambil/Kirim': ['Customer T', 'Customer U', 'Customer V', 'Customer W'],
      'Pesanan Selesai': []
  };

  function showModal(status) {
      const modal = document.getElementById('modal');
      const statusTitle = document.getElementById('statusTitle');
      const customerList = document.getElementById('customerList');

      statusTitle.textContent = status;
      customerList.innerHTML = '';

      if (customerData[status] && customerData[status].length > 0) {
          customerData[status].forEach(customer => {
              const li = document.createElement('li');
              li.textContent = customer;
              customerList.appendChild(li);
          });
      } else {
          const li = document.createElement('li');
          li.textContent = 'Tidak ada data';
          customerList.appendChild(li);
      }

      modal.classList.remove('hidden');
  }

  function closeModal() {
      const modal = document.getElementById('modal');
      modal.classList.add('hidden');
  }

  // chart
  document.addEventListener("DOMContentLoaded", function () {
    // chart 3 grid
    const payCtx = document.getElementById('payChart').getContext('2d');
    const desainCtx = document.getElementById('desainChart').getContext('2d');
    const ppicCtx = document.getElementById('ppicChart').getContext('2d');

    // pembayaran
    new Chart(payCtx, {
      type: 'bar',
      data: {
        labels: ['Pembayaran'],
        datasets: [{
          label: 'Belum Bayar',
          data: [10],
          backgroundColor: 'rgba(74, 222, 128, 1)' ,
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.8 // Menggunakan seluruh space yang tersedia
        },
        {
          label: 'DP1',
          data: [20],
          backgroundColor: 'rgba(34, 197, 94, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.8 // Menggunakan seluruh space yang tersedia
        },
        {
          label: 'DP2',
          data: [40],
          backgroundColor: 'rgba(22, 163, 74, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.8 // Menggunakan seluruh space yang tersedia
        },
        {
          label: 'Lunas',
          data: [50],
          backgroundColor: 'rgba(21, 128, 61, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.8 // Menggunakan seluruh space yang tersedia
        }
      ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, // Memungkinkan grafik memenuhi lebar container
        aspectRatio: 2, // Menyesuaikan rasio tinggi-lebar
        scales: {
          x: {
            position: 'left',
            grid: { display: false }, // Menghilangkan grid pada sumbu X
            beginAtZero: true,
            border: {color: 'rgb(0, 68, 27)'},
            ticks: { display: false }
          },
          y: {
            grid: { display: false }, // Menghilangkan grid pada sumbu Y
            beginAtZero: true,
            border: {color: 'rgb(0, 68, 27)'},
            ticks: { color: 'rgb(0, 68, 27)' }
          }
        },
        layout: {
          padding: {
            bottom: 20, // Tambahkan padding agar legend tidak keluar dari kotak
          }
        },
        plugins: {
          legend: {
            display: true,
            position: 'bottom',
            align: 'center',
            labels: {
              boxWidth: 10, // Lebar kotak warna di legend
              boxHeight: 10, // Tinggi kotak warna di legend (Chart.js 3+)
              color: 'rgb(0, 68, 27)', // Warna teks legend
              font: {
                size: 8, // Ukuran font legend
                family: 'Arial', // Jenis font legend
                weight: '', // Ketebalan teks legend
              },
              padding: 10, // Jarak antara setiap item legend
              usePointStyle: true, // Jika true, legend berbentuk titik, bukan kotak
              pointStyle: 'rect' // Bentuk titik jika usePointStyle=true ('circle', 'rect', 'triangle', dll.)
          }
          }
        }
      }
    });

    // desain
    new Chart(desainCtx, {
      type: 'bar',
      data: {
        labels: ['Desain'],
        datasets: [{
          label: 'Belum',
          data: [10],
          backgroundColor: 'rgba(74, 222, 128, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.8 // Menggunakan seluruh space yang tersedia
        },
        {
          label: 'Proses',
          data: [25],
          backgroundColor: 'rgba(34, 197, 94, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.8 // Menggunakan seluruh space yang tersedia
        },
        {
          label: 'Menunggu',
          data: [10],
          backgroundColor: 'rgba(22, 163, 74, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.8 // Menggunakan seluruh space yang tersedia
        },
        {
          label: 'Fix',
          data: [32],
          backgroundColor: 'rgba(21, 128, 61, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.8 // Menggunakan seluruh space yang tersedia
        }
      ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, // Memungkinkan grafik memenuhi lebar container
        aspectRatio: 2, // Menyesuaikan rasio tinggi-lebar
        scales: {
          x: {
            position: 'left',
            grid: { display: false }, // Menghilangkan grid pada sumbu X
            beginAtZero: true,
            border: {color: 'rgb(0, 68, 27)'},
            ticks: { display: false }
          },
          y: {
            grid: { display: false }, // Menghilangkan grid pada sumbu Y
            beginAtZero: true,
            border: {color: 'rgb(0, 68, 27)'},
            ticks: { color: 'rgb(0, 68, 27)' }
          }
        },
        layout: {
          padding: {
            bottom: 20, // Tambahkan padding agar legend tidak keluar dari kotak
          }
        },
        plugins: {
          legend: {
            display: true,
            position: 'bottom',
            align: 'center',
            labels: {
              boxWidth: 10, // Lebar kotak warna di legend
              boxHeight: 10, // Tinggi kotak warna di legend (Chart.js 3+)
              color: 'rgb(0, 68, 27)', // Warna teks legend
              font: {
                size: 8, // Ukuran font legend
                family: 'Arial', // Jenis font legend
                weight: '', // Ketebalan teks legend
              },
              padding: 10, // Jarak antara setiap item legend
              usePointStyle: true, // Jika true, legend berbentuk titik, bukan kotak
              pointStyle: 'rect' // Bentuk titik jika usePointStyle=true ('circle', 'rect', 'triangle', dll.)
          }
          }
        }
      }
    });

    //ppic
    new Chart(ppicCtx, {
      type: 'bar',
      data: {
        labels: ['PPIC'],
        datasets: [{
          label: 'Belum Proses',
          data: [10],
          backgroundColor: 'rgba(34, 197, 94, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.6 // Menggunakan seluruh space yang tersedia
        },
        {
          label: 'Sudah Proses',
          data: [20],
          backgroundColor: 'rgba(21, 128, 61, 1)',
          borderRadius: 2, // Membuat sudut batang tumpul
          borderSkipped: false, // Agar semua sisi mendapatkan borderRadius
          categoryPercentage: 0.4, // Memperkecil jarak antar batang
          barPercentage: 0.6 // Menggunakan seluruh space yang tersedia
        },
      ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, // Memungkinkan grafik memenuhi lebar container
        aspectRatio: 2, // Menyesuaikan rasio tinggi-lebar
        scales: {
          x: {
            position: 'left',
            grid: { display: false }, // Menghilangkan grid pada sumbu X
            beginAtZero: true,
            border: {color: 'rgb(0, 68, 27)'},
            ticks: { display: false }
          },
          y: {
            grid: { display: false }, // Menghilangkan grid pada sumbu Y
            beginAtZero: true,
            border: {color: 'rgb(0, 68, 27)'},
            ticks: { color: 'rgb(0, 68, 27)' }
          }
        },
        layout: {
          padding: {
            bottom: 20, // Tambahkan padding agar legend tidak keluar dari kotak
          }
        },
        plugins: {
          legend: {
            display: true,
            position: 'bottom',
            align: 'center',
            labels: {
              boxWidth: 10, // Lebar kotak warna di legend
              boxHeight: 10, // Tinggi kotak warna di legend (Chart.js 3+)
              color: 'rgb(0, 68, 27)', // Warna teks legend
              font: {
                size: 8, // Ukuran font legend
                family: 'Arial', // Jenis font legend
                weight: '', // Ketebalan teks legend
              },
              padding: 10, // Jarak antara setiap item legend
              usePointStyle: true, // Jika true, legend berbentuk titik, bukan kotak
              pointStyle: 'rect' // Bentuk titik jika usePointStyle=true ('circle', 'rect', 'triangle', dll.)
          }
          }
        }
      }
    });


    // order chart
    const orderCtx = document.getElementById('totalOrderChart').getContext('2d');

    const gradientOrder1 = orderCtx.createLinearGradient(0, 0, 0, 400);
    gradientOrder1.addColorStop(0, 'rgba(34, 197, 94, 1)');
    gradientOrder1.addColorStop(0.2, 'rgba(34, 197, 94, 0)');

    const gradientOrder2 = orderCtx.createLinearGradient(0, 0, 0, 400);
    gradientOrder2.addColorStop(0, 'rgba(194, 156, 91, 1)');
    gradientOrder2.addColorStop(0.2, 'rgba(194, 156, 91, 0)');

    new Chart(orderCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Okt', 'Nov', 'Des'],
        datasets: [{
          label: 'Masuk',
          data: [10, 20, 8, 12, 18, 25, 30, 20, 10, 27, 12, 35],
          backgroundColor: gradientOrder1,
          borderColor: 'rgba(34, 197, 94, 1)',
          borderWidth: 1,
          fill: true,
          tension: 0.4
        },
        {
          label: 'Selesai',
          data: [8, 12, 18, 25, 10, 20, 35, 23, 28, 15, 22, 30],
          backgroundColor: gradientOrder2,
          borderColor: 'rgba(194, 156, 91, 1)',
          borderWidth: 1,
          fill: true,
          tension: 0.4
        },
      ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, // Memungkinkan grafik memenuhi lebar container
        aspectRatio: 2, // Menyesuaikan rasio tinggi-lebar
        scales: {
          x: {
            position: 'left',
            grid: { display: false }, // Menghilangkan grid pada sumbu X
            border: { display: false }, // Hilangkan garis sumbu Y
            beginAtZero: true,
            border: {color: 'rgba(0, 68, 27, 0.5)'},
            ticks: { color: 'rgb(0, 68, 27)' }
          },
          y: {
            grid: { display: false }, // Menghilangkan grid pada sumbu Y
            border: { display: false }, // Hilangkan garis sumbu Y
            beginAtZero: true,
            ticks: { color: 'rgb(0, 68, 27)' }
          }
        },
        layout: {
          padding: {
            bottom: 20, // Tambahkan padding agar legend tidak keluar dari kotak
          }
        },
        plugins: {
          legend: {
            display: true,
            position: 'bottom',
            align: 'center',
            labels: {
              boxWidth: 15, // Lebar kotak warna di legend
              boxHeight: 1, // Tinggi kotak warna di legend (Chart.js 3+)
              color: 'rgb(0, 68, 27)', // Warna teks legend
              font: {
                size: 8, // Ukuran font legend
                family: 'Arial', // Jenis font legend
                weight: '' // Ketebalan teks legend
              },
              padding: 10, // Jarak antara setiap item legend
              usePointStyle: false, // Jika true, legend berbentuk titik, bukan kotak
              pointStyle: 'rect' // Bentuk titik jika usePointStyle=true ('circle', 'rect', 'triangle', dll.)
          }
          }
        }
      }
    });

  });


</script>
</html>
