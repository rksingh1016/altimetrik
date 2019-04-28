<?php
//This program prints out a multiplication table of the first 10 prime numbers
//Below are arrays for prime numbers and multiplication matrix
$primeNumbers = array("");
$matrix = array();
//defining variable 'num' with value 10(for 10 prime numbers)
$num = 10;
//creating function - 'generatePrimeNumbers' to generate prime numbers
function generatePrimeNumbers($num){
  $count = 0 ;
  $number = 2 ;
  while ($count < $num ){
    $div_count=0;
    for ( $i=1;$i<=$number;$i++){
      if (($number%$i)==0){
        $div_count++;
      }
    }
    if ($div_count<3){
      //echo $number." , ";
      $primeNumbers[$count] = $number;
      $count=$count+1;
    }
    $number=$number+1;
  }
  return $primeNumbers;
}
//calling function - generatePrimeNumbers to generate first 10 prime numbers 
$primeNumbers = generatePrimeNumbers($num);
//defining a matrix for displaying multiplication table
$matrix[0][0] = "";
for ( $row=1;$row<$num+1;$row++){
    $matrix[$row][0]=$primeNumbers[$row-1];
}
for ( $col=1;$col<$num+1;$col++){
    $matrix[0][$col]=$primeNumbers[$col-1];
}
for($row=1; $row<$num+1;$row++){
    
    for($col=1;$col<$num+1;$col++){
        $matrix[$row][$col] = $matrix[$row][0]  * $matrix[0][$col];
        
    }
}
//loop to print multiplication table of 10x10 prime numbers
for($row=0; $row<$num+1;$row++){
    echo "\n";
    for($col=0;$col<$num+1;$col++){
        echo "\t";
        echo  $matrix[$row][$col];
    }
}



?>