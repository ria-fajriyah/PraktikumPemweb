<html>
<body>
    <title>Login</title>
    <h1> Login </h1>
    <form method="POST" action="proses.php">
        <label> Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input name="nama" type="text" placeholder="Nama"> 
        <br />
        <br />
        <label> NIM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input name="nim" type="text" placeholder="NIM"><br />
        <br />
        <label> Jabatan&nbsp;&nbsp;&nbsp;&nbsp;: </label>
        <select name="jabatan" >
        <option value="Kepala Departemen"> Kepala Departemen</option>
        <option value="Menteri">Menteri</option>
        </select><br />
        <br />
        </table>
        <input name="login" type="submit" value="Login">
    </form>
</body>
</html>