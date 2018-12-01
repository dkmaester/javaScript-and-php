<html>
<head>
    <title>Bob’s Auto Parts – Order Results</title>
 </head>
<body>
    <h1>Bob’s Auto Parts – Order Results</h1>
     <h2>Order Results</h2>
<?php
$tireqty  = $_POST['tireqty'];
$oilqty   = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo 'Items ordered: '.$totalqty.'<br />';
$totalamount = 0.00;

define('TIREPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);

$totalamount = $tireqty     *  TIREPRICE
             + $oilqty      *  OILPRICE
             + $sparkqty     *  SPARKPRICE;


if ($totalqty == 0)
{
    echo 'You did not order anything on the previous page!<br />';
}
else
{
echo 'subtotal: $'.number_format($totalamount,2).'<br />';
$taxrate = 0.07; // tax local
$totalamount = $totalamount * (1 + $taxrate);
echo 'Total including tax: $'.number_format($totalamount,2).'<br />';


echo '<p>Your order is as follows: </p>';
echo $tireqty.  ' tires           <br />';
echo $oilqty.   ' bottles of oil  <br />';
echo $sparkqty. ' spark plugs     <br />';

}
echo '<p>Order processed at:</p>';
echo date('H:i, jS F');
echo '</p>';




?>

 </body>
</html>
