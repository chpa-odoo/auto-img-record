<?php

// Set the directory to scan
$directory = $_POST["directory"];

// Create a variable that matches $directory but removes everything before "website_"
$relative_directory = strstr($directory, 'website_');

// Set the filename for the output file
$output_file = 'images.xml';

// Initialize an empty array to store the filenames
$filenames = array();

// Open the directory
if ($handle = opendir($directory)) {
    // Loop through the directory
    while (false !== ($file = readdir($handle))) {
        // Check if the file is an image
        if (preg_match('/\.(jpg|jpeg|png|gif|svg|webp)$/i', $file)) {
            // Add the filename to the array 
            $filenames[] = $file;
        }
    }
    closedir($handle);
}

// Start the XML output
$output = '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
$output .= '<odoo>'.PHP_EOL;

// Loop through the filenames and add them to the XML output
foreach ($filenames as $filename) {
    $output .= "\t" .'<record id="' . pathinfo(basename($filename), PATHINFO_FILENAME) . '" model="ir.attachment">'.PHP_EOL;
    $output .= "\t" . "\t" .'<field name="name">' . pathinfo(basename($filename), PATHINFO_FILENAME) . '</field>'.PHP_EOL;
    $output .= "\t" . "\t" .'<field name="datas" type="base64" file="/' . $relative_directory . $filename . '"/>'.PHP_EOL; 
    $output .= "\t" . "\t" .'<field name="res_model">' . ir.ui.view . '</field>'.PHP_EOL; 
    $output .= "\t" . "\t" .'<field name="public" eval="True"/>'.PHP_EOL;
    $output .= "\t" .'</record>'.PHP_EOL;
} 

// End the XML output
$output .= '</odoo>';

// Check if the output file already exists
if (file_exists($output_file)) {
    // Delete the file if it exists
    unlink($output_file);
}

// Write the output to the file
file_put_contents($output_file, $output);

// Redirect to index 
header("Location: index.php");
die();
?>
