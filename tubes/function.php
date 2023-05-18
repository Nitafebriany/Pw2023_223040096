<?php 
define('BASE_URL','/pw2023_223040096/tubes');
function dd($value)
{
    echo"<pre>";
    var_dump($value);
    echo"</pre>";
    die();
}

function uriIs($Suri) {
    return($_SERVER["REQUEST_URI"] === BASE_URL . $Suri) ? 'active' : '';
}
?>