<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nilai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // This block handles the password reset request form submission
    $email = $_POST['email'];

    // Check if email exists in the database
    $sql = "SELECT * FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Redirect to reset password page with email
            header("Location: forgot_password.php?email=" . urlencode($email));
            exit();
        } else {
            echo "No account found with that email address.";
        }
        $stmt->close();
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Password Reset</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center">Password Recovery</h3></div>
                        <div class="card-body">
                            <div class="small mb-3 text-muted">Enter your email address to reset your password.</div>
                            <form method="POST">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" required />
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="login.html">Return to login</a>
                                    <button type="submit" class="btn btn-primary">Verify Email</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
