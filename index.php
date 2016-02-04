<?php
// GALLERY
$thumb[0] ="map_layers" ; $descr[0]="A 'static' map of Europe";
?>


<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" >  
</head>
<body>
    <div class="note" id ="note"><b>Here find a gallery of maps designed with D3.js.</b> All sources are available on <a href ="https://github.com/neocarto/d3carto" target="_blank">Github</a>. <span class="small">CC (BY) N. Lambert (<a href ="http://neocarto.hypotheses.org/" target ="_blank">neocarto</a>).</span> </div>

<?php

for ($i=0; $i<count($thumb);$i++){
	$item = '<div class="img">';	
	$item .= "<a href='gallery/$thumb[$i].html'>";
	$item .= "<img src='gallery/$thumb[$i].png' alt='$thumb[$i]' width='300' height='200'></a>";
	$item .= "<div class='desc'>$descr[$i]</div></div>";
	echo $item;

	}
?>



  
   
  
  






<!--
<table width='190px' height='190px'>
  <tr>

<?php 
$i=0;      
$dir = opendir("gallery/");      
while($file = readdir($dir)) {
    $i++;   
    if(substr($file, -4) == "html"){
    $filename = substr($file, 0,-4)."png";    
    echo "<td style='border-width:0px;'>";
        echo "<table height='100%'><tr><td height='30px' style='color: #fff; background: #516893; text-align:center;'>".substr($file, 0,-5)."</td></tr>";
        echo "<tr><td height='160px'><a href = gallery/$file target='_blank'><img src='gallery/$filename' width='190px'></img></a></td></tr></table>";
    echo "</td>"; 
    if ($i==4){echo "</tr><tr>"; $i=0;}
     }

}
closedir($dir); 
?>
</table>
-->


</body>
</html>
