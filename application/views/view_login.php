<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STIMULANT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
</head>

<body class="bg-light">
    <div class="container bg-white w-25 mt-4 shadow-sm border rounded p-2 align-middle">
        <h1>Login</h1>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>