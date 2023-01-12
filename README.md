# auto-img-record

Simple PHP script to generate a 'images.xml' file with all ready-to-go record based on the content of your img/ folder.

## How to use

Write the path to your modules images ine the input field, and hit scan.

## What it will do

Set the directory to scan from the input

Create a variable that matches $directory but removes everything before "website_" to match your own module path

Set the filename for the output file

Initialize an empty array to store the filenames

Open the directory

Start the XML output

Loop through the filenames and add them to the XML output

End the XML output

Check if the output file already exists

Write the output to the file

Redirect to index 
