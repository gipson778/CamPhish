<?php
if(isset($_POST['contacts'])) {
    // Get the contact list data from the POST request
    $contactsData = $_POST['contacts'];
    
    // Decode the Base64-encoded contact list data
    $decodedContactsData = base64_decode($contactsData);
    
    // Save the contact list data to a text file
    $filename = 'contacts-' . date('Y-m-d_H-i-s') . '.txt'; // Generate a unique filename based on the current date and time
    $file = fopen($filename, 'w'); // Open the file in write mode
    fwrite($file, $decodedContactsData); // Write the contact list data to the file
    fclose($file); // Close the file
}
?>
