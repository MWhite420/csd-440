<!DOCTYPE html>
<html lang ='en'>
    <!--
    Mark White
    CSD440
    Mod3
    -->
<head>
<title>Random Numbers Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
            text-align: center;
            color: red;
            
        }
    </style>
</head>
<body>

<h2>Random Numbers Table</h2>

<table>
    <?php

    require 'addSum.php' ;

    // Set table dimensions
    $rows = 5;
    $cols = 5;
    
    for ($i = 0; $i < $rows; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < $cols; $j++): 
                $num1 = rand(1, 50);
                $num2 = rand(1, 50);
                $sum = addNumbers($num1, $num2);
            ?>
                <td><?php echo $sum; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

    
</table>
</html>