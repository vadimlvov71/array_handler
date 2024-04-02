
<?php
/*
1. An integer number A is given.
Check if the number A is greater than 120.
Print the report.
*/
$number_const = 120;
$number = 110;
echo "isGreaterThan:" .isGreaterThan($number_const, $number)."<br>";
function isGreaterThan(int $number_const, int $number): bool
{
    $result = false;
    if ($number > $number_const) {
        $result = true;
    }
    return $result;
}
//2. Calculate the value F(x)
//F(X) = 10x^4 -8,  for x > 10
//F(X) = 1000, for x = 10
//F(X) = 100 - 1/(10+2x), for x < 10
$number = 10;
$compare = 10;
echo "calculateValue:" .calculateValue($number, $compare)."<br>";
function calculateValue(int $number, int $compare)
{
    if ($number > $compare) {
        $result = 10 + $number ^ 4 -8;
    } else if ($number < $compare) {
        $result = 1000;
    } else {
        $result = 100 - 1/(10 + 2 + $number);
    }
    return $result;
}

//3. A three-digit integer number is given.
//What is the greatest digit?
$number_three_digits = 928;
echo "maxDigit: ".maxDigit($number_three_digits)."<br>";

function maxDigit(int $number_three_digits): int
{
    $digits = str_split($number_three_digits);
    $max = 0;
    foreach($digits as $digit){
        if($digit > $max){
            $max = $digit;
        }
    }
    return $max;
}
//4. A 4-digit integer number is given
//Make the number that is inverse order of the digits.
$number_four_digits = 1234;
echo "inverseOrder: ".inverseOrder($number_four_digits)."<br>";

function inverseOrder(int $number): int
{
    $digits = str_split($number);
    $temp = [];
    $y = count($digits)-1;
    foreach($digits as $digit){
        $temp[] = $digits[$y];
        $y--;
    }
    $result = (int)implode("", $temp);
    return $result;
}
//5. Given are integer numbers X an N.
//Calculate Y = 10 + X/2 + 2/(3X) + 3X/4 + 4/(5X) + ..... 
//Y have N members.

//6. Given is integer positive number A, and A numbers of D.
//Check if numbers are in nondecreasing order.

$number = 1234;

echo "isNonDecreasingOrder: ".isNonDecreasingOrder($number)."<br>";

function isNonDecreasingOrder($number)
{
    $digits = str_split($number);
    $result = false;
    $y = 1;
    $temp_error = [];
    $count = count($digits)-1;
    for ($i = 0; $i < $count; $i++) {
                
        if($digits[$i] > $digits[$y]){
            $temp_error[] = true;
        }
        if($i < $count){
            $y++; 
        }
    }
    if (empty($temp_error)) {
        $result = true;
    } 
    return $result;
}
//7. Given is integer number A.
//How many digits are 9?
$number = 192349709;
$some_digit = 9;
echo "countDigit: " . $some_digit . "result: " . countDigit($number, $some_digit)."<br>";

function countDigit(int $number, int $some_digit): int
{
    $digits = str_split($number);
    $temp = [];
    foreach($digits as $digit){
        if($digit == $some_digit){
            $temp[] = $digit;
        }
    }
    $result = count($temp);
    return $result;
}
//8. Given is integer positive number A.
//Create first 5 prime numbers greater from A.
//echo "no::: ".$digits[$i]."two::: ".$digits[$y]."<br>";
$number = 6;
$result = [];
echo "prime numbers:<br>";
echo "<pre>";
print_r(primeNumbers($number, $result));  
echo "</pre>";
function primeNumbers($number, $result)
{
    if (count($result) == 5) {
        return $result;
    } else {
        $generated = rand($number++, 300);
        if(isPrime($generated)){
            $result[] = $generated;
        }
        //return primeNumbers($number, $result);
    }
}
echo "2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199, 211, 223, 227, 229, 233, 239, 241, 251, 257, 263, 269, 271, 277, 281, 283, 293 <br>";
function isPrime($number_to_check): null | bool
{
        $is_prime = true;
        // Please enter code here
        
        //$i = 53;
        $number = $number_to_check / 2;
       
        if ($number_to_check == 1) {
            $is_prime = false;
        }
        
        for ($j = 2; $j <= $number_to_check / 2; $j++) {
           // echo "iiiii" .$i, "<br>";
            //echo "jjjj" .$j, "<br>";
            if ($number_to_check % $j == 0){
                $is_prime = false;
            }
                
        }

        // End of code
        
        if ($is_prime) {
            //echo "<p>" . $number_to_check . " is a prime number!</p>";
        } else {
           // echo "<p>" . $number_to_check . " is not prime.</p>";
        }
        return $is_prime;
    }
//exit;

////////////////
//9. Calculate and print:
//A, B, C and N numbers are given.
//X = -4A + 2B - 2C + 4A^3 - 6B^3 + 8C^3 - 10A^5 ...
//X have N members.
/*
$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";
        $value = 4A^3;
        $result = "aaaa";
        $test = "test";
printf($format, $result, $value, '^', $test); 
*/
//10. Given is interval (B, C) print all successive prime number from given interval.
$start = 14;
$finish = 100;
echo "primeNumbersInterval: <br>";

echo "<pre>";
print_r(primeNumbersInterval($start, $finish));
echo "</pre>";

