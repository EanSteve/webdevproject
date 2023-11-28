<html>
    <head>
        <body>
            <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])){
                $code = $_POST['code'];
                $author = $_POST['author'];
                $subject = $_POST['subject'];

                if(empty($code) || empty($author)){
                    if(empty($code)){
                        echo "<font color='red'>Syllabus code field is empty</font><br/>";
                    }
                    if(empty($author)){
                        echo "<font color='red'>Syllabus author field is empty</font><br/>";
                    }
                    echo "<br/><a href ='javascript:self:history.back();'>Go Back</a>";
                }
                else {
                    $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(Syllabus_Code, Syllabus_Author, Subject_ID) VALUES('$code', '$author', '$subject')");

                    echo "<p style='color: green; font-size: 1.5em;'>Data added successfully!</p>";
                    echo "<a href='../index.php' style='color: blue; font-size: 1.3em;'>View Results</a>";
             }
            }

            ?>

    </body>
</head>
</html>
