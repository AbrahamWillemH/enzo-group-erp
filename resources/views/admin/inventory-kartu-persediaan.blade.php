@extends('layouts.admin')

@section('content')
<h1>Kartu Persediaan</h1>

<table>
    <thead>
        <tr>
            <th>Jenis Barang</th>
            <th>Kode Bahan</th>
            <th>Nama Bahan</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($inventories as $inventory)
            <tr>
                <td>{{ $inventory->name }}</td>
                <td>{{ $inventory->category }}</td>
                <td>{{ $inventory->stock }}</td>
                <td>{{ $inventory->unit }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
