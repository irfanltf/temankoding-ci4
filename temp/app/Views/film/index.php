<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">


                <h1>Semua film</h1>

            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Film</th>
                        <th>Genre</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1;
                    foreach ($data_film as $film) :  ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><img width="50px" src="/assets/cover/<?= $film["cover"]; ?>"></td>
                            <td><?= $film["nama_film"] ?></td>
                            <td><?= $film["nama_genre"] ?></td>
                            <td><?= $film["duration"] ?></td>
                            <td>
                                <a href="" class="btn btn-success">Update</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>