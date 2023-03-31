<html>
<head>
  <title>Program Kerja</title>
</head>
<body>
  <h2 align="center">Daftar Program Kerja BEM</h2>
  <table border="1" align="center">
  <tbody>
    <tr>
      <td>No</td>
      <td>Nama Program Kerja</td>
      <td>Surat Keterangan</td>
      <td>Edit</td>
      <td>Hapus</td>
    </tr>
  </tbody>
  <?php
  foreach ($proker as $program){
      echo "<tr>,
      <td>$program[nomorProgram]</td>
      <td>$program[namaProgram]</td>
      <td>$program[suratKeterangan]</td>
      <td><a href =\"edit_proker.php?nomorProgram=$program[nomorProgram]&e=1\">Edit</a></td>
      <td><a href =\"proker.php?nomorProgram=$program[nomorProgram]&f=1\">Delete</a></td>
      </tr>";
  }
  ?>
  </table>
  <form action="edit_proker.php" method="POST" align="center"><br>
    <input type="submit" value="Tambah Proker">
  </form>
  <form action="logout.php" method="POST" align="center"><br>
    <input type="submit" value="Logout">
  </form>    
</body>
</html>