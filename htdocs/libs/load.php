<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."htdocs/templates/$name.php"; //not consistant.
}
