<?php
function printNamesInUppercase($names) {
    foreach ($names as $name) {
        $uppercaseName = strtoupper($name);
        echo $uppercaseName . '<br>';
    }
}

$names = ['Alice', 'Bob', 'Charlie', 'David'];
printNamesInUppercase($names);
echo $names;