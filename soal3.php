<?php 
    require_once 'connect.php';
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
        <div class="row mt-4">

            <?php 
                $result = $connect->query("SELECT * FROM recipe");
                foreach ($result as $r){
            ?>

            <div class="col-md-4">
                <div class="card">
                    <img src="<?=$r['image']?>"  style="width: 350px;height:230px;">
                    <div class="card-body">
                        <h5 class="card-title"><?=$r['menu']?></h5>
                        <p class="card-text">
                            <?=$r['deskripsi'] ?>
                        </p>
                        <a href="detail.php?id=<?=$r['id']?>" class="btn btn-outline-warning">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?> 
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>