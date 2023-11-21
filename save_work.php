<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $code = $_POST['code'];

    // Generate a unique filename based on timestamp
    $filename = time() . '.py';

    // Save the code to a file
    file_put_contents('saved_work/' . $filename, $code);

    // Store the filename in the user's session
    $_SESSION['filename'] = $filename;

    // Return the filename as JSON
    echo json_encode(['filename' => $filename]);
} else {
    // If the request is not POST, handle it accordingly
    echo json_encode(['error' => 'Invalid request method']);
}
?>
