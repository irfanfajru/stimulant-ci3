<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('/mhs/home'); ?>">STIMULAN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site_url('/mhs/home'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/mhs/home/groupkelas'); ?>">Grup Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/mhs/home/grouppraktikum'); ?>">Grup Praktikum</a>
                </li>
            </ul>
            <span class="navbar-text ">
                <div class="dropdown">
                    <a class="btn border dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['nama'] ?>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= base_url('/mhs/home/logout') ?>">Logout</a></li>
                    </ul>
                </div>
            </span>
        </div>
    </div>
</nav>