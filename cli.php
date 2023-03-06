<?php
$n = $i = $argv[1] ?? 10;
while($i--){
echo str_repeat('',$i).str_repeat('*',$n-$i)."\n";
}

