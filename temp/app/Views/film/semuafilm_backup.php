<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data Film </h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Nama Film</th>
            <th>Genre</th>
            <th>Durasi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($semuafilm as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="/assets/cover/<?= $row['cover'] ?>" style="width:40px" alt=""></td>
                <td><?php echo $row['nama_film'] ?></td>
                <td><?= $row['nama_genre'] ?></td>
                <td><?= $row['duration'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>