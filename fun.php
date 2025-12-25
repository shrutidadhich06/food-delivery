<Html>
<title>Hello</title>
<?php
function sum($x,$y)
{
    $a=$x;
    $b=$y;
    $c=$a+$b;
    return($c);

}
?>
<body>
    <?php
    $p=sum(20,45);
    echo $p;
    
    ?>
</body>

    </html>
