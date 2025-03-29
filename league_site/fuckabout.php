<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/header.php'; ?>

<h1>Fannying about page</h1>

<!-- <button> PRESS ME TO START COUNTER</button> -->


<?php
// while (1){ 
//     for ($x = 0; $x <= 100; $x++) {
//         echo "The number is: $x <br>";
//         sleep(1);
//     }
// }

// if ($x % 3 == 0) echo "Fizz";

// if ($x % 5 == 0) echo "Buzz";

// if ($x % 3 == 0 || $x % 5 ==0) echo "FizzBuzz"

// function fizbuzz(n) {

//     const results = [];
//     for( let i = 1; i <= n; i += 1){
//         let result ='';
//         if (i %3 === 0) {
//             result += 'Fizz';
//             x}
//             if  (i % 5 === 0){
//                 result += 'Buzz';
//             }
//             if (result) {
//                 results.push(result);
//             } 
//             else {
//                 results.push(1);
//             }
//         }

//         return results;
//     }

for ($i = 1; $i <=100; $i++) {
    if ($i % 15 == 0) {
        echo 'FizzBuzz<br>'; 
    } elseif ($i % 3 == 0){
        echo 'Fizz<br>';
    } elseif ($i % 5 ==0){
        echo 'Buzz<br>';
    } else{
        echo $i . '<br>';
    }


    }
    


?>
