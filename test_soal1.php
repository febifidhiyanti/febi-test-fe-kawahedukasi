<?php
$data1 = array(1, 1, 1, 2, 2, 4, 1, 1 );
echo "Data = 1, 1, 1, 2, 2, 4, 1, 1 ";

$count=array_count_values($data1);

foreach ($count as $modus => $amount) {
    if($amount==max($count)){
    echo "<br/>
	  Total data paling banyak keluar adalah $modus dengan jumlah $amount<br/>";
    }
}
?>