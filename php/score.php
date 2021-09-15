<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kniffel!</title>
    <link rel="stylesheet" href="../css/foundation.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    include("./dat.php");
    $scr=0;
    if (isset($_GET['scr'])) {
        $scr = $_GET['scr'];
        if ($scr != "") {
            $sql = "INSERT INTO `highscore`(`highscore`) VALUES ('$scr');";
            $conn->query($sql);
        }
    }
    $sql = "SELECT `highscore` FROM `highscore` ORDER BY `highscore` DESC;";
    $res = $conn->query($sql)->fetchAll();
    $msg = [];
    $i = 0;
    if ($res) {
        foreach ($res as $r) {
            $i += 1;
            $hs = $r['highscore'];
            $cls = $hs==$scr?"rot":"";
            array_push($msg, "<div class=\"small-4 small-offset-2 greyborder $cls\">$i</div><div class=\"small-4 greyborder $cls\">$hs</div>");
        }
    }
    ?>
    <p></p>
    <div class="grid-container">
        <div class="grid-x">
            
            <?php
            foreach ($msg as $m) {
                print($m);
            }
            ?>
        </div>
    </div>
    <a href="../index.php"><button type="button" class="button" style="float:right !important;">Zurück</button></a>
</body>

</html>