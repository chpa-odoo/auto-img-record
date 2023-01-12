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
                <div class="alert alert-success" role="alert">
                    Exemple of directory : /Users/odoo/Documents/GitHub/psbe-design-coconut/website_haillot/static/src/img/content
                </div>
                <div class="alert alert-warning" role="alert">
                    <strong>Warning!</strong> Path must be absolute (!== relative)
                </div>
                <!-- Input for the directory of your images files -->
                <form action="scan.php" method="post">
                    <div class="form-group" >
                        <input type="text" class="form-control" id="form_scan" placeholder="/path/to/files" name="directory">
                        <input type="submit" value="scan" class="m-3 btn btn-success">
                    </div>
                </form>
                    
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col pre-style">
                <pre class="card">
                    <!-- Show the content of the images.xml files -->
                    <?php $xml = simplexml_load_file("images.xml") 
                    or die("<div class='alert alert-danger' role='alert'>
                    <strong>Warning!</strong> File not found or empty
                    </div>");
                    echo htmlentities($xml->asXML());
                    ?>
                </pre>
            </div>
        </div>
    </div>


</body>