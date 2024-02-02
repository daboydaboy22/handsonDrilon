<?php

    $employeeData = array(
        "John" => 8000,
        "Mark" => 40000,
        "Ben" => 10000,
        "King" => 30000,
        "Kate" => 20000
    );

    echo "Original Data:<br>";
    foreach ($employeeData as $name => $salary) {
        echo "$name = $salary<br>";
    }

    echo "<br>Sorted Salary:<br>";
    asort($employeeData);

    foreach ($employeeData as $name => $salary) {
        echo "$name = $salary<br>";
    }
?>