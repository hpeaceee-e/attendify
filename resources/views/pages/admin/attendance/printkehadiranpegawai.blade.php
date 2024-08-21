<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>
        Cetak Kehadiran Pegawai
    </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('demo5/src/assets/css/dashlite.css?ver=3.0.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('demo5/src/assets/css/theme.css?ver=3.0.3') }}">
</head>

<body class="bg-white" onload="printPromot()">
    <div class="nk-block">
        <div class="invoice invoice-print">
            <div class="invoice-wrap">
                <div class="invoice-brand text-center">
                    <img src="{{ asset('demo5/src/images/logo-dark.png') }}"
                        srcset="{{ asset('demo5/src/images/logo-dark2x.png 2x') }}" alt="">
                </div>
                <div class="invoice-head">
                    <div class="invoice-contact">
                        <span class="overline-title">Report</span>
                        <div class="invoice-contact-info">
                            <h4 class="title">Kelola Data Pegawai</h4>
                            {{-- <ul class="list-plain">
                                <li><em class="icon ni ni-map-pin-fill fs-18px"></em><span>House #65, 4328 Marion
                                        Street<br>Newbury, VT 05051</span></li>
                                <li><em class="icon ni ni-call-fill fs-14px"></em><span>+012 8764 556</span></li>
                            </ul> --}}
                        </div>
                    </div>
                </div><!-- .invoice-head -->
                <div class="invoice-bills">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Nama Pegawai</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Tanggal Verifikasi</th>
                                    <th>Jadwal</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00001</td>
                                    <td>Faldi Reza</td>
                                    <td>faldi@polsub</td>
                                    <td>12345</td>
                                    <td>Pegawai</td>
                                    <td>20 Agustus 2024</td>
                                    <td>08.00 - 15.00</td>
                                </tr>
                                <tr>
                                    <td>00001</td>
                                    <td>Faldi Reza</td>
                                    <td>faldi@polsub</td>
                                    <td>12345</td>
                                    <td>Pegawai</td>
                                    <td>20 Agustus 2024</td>
                                    <td>08.00 - 15.00</td>
                                </tr>
                                <tr>
                                    <td>00001</td>
                                    <td>Faldi Reza</td>
                                    <td>faldi@polsub</td>
                                    <td>12345</td>
                                    <td>Pegawai</td>
                                    <td>20 Agustus 2024</td>
                                    <td>08.00 - 15.00</td>
                                </tr>
                                <tr>
                                    <td>00001</td>
                                    <td>Faldi Reza</td>
                                    <td>faldi@polsub</td>
                                    <td>12345</td>
                                    <td>Pegawai</td>
                                    <td>20 Agustus 2024</td>
                                    <td>08.00 - 15.00</td>
                                </tr>
                                <tr>
                                    <td>00001</td>
                                    <td>Faldi Reza</td>
                                    <td>faldi@polsub</td>
                                    <td>12345</td>
                                    <td>Pegawai</td>
                                    <td>20 Agustus 2024</td>
                                    <td>08.00 - 15.00</td>
                                </tr>
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Subtotal</td>
                                    <td>$435.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Processing fee</td>
                                    <td>$10.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">TAX</td>
                                    <td>$43.50</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Grand Total</td>
                                    <td>$478.50</td>
                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                </div><!-- .invoice-bills -->
            </div><!-- .invoice-wrap -->
        </div><!-- .invoice -->
    </div><!-- .nk-block -->
    <script>
        function printPromot() {
            window.print();
        }
    </script>
</body>

</html>