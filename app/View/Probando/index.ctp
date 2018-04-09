<?php
$xml = Xml::fromArray(array('response' => $liceos));
echo $xml->asXML();
?>