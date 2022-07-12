<html>
<head>
    <title>Tugas2</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>Input</td>
                <td>:</td>
                <td><input type="text" name="input"></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <h5>Hasil :</h5>
    <?php
        if(isset($_POST['submit'])){
            $input = trim($_POST['input']);
	    
	    $number    = preg_match('@[0-9]@', $input);
            $string = preg_replace("/[^0-9]/","",$input); 

            // validasi input data
            if($number){
                echo "Sistem kami menolak untuk inputan berisi angka <br>";
		print_r ($string);
            }else{
                echo "Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan ";
		print_r ($input);
            }    
        }    
    ?>
</body>
</html>