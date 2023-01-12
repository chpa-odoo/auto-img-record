<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center pb-5 pt-5">
            <div class="col text-center form-style">
                <!-- Input for the directory of your images files -->
                <form action="scan.php" method="post">
                    <div class="form-group" >
                        <label for="form_scan" class="p-3">Directory to scan</label>
                        <input type="text" class="form-control" id="form_scan" placeholder="/path/to/files" name="directory">
                        <input type="submit" value="scan" class="m-3 btn btn-success">
                    </div>
                </form>
                    <!-- Show the content of the images.xml files -->
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col pre-style">
                <!-- <div class="alert alert-success" role="alert">
                    <strong>Well done!</strong> Your images.xml files is generated, here is a preview of the output :)
                </div> -->
                <pre class="card">
                    <?php $xml = simplexml_load_file("images.xml") 
                    or die("File empty or not found");
                    echo htmlentities($xml->asXML());
                    ?>
                </pre>
            </div>
        </div>
    </div>


</body>