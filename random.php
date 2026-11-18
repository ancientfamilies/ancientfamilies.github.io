
<?php

// Load the family database
$data = json_decode(file_get_contents(__DIR__ . '/family.json'), true);

// Check that the JSON was loaded successfully
if (!is_array($data) || empty($data)) {
    http_response_code(500);
    exit('Unable to load family database.');
}

// Find the highest ID
$highestId = max(array_column($data, 'id'));

// Generate a random ID
$randomId = random_int(1, (int)$highestId);

// Redirect to the person page
header('Location: /person?id=' . $randomId);
exit;

?>
