<!DOCTYPE html>
<html lang="en">
<head>

    <?php

        include 'session.php';
        cekudahlogin();

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            color: #333;
        }

        .container {
            text-align: center;
            padding: 80px 20px;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #2b2b52;
            animation: slideIn 1.5s ease-in-out;
        }

        p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 40px;
            animation: fadeIn 2s ease-in-out;
        }

        .btn {
            text-decoration: none;
            background-color: #2ecc71;
            color: #fff;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
            animation: bounce 3s infinite;
            display: inline-block;
        }

        .btn:hover {
            background-color: #27ae60;
        }

        /* Animations */
        @keyframes slideIn {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-15px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            p {
                font-size: 1rem;
            }

            .btn {
                padding: 12px 25px;
                font-size: 1rem;
            }

            .container {
                padding: 60px 10px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 0.9rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .container {
                padding: 50px 10px;
            }
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat Datang</h1>
        <p>Di Website SMKN 71 Jakarta.</p>
        <a href="login.php" class="btn">Silahkan Login</a>
    </div>

</body>
</html>