<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h1>Genre Film</h1>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <tr>
                        <th>No</th>

                        <th>Nama Genre</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($data_genre as $genre) : ?>
                        <tr>
                            <td><?= $i++; ?></td>

                            <td><?php echo $genre['nama_genre'] ?></td>
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