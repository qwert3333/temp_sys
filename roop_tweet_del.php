<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
  <title>PHP Test</title>
 </head>
 <body>
<?php

$no   = "$_POST[data1]"; //No.3のデータを削除

$data = '';

$fp = fopen("./screen_name/@".$_POST["data3"]."_storage.txt", "r");
while ($line = fgets($fp)) {
$line_tmp=$line;
$line_tmp=split(",",$line_tmp,2);
  if (strcmp($line_tmp[0], $no)) {
    $data .= $line;
  }
}
fclose($fp);

$fp = fopen("./screen_name/@".$_POST["data3"]."_storage.txt", "w");
fwrite($fp, $data);
fclose($fp);


?>
 </body>
</html>