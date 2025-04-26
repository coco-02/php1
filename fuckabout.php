<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/header.php'; ?>

<h1>Fannying about page</h1>


<?php

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

echo '<br><br>';

for ($i = 1; $i <=100; $i++) {
    $output = '';
    $output .= $i % 3 === 0 ? 'Fizz' : '';
    $output .= $i % 5 === 0 ? 'Buzz' : '';
    $output .= empty($output) ? $i : '';
    echo $output . '<br>';
}

?>
