

<title>Form Login</title>
<div align='center'>
  <form action="<?php echo site_url('Account/proses_login');?>" method="post">
  <h1>Masuk</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="in_username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="in_password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
