<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Produksi Undangan (Cust)</title>
    <style>
        @page {
            size: F4 portrait;
            margin: 10px 40px 10px 40px;
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
                        <th colspan="5"><b>SPK PRODUKSI UNDANGAN - {{ $parent->id }}</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 80px"><b>Nama</b></td>
                        <td style="width: 140px"><span class="text-value">{{ $parent->user_name }}</span></td>
                        <td style="width: 80px"><b>Tgl Order</b></td>
                        <td style="width: 80px"><span
                                class="text-value">{{ \Carbon\Carbon::parse($parent->created_at)->format('d/m/Y') }}</span>
                        </td>
                        <td rowspan="6">
                            <img src="{{ 'file:///home/username/public_html/erp.enzocreatives.com/storage/app/public/' . $parent->desain_path }}"
                                alt="Desain" style="width: 100%; height: auto; border-radius: 5px;">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Jenis</b></td>
                        <td><span class="text-value">{{ $parent->product_name }}</span></td>
                        <td><b>Tgl DP2</b></td>
                        <td><span
                                class="text-value">{{ $parent->dp2_date ? \Carbon\Carbon::parse($parent->dp2_date)->format('d/m/Y') : '-' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Uk Jadi</b></td>
                        <td><span class="text-value">{{ $parent->size_fix }}</span></td>
                        <td><b>Tgl Fix Desain</b></td>
                        <td><span
                                class="text-value">{{ $parent->fix_design_date ? \Carbon\Carbon::parse($parent->fix_design_date)->format('d/m/Y') : '-' }}</span>
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
                        <td><b>Alamat</b></td>
                        <td><span class="text-value">{{ $parent->address }}</span></td>
                        <td><b>Percetakan</b></td>
                        <td><span class="text-value">{{ $parent->printout }}</span></td>
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
                    <tr style="height: auto;">
                        <td style="width: 40px"><b>Foil</b></td>
                        <td style="width: 70px"><span class="text-value">{{ $details->foil }}</span></td>
                        <td style="width: 40px"><b>Tussel</b></td>
                        <td style="width: 70px"><span class="text-value">{{ $details->tussel }}</span></td>
                        <td style="width: 40px"><b>Ker. Foil</b></td>
                        <td style="width: 70px"><span class="text-value">{{ $details->kertas_foil }}</span></td>
                        <td style="width: 40px"><b>Pita</b></td>
                        <td style="width: 70px"><span class="text-value">{{ $details->pita }}</span></td>
                    </tr>
                    <tr>
                        <td><b>Laminasi</b></td>
                        <td><span class="text-value">{{ $details->laminasi }}</span></td>
                        <td><b>Tali Rami</b></td>
                        <td><span class="text-value">{{ $details->tali_rami }}</span></td>
                        <td><b>Kartu</b></td>
                        <td><span class="text-value">{{ $details->kartu }}</span></td>
                        <td><b>Waxseal</b></td>
                        <td><span class="text-value">{{ $details->waxseal }}</span></td>
                    </tr>
                    <tr>
                        <td><b>Label Nama</b></td>
                        <td><span class="text-value">{{ $details->label_nama }}</span></td>
                        <td><b>Kalkir</b></td>
                        <td><span class="text-value">{{ $details->kalkir }}</span></td>
                        <td><b>Plastik</b></td>
                        <td><span class="text-value">{{ $details->plastik }}</span></td>
                        <td><b>Kain Goni</b></td>
                        <td><span class="text-value">{{ $details->kain_goni }}</span></td>
                    </tr>
                    <tr>
                        <td><b>Gunungan</b></td>
                        <td><span class="text-value">{{ $details->gunungan }}</span></td>
                        <td><b>Ornamen</b></td>
                        <td><span class="text-value">{{ $details->ornamen }}</span></td>
                        <td><b>Lain-lain</b></td>
                        <td><span class="text-value">{{ $details->lain_lain }}</span></td>
                        <td><b>Note</b></td>
                        <td><span class="text-value">{{ $details->note_tambahan }}</span></td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th colspan="6"><b>Rincian Bahan</b></th>
                    </tr>
                    <tr>
                        <th style="width: 100px"><b>Peruntukan</b></th>
                        <th style="width: 100px"><b>Nama dan Ukuran</b></th>
                        <th style="width: 70px"><b>Kebutuhan</b></th>
                        <th style="width: 70px"><b>Stok</b></th>
                        <th style="width: 70px"><b>Jumlah Beli</b></th>
                        <th style="width: 100px"><b>Supplier</b></th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($details->peruntukan) && is_array($details->peruntukan))
                        @foreach ($details->peruntukan as $index => $peruntukan)
                            <tr>
                                <td><span class="text-value">{{ $peruntukan }}</span></td>
                                <td><span class="text-value">{{ $details->nama_ukuran[$index] ?? '' }}</span></td>
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
