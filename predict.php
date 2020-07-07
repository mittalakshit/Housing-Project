<?php

$lotsize=$_GET["lotsize"];
$bathrms=$_GET["bathrms"];
$stories=$_GET["stories"];
$driveway=$_GET["driveway"];
$recroom=$_GET["recroom"];
$fullbase=$_GET["fullbase"];
$gashw=$_GET["gashw"];
$airco=$_GET["airco"];
$garagepl=$_GET["garagepl"];
$prefarea=$_GET["prefarea"];

system("/usr/anaconda/bin/python3 house_price_model.py ".$lotsize." ".$bathrms." ".$stories." ".$driveway." ".$recroom." ".$fullbase." ".$gashw." ".$airco." ".$garagepl." ".$prefarea." 2>&1");
//2 is a child process ie python and &1 defines that output will be defined here in PHP
?>
