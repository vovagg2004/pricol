<?php
session_start();
// include "elementary.php";


$inputeNumber = $_POST['inpyteNumber'];
$inputeText = $_POST['inpyteText'];
$inputNumberAvailable = $_SESSION['numberString'];

$numberMassiv = strlen($inputeNumber);

$number = array("000000","000001","000010","000011","000100","000101","000110","000111","001000", "001001","001010","001011","001100","001101","001110","001111","010000","010000","010000","010000","010001", "010010","010011","010100","010101","010110","010111","011000","011001","011010","011011","011100","011101","011110");
$alphabet = array("A","Б","В","Г","Д","Е","Ё","Ж","З","И","Й","К","Л","М","Н","О","П","Р","С","Т","У","Ф","Х","Ц","Ч","Ш","Щ","Ъ","Ы","Ь","Э","Ю","Я"," ");

// Цифры

$y = 7;
$r = 13;
$u = 19;
$pr = 25;
$pt = 31;
$py = 38;

for($i = 0; $i <= 50; $i++){
  $numberMassivEliment[$i] =  $inputeNumber[$i];
  if($i < 7){
    $ferstNumber[$i] = "$numberMassivEliment[$i]";
  }
  if($y > 6 and $i < 13){
    for($b = 0, $q1 = 6; $b < 7; $b++, $q1++){
      $tooNumber[$b] = "$numberMassivEliment[$q1]";
    }
  }
  if($r > 12 and $i < 19){
    for($o = 0, $q2 = 12; $o < 7; $o++, $q2++){
      $freeNumber[$o] = "$numberMassivEliment[$q2]";
    }
  }
  if($u > 18 and $i < 25){
    for($p = 0, $q3 = 18; $p < 7; $p++, $q3++){
      $foNumber[$p] = "$numberMassivEliment[$q3]";
    }
  }
}

$ferstNumberString = "$ferstNumber[0]" . "$ferstNumber[1]" . "$ferstNumber[2]" . "$ferstNumber[3]" . "$ferstNumber[4]" . "$ferstNumber[5]";
$tooNumberString = "$tooNumber[0]" . "$tooNumber[1]" . "$tooNumber[2]" . "$tooNumber[3]" . "$tooNumber[4]" . "$tooNumber[5]";
$freeNumberString = "$freeNumber[0]" . "$freeNumber[1]" . "$freeNumber[2]" . "$freeNumber[3]" . "$freeNumber[4]" . "$freeNumber[5]";
$foNumberString = "$foNumber[0]" . "$foNumber[1]" . "$foNumber[2]" . "$foNumber[3]" . "$foNumber[4]" . "$foNumber[5]";
// echo $ferstNumberString;
// echo $tooNumberString ;
// echo $freeNumberString;
// echo $foNumberString;

// V2

// for($i = 0; $i < 35; $i++ ){
//   if($ferstNumberString == $number[$i]){
//     $laets[0] = $alphabet[$i];
//     echo $laets[0];
//   }if($tooNumberString == $number[$i]){
//     $laets[1] = $alphabet[$i];
//     echo $laets[1];
//   }if($freeNumberString == $number[$i]){
//     $laets[2] = $alphabet[$i];
//     echo $laets[2];
//   }if($foNumberString == $number[$i]){
//     $laets[3] = $alphabet[$i];
//     echo $laets[3];
//   }
// }

// V2

for($i = 0; $i < 35; $i++ ){
  if($ferstNumberString == $number[$i]){
    $laets[0] = $alphabet[$i];
  }
}
for($i = 0; $i < 35; $i++ ){
  if($tooNumberString == $number[$i]){
    $laets[1] = $alphabet[$i];
  }
}
for($i = 0; $i < 35; $i++ ){
  if($freeNumberString == $number[$i]){
    $laets[2] = $alphabet[$i];
  }
}
for($i = 0; $i < 35; $i++ ){
  if($foNumberString == $number[$i]){
    $laets[3] = $alphabet[$i];
  }
}
$readyNumber = "$laets[0]" . "$laets[1]" . "$laets[2]" . "$laets[3]";

// Буквы

// for($i = 0; $i <= $numberMassiv; $i++){
//   $alphabetMassivEliment[$i] =  $inputeText[$i];
//   echo $alphabetMassivEliment[$i];
// }

// for($i = 0; $i < 35; $i++ ){
//   if($ferstAlphabetString == $alphabet[$i]){
//     $laetsString[0] = $number[$i];
//   }
// }
// for($i = 0; $i < 35; $i++ ){
//   if($tooAlphabetString == $alphabet[$i]){
//     $laetsString[1] = $number[$i];
//   }
// }
// for($i = 0; $i < 35; $i++ ){
//   if($freeAlphabetString == $alphabet[$i]){
//     $laetsString[2] = $number[$i];
//   }
// }
// for($i = 0; $i < 35; $i++ ){
//   if($foAlphabetString == $alphabet[$i]){
//     $laetsString[3] = $number[$i];
//   }
// }
//
$readyString = "$laetsString[0]" . "$laetsString[1]" . "$laetsString[2]" . "$laetsString[3]" . "$laetsString[4]";

require_once('startIndex.php');
?>
