<html>
<body>

<h1><b><BOBBY SINGH</b></h1>
<?php
   $firstline=`head -n1 path.txt`;          
   $path_img="https://".$firstline."/bs.jpg";
   echo "<br>";
   echo "<img src='{$path_img}' width=500 height=500>";
?>
</body>
</html>
