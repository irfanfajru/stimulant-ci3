<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Group Kelas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-4">
        <!-- head -->
        <div class="row row-cols-1 row-cols-md-2 g-2 mt-3">
            <div class="col">
                <h2>
                    GRUP KELAS 2021/2022
                </h2>
            </div>
            <div class="col">
                <div class="row row-cols-1 row-cols-md-2 g-2">
                    <div class='col'>
                        <input type='text' id='search' class='form-control' />
                    </div>
                    <div class='col'>
                        <button class='btn btn-primary w-50'>Cari</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- table grup kelas -->
        <div class="table-responsive">
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Matakuliah</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Dosen</th>
                        <th scope="col">Link Grup</th>
                    </tr>
                </thead>
                <tbody id='tablematkul'>
                    <?php
                    $index = 0;
                    foreach ($matkul as $i) {
                        $index++;
                    ?>
                        <tr>
                            <th scope="row"><?= $index ?></th>
                            <td><?= $i->matkul ?></td>
                            <td><?= $i->semester ?></td>
                            <td><?= strtoupper($i->kelas) ?></td>
                            <td><?= $i->dosen ?></td>
                            <td><a href='<?= $i->link ?>' target='_blank' class='btn btn-success'>Gabung Sekarang</a hre='<?= $i->link ?>'></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#tablematkul tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>