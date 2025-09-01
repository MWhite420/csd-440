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
    $rows = 5
    $cols = 5
    
    for ($i = 0; $i < $rows; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < $cols; $j++): ?>
                <td><?php echo rand(1, 100); ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
</html>