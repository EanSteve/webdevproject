<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    
    // Check if the 'id' parameter is set and is a valid number
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        
        // Use prepared statements to prevent SQL injection
        $stmt = mysqli_prepare($dbc, "SELECT * FROM tblsubjects WHERE Subject_ID = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($res = mysqli_fetch_array($result)) {
            $code = $res['Subject_Code'];
            $name = $res['Subject_Name'];
        } else {
            // Handle the case when no data is found for the given ID
            echo "No data found for ID: " . $id;
            exit;
        }
    } else {
        // Handle invalid or missing 'id' parameter
        echo "Invalid or missing 'id' parameter.";
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        form {
            margin-top: 150px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        table {
            width: 100%;
        }
        table tr {
            margin: 10px;
        }
        table td {
            padding: 10px;
            font-size: 15px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"]{
            background-color: #007bff;
            color: #fff;
            margin-left: 25px;
            padding: 13px 21px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        a.btn {
            display: inline-block;
            text-decoration: none;
            background-color: red;
            color: #fff;
            font-size: 13px;
            padding: 13px 21px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 10px;
        }
    </style>
    </head>
    <body>
    <div class="container">
    <form action="../functions/edit.php" method="post" name="form1">
        <table style="border:0;">
        <h1>Edit subject</h1>
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code" value="<?php echo htmlspecialchars($code); ?>"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" name="update" value="Update">
                    <a class="btn" href="../index.php">Cancel</a>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
