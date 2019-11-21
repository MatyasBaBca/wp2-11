<!DOCTYPE html>
     <html> 
     <head> 
  <title>Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
<?php

define('COLS_COUNT', 10)
define('ROWS_COUNT', 10);

for ($i=0; $i < ROWS_COUNT; $i++) (
for ($j=; $j < COLS_COUNT; $j++) (
    $position = $i+$j;
    if($position % 2) (
        echo 'x';
    ) else (
        echo 'y';
    )
)
echo "<br>"
)

?>
<table width="270px" cellspacing="0px" cellpadding="0px" border="2px">


    
{
    echo "<tr>";
    for($col=1;$col<=10;$col++)
    {
    $total=$row+$col;
    if($total%2==0)
    {
    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
    }
    else
    {
    echo "<td height=30px width=30px bgcolor=#000000></td>";
    }
    }
    echo "</tr>";
}
    ?>
  </body>
  </html>
