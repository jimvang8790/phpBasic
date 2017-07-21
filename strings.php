<?php
$name = 'Jim Vang';
$string_one = "Hello $name!";
echo $string_one;
?>

<!-- Escape Sequence -->
<?php
$name = 'Jim Vang';
$string_one = "Learning to display \"Hello $name!\" to the screen.\n"; // this escape sequence \ and \n stands for new line
echo $string_one;
?>

<!-- Combining Strings -->
<!-- Combining data in a string is called concatenation. Besides using double quotes to add another variable into a string, PHP also provides two string operators for concatenation. -->
<?php
$name = 'Jim Vang';
$string_one = 'Learning to display "Hello '. $name . '!" to the screen.' . "\n";
echo $string_one;
?>
<!-- Re-write as -->
<?php
$name = 'Jim Vang';
$string_one = 'Learning to display '
    . '"Hello '
    .$name
    .'!" to the screen.'
    ."\n";
echo $string_one;
?>
<!-- Re-write as -->
<?php
$name = 'Jim Vang';
$string_one = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one .= "\n";
echo $string_one;
?>
<!-- Re-write as -->
<?php
$name = 'Jim Vang';
$string_one = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one = $string_one . "\n";
// prepend to a string
$string_one = 'I am ' . $string_one;
echo $string_one;
?>
