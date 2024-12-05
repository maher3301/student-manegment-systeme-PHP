<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    // Requête préparée pour éviter les injections SQL
    $stmt = $data->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $name, $pass);  // "ss" signifie deux paramètres de type string
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        if ($row["usertype"] == "student") {
            $_SESSION['username']=$name;
            $_SESSION['usertype']="student";
            header("Location: studenthome.php");
            exit();
        } elseif ($row["usertype"] == "admin") {
            header("Location: adminhome.php");
            exit();
        }
    } else {
        echo "Username or password not match";
    }

    $stmt->close();
}
?>
