<?php
    // 1) Arithmetic & assignment
    $a = 10; $b = 3;
    $sum = $a + $b;
    $prod = $a * $b;
    $a += 5; // a becomes 15
    echo "sum=$sum prod=$prod a=$a\n";
    
    // 2) Precedence & parentheses (predict before running)
    echo 2 + 3 * 4, "\n";         // 14
    echo (2 + 3) * 4, "\n";       // 20
    
    // 3) String concatenation vs interpolation
    $name = "Ada";
    echo "Hello $name\n";         // interpolation
    echo 'Hello ' . $name . "\n"; // concatenation
    
    // 4) Comparison: loose vs strict
    $x = "0";
    var_dump($x == false);  // true
    var_dump($x === false); // false
    
    // 5) Logical
    $age = 19; $hasId = true;
    if ($age >= 19 && $hasId) echo "Entry allowed\n";
    
    // 6) Ternary & null-coalescing
    $score = $_GET['score'] ?? null;
    $label = ($score !== null && $score >= 50) ? 'Pass' : 'Fail/NoScore';
    echo "Result: $label\n";

   // Multiplying and dividing Strings
    $toM = ('3');
    $toM = $toM*3;
    echo nl2br("Three times 3.\n");
    echo $toM;
    echo nl2br("\nThree divided by 3.\n");
    echo '3' / 3;
    $truth = ($toM === 9 && ('3'/3) === 1) ? 'Pass' : 'Fail';
    echo nl2br("\n $truth");

?>