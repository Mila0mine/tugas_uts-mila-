<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$Dicount = [
    [
        "tanggal" => "20 november 2023", 
        "product" => [
            "Baju Bayi" => 71000,
            "Diapers" => 153000,
            "Bedak" => 15000,
            "Minyak Telon" => 60000
        ],
    ]
];
?>
<div style="border: 1px solid #000;padding: 3px; width:fit-content">
<?php
foreach ($Dicount as $discountTotal) {
    $total = $discountTotal["product"]["Baju Bayi"]+$discountTotal["product"]["Diapers"]+$discountTotal["product"]["Bedak"]+$discountTotal["product"]["Minyak Telon"];

    if ($total >= 150000 ) {
        $discount=(($total*10)/100);
        $total_bayar=($total-$discount);
    }else if ($total >= 200000) {
        $discount=(($total*20)/100);
        $total_bayar=($total-$discount);
    }

    echo "<p>"."Tanggal Produksi    :".$discountTotal["tanggal"]."</p>";
    echo "<p>"."Product             :"."</p>";
    echo "<p>"."Baju Bayi(2X35.500) :"."Rp.".$discountTotal["product"]["Baju Bayi"]."</p>";
    echo "<p>"."Diapers(3X51.000)     :"."Rp.".$discountTotal["product"]["Diapers"]."</p>";
    echo "<p>"."Bedak(1X15.000)      :"."Rp.".$discountTotal["product"]["Bedak"]."</p>";
    echo "<p>"."Minyak Telon(2X30.000)      :"."Rp.".$discountTotal["product"]["Minyak Telon"]."</p>";
    echo "<p>"."Total               :"."Rp.".$total."</p>";
    echo "<p>"."Discount            :"."Rp.".$discount."</p>";
    echo "<p>"."Total Pembayaran    :"."Rp.".$total_bayar."</p>";
}
?>
</div>
</div>
</body>
</html>
