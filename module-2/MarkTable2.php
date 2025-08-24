<!DOCTYPE html>
<html lang ='en'>
    <!--
    Mark White
    CSD440
    Mod2
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
    // Set table dimensions
    $rows = 5;
    $cols = 5;

    // Outer loop for table rows
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        
        // Inner loop for table columns
        for ($j = 0; $j < $cols; $j++) {
            // Generate two random numbers
            $randNum = rand(1, 100);
    ?>
            <td><?php echo $randNum; ?></td>
    <?php
        }
        echo "</tr>";
    }
    ?>
</table>
</html>