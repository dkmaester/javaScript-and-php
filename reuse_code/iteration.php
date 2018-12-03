<?php

function reverse_i($str)
{
 for ($i=1; $i<=strlen($str); $i++)
 {
  echo substr($str, -$i, 1); 
 }
   return;
}

reverse_i('Hello');

?>
