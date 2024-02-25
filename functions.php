<?php

// Create a connection to the MySQL database // Remove for actual production
$servername = "localhost"; 
$username = "root";         
$password = "root";         
$database = "olaf_hackathon_2023";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
die("Connection failed: " . $mysqli->connect_error);
}

// If "roster-append" then...
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["roster-append"])) {

    // SQL Query
    $sql = "INSERT INTO `roster`(`email`, `name`) VALUES ('ex@mail.com','ex');";

    // Execute the query
    if (!$mysqli->query($sql) === TRUE) {
        echo "Error updating record: " . $mysqli->error;
    }
}

// If "roster-fetch" then...
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["roster-fetch"])) {
    // echo '<script type="text/JavaScript">document.getElementById("discussion-list").style.display="none";</script>'; 

    // SQL Query
    $res = $mysqli->query('SELECT `id`, `email`, `name` FROM `roster` WHERE 1'); 
    echo '<div "id=roster-list">
            <div class="roster-user">
                <div class="roster-id">Identification</div><hr>
                <div class="roster-name">Full Name</div><hr>
                <div class="roster-email">Email Address</div>
            </div><hr>';

    while($row = $res->fetch_assoc()){ 
    echo '<div class="roster-user">
            <div class="roster-id">' . $row['id'] . '</div>
            <div class="roster-name">' . $row['name'] . '</div>
            <div class="roster-email">' . $row['email'] . '</div>
        </div>';
    }

    echo "</div><hr style='width: 95%; margin: auto; margin-top: 20px;'>";
}

// If "discussion-fetch" then...
if (empty($_POST)) {
    // SQL Query
    $res = $mysqli->query('SELECT `id`, `email`, `title`, `class`, `content` FROM `discussion` ORDER BY `id` DESC;'); 

    echo "<div 'id=discussion-list'>";

    while($row = $res->fetch_assoc()){ 
    echo '<div class="post">
        <div class="post-title">' . $row['title'] . ' - ' . $row['class'] .'</div>
        <div class="post-content">' . $row['content'] . '</div>
        <div class="post-action-bar"> Comment... </div>
    </div>';
    }

    echo "</div>";
}

// If "discussion-fetch" then...
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["discussion-fetch"])) {
    // SQL Query
    $res = $mysqli->query('SELECT `id`, `email`, `title`, `class`, `content` FROM `discussion` ORDER BY `id` DESC;'); 

    echo "<div 'id=discussion-list'>";

    while($row = $res->fetch_assoc()){ 
    echo '<div class="post">
        <div class="post-title">' . $row['title'] . ' - ' . $row['class'] .'</div>
        <div class="post-content">' . $row['content'] . '</div>
        <div class="post-action-bar"> Comment... </div>
    </div>';
    }

    echo "</div>";
}

// If "discussion-append" then...
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["discussion-append"])) {
    $email = "user@email.com";
    $title = "anonymous";
    $class = $_POST["selected-course"];
    $content = $_POST["post-content"];

    // SQL Query
    $sql = "INSERT INTO `discussion`(`email`, `title`, `class`, `content`) VALUES ('$email','$title','$class','$content');";

    // Execute the query
    if (!$mysqli->query($sql) === TRUE) {
        echo "Error updating record: " . $mysqli->error;
    }

    // SQL Query
    $res = $mysqli->query('SELECT `id`, `email`, `title`, `class`, `content` FROM `discussion` ORDER BY `id` DESC;'); 

    echo "<div 'id=discussion-list'>";

    while($row = $res->fetch_assoc()){ 
    echo '<div class="post">
        <div class="post-title">' . $row['title'] . ' - ' . $row['class'] .'</div>
        <div class="post-content">' . $row['content'] . '</div>
        <div class="post-action-bar"> Comment... </div>
    </div>';
    }

    echo "</div>";
}

// // Close the database connection
// $mysqli->close();