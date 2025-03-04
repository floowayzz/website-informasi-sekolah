<?php 
require 'Koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link rel="stylesheet" href="belajar2.css">
</head>
<body>

    <a href="../home.php" class="back-button" style="display:inline-block; padding:10px 20px; 
    background-color:#FF6969; color:#fff; text-decoration:none; border-radius:5px; margin:20px; 
    box-shadow:0 0 5px rgb(164, 122, 255);">Back</a>
    
    <form method="post">
    <table>
    <th colspan="4">Daftar Nilai MKK XI RPL 1</th>
    <tr>
        <td>nis</td>
        <td>: <input type='number' name='nis'>
    </tr>
    <tr>
    </tr>
    <tr>
        <td>Nama</td>
        <td>: <input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Kelas </td>
        <td>: <select name="kelas" placeholder="silakan pilih kelas">
                <option>XI RPL 1</option>
                <option>XI RPL 2</option>
          </select></td>
    </tr>
    <tr>
       <td>Nilai</td>
       <td>: <input type="number" name="nilai"></td>
    </tr>
    <tr>
         <td><input type="submit" name="simpan" value="Submit"></td>
    </tr>
    </table>
  </form>
</table>
<table border='1'>
    <th>Nama</th>
    <th>Nis</th>
    <th>Kelas</th>
    <th>Nilai</th>
    <th>Operator</th>
    <?php foreach($siswas as $row) :?>
    <tr>
        <td><?php echo $row['Nama']; ?></td>
        <td><?php echo $row['Nis']; ?></td>
        <td><?php echo $row['Kelas']; ?></td>
        <td><?php echo $row['Nilai']; ?></td>
        <td>
            <a href="update.php?Nis=<?php echo $row['Nis'];?>"><button>Ubah</button></a>
            <a href="delete.php?Nis=<?php echo $row['Nis']; ?>"><button>Hapus</button></a>
        </td>
    </tr>
    <?php endforeach; ?>

    <script>
            var idleTime = 0;

            // Fungsi ini akan dijalankan setiap 1 menit
            setInterval(timerIncrement, 1000);

            // Reset idleTime jika ada aktivitas dari mouse atau keyboard
            window.onload = resetTimer;
            window.onmousemove = resetTimer;
            window.onkeypress = resetTimer;

            function resetTimer() {
                idleTime = 0;
            }

            function timerIncrement() {
                idleTime++;
                if (idleTime >= 5) { // Waktu tidak ada aktivitas dalam menit, misal 5 menit
                    window.location.href = "../logot.php"; // Panggil halaman logout php 
                }
            }

        </script>
    </body>
</html>