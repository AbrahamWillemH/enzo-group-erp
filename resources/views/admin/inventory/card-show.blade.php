<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Card Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Detail Inventory Card</h1>
    <h2>Nama Barang: {{ $inventory->nama_bahan }}</h2>
    <h3>Stok Saat Ini: {{ $stok_sekarang }}</h3>

    <h2>Riwayat Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jenis Transaksi</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventory->transactions as $transaction)
                <tr>
                    <td>{{ $transaction->tanggal_transaksi }}</td>
                    <td>{{ $transaction->tipe_transaksi }}</td>
                    <td>{{ $transaction->jumlah_barang }}</td>
                    <td>{{ $transaction->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
