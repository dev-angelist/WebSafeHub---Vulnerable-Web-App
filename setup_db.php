<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title>DB Setup :: WebSafeHub</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="icon" type="image/ico" href="../favicon.ico" />
    <style>
        .styled-button {
            display: inline-block;
            padding: 12px 24px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .styled-button:hover {
            background-color: #2980b9;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
        .success-message {
            color: #009900;
            font-weight: bold;
        }
        .error-message {
            color: #FF0000;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div id="container">
    <?php
    $page = 'DB Setup';
    include 'menu.php';
    ?>
    <div id="main_content">
        <div id="title_div">
            <h1>DB Setup</h1>
        </div>
        <div class="body_padded content_section">
            <p>Database Setup</p>
            <p>To use the web app, you need to generate a database. You can do this by clicking the "Create Database" button. In case of issues or to reset the web app, use the "Restore Database" button. For problems, refer to the <a href="instructions.php">Instructions</a> page.</p>

            <form method="POST">
                <label for="create_db">Create Database:</label>
                <input type="hidden" name="action" value="create_db">
                <input type="submit" class="styled-button" value="Create Database">
            </form>

            <form method="POST">
                <label for="restore_db">Restore Database:</label>
                <input type="hidden" name="action" value="restore_db">
                <input type="submit" class="styled-button" value="Restore Database">
            </form>

            <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "1ccb8097d0e9ce9f154608be60224c7c";

            function database_exists($conn, $dbname) {
                $sql = "SHOW DATABASES LIKE '$dbname'";
                $result = mysqli_query($conn, $sql);
                return mysqli_num_rows($result) > 0;
            }

            function create_database($conn, $dbname) {
                $sql = "CREATE DATABASE $dbname";
                return mysqli_query($conn, $sql);
            }

            function create_tables($conn) {
                mysqli_select_db($conn, "1ccb8097d0e9ce9f154608be60224c7c");

                $tables = [
                    "CREATE TABLE books( number INT NOT NULL , bookname VARCHAR(50) NOT NULL, authorname VARCHAR(50) NOT NULL)",
                    "CREATE TABLE flags( flag VARCHAR(50) NOT NULL)",
                    "CREATE TABLE secret( username VARCHAR(56) NOT NULL , password VARCHAR(56) NOT NULL)",
                    "CREATE TABLE users( firstname VARCHAR(50) NOT NULL , lastname VARCHAR(50) NOT NULL, username  VARCHAR(50) NOT NULL, password   VARCHAR(50) NOT NULL )"
                ];

                foreach ($tables as $sql) {
                    if (!mysqli_query($conn, $sql)) {
                        return false;
                    }
                }

                $data_inserts = [
                    "INSERT INTO books (number, bookname, authorname) VALUES (1, 'SILMARILLION', 'J.R.R TOLKIEN')",
                    "INSERT INTO books (number, bookname, authorname) VALUES (2, 'DUNE', 'FRANK HERBERT')",
                    "INSERT INTO books (number, bookname, authorname) VALUES (3, 'THE HUNGER GAMES', 'SUZANNE COLLINS')",
                    "INSERT INTO books (number, bookname, authorname) VALUES (4, 'HARRY POTTER AND THE ORDER OF THE PHOENIX', 'J.K ROWLING')",
                    "INSERT INTO books (number, bookname, authorname) VALUES (5, 'TO KILL A MOCKINGBIRD', 'HARPER LEE')",
                    "INSERT INTO books (number, bookname, authorname) VALUES (6, 'TWILIGHT', 'STEPHEINE MEYER')",
                    "INSERT INTO books (number, bookname, authorname) VALUES (7, 'THE MICE MAN', 'GEORGE COCKCROFT')",
                    "INSERT INTO flags (flag) VALUES ('You hacked me!')",
                    "INSERT INTO flags (flag) VALUES ('SQL Injection is easy?')",
                    "INSERT INTO secret (username, password) VALUES ('admin', 'password')",
                    "INSERT INTO users (firstname, lastname, username, password) VALUES ('John','Doe', 'Admin', 'password')",
                    "INSERT INTO users (firstname, lastname, username, password) VALUES ('Alice','Carrol', 'Rabbit', 'White')",
                    "INSERT INTO users (firstname, lastname, username, password) VALUES ('Bruce','Batman', 'Alfred', 'Batmobile')",
                    "INSERT INTO users (firstname, lastname, username, password) VALUES ('Dare','Devil', 'HackMe', 'IfY0UC4N')",
                    "INSERT INTO users (firstname, lastname, username, password) VALUES ('Leo','Super', 'Sux', 'EatProtein')",
                    "INSERT INTO users (firstname, lastname, username, password) VALUES ('Vitolo','Bartoliva', 'Irr03', 'LionsGo')"
                ];

                foreach ($data_inserts as $sql) {
                    if (!mysqli_query($conn, $sql)) {
                        return false;
                    }
                }

                return true;
            }

            function remove_database($conn, $dbname) {
                $sql = "DROP DATABASE $dbname";
                return mysqli_query($conn, $sql);
            }

            $conn = mysqli_connect($servername, $username, $password);
            if (!$conn) {
                die("<p class='error-message'>Connection failed: " . mysqli_connect_error() . ". Please refer to the <a href='instructions.php'>Instructions</a> page.</p>");
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_POST['action'] == 'create_db') {
                    if (database_exists($conn, $dbname)) {
                        echo "<p class='success-message'>Database already exists. If you encounter issues, use the restore button below to reset the database.</p>";
                    } else {
                        if (create_database($conn, $dbname) && create_tables($conn)) {
                            echo "<p class='success-message'>Database created successfully. You can now use the web app!</p>";
                        } else {
                            echo "<p class='error-message'>Error creating database or tables. Please refer to the <a href='instructions.php'>Instructions</a> page.</p>";
                        }
                    }
                } elseif ($_POST['action'] == 'restore_db') {
                    if (remove_database($conn, $dbname) && create_database($conn, $dbname) && create_tables($conn)) {
                        echo "<p class='success-message'>Database restored successfully. You can now use the web app!</p>";
                    } else {
                        echo "<p class='error-message'>Error restoring database. Please refer to the <a href='instructions.php'>Instructions</a> page.</p>";
                    }
                }
            }

            mysqli_close($conn);
            ?>
            
        </div>
    </div>
</div>
</body>
</html>
