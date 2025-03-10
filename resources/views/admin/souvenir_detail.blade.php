@extends('admin/sidebar_admin')
@section('title', 'Detail Souvenir')
@section('konten')
    <div class="ml-[20%]">

        <div class="bg-green-light h-full relative">
            <div class="z-30 fixed top-0 left-[20%] right-0 grid grid-cols-[76%_24%] px-4 py-5 bg-green-shadow">
                <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                    <h1>DETAIL PEMESANAN SOUVENIR</h1>
                </div>
                <div class="font-medium flex flex-row">
                    <!-- Tombol History -->
                    <button onclick="openHistoryModal()"
                        class="text-brown-enzo flex flex-col justify-center items-center group w-full">
                        History
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </button>
                    <a href="#spk" class="text-brown-enzo flex flex-col justify-center items-center group w-full">SPK
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="/admin/orders/souvenir"
                        class="text-brown-enzo flex flex-col justify-center items-center group w-full">Kembali
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                </div>

            </div>
            <div class="">
                <section id="data_pemesan" class="data_pemesan mb-20">
                    <div
                        class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                        DATA PEMESAN</div>
                    <div class="data mt-[7.25rem] mb-5 px-3 gap-0 flex justify-center capitalize">
                        <table
                            class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg  hover:shadow-green-dark hover:shadow-lg transition duration-500">
                            <thead>
                                <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                    <th class="" colspan="2">CUSTOMER</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Pemesan</td>
                                    <td class="px-4 py-2">{{ $souvenir->user_name }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nomor HP</td>
                                    <td class="px-4 py-2">{{ $souvenir->phone_number }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 utransition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Deadline</td>
                                    <td class="px-4 py-2">
                                        {{ $souvenir->deadline_date ? \Carbon\Carbon::parse($souvenir->deadline_date)->format('d/m/Y') : '-' }}
                                    </td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Jumlah</td>
                                    <td class="px-4 py-2">{{ $souvenir->quantity }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Alamat Lengkap</td>
                                    <td class="px-4 py-2">{{ $souvenir->address }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Mempelai</td>
                                    <td class="px-4 py-2">{{ $souvenir->bridegroom_name }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                    <td class="px-4 py-2">
                                        {{ $souvenir->event_date ? \Carbon\Carbon::parse($souvenir->event_date)->format('d/m/Y') : '-' }}
                                    </td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Jenis Souvenir</td>
                                    <td class="px-4 py-2">{{ $souvenir->product_name }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Kemas</td>
                                    <td class="px-4 py-2">{{ $souvenir->pack }}</td>
                                </tr>

                            </tbody>
                        </table>

                        <!-- Modal History -->
                        <div id="modal-history"
                            class="fixed inset-y-0 left-1/5 w-4/5 bg-black/50 flex items-center justify-center hidden z-[50]">
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
                                    <button onclick="closeHistoryModal()"
                                        class="px-4 py-2 bg-gray-300 rounded-md">Tutup</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <section id="detail" class="detail mb-16">
                    <div
                        class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                        DETAIL</div>
                    <div class="flex justify-center items-center mt-[3.25rem] mb-5 px-4">
                        <div class="data w-[90%] gap-5 flex justify-center items-center capitalize">
                            <!-- Table Desain Emboss -->
                            <table
                                class="table-auto rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500 w-[80%] h-[350px]">
                                <thead>
                                    <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                        <th>DESAIN EMBOSS / LABEL NAMA / SABLON</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-2 py-2 relative group">
                                            <!-- Overlay Hover -->
                                            <div
                                                class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
                                                <button onclick="openModal(event, 'emboss')"
                                                    class="px-4 py-2 bg-white text-green-600 font-semibold rounded-lg shadow-md hover:bg-green-100 transition">
                                                    Ubah Desain
                                                </button>
                                            </div>
                                            @if (!is_null($souvenir->desain_emboss_path))
                                                <div class="relative">
                                                    <img src="{{ asset('storage/app/public/' . $souvenir->desain_emboss_path) }}"
                                                        alt="Desain Emboss"
                                                        class="object-cover w-full h-full
                                                    @if ($souvenir->design_status == 'DECL') border-8 border-red-600
                                                    @elseif($souvenir->design_status == 'ACC') border-8 border-green-600 @endif">

                                                </div>
                                            @else
                                                <p class="text-center">Belum Terdapat Desain</p>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Table Desain Thankscard -->
                            <table
                                class="table-auto rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500 w-[80%] h-[350px]">
                                <thead>
                                    <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                        <th>DESAIN THANKSCARD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-2 py-2 relative group">
                                            <!-- Overlay Hover -->
                                            <div
                                                class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
                                                <button onclick="openModalThankscard()"
                                                    class="px-4 py-2 bg-white text-green-600 font-semibold rounded-lg shadow-md hover:bg-green-100 transition">
                                                    Ubah Desain
                                                </button>
                                            </div>
                                            @if (!is_null($souvenir->desain_thankscard_path))
                                                <div class="relative">
                                                    <img src="{{ asset('storage/app/public/' . $souvenir->desain_thankscard_path) }}"
                                                        alt="Desain Thankscard"
                                                        class="object-cover w-full h-full
                                                    @if ($souvenir->design_status == 'DECL') border-8 border-red-600
                                                    @elseif($souvenir->design_status == 'ACC') border-8 border-green-600 @endif">

                                                </div>
                                            @else
                                                <p class="text-center">Belum Terdapat Desain</p>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Modal Upload -->
                            <div id="modal-upload"
                                class="fixed inset-y-0 left-[20%] w-[80%] bg-black/50 flex items-center justify-center hidden z-[80]">
                                <div class="bg-white p-6 rounded-lg shadow-lg w-100">
                                    <h2 id="modal-title" class="text-xl font-bold mb-4">Ubah Desain</h2>
                                    <form
                                        action="{{ route('souvenir.upload.image', ['type' => 'emboss', 'id' => $souvenir->id]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" id="file-upload" name="desain_emboss_path"
                                            class="block w-full text-sm text-gray-600">
                                        <div class="flex justify-end mt-4">
                                            <button type="button" class="px-4 py-2 bg-gray-300 rounded-md"
                                                onclick="closeModal()">Batal</button>
                                            <button type="submit"
                                                class="px-4 py-2 bg-green-600 text-white rounded-md ml-2">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="modal-upload-thankscard"
                                class="fixed inset-y-0 left-[20%] w-[80%] bg-black/50 flex items-center justify-center hidden z-[80]">
                                <div class="bg-white p-6 rounded-lg shadow-lg w-100">
                                    <h2 id="modal-title" class="text-xl font-bold mb-4">Ubah Desain Thankscard</h2>
                                    <form
                                        action="{{ route('souvenir.upload.image', ['type' => 'thankscard', 'id' => $souvenir->id]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" id="file-upload" name="desain_thankscard_path"
                                            class="block w-full text-sm text-gray-600">
                                        <div class="flex justify-end mt-4">
                                            <button type="button" class="px-4 py-2 bg-gray-300 rounded-md"
                                                onclick="closeModalThankscard()">Batal</button>
                                            <button type="submit"
                                                class="px-4 py-2 bg-green-600 text-white rounded-md ml-2">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center">
                        <div class="w-[90%] gap-5 flex capitalize">
                            <!-- Table Gambar dari Cust -->
                            <table
                                class="table-auto rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500 w-[80%] h-[350px]">
                                <thead>
                                    <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                        <th>GAMBAR REFERENSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-2 py-2 relative group">
                                            @if (!is_null($souvenir->desain_thankscard_path))
                                                <div class="relative">
                                                    <img src="{{ asset('storage/app/public/' . $souvenir->desain_thankscard_path) }}"
                                                        alt="Gambar Dari Cust"
                                                        class="object-cover w-full h-full
                                                    @if ($souvenir->design_status == 'DECL') border-8 border-red-600
                                                    @elseif($souvenir->design_status == 'ACC') border-8 border-green-600 @endif">
                                                </div>
                                            @else
                                                <p class="text-center">Belum Terdapat Desain</p>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                                <thead>
                                    <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                        <th class="" colspan="2">SPESIFIKASI</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr
                                        class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-4 py-2">Nama Mempelai</td>
                                        <td class="px-4 py-2">{{ $souvenir->bridegroom_name }}</td>
                                    </tr>
                                    <tr
                                        class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                        <td class="px-4 py-2">
                                            {{ $souvenir->event_date ? \Carbon\Carbon::parse($souvenir->event_date)->format('d/m/Y') : '-' }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-4 py-2">Jenis Souvenir</td>
                                        <td class="px-4 py-2">{{ $souvenir->product_name }}</td>
                                    </tr>
                                    <tr
                                        class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-4 py-2">Kemas</td>
                                        <td class="px-4 py-2">{{ $souvenir->pack }}</td>
                                    </tr>
                                    <tr
                                        class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-4 py-2">Warna Motif</td>
                                        <td class="px-4 py-2">{{ $souvenir->color_motif }}</td>
                                    </tr>
                                    <tr
                                        class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-4 py-2">Motif Cadangan</td>
                                        <td class="px-4 py-2">{{ $souvenir->motif_backup }}</td>
                                    </tr>
                                    <tr
                                        class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                        <td class="w-[35%] px-4 py-2">Ukuran Jadi</td>
                                        <td class="px-4 py-2">{{ $souvenir->size }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Modal Upload Gambar Cust -->
                            <div id="modal-upload-from-cust"
                                class="fixed inset-y-0 left-[20%] w-[80%] bg-black/50 flex items-center justify-center hidden z-[80]">
                                <div class="bg-white p-6 rounded-lg shadow-lg w-100">
                                    <h2 id="modal-title" class="text-xl font-bold mb-4">Ubah Gambar Referensi</h2>
                                    <form
                                        action="{{ route('souvenir.upload.image', ['type' => 'emboss', 'id' => $souvenir->id]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" id="file-upload" name="desain_emboss_path"
                                            class="block w-full text-sm text-gray-600">
                                        <div class="flex justify-end mt-4">
                                            <button type="button" class="px-4 py-2 bg-gray-300 rounded-md"
                                                onclick="closeModalFromCust()">Batal</button>
                                            <button type="submit"
                                                class="px-4 py-2 bg-green-600 text-white rounded-md ml-2">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="info_tambahan" class="info_tambahan mb-16">
                    <div
                        class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                        INFORMASI TAMBAHAN</div>
                    <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center capitalize">
                        <table
                            class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                            <thead>
                                <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                    <th class="" colspan="2">INFORMASI TAMBAHAN</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Status Progres</td>
                                    <td class="px-4 py-2">{{ $souvenir->progress }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Status Bayar</td>
                                    <td class="px-4 py-2">{{ $souvenir->payment_status }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal DP 1</td>
                                    <td class="px-4 py-2">
                                        {{ $souvenir->dp1_date ? \Carbon\Carbon::parse($souvenir->dp1_date)->format('d/m/Y') : '-' }}
                                    </td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal DP 2</td>
                                    <td class="px-4 py-2">
                                        {{ $souvenir->dp2_date ? \Carbon\Carbon::parse($souvenir->dp2_date)->format('d/m/Y') : '-' }}
                                    </td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal Pelunasan</td>
                                    <td class="px-4 py-2">
                                        {{ $souvenir->paid_off_date ? \Carbon\Carbon::parse($souvenir->paid_off_date)->format('d/m/Y') : '-' }}
                                    </td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal Fix Desain</td>
                                    <td class="px-4 py-2">
                                        {{ $souvenir->fix_design_date ? \Carbon\Carbon::parse($souvenir->fix_design_date)->format('d/m/Y') : '-' }}
                                    </td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Harga /pcs</td>
                                    <td class="px-4 py-2">Rp{{ number_format($souvenir->price_per_pcs, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Percetakan</td>
                                    <td class="px-4 py-2">{{ $souvenir->printout }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Ekspedisi</td>
                                    <td class="px-4 py-2">{{ $souvenir->expedition }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">ACC Client</td>
                                    <td class="px-4 py-2">
                                        <form action="{{ route('admin.souvenir.design', ['id' => $souvenir->id]) }}"
                                            method="POST">
                                            @csrf
                                            <select name="design_status"
                                                class="w-1/2 px-2 py-1 border border-gray-300 rounded-md bg-white text-gray-700 focus:ring-2 focus:ring-green-shadow/20 focus:outline-none transition"
                                                onchange="this.form.submit()">
                                                <option value="Pending"
                                                    {{ old('design_status', $souvenir->design_status) == 'Pending' ? 'selected' : '' }}>
                                                    Pending</option>
                                                <option value="ACC"
                                                    {{ old('design_status', $souvenir->design_status) == 'ACC' ? 'selected' : '' }}>
                                                    ACC</option>
                                                <option value="DECL"
                                                    {{ old('design_status', $souvenir->design_status) == 'DECL' ? 'selected' : '' }}>
                                                    DECL</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Note Pelanggan</td>
                                    <td class="px-4 py-2">{{ $souvenir->note_design }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Note Admin</td>
                                    <td class="px-4 py-2">{{ $souvenir->note_cs }}</td>
                                </tr>
                                <tr
                                    class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Source</td>
                                    <td class="px-4 py-2">{{ $souvenir->source }}</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="edit_button px-6 mt-10 grid justify-items-end">
                        <a href="{{ route('admin.souvenir.edit', ['id' => $souvenir->id]) }}"
                            class="relative bg-green-main/80 text-brown-enzo font-semibold w-[6rem] h-[3rem] flex justify-center items-center rounded-lg overflow-hidden group">
                            <!-- Layer latar belakang -->
                            <span
                                class="absolute inset-0 bg-green-main transition-transform -translate-x-full group-hover:translate-x-0 transition-duration duration-500"></span>
                            <!-- Teks -->
                            <span class="relative z-10">EDIT</span>
                        </a>
                    </div>

                </section>

                <section id="spk" class="info_tambahan pb-20">
                    <div
                        class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                        SPK
                    </div>
                    <form id="spkForm" action="{{ route('admin.souvenir.spk.store', ['id' => $souvenir->id]) }}"
                        method="POST">
                        @csrf
                        <div class="flex flex-col items-center mt-[3.25rem]">
                            <table class="w-[95%] rounded-t-lg overflow-hidden">
                                <thead class="border border-green-main h-[50px] bg-green-main/80 text-brown-enzo">
                                    <tr>
                                        <th colspan="5">SPK PRODUKSI SOUVENIR</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main w-[100px] px-2 font-semibold">Nama</td>
                                        <td class="border border-green-main w-[210px] px-2">{{ $souvenir->user_name }}
                                        </td>
                                        <td class="border border-green-main w-[140px] px-2 font-semibold">Tgl Order</td>
                                        <td class="border border-green-main w-[140px] px-2">
                                            {{ $souvenir->created_at ? \Carbon\Carbon::parse($souvenir->created_at)->format('d-m-Y') : '-' }}
                                        </td>
                                        <td class="border border-green-main p-2 w-[450px]" rowspan="7">
                                            @if (!is_null($souvenir->desain_emboss_path))
                                                <img src="{{ asset('storage/app/public/' . $souvenir->desain_emboss_path) }}"
                                                    alt="Desain Emboss"
                                                    class="w-[75%] ml-[12.5%] object-cover rounded-md">
                                            @elseif (!is_null($souvenir->desain_thankscard_path))
                                                <img src="{{ asset('storage/app/public/' . $souvenir->desain_thankscard_path) }}"
                                                    alt="Desain Thankscard"
                                                    class="w-[75%] ml-[12.5%] object-cover rounded-md mt-2">
                                            @else
                                                <p class="text-center">Belum Terdapat Desain</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Jenis</td>
                                        <td class="border border-green-main px-2">{{ ucfirst($souvenir->product_name) }}
                                        </td>
                                        <td class="border border-green-main px-2 font-semibold">Tgl DP2</td>
                                        <td class="border border-green-main px-2">
                                            {{ $souvenir->dp2_date ? \Carbon\Carbon::parse($souvenir->dp2_date)->format('d-m-Y') : '-' }}
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Uk Jadi</td>
                                        <td class="border border-green-main px-2">{{ $souvenir->size ?? '-' }}</td>
                                        <td class="border border-green-main px-2 font-semibold">Tgl Fix Desain</td>
                                        <td class="border border-green-main px-2">
                                            {{ $souvenir->fix_design_date ? \Carbon\Carbon::parse($souvenir->fix_design_date)->format('d-m-Y') : '-' }}
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Jumlah</td>
                                        <td class="border border-green-main px-2">{{ $souvenir->quantity }}</td>
                                        <td class="border border-green-main px-2 font-semibold">Deadline</td>
                                        <td class="border border-green-main px-2">
                                            {{ $souvenir->deadline_date ? \Carbon\Carbon::parse($souvenir->deadline_date)->subDays(5)->format('d-m-Y') : '-' }}
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Kemas</td>
                                        <td class="border border-green-main px-2">{{ $souvenir->pack ?? '-' }}</td>
                                        <td class="border border-green-main px-2 font-semibold">Percetakan</td>
                                        <td class="border border-green-main px-2">{{ $souvenir->printout }}</td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Alamat</td>
                                        <td class="border border-green-main px-2" colspan="3">{{ $souvenir->address }}
                                        </td>
                                    </tr>
                                    <tr class="h-[60px]">
                                        <td class="border border-green-main h-[60px] px-2 font-semibold">Request</td>
                                        <td class="border border-green-main px-2 py-1" colspan="3">
                                            {{ $souvenir->note_design }}</td>
                                    </tr>
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
                                        <td class="border border-green-main px-2 w-[150px] font-semibold">Motif</td>
                                        <td class="border border-green-main px-2 w-[200px]">{{ $souvenir->color_motif }}
                                        </td>
                                        <td class="border border-green-main px-2 w-[150px] font-semibold">Jenis Kertas</td>
                                        <td class="border border-green-main px-2 w-[200px]">
                                            <input type="text" name="jenis_kertas"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Jenis Kertas"
                                                value="{{ $souvenir_spk->jenis_kertas ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Uk Kain</td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="ukuran_kain"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Uk Kain" value="{{ $souvenir_spk->ukuran_kain ?? '' }}">
                                        </td>
                                        <td class="border border-green-main px-2 font-semibold">Uk Kertas</td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="ukuran_kertas"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Uk Kertas" value="{{ $souvenir_spk->ukuran_kertas ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Tali</td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="tali"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Tali" value="{{ $souvenir_spk->tali ?? '' }}">
                                        </td>
                                        <td class="border border-green-main px-2 font-semibold">Uk Mika</td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="ukuran_mika"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Uk Mika" value="{{ $souvenir_spk->ukuran_mika ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Zipper</td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="zipper"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Zipper" value="{{ $souvenir_spk->zipper ?? '' }}">
                                        </td>
                                        <td class="border border-green-main px-2 font-semibold">Pita</td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="pita"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Pita" value="{{ $souvenir_spk->pita ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Kepala Zipper</td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="kepala_zipper"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Kepala Zipper"
                                                value="{{ $souvenir_spk->kepala_zipper ?? '' }}">
                                        </td>
                                        <td class="border border-green-main px-2 font-semibold">Model Pita</td>
                                        <td class="border border-green-main px-2">
                                            <input type="text" name="model_pita"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Model Pita" value="{{ $souvenir_spk->model_pita ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr class="h-[35px]">
                                        <td class="border border-green-main px-2 font-semibold">Lain-lain</td>
                                        <td class="border border-green-main px-2" colspan="3">
                                            <input type="text" name="lain_lain"
                                                class="w-full h-full rounded-sm px-2 border border-green-main"
                                                placeholder="Lain-lain" value="{{ $souvenir_spk->lain_lain ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr class="h-[40px] bg-green-main/80 text-brown-enzo">
                                        <td class="border border-green-main font-bold text-sm text-center" colspan="4">
                                            NOTE TAMBAHAN</td>
                                    </tr>
                                    <tr class="h-[40px]">
                                        <td class="border border-green-main p-2" colspan="4">
                                            <textarea name="note_tambahan" id="" class="w-full h-[50px] rounded-sm px-2 border border-green-main"
                                                placeholder="Note Tambahan">{{ $souvenir_spk->note_tambahan ?? '' }}</textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="w-[95%] mt-8 rounded-t-lg overflow-hidden">
                                <thead class="border border-green-main h-[80px] bg-green-main/80 text-brown-enzo">
                                    <tr>
                                        <th colspan="6" class="border-b border-brown-enzo">Rincian Bahan</th>
                                    </tr>
                                    <tr>
                                        <th class="w-[350px] h-[40px]">Nama Bahan</th>
                                        <th class="w-[130px] h-[40px]">Kebutuhan</th>
                                        <th class="w-[130px] h-[40px]">Stok</th>
                                        <th class="w-[130px] h-[40px]">Jumlah Beli</th>
                                        <th class="w-[350px] h-[40px]">Supplier</th>
                                        <th class="w-[350px] h-[40px]">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @if (isset($souvenir_spk->nama_bahan) && is_array($souvenir_spk->nama_bahan))
                                        @foreach ($souvenir_spk->nama_bahan as $index => $nama_bahan)
                                            <tr class="h-[35px]">
                                                <td class="border border-green-main px-2">
                                                    <input type="text" name="nama_bahan[]"
                                                        class="w-full h-full rounded-sm px-2 border border-green-main"
                                                        placeholder="Nama Bahan" value="{{ $nama_bahan }}">
                                                </td>
                                                <td class="border border-green-main px-2 text-center">
                                                    <input type="number" name="kebutuhan[]"
                                                        class="w-[60px] h-full rounded-sm border border-green-main text-center"
                                                        value="{{ $souvenir_spk->kebutuhan[$index] ?? 0 }}">
                                                </td>
                                                <td class="border border-green-main px-2 text-center">
                                                    <input type="number" name="stok[]"
                                                        class="w-[60px] h-full rounded-sm border border-green-main text-center"
                                                        value="{{ $souvenir_spk->stok[$index] ?? 0 }}">
                                                </td>
                                                <td class="border border-green-main px-2 text-center">
                                                    <input type="number" name="jumlah_beli[]"
                                                        class="w-[60px] h-full rounded-sm border border-green-main text-center"
                                                        value="{{ $souvenir_spk->jumlah_beli[$index] ?? 0 }}">
                                                </td>
                                                <td class="border border-green-main px-2">
                                                    <input type="text" name="supplier[]"
                                                        class="w-full h-full rounded-sm px-2 border border-green-main"
                                                        placeholder="Supplier"
                                                        value="{{ $souvenir_spk->supplier[$index] ?? '' }}">
                                                </td>
                                                <td class="border border-green-main px-2 text-center">
                                                    <button type="button" name="deleteSPK"
                                                        class="bg-red-500 text-white h-full rounded-sm px-2 border border-green-main">X</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                            <div class="h-[35px] mt-8 flex gap-5">
                                <a href="{{ route('pdf.generate', ['type' => 'souvenir', 'id' => $souvenir_spk->id, 'parent_id' => $souvenir->id]) }}"
                                    class="bg-brown-enzo border-2 border-transparent hover:bg-transparent hover:border-brown-enzo hover:text-brown-enzo rounded-md w-[120px] h-full transition transform duration-300 text-white font-medium text-lg text-center">Cetak</a>
                                <button id="addDataButton" type="button"
                                    class="bg-green-main border-2 border-transparent hover:bg-transparent hover:border-green-main hover:text-green-main rounded-md w-[150px] h-full transition transform duration-300 text-white font-medium text-lg">Tambah</button>
                                <button type="submit"
                                    class="bg-brown-enzo border-2 border-transparent hover:bg-transparent hover:border-brown-enzo hover:text-brown-enzo rounded-md w-[120px] h-full transition transform duration-300 text-white font-medium text-lg">Simpan</button>
                            </div>
                    </form>
            </div>
            </section>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Tangkap elemen tombol dan tbody
            const addButton = document.getElementById('addDataButton');
            const removeButton = document.getElementById('delDataButton');
            const tableBody = document.getElementById('table-body');

            // Fungsi untuk menambahkan baris baru
            addButton.addEventListener('click', (e) => {
                e.preventDefault(); // Mencegah reload halaman

                // Buat elemen <tr> baru di dalam tbody
                const newRow = document.createElement('tr');
                newRow.className = "h-[35px]";

                // Tambahkan elemen <td> untuk form input
                newRow.innerHTML = `
                <td class="border border-green-main px-2">
                    <input type="text" name="nama_bahan[]" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Nama Bahan" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="kebutuhan[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="stok[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="jumlah_beli[]" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                </td>
                <td class="border border-green-main px-2">
                    <input type="text" name="supplier[]" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Supplier" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <button type="button" name="deleteSPK" class="bg-red-500 text-white h-full rounded-sm px-2 border border-green-main">X</button>
                </td>
            </tr>
            `;

                // Tambahkan baris ke dalam tbody
                tableBody.appendChild(newRow);
            });

            tableBody.addEventListener("click", (event) => {
                if (event.target.matches('button[name="deleteSPK"]')) {
                    event.preventDefault(); // Mencegah aksi default
                    const row = event.target.closest("tr"); // Temukan baris <tr> terdekat
                    if (row) row.remove(); // Hapus baris
                }
            });
        });

        // EDIT PURCHASE
        {{-- document.querySelectorAll('[id^="editPurchase_"]').forEach(button => {
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

                    fetch("{{route('admin.souvenir.purchase.store', ['id' => $souvenir->id])}}", {
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
    }); --}}

        function openModal(event, designType) {
            event.preventDefault();

            let modalTitle = document.getElementById('modal-title');
            modalTitle.textContent = designType === 'emboss' ? "Ubah Desain Emboss / Label Nama / Sablon" :
                "Ubah Desain Thankscard";

            document.getElementById('modal-upload').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal-upload').classList.add('hidden');
        }

        function openModalThankscard() {
            event.preventDefault();
            document.getElementById('modal-upload-thankscard').classList.remove('hidden');
        }

        function closeModalThankscard() {
            document.getElementById('modal-upload-thankscard').classList.add('hidden');
        }

        function openModalFromCust() {
            event.preventDefault();
            document.getElementById('modal-upload-from-cust').classList.remove('hidden');
        }

        function closeModalFromCust() {
            document.getElementById('modal-upload-from-cust').classList.add('hidden');
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
    </script>
@endsection
<!-- </body>
</html> -->
