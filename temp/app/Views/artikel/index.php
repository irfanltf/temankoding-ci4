<html lang="en">

<head>
    <title>Artikel</title>
</head>

<body>
    <h1>List Artikel</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($artikels as $artikel) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $artikel['judul'] ?></td>
                <td><?= $artikel['penulis'] ?></td>
                <td><?= $artikel['tanggal'] ?></td>
                <td></td>

            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>