<?php 
$produk = [
    [
        "#" => 1,
        "NAMA PRODUK" => "JAKET PRIA",
        "KATEGORI PRODUK" => "FASHION",
        "IMAGE" => "http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png",
        "STOK" => 300,
        "HARGA" => 170.000,
        "PENJUALAN" => 200,
    ],

    [
        "#" => 2,
        "NAMA PRODUK" => "JAKET WANITA",
        "KATEGORI PRODUK" => "FASHION",
        "IMAGE" => "http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png",
        "STOK" => 300,
        "HARGA" => 250.000,
        "PENJUALAN" => 100,

    ]
 ];

 $sum = array_sum(array_column($produk,"PENJUALAN"));

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRODUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAMA PRODUK</th>
      <th scope="col">KATEGORI PRODUK</th>
      <th scope="col">IMAGE</th>
      <th scope="col">STOK</th>
      <th scope="col">HARGA</th>
      <th scope="col">PENJUALAN</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($produk as $p) : ?>
    <tr>
      <td scope="row"><?=$p["#"]  ?></td>
      <td><?=$p["NAMA PRODUK"]  ?></td>
      <td><?=$p["KATEGORI PRODUK"] ?></td>
      <td><img src="<?=$p["IMAGE"] ?>"/></td>
      <td><?=$p["STOK"]  ?></td>
      <td><?=$p["HARGA"] ?></td>
      <td><?=$p["PENJUALAN"] ?></td>
    </tr>
    <?php 
    endforeach;
    ?>
    <td colspan="6">SUM</td>
    <td>
    <?php 
      echo $sum;
    ?>
    </td>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>