<?php
$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;
$cnt = 0;
$total = 0;
if (@$_POST['naitik']) {
    $arry = $_POST;
    $a = $arry["a"];
    $b = $arry["b"];
    $c = $arry["c"];
    $d = $arry["d"];
    $e = $arry["e"];
}
$total = $a + $b + $c + $d + $e;

if ($a > $b && $a > $c && $a > $d && $a > $e) {
    $max = $a;
} else if ($b > $c && $b > $d && $b > $e) {
    $max = $b;
} else if ($c > $d && $c > $e) {
    $max = $c;
} else if ($d > $e) {
    $max = $d;
} else {
    $max = $e;
}

if ($a < $b && $a < $c && $a < $d && $a < $e) {
    $min = $a;
} else if ($b < $c && $b < $d && $b < $e) {
    $min = $b;
} else if ($c < $d && $c < $e) {
    $min = $c;
} else if ($d < $e) {
    $min = $d;
} else {
    $min = $e;
}

$pr = $min > 33 ? $total / 5 : "00";

if ($a < 33) {
    $cnt++;
}
if ($b < 33) {
    $cnt++;
}
if ($c < 33) {
    $cnt++;
}
if ($d < 33) {
    $cnt++;
}
if ($e < 33) {
    $cnt++;
}
if ($cnt == 0) {
    $res = "Pass";
} else
    if ($cnt <= 2) {
        $res = "ATKT";
    } else {
        $res = "Fail";
    }

if ($pr >= 90) {
    $grade = 'A';
} elseif ($pr >= 80) {
    $grade = 'B';
} elseif ($pr >= 70) {
    $grade = 'C';
} elseif ($pr >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}
$grade = $min > 33 ? $grade : "";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div class="main">
        <h1 align="center">Naitik Kherala</h1>
        <form method="POST">
            <table border="1" align="center">
                <tr>
                    <th width="300px">SUBJECT</th>
                    <th>MARKS</th>
                </tr>

                <tr>
                    <th>GUJRATI</th>
                    <td><?php echo $a ?>
                        <input type="text" name="a">
                    </td>
                </tr>
                <tr>
                    <th>MATHS</th>
                    <td><?php echo $b ?>
                        <input type="text" name="b">
                    </td>
                </tr>
                <tr>
                    <th>SCINCE</th>
                    <td><?php echo $c ?>
                        <input type="text" name="c">
                    </td>
                </tr>
                <tr>
                    <th>HINDI</th>
                    <td><?php echo $d ?>
                        <input type="text" name="d">
                    </td>
                </tr>
                <tr>
                    <th>SANSKRUT</th>
                    <td><?php echo $e ?>
                        <input type="text" name="e">
                    </td>
                </tr>
                <tr>
                    <th>ACTION</th>
                    <td><input type="submit" name="naitik"></td>
                </tr>
                <tr>
                    <th>TOTAL</th>
                    <td><?php echo $total ?></td>
                </tr>
                <tr>
                    <th>AVREGE</th>
                    <td><?php echo $pr ?></td>
                </tr>
                <tr>
                    <th>MINIMUM</th>
                    <td><?php echo $min ?></td>
                </tr>
                <tr>
                    <th>MAXIMUM</th>
                    <td><?php echo $max ?></td>
                </tr>
                <tr>
                    <th>RESULT</th>
                    <td><?php echo $res ?></td>
                </tr>
                <tr>
                    <th>GREAD</th>
                    <td><?php echo $grade ?></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>