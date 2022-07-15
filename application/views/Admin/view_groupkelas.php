<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="text-center">
            <h2>STIMULAN</h1>
                <h5>SISTEM INFORMASI MANAJEMEN GROUP KELAS DAN PRAKTIKUM ONLINE</h5>
                <p>Tahun Ajaran 2021/2022</p>
        </div>
        <div class="mt-5 mb-3 row row-cols-1 row-cols-md-6 text-center">
            <h4 class="d-inline me-2">Group kelas</h4>
            <a href="<?= site_url('admin/groupkelas/add') ?>" class="d-inline text-white p-2 text-decoration-none" style="background-color:#002856">Tambah +</a>
            <div></div>
            <input class="form-control w-25 d-inline" type="text" placeholder="cari disini ...">
            <button class="d-inline btn btn-primary border-0 w-" style="background-color:#002856">Cari</button>
        </div>
        <?= $this->session->flashdata('hapus'); ?>
        <div class="mb-4 row row-cols-1 row-cols-md-4 g-3 mt-5">
            <!-- iterate matkul data -->
            <?php foreach ($matkul as $i) { ?>
                <div class="col">
                    <div class="card h-100 shadow-sm text-decoration-none text-black">
                        <div style="background-color:#002856">
                            <p class="text-center text-white">Semester</p>
                            <h1 class="text-white text-center"><?= $i->semester ?></h1>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title "><?= $i->matkul ?></h4>
                            <a href="<?= $i->link ?>" class="card-text text-primary"><?= $i->link ?></a>
                            <p class="card-text"><?= strtoupper($i->kelas) ?> - <?= $i->dosen ?></p>
                            <a href="<?= site_url('admin/groupkelas/edit/') . $i->id ?>" class="btn btn-warning">edit</a>
                            <a href="<?= site_url('admin/groupkelas/delete/') . $i->id ?>" class="btn btn-danger">delete</a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>