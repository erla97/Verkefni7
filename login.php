<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
    <?php
        $email = $_GET['netfang'];
        $pwd = $_GET['lykilord'];

        $servername = "localhost";
        $username = "*****";
        $password = "*****";
        $dbname = "V7";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT lykilord from Notendur where netfang = $netfang";
            $conn->exec([$netfang]);
            echo "virkar";
            $storedPwd = $conn->fetchColumn();

            if (password_verify($pwd, $storedPwd)) {
                $_SESSION['authenticated'] = 'Jethro Tull';
                // get the time the session started
                $_SESSION['start'] = time();
                session_regenerate_id();
                header("Location: admin.php");
                echo "Log in successfull";
                exit;
            } else {
                // if not verified, prepare error message
                $error = 'Invalid username or password';
            }
        } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
    ?>
    </body>
</html>