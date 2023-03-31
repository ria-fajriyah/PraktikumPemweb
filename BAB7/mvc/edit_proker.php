<?php
include "koneksiMVC.php";
    if (empty($_GET['e']))
        $title = "Tambah Proker";
    else {
        $e = $_GET['e'];
        $title = "Edit Proker";
    }
?>
<html>
<head>
    <meta>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1 align="center"><?php echo $title ?></h1>
    <form method="POST" action="proker.php" align="center">
        <input type="hidden" name="e" value="<?php if(isset($data)) echo $data['nomorProgram'];?>"/>
        <table border="0" align="center">
            <tr>
            <td>Nomor Program</td>
            <td><input name="nomorProgram" type="text"value="<?php if (isset($data['nomorProgram'])) echo $data['nomorProgram'] ?>"/></td>
            </tr>
            <tr>
            <td>Nama Program</td>
            <td><input name="namaProgram" type="text"value="<?php if (isset($data)) echo $data['namaProgram'] ?>"/></td>
            </tr>
            <tr>
            <td>Surat Keterangan</td>
            <td><input name="suratKeterangan"type="text" value="<?php if (isset($data)) echo $data['suratKeterangan'] ?>"/></td>
            </tr>
            <tr>
            <td></td>
            <td colspan="2"><input type="submit" value="Submit"/></td>
            </tr>
        </table>
    </form>
</body>
</html>