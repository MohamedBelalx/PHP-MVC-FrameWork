<?php

//print_r($data['cat']);
//echo $data['cat'];
echo $data['title'];
foreach($data['cat'] as $r)
{
    echo $r->id;
}

?>
<h1>welcome from the view</h1>