<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Inventory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Manajemen Inventory</h1>

    {{-- Alert Sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Form Tambah Data --}}
    <div class="card mb-4">
        <div class="card-header">Tambah Barang</div>
        <div class="card-body">
            <form action="{{ route('inventory.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="jenis_barang" class="form-label">Jenis Barang</label>
                    <select name="jenis_barang" id="jenis_barang" class="form-control" required>
                        <option value="" disabled selected>Pilih Jenis Barang</option>
                        <option value="Souvenir">Souvenir</option>
                        <option value="Hardbox">Hardbox</option>
                        <option value="Undangan">Undangan</option>
                        <option value="Keperluan Bersama">Keperluan Bersama</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="kode_bahan" class="form-label">Kode Bahan</label>
                    <input type="number" name="kode_bahan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nama_bahan" class="form-label">Nama Bahan</label>
                    <input type="text" name="nama_bahan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="stok_awal" class="form-label">Stok Awal</label>
                    <input type="number" name="stok_awal" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

    {{-- Daftar Inventory --}}
    <div class="card">
        <div class="card-header">Daftar Barang</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jenis Barang</th>
                        <th>Kode Bahan</th>
                        <th>Nama Bahan</th>
                        <th>Stok Awal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventory as $i)
                        <tr>
                            <td>{{ $i->id }}</td>
                            <td>{{ $i->jenis_barang }}</td>
                            <td>{{ $i->kode_bahan }}</td>
                            <td>{{ $i->nama_bahan }}</td>
                            <td>{{ $i->stok_awal }}</td>
                            <td>
                                {{-- Tombol Edit --}}
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $i->id }}">Edit</button>
                                {{-- Tombol Hapus --}}
                                <form action="{{ route('inventory.destroy', $i->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>

                        {{-- Modal Edit --}}
                        <div class="modal fade" id="editModal{{ $i->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('inventory.update', $i->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Barang</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                                                <input type="text" name="jenis_barang" class="form-control" value="{{ $i->jenis_barang }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_bahan" class="form-label">Kode Bahan</label>
                                                <input type="number" name="kode_bahan" class="form-control" value="{{ $i->kode_bahan }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama_bahan" class="form-label">Nama Bahan</label>
                                                <input type="text" name="nama_bahan" class="form-control" value="{{ $i->nama_bahan }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="stok_awal" class="form-label">Stok Awal</label>
                                                <input type="number" name="stok_awal" class="form-control" value="{{ $i->stok_awal }}" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
