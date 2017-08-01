<?php
$ul="http://www.passwordrandom.com/query?command=password&format=json";
$info= json_decode(file_get_contents($ul), true);
foreach($info['char'] as $item) {
    $random=$item;
}
echo $random;
?>