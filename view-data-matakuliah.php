<html>
<head>
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mata Kuliah</th></tr>
                <tr><td colspan="3"><hr></td></tr>
            <tr>
            <th>Kode MTK   :</th><th><?= $kode; ?></th>
            </tr>
            <tr>
                <th>Nama MTK  :</th><th><?= $nama; ?></th>
            </tr>
            <tr>
            <th>SKS               :</th><th><?= $sks; ?></th>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Matakuliah/cetak'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>