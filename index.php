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