<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Praktikum</title>
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
            <h4 class="d-inline me-2">Group Praktikum</h4>
            <a href="<?= site_url('/admin/grouppraktikum/add') ?>" class="d-inline text-white p-2 text-decoration-none" style="background-color:#002856">Tambah +</a>
            <div></div>
            <input class="form-control w-25 d-inline searchbox-input" type="text" placeholder="cari disini ...">
            <button class="d-inline btn btn-primary border-0 w-" onClick="buttonUp()" style="background-color:#002856">Cari</button>
        </div>
        <?= $this->session->flashdata('hapus'); ?>
        <div class="row mt-4 row-cols-1 row-cols-md-4 g-3 mt-5">
            <?php foreach ($prak as $i) { ?>
                <div class="col">
                    <div class="card h-100 shadow-sm text-decoration-none text-black">
                        <div style="background-color:#002856">
                            <p class="text-center text-white">Semester</p>
                            <h1 class="text-white text-center"><?= $i->semester ?></h1>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title "><?= $i->matkul ?></h4>
                            <a href="<?= $i->link ?>" class="card-text text-primary"><?= $i->link ?></a>
                            <p class="card-text"><?= $i->slot ?> - <?= $i->dosen ?></p>
                            <a href="<?= site_url('/admin/grouppraktikum/edit/') . $i->id ?>" class="btn btn-warning">edit</a>
                            <a href="<?= site_url('/admin/grouppraktikum/delete/') . $i->id ?>" class="btn btn-danger">delete</a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        var buttonUp = () => {
            const input = document.querySelector(".searchbox-input");
            const cards = document.getElementsByClassName("card");
            let filter = input.value
            for (let i = 0; i < cards.length; i++) {
                let title = cards[i].querySelector(".card-body");
                if (title.innerText.indexOf(filter) > -1) {
                    cards[i].classList.remove("d-none")
                } else {
                    cards[i].classList.add("d-none")
                }
            }
        }
    </script>
</body>

</html>