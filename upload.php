<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['files'])) {
    $file_names = array();
    $errors = array();

    // Loop through each file
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];

        // Validate file size (10MB limit)
        if ($file_size > 10485760) {
            $errors[] = "$file_name exceeds the file size limit (10MB).";
            continue;
        }

        // Move the file to the desired directory (e.g., 'uploads/')
        $upload_directory = 'uploads/';
        $destination = $upload_directory . $file_name;

        if (move_uploaded_file($file_tmp, $destination)) {
            $file_names[] = $file_name;
        } else {
            $errors[] = "Failed to upload $file_name";
        }
    }

    // Output JSON response
    header('Content-Type: application/json');
    echo json_encode(array(
        'success' => count($file_names),
        'errors' => $errors,
        'uploaded_files' => $file_names
    ));
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <h1>Upload Files</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple accept="image/*">
        <button type="submit">Upload</button>
    </form>
</body>
</html>