<h1>
<?php
$result = 2+2;
// fwrite(STDOUT, "ANDREA");
// echo $result;
// echo "\n"."Hello World";
// $name = "Andrea";
// echo "\n".$name;
// echo 3.1415;
// $lastName ="Bramucci";
// $name = 'Andrea';
// $age = 32;
// $cities =['Roma', 'Torino','Napoli'];

// $pi = 3.141516;
// $r = 20;
// $area = $pi * $r * $r;
// echo "The area is $area";

// $verify = false;
// $verify = 5>4;
// var_dump($verify);
// if($verify == true){
//     echo "Verify is true";
// }
// else{
// echo "False";
// }
$dec = '255';
// $octal = 0124;
// $hex = 0xDE;
// $bin = 0b111111;
// $result = $dec + $hex;
// $float = 1234.33;
// // var_dump($dec*4);
// var_dump($float); 
$name ='Andrea';
// $lastName = "Bramucci";
// $accounts = [1,2];
// echo "$name\n \t Bramucci";

// $dati = <<< EOD
//     Il mio nome è $name <br>
//     Il mio cognome è $lastName
//     $accounts[0];
// EOD;
// ECHO $dati;
$content = <<< EOD
        $name
        This is a string
        EOD;
        echo $content;

$stringa = 'Andrea';
$eaccented = 'è';
var_dump($eaccented);
mb_strlen($eaccented);
echo strlen($eaccented);
?>
</h1>