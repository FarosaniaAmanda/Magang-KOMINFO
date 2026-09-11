<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>
        Laporan Survey Kepuasan Masyarakat
    </title>

    <style>

        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            color: #222;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .header h2 {
            margin: 0;
            font-size: 18px;
        }

        .header h3 {
            margin: 8px 0 0;
            font-size: 15px;
        }

        .header p {
            margin: 5px 0;
            color: #555;
        }

        .summary {
            margin-bottom: 20px;
        }

        .summary table {
            width: 100%;
        }

        .summary td {
            padding: 6px;
        }

        table.data {
            width: 100%;
            border-collapse: collapse;
        }

        table.data th,
        table.data td {
            border: 1px solid #ccc;
            padding: 7px;
            vertical-align: top;
        }

        table.data th {
            background: #eeeeee;
            text-align: center;
        }

        .stars {
            color: #e5a800;
            white-space: nowrap;
        }

        .footer {
            margin-top: 25px;
            text-align: right;
            color: #666;
            font-size: 10px;
        }

    </style>

</head>


<body>


    <div class="header">

        <h2>
            PEMERINTAH KOTA PASURUAN
        </h2>

        <p>
            E-Government Kota Pasuruan
        </p>

        <h3>
            LAPORAN SURVEY KEPUASAN MASYARAKAT
        </h3>

        <p>
            Data hasil survey masyarakat
        </p>

    </div>



    <div class="summary">

        <table>

            <tr>

                <td>
                    <strong>Total Responden</strong>
                </td>

                <td>
                    {{ $survey->count() }} responden
                </td>


                <td>
                    <strong>Rata-rata Rating</strong>
                </td>

                <td>
                    {{ $rataRating ? number_format($rataRating, 1) : '0.0' }}
                    / 5
                </td>

            </tr>

        </table>

    </div>



    <table class="data">

        <thead>

            <tr>

                <th width="4%">
                    No
                </th>

                <th width="15%">
                    Nama
                </th>

                <th width="13%">
                    WhatsApp
                </th>

                <th width="15%">
                    Domisili
                </th>

                <th width="10%">
                    Rating
                </th>

                <th width="25%">
                    Saran & Masukan
                </th>

                <th width="13%">
                    Tanggal
                </th>

            </tr>

        </thead>


        <tbody>

            @forelse($survey as $index => $item)

                <tr>

                    <td style="text-align:center;">
                        {{ $index + 1 }}
                    </td>

                    <td>
                        {{ $item->nama }}
                    </td>

                    <td>
                        {{ $item->no_wa ?: '-' }}
                    </td>

                    <td>
                        {{ $item->alamat }}
                    </td>

                    <td style="text-align:center;">

                        <span class="stars">

                            {{ str_repeat('★', $item->rating) }}

                        </span>

                        <br>

                        {{ $item->rating }}/5

                    </td>

                    <td>
                        {{ $item->pesan }}
                    </td>

                    <td>
                        {{ $item->created_at->format('d-m-Y') }}
                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7"
                        style="text-align:center;">

                        Tidak ada data survey.

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>



    <div class="footer">

        Dicetak pada:
        {{ now()->format('d-m-Y H:i') }}

    </div>


</body>

</html>