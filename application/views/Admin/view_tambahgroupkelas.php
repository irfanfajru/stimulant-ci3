<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-4">
        <div class="container text-center">
            <h1>STIMULAN</h1>
            <h5>SISTEM INFORMASI MANAJEMEN GRUP KELAS DAN PRAKTIKUM ONLINE</h5>
            <p>Tahun Ajaran 2021/2022</p>
            <hr>
        </div>
        <?= $this->session->flashdata('tambah'); ?>
        <?php echo validation_errors(); ?>
        <?php echo form_open(''); ?>
        <label for="matkul">matkul</label><br>
        <input class='form-control' type="text" name='matkul'><br>
        <label for="semester">semester</label><br>
        <input class='form-control' type="number" min='1' max='8' name='semester'><br>
        <label for="kelas">kelas</label><br>
        <input class='form-control' type="text" name='kelas'><br>
        <label for="dosen">dosen</label><br>
        <input class='form-control' type="text" name='dosen'><br>
        <label for="link">link</label><br>
        <input class='form-control' type="url" name='link'><br>
        <input class='btn btn-primary w-100' type="submit" value='Add' style="background-color:#002856">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>