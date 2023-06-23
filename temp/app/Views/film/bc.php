<!DOCTYPE html>
<html>

<head>
    <title>LK 23</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LK 23</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Semua Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kategori Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Daftar Film</h1>

        <div class="row">
            <?php foreach ($semuafilm as $film) : ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="/assets/cover/<?= $film['cover'] ?>" class="card-img-top full-width-image" alt="Poster Film">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $film['nama_film'] ?></h5>
                            <p class="card-text"><?= $film['nama_genre'] ?> || <?= $film['duration'] ?></p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>