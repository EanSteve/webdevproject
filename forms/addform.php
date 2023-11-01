<!DOCTYPE html>
<html>
<head>
    <title>Add Subject</title>
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
            padding: 13px 28px;
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
        <form action="../functions/add.php" method="post" name="form1">
            <table>
            <h1>Add Subject</h1>
                <tr>
                    <td>Subject Code</td>
                    <td><input type="text" name="code"></td>
                </tr>
                <tr>
                    <td>Subject Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="Submit" value="Add">
                        <a class="btn" href="../index.php">Cancel</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
