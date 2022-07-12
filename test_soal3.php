<?php
	echo "Soal: buatlah program looping untuk menampilkan output di bawah!";
	echo "<br><br>";
	echo "<b>Output 1</b><br>";
	$output1=6;
	for($star1=$output1;$star1>0;$star1--){
	for($star2=$output1;$star2>=$star1;$star2--){
		echo "*";
	}
	echo "<br>";
	}

	echo "<br>
		<b>Output 2</b>
	      <br>";

	$output2=5;

	for($star1=$output2;$star1>0;$star1--){
	for($a=1; $a<=$star1; $a++){
		echo " &nbsp";
	}
	for($star2=$output2;$star2>=$star1;$star2--){
		echo"*";
	}
	echo"<br>";
	}
?>