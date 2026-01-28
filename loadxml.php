<form method="post">
Username:<input type="text" name="us">
<button type="submit" name="insert">Insert</button>
</form>
<?php
if(isset($_POST['insert'])){
$xml=file_exists("example.xml") ? simplexml_load_file("example.xml") : new SimpleXMLELEMENT("<students></students>");
$xml->addchild("name",$_POST["us"]);
$xml->asXML("example.xml");
}
?>