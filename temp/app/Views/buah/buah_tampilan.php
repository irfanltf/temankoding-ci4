<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buah-buahan</title>
</head>

<body>

    <h1>Data Buah-buahan</h1>

    <table border="1">
        <tr>
            <th>Nama Buah</th>
            <th>Warna Buah</th>
            <th>Jenis Tumbuhan</th>
        </tr>

        <?php foreach ($buahbuahan as $buah) : ?>
            <tr>
                <td><?= $buah["nama_buah"] ?></td>
                <td><?= $buah["warna_buah"] ?></td>
                <td><?= $buah["jenis_tumbuhan"] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>