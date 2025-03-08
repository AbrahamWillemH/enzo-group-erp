<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Produksi Souvenir (Cust)</title>
    <style>
        @page {
            size: F4 portrait;
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

        th,
        td {
            border: 1px solid #000000;
            padding: 2px;
            text-align: left;
        }

        th {
            font-weight: 700;
            text-align: center;
            height: 10px;
            font-size: 11px;
        }

        td {
            height: 8px;
            font-size: 11px;
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

            input,
            textarea {
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
                        <th colspan="5"><b>SPK PRODUKSI SOUVENIR - {{ $parent->id }}</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 80px"><b>Nama</b></td>
                        <td style="width: 140px"><span class="text-value">{{ $parent->user_name }}</span></td>
                        <td style="width: 80px"><b>Tgl Order</b></td>
                        <td style="width: 80px"><span
                                class="text-value">{{ $parent->created_at ? \Carbon\Carbon::parse($parent->created_at)->format('d-m-Y') : '-' }}</span>
                        </td>
                        <td rowspan="7">
                            <img src="{{ 'file:///home/username/public_html/erp.enzocreatives.com/storage/app/public/' . $parent->desain_path }}"
                                alt="Desain" style="width: 80%; height: auto; border-radius: 5px; margin-left: 10%;">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Jenis</b></td>
                        <td><span class="text-value">{{ ucfirst($parent->product_name) }}</span></td>
                        <td><b>Tgl DP2</b></td>
                        <td><span
                                class="text-value">{{ $parent->dp2_date ? \Carbon\Carbon::parse($parent->dp2_date)->format('d-m-Y') : '-' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Uk Jadi</b></td>
                        <td><span class="text-value">{{ $parent->size ?? '-' }}</span></td>
                        <td><b>Tgl Fix Desain</b></td>
                        <td><span
                                class="text-value">{{ $parent->fix_design_date ? \Carbon\Carbon::parse($parent->fix_design_date)->format('d-m-Y') : '-' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Jumlah</b></td>
                        <td><span class="text-value">{{ $parent->quantity }}</span></td>
                        <td><b>Deadline</b></td>
                        <td><span class="text-value">
                                {{ $parent->deadline_date ? \Carbon\Carbon::parse($parent->deadline_date)->subDays(5)->format('d/m/Y') : '-' }}
                            </span></td>
                    </tr>
                    <tr>
                        <td><b>Kemas</b></td>
                        <td><span class="text-value">{{ $parent->pack ?? '-' }}</span></td>
                        <td><b>Percetakan</b></td>
                        <td><span class="text-value">{{ $parent->printout }}</span></td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b></td>
                        <td colspan="3">
                            <span class="text-value">{{ $parent->address }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Request</b></td>
                        <td colspan="3">
                            <span class="text-value">{{ $parent->note_design }}</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th colspan="8"><b>Rincian Request</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 40px"><b>Motif</b></td>
                        <td style="width: 70px"><span class="text-value">{{ $parent->color_motif }}</span></td>
                        <td style="width: 40px"><b>Jen. Kertas</b></td>
                        <td style="width: 70px"><span class="text-value">{{ $details->jenis_kertas ?? '' }}</span></td>
                        <td style="width: 40px"><b>Uk Kain</b></td>
                        <td style="width: 70px"><span class="text-value">{{ $details->ukuran_kain ?? '' }}</span></td>
                        <td style="width: 40px"><b>Uk Kertas</b></td>
                        <td style="width: 70px"><span class="text-value">{{ $details->ukuran_kertas ?? '' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tali</b></td>
                        <td><span class="text-value">{{ $details->tali ?? '' }}</span></td>
                        <td><b>Uk Mika</b></td>
                        <td><span class="text-value">{{ $details->ukuran_mika ?? '' }}</span></td>
                        <td><b>Zipper</b></td>
                        <td><span class="text-value">{{ $details->zipper ?? '' }}</span></td>
                        <td><b>Pita</b></td>
                        <td><span class="text-value">{{ $details->pita ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td><b>Kp. Zipper</b></td>
                        <td><span class="text-value">{{ $details->kepala_zipper ?? '' }}</span></td>
                        <td><b>Model Pita</b></td>
                        <td><span class="text-value">{{ $details->model_pita ?? '' }}</span></td>
                        <td><b>Lain-lain</b></td>
                        <td><span class="text-value">{{ $details->lain_lain ?? '' }}</span></td>
                        <td><b>Note</b></td>
                        <td><span class="text-value">{{ $details->note_tambahan ?? '' }}</span></td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th colspan="5"><b>Rincian Bahan</b></th>
                    </tr>
                    <tr>
                        <th style="width: 100px"><b>Nama Bahan</b></th>
                        <th style="width: 70px"><b>Kebutuhan</b></th>
                        <th style="width: 70px"><b>Stok</b></th>
                        <th style="width: 70px"><b>Jumlah Beli</b></th>
                        <th style="width: 100px"><b>Supplier</b></th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($details->nama_bahan) && is_array($details->nama_bahan))
                        @foreach ($details->nama_bahan as $index => $nama_bahan)
                            <tr>
                                <td><span class="text-value">{{ $nama_bahan }}</span></td>
                                <td class="qty"><span
                                        class="text-value">{{ $details->kebutuhan[$index] ?? 0 }}</span></td>
                                <td class="qty"><span class="text-value ">{{ $details->stok[$index] ?? 0 }}</span>
                                </td>
                                <td class="qty"><span
                                        class="text-value">{{ $details->jumlah_beli[$index] ?? 0 }}</span></td>
                                <td><span class="text-value">{{ $details->supplier[$index] ?? '' }}</span></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <table style="width:80%" class="table-acc">
                <thead>
                    <th style="width: 60px"><b>ACC CS</b></th>
                    <th style="width: 60px"><b>ACC DESAIN</b></th>
                    <th style="width: 60px"><b>ACC PPIC</b></th>
                    <th style="width: 60px"><b>ACC GUDANG</b></th>
                    <th style="width: 60px"><b>ACC DIREKTUR</b></th>
                </thead>
                <tbody>
                    <tr>
                        <td style="height: 40px"></td>
                        <td style="height: 40px"></td>
                        <td style="height: 40px"></td>
                        <td style="height: 40px"></td>
                        <td style="height: 40px"></td>
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