function primeNumbersInterval(int $start, int $finish): array
{
   
    $result = [];
    for ($i = $start; $i < $finish; $i++) {
        if(isPrime($i)){
            $result[] = $i;
        }
    }

    return $result;
}
//11. Given are arrays A(I) of K elements and X(J) of K elements.
//Array elements A(I) which are not greater from elements of array X(J) sort in nondecreasing order.
//Do not use helper array.
//In example 
//A(I) = [2,100,17,120,35,66,1,3,2,100]
//X(J) = [300,18,130,122,100]

//Result:
//A(I) = [1,2,2,3,17]
$a = [2,100,17,120,35,66,1,3,2,100];
$x = [300,18,130,122,100];
echo "notGreater: <br>";
echo "<pre>";
print_r(notGreater($a, $x));
echo "</pre>";

function notGreater(array $a_array, array $x_array): array
{
    $min = minValueInArray($x_array);
    $result = [];
    foreach($a_array as $value){
        if($value < $min){
            $result[] = $value;
        }
    }
    return $result;
}
function minValueInArray(array $array): int
{
    $min = $array[0];
    foreach($array as $value){
        if($value < $min){
            $min = $value;
        }
    }
    return $min;
}
//12. Given is array B(K) of L elements.
//Check if all array elements B(K) not negative numbers.
$array = [300,-18,130,122,100];
//$not_negative_numbers = array_walk($array, 'notNegativeNumbers');
$not_negative_numbers = notNegativeNumbers($array);
echo $not_negative_numbers."<br>";
function notNegativeNumbers($array)
{
    foreach($array as $value){
        if ($value < 0) {
            return false;
        } 
    }
    return true;
}
//13. British and French students took the same math test.
//The tests results - points are put in arrays B(J) from S elements (British) and F(K) from D elements (French).
//Print combined tests (British and French) results sorted by success.
//Do not use helper array.


$british = [2,5,17,4,10];
$french = [25,18,2,11,10];
$result = [];

foreach($french as $french_value){
    $british[] = $french_value;
}
//$y = 1;
$count = count($british)-1;
for ($i = 0; $i < $count; $i++) {
    for($j = $i+1; $j < $count; $j++)
    {
        // if you want the array sorted from bigger to smaller number use `>` here
        if($british[$j] < $british[$i])
        {
            $temp = $british[$i];
            $british[$i] = $british[$j];
            $british[$j] = $temp;
        }
    }            
}

echo "<pre>";
print_r($british);
echo "</pre>";
//14. Given is array A(I) of R elements.
//And given is array D(L) of N elements.
//Insert array D(L) to array A(I) after greatest element of array A(I).
//Do not use helper array and built-in functions.
$a = [2,5,17,4,10];
$d = [25,18,3,11,12];
$count_a = count($a)-1;
$count_d = count($d)-1;
$key_max_value = maxValueInArray($a);
echo "key_max_value:" .$key_max_value."<br>";
$temp = [];
foreach($a as $key => $value){
    if($key > $key_max_value){
        $d[] = $value;
        unset($a[$key]);
    }            
}
foreach($d as $key => $value_d){
    $a[] = $value_d;
} 
/*
foreach($temp as $key => $value){
    $a[] = $value;
} 
*/
function maxValueInArray(array $array): int
{
    $max = $array[0];
    foreach($array as $value){
        if($value > $max){
            $max = $value;
        }
    }
    foreach($array as $key => $value){
        if($value == $max){
            $key_max_value = $key;
        }
    }
    return $key_max_value;
}
echo "<pre>";
print_r($a);
echo "</pre>";
//15. Given is array X(I) of N elements.
//And array A(J) of K elements.
//Insert array A(J) in to array X(I) before least element of array X(I).
//Do not use helper array and built-in functions.

//16. Given is array X(I) from N elements and integer positive number K.
//Rotate elements of array for K elements to the left.
//Do not use built-in functions.
$x = [1,2,3,4,5,6];
$number = 2;
$i = 1;
$temp = [];
foreach($x as $key => $value){
    if($i <= $number){
        $temp[] = $value;
        unset($x[$key]);
    }
    $i++;
}
foreach($temp as $value){
    $x[] = $value;
}
echo "<pre>";
print_r($x);
echo "</pre>";
echo "Fibonacci numbers<br>";
//17. Given are integer positive numbers A and B.
//Create and print array A(I) from all Fibonacci numbers who belongs to the interval (A,B).
$start = 10;
$finish = 30;
$j = 0;
$temp = [];
//$temp[2] = 3;
for ($i = $start; $i <= $finish-1; $i++) {
    if($j == 0){
        $temp[$i] = $i;
    }
   /* echo "i:" .$i ." temp: ".$temp[$i]. "<br>";
    $j = $i;
    $temp[$j+1] = $i + $temp[$i];
    echo "i:" .$i ." temp: ".$temp[$j+1]. "<br>";
    echo "______________________-<br>";
    */
    /*for ($j = $start; $j <= $finish; $j++) {
        if(){

        }
        echo $finish."i:" .$i . "<br>";
        echo $finish."j:" .$j . "<br>";
    }*/
   $j++;
}
echo "<pre>";
print_r($temp);
echo "</pre>";
?>