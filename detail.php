<?php 
    require_once 'connect.php';
    $id = $_GET['id'];
    $row = $connect->query("SELECT * FROM recipe WHERE id='$id'");
    $row = mysqli_fetch_assoc($row);
    $menu = $row['menu'];
    $image = $row['image'];
    $deskripsi = $row['deskripsi'];
    $fat = $row['fat'];
    $kalori = $row['calory'];
    $karbs = $row['carbs'];
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
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="#">Recipe Resto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="soal3.php">Home</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="<?=$image?>">
            </div>
            <div class="col-md-8">
                <p class="text-info">Food</p>
                <h4><?=$menu?></h4>
                <p class="text-justify">
                   <?=$deskripsi?>
                </p>
                <div class="mt-4">
                    <div class="row">
                        <div class="col bg-light">
                            <h5 class="text-success">Calories</h5>
                            <h3><?=$kalori?></h3>
                        </div>
                        <div class="col bg-light">
                            <h5 class="text-success">Fat</h5>
                            <h3><?=$fat?> <sub>G</sub></h3>
                        </div>
                        <div class="col bg-light">
                            <h5 class="text-success">Carbs</h5>
                            <h3><?=$karbs?><sub>G</sub></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>