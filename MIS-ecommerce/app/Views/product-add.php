<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi dengan CodeIgniter</title>
</head>

<body>
    <center>
        <h1>Sistem Informasi dengan CodeIgniter</h1>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?= base_url('/product-add/store') ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>produk</td>
                <td><input type="text" name="produk"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>