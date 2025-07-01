<?php
$a = 'a'; 

switch($a)
{
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        
        echo 'vowel';
        break;

    default:
        echo 'consonant';
}
?>
