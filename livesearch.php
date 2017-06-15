<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load('http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=5');

$x=$xmlDoc->getElementsByTagName('Info');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
	$title = $x->item($i)->getAttribute("title");
    if (stristr($title,$q)) {
      if ($hint=="") {
        $hint= "<a data-toggle='modal' href='#event0' target='_blank'>" . $title . "</a>";
      } else {
        $hint=$hint . "<br /> <a data-toggle = 'modal' href = '#event0' target='_blank'>" . $title. "</a>";
      }
	}
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {

} else {
  $response=$hint;
}

//output the response
echo $response;
?>