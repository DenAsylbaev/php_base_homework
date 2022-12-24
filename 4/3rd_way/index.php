<?php
$title = 'Main page';
$this_year = 2022;

$content = file_get_contents("4/3rd_way/site.html");

$content = str_replace(
    ["{{ title }}", "{{ this_year }}"], 
    [$title, $this_year], 
    $content
);

echo $content;
?>