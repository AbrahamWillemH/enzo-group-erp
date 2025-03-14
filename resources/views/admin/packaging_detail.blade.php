<head>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css">
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

</head>
@extends('admin/sidebar_admin')
@section('title', 'Detail Packaging')
@section('konten')
<div class="ml-[20%]">

    <div class="bg-green-light h-full relative">
        <div class="z-30 fixed top-0 left-[20%] right-0 grid grid-cols-[76%_24%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>DETAIL PEMESANAN PACKAGING</h1>
            </div>
            <div class="font-medium flex flex-row">
                <!-- Tombol History -->
                <button onclick="openHistoryModal()" class="text-brown-enzo flex flex-col justify-center items-center group w-full">
                    History
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </button>
                <a href="#spk" class="text-brown-enzo flex flex-col justify-center items-center group w-full">SPK
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
                <a href="/admin/orders/packaging" class="text-brown-enzo flex flex-col justify-center items-center group w-full">Kembali
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
            </div>

        </div>
        <div class="">
            <section id="data_pemesan" class="data_pemesan mb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA PEMESAN</div>
                <div class="data mt-[7.25rem] mb-5 px-3 gap-0 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg  hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">CUSTOMER</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Pemesan</td>
                                <td class="px-4 py-2">{{$packaging->user_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nomor HP</td>
                                <td class="px-4 py-2">{{$packaging->phone_number}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Deadline</td>
                                <td class="px-4 py-2">{{ $packaging->deadline_date ? \Carbon\Carbon::parse($packaging->deadline_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Jumlah</td>
                                <td class="px-4 py-2">{{$packaging->quantity}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Alamat Lengkap</td>
                                <td class="px-4 py-2">{{$packaging->address}}</td>
                            </tr>

                        </tbody>

                    </table>

                    <!-- Modal History -->
                    <div id="modal-history" class="fixed inset-y-0 left-1/5 w-4/5 bg-black/50 flex items-center justify-center hidden z-[50]">
                        <div class="bg-white p-6 rounded-lg shadow-lg w-[500px]">
                            <h2 class="text-xl font-bold mb-4">Riwayat Perubahan</h2>
                            <div class="flex flex-col gap-4 max-h-[300px] overflow-y-auto">
                                @foreach ($changes as $column => $change)
                                <div class="alert alert-warning border border-yellow-400 p-3 rounded-lg">
                                    <strong>Perubahan pada {{ ucfirst(str_replace('_', ' ', $column)) }}:</strong>
                                    <br>
                                    <del class="text-red-500">{{ $change['old'] }}</del>
                                    <span class="text-green-600 font-bold">{{ $change['new'] }}</span>
                                    <small class="text-gray-500">({{ $change['changed_at'] }})</small>
                                    <span class="text-black font-bold"> - {{ $change['changed_by'] }}</span>
                                </div>
                                @endforeach
                            </div>
                            <div class="flex justify-end mt-4">
                                <button onclick="closeHistoryModal()" class="px-4 py-2 bg-gray-300 rounded-md">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="detail" class="detail mb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DETAIL</div>
                <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="">DESAIN</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-2 py-2 relative group">
                                    <!-- Overlay Hover -->
                                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
                                        <button onclick="openModal(event, '{{ $packaging->id }}')"
                                                class="px-4 py-2 bg-white text-green-600 font-semibold rounded-lg shadow-md hover:bg-green-100 transition">
                                            Ubah Desain
                                        </button>
                                    </div>
                                    @if (!is_null($packaging->desain_path))
                                        <div class="relative">
                                            <img src="{{ asset('storage/app/public/' . $packaging->desain_path)}}"
                                                alt="Desain"
                                                class="object-cover w-full h-full
                                                @if ($packaging->design_status == 'DECL') border-8 border-red-600
                                                @elseif($packaging->design_status == 'ACC') border-8 border-green-600
                                                @endif">

                                        </div>
                                    @else
                                        <p class="text-center">Belum Terdapat Desain</p>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Modal Upload -->
                    <div id="modal-upload" class="fixed inset-0 left-[20%] w-[80%] bg-black/50 flex items-center justify-center hidden z-[80]">
                        <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                            <h2 class="text-xl font-bold mb-4">Ubah Desain </h2>
                            <form action="{{route('packaging.upload.image', ['id' => $packaging->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" id="file-upload" name="desain_path" class="block w-full text-sm text-gray-600" onchange="previewImage()">
                                <div class="preview" id="preview"></div>
                                <div class="flex justify-end mt-4">
                                    <button type="button" class="px-4 py-2 bg-gray-300 rounded-md" onclick="closeModal()">Batal</button>
                                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md ml-2" onclick="validateUpload(event)" id="btn-crop">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">SPESIFIKASI</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Model</td>
                                <td class="px-4 py-2">{{$packaging->model}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tipe</td>
                                <td class="px-4 py-2">{{$packaging->package_type}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Finishing</td>
                                <td class="px-4 py-2">{{$packaging->finishing}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Ukuran</td>
                                <td class="px-4 py-2">{{$packaging->size}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Desain</td>
                                <td class="px-4 py-2 normal-case">{{$packaging->note_design}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Kemas</td>
                                <td class="px-4 py-2">{{$packaging->kemas}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </section>


            <section id="info_tambahan" class="info_tambahan mb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">INFORMASI TAMBAHAN</div>
                <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">INFORMASI TAMBAHAN</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Status Progres</td>
                                <td class="px-4 py-2">{{$packaging->progress}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Status Bayar</td>
                                <td class="px-4 py-2">{{$packaging->payment_status}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 1</td>
                                <td class="px-4 py-2">{{ $packaging->dp1_date ? \Carbon\Carbon::parse($packaging->dp1_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 2</td>
                                <td class="px-4 py-2">{{ $packaging->dp2_date ? \Carbon\Carbon::parse($packaging->dp2_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Pelunasan</td>
                                <td class="px-4 py-2">{{ $packaging->paid_off_date ? \Carbon\Carbon::parse($packaging->paid_off_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Fix Desain</td>
                                <td class="px-4 py-2">{{ $packaging->fix_design_date ? \Carbon\Carbon::parse($packaging->fix_design_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Harga /pcs</td>
                                <td class="px-4 py-2">Rp{{ number_format($packaging->price_per_pcs, 0, ',', '.') }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Percetakan</td>
                                <td class="px-4 py-2">{{$packaging->printout}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Ekspedisi</td>
                                <td class="px-4 py-2">{{$packaging->expedition}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">ACC Client</td>
                                <td class="px-4 py-2">
                                    <form action="{{route('admin.packaging.design', ['id' => $packaging->id])}}" method="POST">
                                        @csrf
                                        <select name="design_status" class="w-1/2 px-2 py-1 border border-gray-300 rounded-md bg-white text-gray-700 focus:ring-2 focus:ring-green-shadow/20 focus:outline-none transition" onchange="this.form.submit()">
                                            <option value="Pending" {{ old('design_status', $packaging->design_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="ACC" {{ old('design_status', $packaging->design_status) == 'ACC' ? 'selected' : '' }}>ACC</option>
                                            <option value="DECL" {{ old('design_status', $packaging->design_status) == 'DECL' ? 'selected' : '' }}>DECL</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Ukuran Jadi</td>
                                <td class="px-4 py-2">{{$packaging->size_fix}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Pelanggan</td>
                                <td class="px-4 py-2">{{$packaging->note_design}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Admin</td>
                                <td class="px-4 py-2">{{$packaging->note_cs}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Source</td>
                                <td class="px-4 py-2">{{$packaging->source}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <div class="edit_button px-6 mt-10 grid justify-items-end">
                    <a href="{{route('admin.packaging.edit', ['id' => $packaging->id])}}"
                        class="relative bg-green-main/80 text-brown-enzo font-semibold w-[6rem] h-[3rem] flex justify-center items-center rounded-lg overflow-hidden group">
                        <!-- Layer latar belakang -->
                        <span class="absolute inset-0 bg-green-main transition-transform -translate-x-full group-hover:translate-x-0 transition-duration duration-500"></span>
                        <!-- Teks -->
                        <span class="relative z-10">EDIT</span>
                    </a>
                </div>
            </section>
            <section id="spk" class="info_tambahan pb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    SPK
                </div>
                <form id="spkForm" action="{{ route('admin.packaging.spk.store', ['id' => $packaging->id]) }}" method="POST">
                    @csrf
                <div class="flex flex-col items-center mt-[3.25rem]">
                    <table class="w-[95%] rounded-t-lg overflow-hidden">
                        <thead class="border border-green-main h-[50px] bg-green-main/80 text-brown-enzo">
                            <tr>
                                <th colspan="5">SPK PRODUKSI HARDBOX</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="h-[35px]">
                                <td class="border border-green-main w-[100px] px-2 font-semibold">Nama</td>
                                <td class="border border-green-main w-[210px] px-2">{{ $packaging->user_name }}</td>
                                <td class="border border-green-main w-[140px] px-2 font-semibold">Tgl Order</td>
                                <td class="border border-green-main w-[140px] px-2">{{ $packaging->created_at ? \Carbon\Carbon::parse($packaging->created_at)->format('d-m-Y') : '-' }}</td>
                                <td class="border border-green-main p-2 w-[450px]" rowspan="7">
                                    @if (!is_null($packaging->desain_path))
                                    <img src="{{ asset('storage/app/public/' . $packaging->desain_path) }}" alt="Desain Undangan" class="w-full object-cover rounded-md">
                                    @else
                                    <p class="text-center">Belum Terdapat Desain</p>
                                    @endif
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Jenis</td>
                                <td class="border border-green-main px-2">{{ ucfirst($packaging->package_type) }}</td>
                                <td class="border border-green-main px-2 font-semibold">Tgl DP2</td>
                                <td class="border border-green-main px-2">{{ $packaging->dp2_date ? \Carbon\Carbon::parse($packaging->dp2_date)->format('d-m-Y') : '-' }}</td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Uk Jadi</td>
                                <td class="border border-green-main px-2">{{ $packaging->size ?? '-' }}</td>
                                <td class="border border-green-main px-2 font-semibold">Tgl Fix Desain</td>
                                <td class="border border-green-main px-2">{{ $packaging->fix_design_date ? \Carbon\Carbon::parse($packaging->fix_design_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Jumlah</td>
                                <td class="border border-green-main px-2">{{ $packaging->quantity }}</td>
                                <td class="border border-green-main px-2 font-semibold">Deadline</td>
                                <td class="border border-green-main px-2">{{ $packaging->deadline_date ? \Carbon\Carbon::parse($packaging->deadline_date)->subDays(5)->format('d-m-Y') : '-' }}</td>
                            </tr>
                            <form action="{{route('admin.packaging.update', ['id' => $packaging->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Packing</td>
                                <td class="border border-green-main px-2">{{ $packaging->kemas }}</td>
                                <td class="border border-green-main px-2 font-semibold">Percetakan</td>
                                <td class="border border-green-main px-2">{{ $packaging->printout }}</td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Alamat</td>
                                <td class="border border-green-main px-2" colspan="3">{{ $packaging->address }}</td>
                            </tr>
                            <tr class="h-[60px]">
                                <td class="border border-green-main h-[60px] px-2 font-semibold">Request</td>
                                <td class="border border-green-main px-2 py-1" colspan="3">{{ $packaging->note_design }}</td>
                            </tr>
                            </form>
                        </tbody>
                    </table>

                    <table class="w-[95%] mt-8 rounded-t-lg overflow-hidden">
                        <thead class="border border-green-main h-[50px] bg-green-main/80 text-brown-enzo">
                            <tr>
                                <th colspan="4">Rincian Request</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 w-[150px] font-semibold">Foil</td>
                                <td class="border border-green-main px-2 w-[200px]">
                                    <input type="text" name="foil" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Foil" value="{{ $packaging_spk->foil ?? '' }}">
                                </td>
                                <td class="border border-green-main px-2 w-[150px] font-semibold">Tali</td>
                                <td class="border border-green-main px-2 w-[200px]">
                                    <input type="text" name="tali" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Tali" value="{{ $packaging_spk->tali ?? '' }}">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Kertas Foil</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="kertas_foil" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Kertas Foil" value="{{ $packaging_spk->kertas_foil ?? '' }}">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Warna Tali</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="warna_tali" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Warna Tali" value="{{ $packaging_spk->warna_tali ?? '' }}">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Laminasi</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="laminasi" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Laminasi" value="{{ $packaging_spk->laminasi ?? '' }}">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Brosur</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="brosur" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Brosur" value="{{ $packaging_spk->brosur ?? '' }}">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Pita</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="pita" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Pita" value="{{ $packaging_spk->pita ?? '' }}">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Ornamen</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="ornamen" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Ornamen" value="{{ $packaging_spk->ornamen ?? '' }}">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Attire/Thankscard</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="attire_thankscard" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Attire/Thankscard" value="{{ $packaging_spk->attire_thankscard ?? '' }}">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Lain-lain</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="lain_lain" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Lain-lain" value="{{ $packaging_spk->lain_lain ?? '' }}">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Embos</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="embos" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Embos" value="{{ $packaging_spk->embos ?? '' }}">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Sekat</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" name="sekat" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Sekat" value="{{ $packaging_spk->sekat ?? '' }}">
                                </td>
                            </tr>
                            <tr class="h-[40px] bg-green-main/80 text-brown-enzo">
                                <td class="border border-green-main font-bold text-sm text-center" colspan="4">NOTE TAMBAHAN</td>
                            </tr>
                            <tr class="h-[40px]">
                                <td class="border border-green-main p-2" colspan="4">
                                    <textarea name="note_tambahan" id="note_tambahan" class="w-full h-[50px] rounded-sm px-2 border border-green-main" placeholder="Note Tambahan">{{ $packaging_spk->note_tambahan ?? '' }}</textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-[95%] mt-8 rounded-t-lg overflow-hidden">
                        <thead class="border border-green-main h-[80px] bg-green-main/80 text-brown-enzo">
                            <tr>
                                <th colspan="7" class="border-b border-brown-enzo">Rincian Bahan</th>
                            </tr>
                            <tr>
                                <th class="w-[350px] h-[40px]">Nama Bahan</th>
                                <th class="w-[350px] h-[40px]">Ukuran</th>
                                <th class="w-[130px] h-[40px]">Kebutuhan</th>
                                <th class="w-[130px] h-[40px]">Stok</th>
                                <th class="w-[130px] h-[40px]">Jumlah Beli</th>
                                <th class="w-[350px] h-[40px]">Supplier</th>
                                <th class="w-[350px] h-[40px]">Hapus</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            @if (isset($packaging_spk->nama_bahan) && is_array($packaging_spk->nama_bahan))
                                @foreach ($packaging_spk->nama_bahan as $index => $nama_bahan)
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="nama_bahan[]" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Nama Bahan" value="{{ $nama_bahan }}">
                                        </td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="ukuran[]" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Ukuran" value="{{ $packaging_spk->ukuran[$index] ?? '' }}">
                                        </td>
                                        <td class="border border-green-main px-2 text-center">
                                            <input type="number" name="kebutuhan[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="{{ $packaging_spk->kebutuhan[$index] ?? 0 }}">
                                        </td>
                                        <td class="border border-green-main px-2 text-center">
                                            <input type="number" name="stok[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="{{ $packaging_spk->stok[$index] ?? 0 }}">
                                        </td>
                                        <td class="border border-green-main px-2 text-center">
                                            <input type="number" name="jumlah_beli[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="{{ $packaging_spk->jumlah_beli[$index] ?? 0 }}">
                                        </td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="supplier[]" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Supplier" value="{{ $packaging_spk->supplier[$index] ?? '' }}">
                                        </td>
                                        <td class="border border-green-main px-2 text-center">
                                            <button type="button" name="deleteSPK" class="bg-red-500 text-white h-full rounded-sm px-2 border border-green-main">X</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                    <div class="h-[35px] mt-8 flex gap-5">
                        <a href="{{route('pdf.generate', ['type' => 'packaging', 'id' => $packaging_spk->id, 'parent_id' => $packaging->id])}}" class="bg-brown-enzo border-2 border-transparent hover:bg-transparent hover:border-brown-enzo hover:text-brown-enzo rounded-md w-[120px] h-full transition transform duration-300 text-white font-medium text-lg text-center">Cetak</a>
                        <button id="addDataButton" type="button" class="bg-green-main border-2 border-transparent hover:bg-transparent hover:border-green-main hover:text-green-main rounded-md w-[150px] h-full transition transform duration-300 text-white font-medium text-lg">Tambah</button>
                        <button type="submit" class="bg-brown-enzo border-2 border-transparent hover:bg-transparent hover:border-brown-enzo hover:text-brown-enzo rounded-md w-[120px] h-full transition transform duration-300 text-white font-medium text-lg">Simpan</button>
                    </div>
                </form>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
        const addButton = document.getElementById('addDataButton');
        const tableBody = document.getElementById('table-body');

        // Fungsi untuk menambahkan baris baru
        addButton.addEventListener('click', (e) => {
            e.preventDefault(); // Mencegah reload halaman

            // Buat elemen <tr> baru
            const newRow = document.createElement('tr');
            newRow.className = "h-[35px]";

            // Isi row baru
            newRow.innerHTML = `
                <td class="border border-green-main px-2">
                    <input type="text" name="nama_bahan[]" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Nama Bahan" value="">
                </td>
                <td class="border border-green-main px-2">
                    <input type="text" name="ukuran[]" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Ukuran" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="kebutuhan[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="stok[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="jumlah_beli[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2">
                    <input type="text" name="supplier[]" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Supplier" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <button type="button" name="deleteSPK" class="bg-red-500 text-white h-full rounded-sm px-2 border border-green-main">X</button>
                </td>
            `;

            // Tambahkan baris ke dalam tbody
            tableBody.appendChild(newRow);
        });

        // Event delegation untuk tombol "X"
        tableBody.addEventListener("click", (event) => {
            if (event.target.matches('button[name="deleteSPK"]')) {
                event.preventDefault(); // Mencegah aksi default
                const row = event.target.closest("tr"); // Temukan baris <tr> terdekat
                if (row) row.remove(); // Hapus baris
            }
        });
    });

    // EDIT PURCHASE
    {{--document.querySelectorAll('[id^="editPurchase_"]').forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            console.log("Button clicked");
            const id = button.id.split('_')[1];
            console.log("Row ID:", id);
            const row = button.closest('tr');
            if (row) {
                if (button.textContent.trim() === 'Edit') {
                    console.log("Switching to edit mode");
                    row.querySelectorAll('td:not(:last-child)').forEach(cell => {
                        if (!cell.querySelector('input')) {
                            const value = cell.textContent.trim();
                            const input = document.createElement('input');
                            input.type = 'text';
                            input.value = value;
                            input.classList.add('border', 'p-2', 'rounded');
                            cell.textContent = '';
                            cell.appendChild(input);
                        }
                    });
                    button.textContent = 'Save';
                    button.classList.add('bg-green-500');
                } else {
                    console.log("Saving data...");
                    const formData = new FormData();
                    row.querySelectorAll('td:not(:last-child)').forEach(cell => {
                        const input = cell.querySelector('input');
                        if (input) {
                            const columnName = cell.dataset.column;
                            formData.append(columnName, input.value);
                        }
                    });

                    fetch("{{route('admin.packaging.purchase.store', ['id' => $packaging->id])}}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                        body: formData,
                    })
                    .then(response => {
                        console.log("Response received:", response);
                        return response.json();
                    })
                    .then(data => {
                        console.log("Data received:", data);
                        if (data.success) {
                            alert('Data berhasil disimpan.');
                            row.querySelectorAll('td:not(:last-child)').forEach(cell => {
                                const input = cell.querySelector('input');
                                if (input) {
                                    cell.textContent = input.value;
                                }
                            });
                            button.textContent = 'Edit';
                            button.classList.remove('bg-green-500');
                        } else {
                            alert('Gagal menyimpan data.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan.');
                    });
                }
            }
        });
    });--}}

    function openModal(event, id) {
        event.preventDefault();
        document.getElementById('modal-upload').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal-upload').classList.add('hidden');
    }

    function validateUpload(event) {
        let fileInput = document.getElementById('file-upload');
        if (!fileInput.files.length) {
            event.preventDefault();
            alert("Silakan pilih file terlebih dahulu sebelum mengupload!");
        }
    }

    function openHistoryModal() {
        document.getElementById('modal-history').classList.remove('hidden');
    }

    function closeHistoryModal() {
        document.getElementById('modal-history').classList.add('hidden');
    }

    const image = document.getElementById('image');
    const cropper = new Cropper (image, {
        viewMode: 1,
        autoCropArea: 0.8,
        responsive: true,
        movable: true,
        zoomable: true,
        rotatable: true,
        scalable: true,
        aspectRatio: NaN, // Rasio bebas
    });

    // document.querySelector('#btn-crop').addEventListener('click', function(){
    //     var croppedImage = cropper.getCroppedCanvas().toDataURL("image/png");
    //     document.getElementById('output').src = croppedImage;
    //     document.querySelector(".cropped-container").style.display = 'flex';
    // })

    function previewImage() {
        const file = document.getElementById('file-upload').files[0];
        const preview = document.getElementById('preview');
        const reader = new FileReader();

        reader.onload = function (e) {
            // Tampilkan gambar dengan ID 'image'
            preview.innerHTML = `<img src="${e.target.result}" alt="Preview" id="image" style="max-width: 100%; height: auto;">`;

            // Inisialisasi Cropper setelah gambar muncul
            const image = document.getElementById('image');
            const cropper = new Cropper(image, {
                viewMode: 1,
                autoCropArea: 0.8,
                responsive: true,
                movable: true,
                zoomable: true,
                rotatable: true,
                scalable: true,
                aspectRatio: NaN, // Rasio bebas
            });

            // Event listener untuk tombol crop
            document.querySelector('#btn-crop').addEventListener('click', function () {
                var croppedImage = cropper.getCroppedCanvas().toDataURL("image/png");
                document.getElementById('output').src = croppedImage;
                document.querySelector(".cropped-container").style.display = 'flex';
            });
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }


</script>
@endsection
