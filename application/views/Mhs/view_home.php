<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-4">
        <h1>Selamat Datang <?= $_SESSION['nama'] ?>!</h1>
        <h5>SISTEM INFORMASI MANAJEMEN GRUP KELAS DAN PRAKTIKUM ONLINE</h5>
        <hr>
        <!-- cards -->
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
            <div class="col">
                <a href="<?php echo site_url('/mhs/home/groupkelas'); ?>" class="card h-100 shadow-sm text-decoration-none text-black">
                    <img height='238' src="https://media.istockphoto.com/vectors/empty-school-class-room-vector-id950633894?b=1&k=20&m=950633894&s=612x612&w=0&h=jY0Zh3vMNBFr86Hk1bUf0PKu-MmaGydT_W4S21_kxTI=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ">Grup Kelas</h5>
                        <p class="card-text">Manajemen Grup Kelas</p>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="<?php echo site_url('/mhs/home/grouppraktikum'); ?>" class="card h-100 shadow-sm text-decoration-none text-black">
                    <img height='238' src="https://previews.123rf.com/images/gmast3r/gmast3r1511/gmast3r151100177/47575685-device-data-share-laptop-phone-and-tablet-information-synchronize-vector-illustration.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ">Grup Praktikum</h5>
                        <p class="card-text">Manajemen Grup Praktikum</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>