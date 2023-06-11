<?php 

$conn = mysqli_connect("localhost", "root", "", "barcware");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; 
    }
    return $rows;
    }

    function registrasi($id){
        global $conn;
        $nisn = strtolower (stripslashes($id["nisn"]));
        $password = mysqli_real_escape_string ($conn, $id["password"]);
        $password2 = mysqli_real_escape_string ($conn, $id["password2"]);
        $tingkat = strtolower (stripslashes($id["tingkat"]));

        if ($password!==$password2){
            echo "<script>
                alert('Confirm password does not match!');
                document.location.href='regist.php';
                </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = mysqli_query($conn, "SELECT nisn FROM user WHERE nisn = '$nisn'");
        
        if (mysqli_fetch_assoc($result)){
            echo "<script> 
                alert('Username already Used!');
            </script>";
            
            return false;
        }

        mysqli_query($conn, "INSERT INTO user VALUES('', '$nisn', '$password', '$tingkat')");

        return mysqli_affected_rows($conn);
    }
?>