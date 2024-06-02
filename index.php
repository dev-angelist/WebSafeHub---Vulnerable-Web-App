<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title>WebSafeHub :: Vulnerable Web Application</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="icon" type="image/ico" href="favicon.ico" />
</head>
<body>
<div id="container">
    <?php include 'menu.php'; ?>
    <div id="main_content">
        <div id="title_div">
            <h1>WebSafeHub ~ Vulnerable Web Application</h1>
        </div>
        <div class="body_padded content_section">
            <h2>Purpose and Goals of WebSafeHub</h2>
            <p>WebSafeHub is an intentionally vulnerable PHP/MySQL web application designed to simulate real-world security vulnerabilities. Inspired by projects like DVWA (Damn Vulnerable Web Application) and OWASP (Open Web Application Security Project), WebSafeHub provides a platform for security enthusiasts, developers, and students to practice identifying and mitigating common web security vulnerabilities.</p>
            <p>The primary objective of WebSafeHub is to serve as a training tool for security professionals to test their skills and tools within a controlled environment. Additionally, it aims to enhance the understanding of web application security processes for web developers and facilitate learning for students and teachers in a classroom setting.</p>
            <p>The purpose of WebSafeHub is to provide a platform to practice and understand common web vulnerabilities, offering challenges of varying difficulty levels through a simple and intuitive interface.</p>
            <p>Each vulnerability page includes an overview of the vulnerability, mitigation strategies, and exercises designed to test and reinforce your understanding. You can also experiment with creating and testing your own code to gain a deeper understanding of these vulnerabilities.</p>
        </div>
        <div class="body_padded content_section">
            <h2>General Instructions</h2>
            <p>It's worth noting that WebSafeHub includes both documented and undocumented vulnerabilities, intentionally designed to encourage users to discover and address as many issues as possible.</p>
            <p>For assistance, a help button is available at the bottom of each page, providing hints and tips specific to each vulnerability. Additionally, there are supplementary links for further reading on related security topics.</p>
        </div>
        <div class="body_padded content_section">
            <h2>Contribution</h2>
            <p>WebSafeHub is an open-source project, and contributions are highly encouraged. Users have the capability to create new exercises locally. These exercises can be pushed to GitHub to contribute to the project, helping to expand and enhance the range of training materials available. By sharing your exercises, you not only improve the platform but also aid others in learning and understanding web application security.</p>
            <p>To contribute, fork the repository on GitHub, implement your new exercises or improvements, and submit a pull request. Detailed contribution guidelines and documentation are available in the repository to help you get started.</p>
        </div>
        <div class="body_padded content_section">
            <h2>WARNING!</h2>
            <p>WebSafeHub is intentionally vulnerable! Do not deploy it to publicly accessible servers or hosting providers' public html folders, as they will likely be compromised. We recommend using a virtual machine (e.g., VirtualBox or VMware) configured with NAT networking mode. Within the guest machine, you can install and run XAMPP for web server and database functionality.</p>
            <h3>Disclaimer</h3>
            <p>We do not assume responsibility for any misuse of this application (WebSafeHub) and its associated software, including any potential damage to systems. Use it at your own risk!</p>
        </div>

    </div>
</div>
</body>
</html>
