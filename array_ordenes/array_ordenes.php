<!-- <?php
//create short variable name
//$document_root = (string)$_SERVER;
//print($_SERVER['DOCUMENT_ROOT']);

?> -->
<?php
//create short variable name
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$orders= file("$DOCUMENT_ROOT/array_ordenes/orders.txt");;
$number_of_orders = count($orders);
if ($number_of_orders == 0)
{
  echo '<p><strong>No orders pending. 
       Please try again later.</strong></p>';
}
for ($i=0; $i<$number_of_orders; $i++)
{
  echo $orders[$i].'<br />';
}
?>
