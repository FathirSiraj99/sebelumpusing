<?php 
    $data = [
        "kalimat1"=>"Latihan UTS",
        "kalimat2"=>"Tanggal:".date('Y-m-d'),
        "kalimat3"=>"Belajar PHP itu Menyenangkan"
    ];
    // uppercase
    $kalimat1 = strtoupper($data['kalimat1']);
    // explode
    $kalimat2 = explode(":",$data['kalimat2']);
    $tgl = $kalimat2[1];
    // reverse
    $kalimat3 = strrev($data['kalimat3']);
    // substring
    $tahun = substr($data['kalimat2'],10,2); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soal 1 - UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-lg-8 text-center bg-success">
               <h1><?=$kalimat1 ?></h1>
            </div>
            <div class="col-lg-8 bg-warning">
               <p class="float-end">Tanggal: <?=$tgl?></p>
            </div>
            <div class="col-lg-8 bg-info">
               <p class="float-end">Tahun: <?=$tahun?></p>
            </div>
            <div class="col-lg-8 bg-dark">
               <p class="text-center text-light"><?=$kalimat3?></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>