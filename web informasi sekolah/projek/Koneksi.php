<?php
        //Menghubungkan ke database
        $conn = mysqli_connect("localhost","root","","belajar1");
        function query($query){
            global $conn;
            $result = mysqli_query($conn,$query); 
            $rows = [];
            while($row = mysqli_fetch_assoc($result)){
                $rows[]= $row;
            }
            return $rows;
        }

    //function untuk menambah data
    if (isset($_POST['simpan'])){
        Function create($data){
            global $conn;

            //mengambil data dari form dan jadikan variabel
            $nama = htmlspecialchars($data["nama"]);
            $nis = htmlspecialchars($data["nis"]);
            $nilai = htmlspecialchars($data["nilai"]);
            $kelas = htmlspecialchars($data["kelas"]);

            $sqlcek = "SELECT * FROM siswa WHERE Nis = '$nis'";
            $sqlcek2 = "SELECT * FROM siswa WHERE Nama = '$nama'";
            $hasilcek = $conn->query($sqlcek);
            $hasilcek2 = $conn->query($sqlcek2);
            if($hasilcek->num_rows > 0 || $hasilcek2->num_rows > 0){
                echo "<script>alert('Data sudah ada');</script>";
            }else{
                //query untuk menambakan data
                $query = "INSERT INTO siswa VALUES ('$nama','$nis','$kelas','$nilai')";
                mysqli_query($conn, $query);
                return mysqli_affected_rows($conn);
            }
        }
        //output hasil akhir 
        if(create($_POST) > 0){
            echo "<script>alert('Data berhasil ditambahkan');</script>";
        }else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    $siswas = mysqli_query($conn, "SELECT * FROM siswa");

    if (isset($_POST["ubah"])) {
        // Function to update data
        function update($data) {
            global $conn;
            
            // Sanitizing input data
            $nama = htmlspecialchars($data["nama"]);
            $nis = htmlspecialchars($data["nis"]);
            $kelas = htmlspecialchars($data["kelas"]);
            $nilai = htmlspecialchars($data["nilai"]);
    
            // Check if the data already exists (either by 'nis' or 'nama')
            $sqlcek = "SELECT * FROM siswa WHERE Nis = '$nis'";
            $sqlcek2 = "SELECT * FROM siswa WHERE Nama = '$nama'";
            $hasilcek = $conn->query($sqlcek);
            $hasilcek2 = $conn->query($sqlcek2);
    
            if ($hasilcek->num_rows > 0 || $hasilcek2->num_rows > 0) {
                 // Query to update data if it doesn't exist
                 $query = "UPDATE siswa SET Kelas = '$kelas', Nilai = '$nilai' WHERE Nis = '$nis'";
    
                 // Running the update query
                 if (mysqli_query($conn, $query)) {
                     echo "<script>alert('Data berhasil diubah');</script>";
                 } else {
                     // Query failed
                     echo "<script>alert('Gagal mengubah data: " . mysqli_error($conn) . "');</script>";
                 }
                
            } else {
               // If data already exists
               echo "<script>alert('Data sudah ada');</script>";
               $hasil1 = 1;
   
               if ($hasil1 == 1) {
                   echo "<script>alert('Data gagal diubah');</script>";
               }
            }
            echo "<script>window.location = 'Belajar1.php';</script>"; // Redirect to Belajar1.php
            return mysqli_affected_rows($conn); // Returns number of rows affected by the query
        }
    
        // Call the function to update data
        $result = update($_POST);
    }
    
    
//query mengambil data sesuai dengan data per page dan urut sesuai absen



?>
