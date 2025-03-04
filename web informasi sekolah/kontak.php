<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <!-- Menghubungkan Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHq+6TZT3H6WgK+UV9X9LAXN2c6qez+HUM2jqxL9M3GvjHVQEmN0Rv2ExRVKAsuV3gf9aYJw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .contact-item {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .contact-item h3 {
            color: #5cb85c;
            margin-left: 10px;
        }

        .contact-item p, .contact-item a {
            font-size: 16px;
            margin-left: 10px;
            color: #555;
        }

        .contact-item a {
            color: #007bff;
            text-decoration: none;
        }

        .contact-item a:hover {
            text-decoration: underline;
        }

        .icon {
            font-size: 24px;
            color: #5cb85c;
        }

        /* Styling untuk tombol kembali */
        .btn-kembali {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .btn-kembali button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-kembali button:hover {
            background-color: #0056b3;
        }

        /* Styling untuk Google Maps */
        .map-container {
            margin-top: 20px;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hubungi Kami</h2>

        <div class="contact-item">
            <i class="fab fa-whatsapp icon"></i>
            <p><a href="https://wa.me/628568555672" target="_blank">+62 856 8555 672</a></p>
        </div>

        <div class="contact-item">
            <i class="fab fa-instagram icon"></i>
            <p><a href="https://www.instagram.com/smkn71Jakarta/" target="_blank">@smkn71Jakarta</a></p>
        </div>

        <div class="contact-item">
            <i class="fas fa-globe icon"></i>
            <p><a href="https://smkn71jakarta.sch.id/" target="_blank">www.smkn71Jakarta.sch.id</a></p>
        </div>

        <div class="contact-item">
            <i class="fas fa-map-marker-alt icon"></i>
            <p>Jl. Radjiman Widyodiningrat Pulo Jahe, Jatinegara, Kec. Cakung,  Jakarta Timur</p>
        </div>

        <!-- Bagian Google Maps -->
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.916141497194!2d106.82715331531127!3d-6.180495195527708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15272117c43%3A0x8ef0b3a137019f9f!2sJl.%20Pendidikan%20No.123%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1631899531377!5m2!1sen!2sid" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>

        <div class="btn-kembali">
            <button onclick="window.history.back();">Kembali</button>
        </div>
    </div>
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
                    window.location.href = "index.php"; // Panggil halaman logout php 
                }
            }

        </script>
</body>
</html>
