
<?php
$amount = 1000;
$vat = 0.15 * $amount;
$total_amount = $amount + $vat;

echo "VAT (15%): " . $vat . "<br>";
echo "Total Amount: " . $total_amount . " taka";
?>
