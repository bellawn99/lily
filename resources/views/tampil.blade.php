<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Lily Florist">
        <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

        <title>Lily Florist</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/bootstrap/css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ url('/') }}/bootstrap/css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ url('/') }}/bootstrap/css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="{{ url('/') }}/bootstrap/css/style.css" rel="stylesheet">



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>Lily Florist</h1>
        </div>
        <div class="img-holder mt-3"><img src="{{ url('/') }}/bootstrap/images/fix.png" alt="phone" class="img-fluid"></div>
    </header>

    <?php
$url = "http://127.0.0.1:8000/api/bunga";
$data = json_decode(file_get_contents($url), true);
// $record = $data[0]['kode_bunga'];
// var_dump($record);

echo "<table border='1'>
        <tr>
        <th>Kode Bunga</th>
        <th>Nama Bunga</th>
        <th>Gambar Bunga</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Kategori</th>
        <th>Action</th>
        </tr>
";

$bunga = $data[0];
for ($i=0; $i<count($data); $i++){
    $record = $data[$i];
    echo "
        <tr>
        <td>".$record['kode_bunga']."</td>
        <td>".$record['nama']."</td>
        <td><img src='".$record['gambar']."' width='80%' height='15%'/></td>
        <td>".$record['deskripsi']."</td>
        <td>".$record['harga']."</td>
        <td>".$record['jumlah']."</td>
        <td>".$record['kategori']."</td>
        </tr>
    ";
}


?>

            <!-- jQuery and Bootstrap -->
    <script src="{{ url('/') }}/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="{{ url('/') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="{{ url('/') }}/bootstrap/js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ url('/') }}/bootstrap/js/script.js"></script>

    </body>
</html>
