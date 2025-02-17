<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Produksi Packaging (Cust)</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 30px 40px 30px 40px;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .info_tambahan {
            padding-bottom: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto 30px auto;
        }

        th, td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }

        th {
            font-weight: 700;
            text-align: center;
            height: 35px;
        }

        td {
            height: 30px;
        }

        .hidden-input {
            display: none;
        }

        .text-value {
            font-weight: 400;
            color: #000;
        }

        .qty {
            text-align: center;
        }

        .table-acc {
            page-break-inside: avoid;
        }

        @media print {
            input, textarea {
                display: none;
            }

            .text-value {
                display: block;
            }
        }
    </style>
</head>
<body>

    <section class="info_tambahan">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th colspan="5"><b>SPK PRODUKSI PACKAGING</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 100px"><b>Nama</b></td>
                        <td style="width: 210px"><span class="text-value">Bejo</span></td>
                        <td style="width: 140px"><b>Tgl Order</b></td>
                        <td style="width: 140px"><span class="text-value">25-2-2025</span></td>
                        <td rowspan="7">
                            <img src="{{ public_path('img/undanganA.jpeg') }}" alt="" style="width: 100%; height: auto; border-radius: 5px;">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Jenis</b></td>
                        <td><span class="text-value">Undangan</span></td>
                        <td><b>Tgl DP2</b></td>
                        <td><span class="text-value">25-2-2025</span></td>
                    </tr>
                    <tr>
                        <td><b>Uk Jadi</b></td>
                        <td><span class="text-value">10x20</span></td>
                        <td><b>Tgl Fix Desain</b></td>
                        <td><span class="text-value">25-2-2025</span></td>
                    </tr>
                    <tr>
                        <td><b>Jumlah</b></td>
                        <td><span class="text-value">100</span></td>
                        <td><b>Deadline</b></td>
                        <td><span class="text-value">25-2-2025</span></td>
                    </tr>
                    <tr>
                        <td><b>Packing</b></td>
                        <td><span class="text-value">Lorem ipsum</span></td>
                        <td><b>Percetakan</b></td>
                        <td><span class="text-value">Hasbona</span></td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b></td>
                        <td colspan="3">
                            <span class="text-value">Lorem ipsum dolor sit amet.</span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Request</b></td>
                        <td colspan="3">
                            <span class="text-value">Permintaan khusus pelanggan...</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th colspan="4"><b>Rincian Request</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 150px"><b>Foil</b></td>
                        <td style="width: 200px"><span class="text-value">Foil emas</span></td>
                        <td style="width: 150px"><b>Tali</b></td>
                        <td style="width: 200px"><span class="text-value">Merah</span></td>
                    </tr>
                    <tr>
                        <td><b>Kertas Foil</b></td>
                        <td><span class="text-value">Kertas premium</span></td>
                        <td><b>Warna Tali</b></td>
                        <td><span class="text-value">Hitam</span></td>
                    </tr>
                    <tr>
                        <td><b>Laminasi</b></td>
                        <td><span class="text-value">Glossy</span></td>
                        <td><b>Brosur</b></td>
                        <td><span class="text-value">Coklat</span></td>
                    </tr>
                    <tr>
                        <td><b>Pita</b></td>
                        <td><span class="text-value">Lorem, ipsum dolor.</span></td>
                        <td><b>Ornamen</b></td>
                        <td><span class="text-value">Lorem, ipsum.</span></td>
                    </tr>
                    <tr>
                        <td><b>Attire/thankscard</b></td>
                        <td><span class="text-value">Lorem, ipsum.</span></td>
                        <td><b>Lain-lain</b></td>
                        <td><span class="text-value">Lorem.</span></td>
                    </tr>
                    <tr>
                        <td><b>Embos</b></td>
                        <td><span class="text-value">Lorem, ipsum.</span></td>
                        <td><b>Sekat</b></td>
                        <td><span class="text-value">lorem</span></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: center"><b>NOTE TAMBAHAN</b></td>
                    </tr>
                    <tr>
                        <td colspan="4"><span class="text-value">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th colspan="6"><b>Rincian Bahan</b></th>
                    </tr>
                    <tr>
                        <th style="width: 200px"><b>Nama Bahan</b></th>
                        <th style="width: 200px"><b>Ukuran</b></th>
                        <th style="width: 100px"><b>Kebutuhan</b></th>
                        <th style="width: 100px"><b>Stok</b></th>
                        <th style="width: 100px"><b>Jumlah Beli</b></th>
                        <th style="width: 200px"><b>Supplier</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="text-value">Kertas Linen</span></td>
                        <td><span class="text-value">A4</span></td>
                        <td class="qty"><span class="text-value">50</span></td>
                        <td class="qty"><span class="text-value ">20</span></td>
                        <td class="qty"><span class="text-value">30</span></td>
                        <td><span class="text-value">CV Kertas Jaya</span></td>
                    </tr>
                    <tr>
                        <td><span class="text-value">Kertas Linen</span></td>
                        <td><span class="text-value">A4</span></td>
                        <td class="qty"><span class="text-value">50</span></td>
                        <td class="qty"><span class="text-value ">20</span></td>
                        <td class="qty"><span class="text-value">30</span></td>
                        <td><span class="text-value">CV Kertas Jaya</span></td>
                    </tr>
                </tbody>
            </table>

            <table style="width:80%" class="table-acc">
                <thead>
                    <th style="width: 60px"><b>ACC CS</b></th>
                    <th style="width: 40px"><b>ACC DESAIN</b></th>
                    <th style="width: 60px"><b>ACC PPIC</b></th>
                    <th style="width: 40px"><b>ACC GUDANG</b></th>
                    <th style="width: 40px"><b>ACC DIREKTUR</b></th>
                </thead>
                <tbody>
                    <tr>
                        <td style="height: 70px"></td>
                        <td style="height: 70px"></td>
                        <td style="height: 70px"></td>
                        <td style="height: 70px"></td>
                        <td style="height: 70px"></td>
                    </tr>
                    <tr>
                        <td style="height: 20px"></td>
                        <td style="height: 20px"></td>
                        <td style="height: 20px"></td>
                        <td style="height: 20px"></td>
                        <td style="height: 20px"></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>

</body>
</html>


</body>
</html>
