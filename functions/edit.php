<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        if(empty($code) || empty($name)){
            if(empty($code)){
                echo "<font color='red'>Subject Code field is empty.</font><br>";
            }
            if(empty($name)){
                echo "<font color='red'>Subject Name field is empty.</font><br>";
            }
        }
        else{
            $stmt = mysqli_prepare($dbc, "UPDATE tblsubjects SET Subject_Code=?, Subject_Name=? WHERE Subject_ID=?");
            mysqli_stmt_bind_param($stmt, "ssi", $code, $name, $id);
            if (mysqli_stmt_execute($stmt)) {
                header("Location: ../index.php");
            } else {
                echo "<font color='red'>Error updating data.</font><br>";
            }
        }
    }
?>
