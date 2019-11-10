<html>
  <head>
    <title>Form Edit - CRUD Codeigniter</title>
  </head>
  <body>
    <h1>Form Ubah Data Mahasiswa</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php 
      $no=1; foreach ($mhs as $panggil) {
     ?>
      <table cellpadding="8">
        <form href="<?php echo base_url('C_proses/editmhs');?>">
        <tr>
          <td><input type="hidden" name="id" value="<?php echo $panggil['nim']?>" ></td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><input type="text" name="nim" value="<?php echo $panggil['nim']?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value="<?php echo $panggil['namamahasiswa']?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <select name="jk">
              <option value="laki-laki" <?php echo $panggil['jeniskelamin'] == 'lak-laki' ?'selected':''?>> laki-laki</option>
              <option value="perempuan" <?php echo $panggil['jeniskelamin'] == 'perempuan' ?'selected':''?>> perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" value="<?php echo $panggil['alamat']?>"></td>
        </tr>
        <tr>
        <tr>
          <td>No_Hp</td>
          <td><input type="text" name="no_hp" value="<?php echo $panggil['no_hp']?>"></td>
        </tr>

          <td></td>
          <td><input type="submit" name="submit" value="Update"></td>
        </tr>
        </form>
      <?php } ?>
      </table>
  </body>
</html>