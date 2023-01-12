<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Input for the directory of your images files -->
    <form action="scan.php" method="post">
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