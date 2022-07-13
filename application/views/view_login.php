<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STIMULAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-white">
    <div class="container text-center h-100" style="color:#002856">
        <img height="200" src="https://pascasarjana.uad.ac.id/wp-content/uploads/Logo-UAD-warna1.png" class="mt-4" alt="logo uad">
        <div class="row row-cols-1 row-cols-md-2 mt-5 g-5">
            <div class="col text-md-end">
                <h1 class="mt-4" style="font-weight:bold;">STIMULAN</h1>
                <h2 class="mt-4">Sistem Informasi Manajemen Group Kelas dan Praktikum Online</h5>
                <h5>"Menjadi Program Studi Informatika yang diakui internasional dan unggul dalam bidang Informatika serta berbasis nilai-nilai Islam."</h5>
            </div>
            <div class="col p-2">
                <div class="container-fluid bg-white w-100 text-start shadow-lg border rounded p-5 align-middle">
                    <?= $this->session->flashdata('message');
                    ?>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('/'); ?>
                    <label for="username">Username</label><br>
                    <input class='form-control' type="text" name='username'><br>
                    <label for="password">Password</label><br>
                    <input class='form-control' type="password" name='password'><br>
                    <input class='btn btn-primary w-100' type="submit" value='Login' style="background-color:#002856">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>