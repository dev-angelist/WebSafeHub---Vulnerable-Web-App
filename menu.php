<div id="sidebar">
    <div id="main_menu">
        <ul class="menuBlocks">
            <li <?php if($page == 'home') echo 'class="selected"'; ?>><a href="/WebSafeHub/index.php"><strong>Home</strong></a></li>
            <li <?php if($page == 'instructions') echo 'class="selected"'; ?>><a href="/WebSafeHub/instructions.php">Instructions</a></li>
            <li <?php if($page == 'setup') echo 'class="selected"'; ?>><a href="/WebSafeHub/setup_db.php">Setup / Reset DB</a></li>
        </ul>
        <hr>
        <img src="Resources/web_safe_hub_logo.png" alt="_______________________________" style="max-width: 100%; height: auto;"> <hr>
        <div class="vulnerabilities-title" style="margin-left: 8px; font-weight: bold;">Vulnerabilities</div>
        <ul class="menuBlocks">
            <li <?php if($page == 'brute_force') echo 'class="selected"'; ?>><a href="/WebSafeHub/Vulnerabilities/BruteForce/brute_force_index.php"><em>Brute Force</em></a></li>
            <li <?php if($page == 'command_inj') echo 'class="selected"'; ?>><a href="/WebSafeHub/Vulnerabilities/CommandInjection/command_inj_index_php"><em>Command Injection</em></a></li>
            <li <?php if($page == 'sqli') echo 'class="selected"'; ?>><a href="/WebSafeHub/Vulnerabilities/SQLi/sqli_index.php"><em>SQL Injection</em></a></li>
            <li <?php if($page == 'xss') echo 'class="selected"'; ?>><a href="/WebSafeHub/Vulnerabilities/XSS/xss_index.php"><em>Cross Site Scripting (XSS)</em></a></li>
             <li <?php if($page == 'file_upload') echo 'class="selected"'; ?>><a href="/WebSafeHub/Vulnerabilities/FileUpload/file_upload_index.php"><em>File Upload</em></a></li>
        </ul>
    </div>
</div>
