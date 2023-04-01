<?php
function downloadFile($filepath) {
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    }
}

function saveRequestToDatabase($name, $email, $phone) {
    // Replace these values with your database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hausverkauf";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query
    $stmt = $conn->prepare("INSERT INTO interessenten (name, emailAdress, phone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $phone);

    // Execute the query and close the connection
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
    saveRequestToDatabase($_POST['name'], $_POST['email'], $_POST['phone']);
    downloadFile('expose.pdf');
} else {
    header('Location: index.php');
    exit;
}