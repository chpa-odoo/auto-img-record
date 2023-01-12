<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css">
</head>

<body>
    <!-- Input for the directory of your images files -->
    <form action="images_xml.php" method="post">
        Directory: <input type="text" name="directory">
        <input type="submit" value="Submit">
    </form> 

    <!-- Show the content of the images.xml files -->
    <pre>
        <?php
        $xml = simplexml_load_file("images.xml") or die("File empty or not found");
        echo htmlentities($xml->asXML());
        ?>
    </pre>
</body>