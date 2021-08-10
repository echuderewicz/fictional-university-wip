<h1><?php bloginfo('name')?></h1>

<?php

$names = array("eric", "kerry", "missy");

$count = 0;

while($count < count($names)){
    echo "<li> Hi, my name is $names[$count]</li>";
    $count++;
}

?>