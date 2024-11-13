<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>

<body>
    <h1 align="center"><?php echo $content; ?></h1>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>produk</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($products as $product) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $product['produk'] ?></td>
                <td><?php echo $product['harga'] ?></td>
                <td><?php echo $product['jumlah'] ?></td>
                <td>
                    <a href="<?= base_url('/product-edit/edit/' . $product['id'])
                        ?>">Edit</a>
                    <a href="<?= base_url('product-destroy/destroy/' . $product['id'])
                        ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <span style="display: flex; justify-content:center;">
        <h2>
            <a href="<?= base_url('product-add') ?>">Klik Untuk Masuk
                Halaman Tambah Data</a>
        </h2>
    </span>
</body>
</body>

</html>