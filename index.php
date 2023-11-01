<?php
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>
<!DOCTYPE html>
<html>
        <style>
                body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
            }

            header {
                text-align: center;
                background-color: #007bff;
                color: #fff;
                padding: 10px;
            }

            h1 {
                text-align: center;
            }
            a.addbtn{
                margin-left: 140px;
                text-decoration: none;
                display: inline-block;
                background-color: crimson;
                color: white;
                font-size: 13px;
                padding: 8px 15px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }
            .button {
                text-decoration: none;
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                font-weight: bold;
                transition: background-color 0.3s;
                margin-left: 20px;
            }

            .button:hover {
                background-color: #0056b3;
            }

            table {
                width: 80%;
                margin: 2px auto;
                border-collapse: collapse;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                background-color: #fff;
            }

            table th, table td {
                border: 1px solid #ccc;
                padding: 10px;
                text-align: center;
            }

            table th {
                background-color: #007bff;
                color: #fff;
            }

            table tbody tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            table tbody tr:hover {
                background-color: #e0e0e0;
            }

            .action-link {
                text-decoration: none;
                margin: 5px;
                padding: 5px 10px;
                border-radius: 3px;
                color: #fff;
            }

            .edit-link {
                background-color: #28a745;
            }

            .delete-link {
                background-color: #dc3545;
            }
            a.edit{
                color: blue;
            }
            a.delete{
                color: red;
            }
        </style>
    <head>
        <title>Sample CRUD</title>
    </head>
    <body>
        <h1>My Subjects</h1>
        <a href="forms/addform.php" class="addbtn">Add Subject</a><br/><br/>
        <table>
            <tr style="background:#CCCCCC;">
                <th>ID</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Action</th>
            </tr>
            <?php
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['Subject_ID']."</td>";
                    echo "<td>".$res['Subject_Code']."</td>";
                    echo "<td>".$res['Subject_Name']."</td>";
                    echo "<td>
                            <a href=\"forms/editform.php?id={$res['Subject_ID']}\" class=\"edit\">Edit</a> |
                            <a href=\"functions/delete.php?id={$res['Subject_ID']}\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"delete\">Delete</a>
                          </td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
