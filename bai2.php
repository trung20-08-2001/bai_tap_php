<form method="get">
    <input type="number" name="a" placeholder="Nhập a">
    <br>
    <input type="number" name="b" placeholder="Nhập b">
    <br>
    <input type="number" name="c" placeholder="Nhập c">
    <br>
    <input type="submit" value="Tính">
    <br>
    <?php
    if (isset($_GET["a"]) && $_GET["b"] && $_GET["c"]) {
        $a=$_GET["a"];
        $b=$_GET["b"];
        $c=$_GET["c"];
       GPTB2($a,$b,$c);
    }else{
        echo "Nhập hết các hệ số";
    }
    function GPTB2($a, $b, $c){
        echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
        echo "<br>";

        if ($a == 0) {
            if ($b == 0) {
                echo ("Phương trình vô nghiệm!");
            } else {
                echo ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
            }
            return;
        }
        // tính delta
        $delta = $b * $b - 4 * $a * $c;
        $x1 = "";
        $x2 = "";

        if ($delta > 0) {
            $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
            $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
            echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        } else if ($delta == 0) {
            $x1 = (- $b / (2 * $a));
            echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
        } else {
            echo ("Phương trình vô nghiệm!");
        }
    }
    ?>
</form>
