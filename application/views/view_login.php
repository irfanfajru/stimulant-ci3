<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STIMULAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-warning">
    <div class="container text-center">
        <img src="https://pascasarjana.uad.ac.id/wp-content/uploads/Logo-UAD-warna1.png" class="mt-4 w-25" alt="logo uad">
        <h1 class="text-white mt-4">STIMULAN</h1>
        <h5 class="text-white mt-4">Sistem Informasi Manajemen Group Kelas dan Praktikum Online</h5>
        <div class="container-xl bg-white w-50 text-start mt-4 shadow-lg border rounded p-5 align-middle">
            <?= $this->session->flashdata('message');
            ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('/'); ?>
            <label for="username">Username</label><br>
            <input class='form-control' type="text" name='username'><br>
            <label for="password">Password</label><br>
            <input class='form-control' type="password" name='password'><br>
            <input class='btn btn-primary w-100' type="submit" value='Login'>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>