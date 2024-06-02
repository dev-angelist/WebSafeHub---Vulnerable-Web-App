<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title>SQLi :: WebSafeHub</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="icon" type="image/ico" href="../favicon.ico" />
</head>
<body>
<div id="container">
    <?php
    $page = 'SQL Injection';
    include '../../menu.php';
    ?>
    <div id="main_content">
        <div id="title_div">
            <h1>SQL Injection</h1>
        </div>
        <div class="body_padded content_section">
            <h2>Understanding SQL Injection</h2>
            <p>SQL Injection is a web security vulnerability that allows an attacker to interfere with the queries that an application makes to its database. It generally allows an attacker to view data that they are not normally able to retrieve. This might include data belonging to other users, or any other data that the application itself is able to access. In many cases, an attacker can modify or delete this data, causing persistent changes to the application's content or behavior.</p>
        </div>
        <div class="body_padded content_section">
            <h2>Exercises</h2>
            <ul>
                <li><a href="sqli1.php"><em>SQL Injection Exercise 1</em></a></li>
                <li><a href="sqli2.php"><em>SQL Injection Exercise 2</em></a></li>
                <li><a href="sqli3.php"><em>SQL Injection Exercise 3</em></a></li>
                <!-- Add more exercises as needed -->
            </ul>
        </div>
        <div class="body_padded content_section">
            <h2>Mitigation Strategies</h2>
            <p>To prevent SQL Injection attacks, it is essential to use parameterized queries and prepared statements. These methods ensure that SQL code is separated from data, preventing attackers from injecting malicious SQL code into queries.</p>
            <p>Other effective strategies include:</p>
            <ul>
                <li>Using stored procedures</li>
                <li>Validating and sanitizing user inputs</li>
                <li>Implementing proper error handling</li>
                <li>Using ORM (Object-Relational Mapping) frameworks</li>
                <li>Limiting database permissions</li>
            </ul>
        </div>
        <div class="body_padded content_section">
            <h2>References</h2>
            <ul>
                <li><a href="https://owasp.org/www-community/attacks/SQL_Injection" target="_blank">OWASP: SQL Injection</a></li>
                <li><a href="https://www.w3schools.com/sql/sql_injection.asp" target="_blank">W3Schools: SQL Injection</a></li>
                <li><a href="https://portswigger.net/web-security/sql-injection" target="_blank">PortSwigger: SQL Injection</a></li>
                <!-- Add more references as needed -->
            </ul>
        </div>
    </div>
</div>
</body>
</html>
