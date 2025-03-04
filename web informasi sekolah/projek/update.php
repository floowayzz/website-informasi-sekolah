    <?php 
        include 'Koneksi.php';

        $nis = $_GET['Nis'];
        $siswa = query("SELECT * from siswa where Nis = '$nis'")[0];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
                display:flex;
                justify-content:center;
            }
            form{
                font-family:verdana;
                background: white;
                width: 400px;
                padding: 10px;
                align-items:center;
                display:flex;
                border-radius:5px;
                box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2);
                flex-direction:column;
                margin-bottom:50px;
                border:1px solid black;
                font-size:15px;
            }
            .input{
                display:flex;
                padding:5px;
                border:1px solid black;
                margin-bottom:5px;
                width: 300px;
            }
            #btn{
                background: rgb(140, 216, 140);
                padding: 5px;
                cursor:pointer;
            }
            #btn:hover{
                background-color: rgb(110, 230, 110);
            }
        </style>
    </head>
    <body>
        <form method="post" action="" >
            <table>
                <th colspan="2">Ubah data nilai</th>
                
                </tr>
                <tr class="input" style="background:skyblue;">
                    <td>Nis :</td>
                    <td> <input type="number" name="nis" value="<?=$siswa['Nis']?>"></td>
                </tr>
                <tr class="input">
                    <td>Nama :</td>
                    <td><input type="text" name="nama" required value="<?=$siswa['Nama']?>" ></td>
                </tr>
                <tr class="input" style="background:skyblue;">
                    <td>Kelas :</td>
                    <td>
                        <select name="kelas">
                            <option><?=$siswa['Kelas']?></option>
                            <option>X RPL 1</option>
                            <option>X RPL 2</option>
                            <option>XI RPL 1</option>
                            <option>XI RPL 2</option>
                        </select>
                    </td>
                </tr>
                <tr class="input">
                    <td>Nilai :</td>
                    <td> <input type="number" name="nilai"  required value="<?=$siswa['Nilai']?>"></td>
                </tr>
                <tr>
                    <td><input id="btn" type="submit" name="ubah" value="Ubah data"></td>
                </tr>
            </table>
        </form>
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
                    window.location.href = "../index.php"; // Panggil halaman logout php 
                }
            }

        </script>
    </body>
    </html>