<html>
<body>

<style>
.code-editor {
    font-family: monospace;
    white-space: pre;
}
</style>

<form action="images_xml.php" method="post">
    Directory: <input type="text" name="directory">
    <input type="submit" value="Submit">
</form> 

<pre class="code-editor">
    <?php
    $xml = simplexml_load_file("images.xml") or die("File empty or not found");
    echo htmlentities($xml->asXML());
    ?>
</pre>

</body>
</html>