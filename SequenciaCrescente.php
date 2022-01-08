<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SequenciaCrescente</title>
</head>
<body>
    <?php

function SequenciaCrescente($array)
{
    if (sizeof($array) == 1) {
        return " True";
    }
    for ($i = 0; $i < sizeof($array); $i++) {
        $ordemCrescente = true;
        $arr = $array;


        array_splice($arr, $i, 1);


        for ($j = 0; $j < sizeof($arr) - 1; $j++) {
            if ($arr[$j] >= $arr[$j + 1]) {
                $ordemCrescente = false;
            }
        }

        if ($ordemCrescente) {
            return " True";
        }
    }

    return " False";
}

echo "[1, 3, 2, 1] " . SequenciaCrescente([1, 3, 2, 1]) . "<br>";
echo "[1, 3, 2] " . SequenciaCrescente([1, 3, 2]) . "<br>";
echo "[1, 2, 1, 2] " . SequenciaCrescente([1, 2, 1, 2]) . "<br>";
echo "[3, 6, 5, 8, 10, 20, 15] " . SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]) . "<br>";
echo "[1, 1, 2, 3, 4, 4] " . SequenciaCrescente([1, 1, 2, 3, 4, 4]) . "<br>";
echo "[1, 4, 10, 4, 2] " . SequenciaCrescente([1, 4, 10, 4, 2]) . "<br>";
echo "[10, 1, 2, 3, 4, 5] " . SequenciaCrescente([10, 1, 2, 3, 4, 5]) . "<br>";
echo "[1, 1, 1, 2, 3] " . SequenciaCrescente([1, 1, 1, 2, 3]) . "<br>";
echo "[0, -2, 5, 6] " . SequenciaCrescente([0, -2, 5, 6]) . "<br>";
echo "[1, 2, 3, 4, 5, 3, 5, 6] " . SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]) . "<br>";
echo "[40, 50, 60, 10, 20, 30] " . SequenciaCrescente([40, 50, 60, 10, 20, 30]) . "<br>";
echo "[1, 1] " . SequenciaCrescente([1, 1]) . "<br>";
echo "[1, 2, 5, 3, 5] " . SequenciaCrescente([1, 2, 5, 3, 5]) . "<br>";
echo "[1, 2, 5, 5, 5] " . SequenciaCrescente([1, 2, 5, 5, 5]) . "<br>";
echo "[10, 1, 2, 3, 4, 5, 6, 1] " . SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]) . "<br>";
echo "[1, 2, 3, 4, 3, 6] " . SequenciaCrescente([1, 2, 3, 4, 3, 6]) . "<br>";
echo "[1, 2, 3, 4, 99, 5, 6] " . SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]) . "<br>";
echo "[123, -17, -5, 1, 2, 3, 12, 43, 45] " . SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]) . "<br>";
echo "[3, 5, 67, 98, 3] " . SequenciaCrescente([3, 5, 67, 98, 3]);
?>
</body>
</html>