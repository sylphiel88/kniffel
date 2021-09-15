<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <title>Kniffel!</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        if(isset($_POST['score'])){
            $scr = $_POST['score'];
            header("location:./php/score.php?scr=$scr");
            exit;
        }
        if(isset($_POST['hs'])){
            header("location:./php/score.php");
            exit;
        }
    ?>
    <div id="dice" style="float:left;"></div>
    <div style="margin-left: -35%; margin-top:40%;float:left;">
        <button id="hallo0" class="button" onclick="wrf(0)" style="background-color: rgb(0,255,0);">Würfel1</button>
        <button id="hallo1" class="button" onclick="wrf(1)" style="background-color: rgb(0,255,0);">Würfel2</button>
        <button id="hallo2" class="button" onclick="wrf(2)" style="background-color: rgb(0,255,0);">Würfel3</button>
        <button id="hallo3" class="button" onclick="wrf(3)" style="background-color: rgb(0,255,0);">Würfel4</button>
        <button id="hallo4" class="button" onclick="wrf(4)" style="background-color: rgb(0,255,0);">Würfel5</button>
        <button id="btn" class="button" onclick="wuerfel()">Würfeln</button>
        <form id="scoref" method="POST">
            <input id="score" type="hidden" name="score"></input>
            <input id="highscore" type="submit" name="hs" class="button" value="highscore">
        </form>
    </div>
    <div class="grid-container">
        <br />
        <div class="grid-x text-center">
            <div class="small-3 greyborder greyback">
                Oberer Teil
            </div>
            <div class="small-3 greyborder greyback">
                Maximum
            </div>
            <div class="small-3 greyborder greyback">
                Nötig für 63
            </div>
            <div class="small-3 greyborder greyback">
                Erreichte Punkte
            </div>
        </div>
        <div class="grid-x text-center" onclick="einser()">
            <div class="small-3 greyborder">
                1er
            </div>
            <div class="small-3 greyborder">
                5
            </div>
            <div class="small-3 greyborder">
                3
            </div>
            <div class="small-3 greyborder" id="einser">
            </div>
        </div>
        <div class="grid-x text-center" onclick="zweier()">
            <div class="small-3 greyborder">
                2er
            </div>
            <div class="small-3 greyborder">
                10
            </div>
            <div class="small-3 greyborder">
                6
            </div>
            <div class="small-3 greyborder" id="zweier">

            </div>
        </div>
        <div class="grid-x text-center" onclick="dreier()">
            <div class="small-3 greyborder">
                3er
            </div>
            <div class="small-3 greyborder">
                15
            </div>
            <div class="small-3 greyborder">
                9
            </div>
            <div class="small-3 greyborder" id="dreier">

            </div>
        </div>
        <div class="grid-x text-center" onclick="vierer()">
            <div class="small-3 greyborder">
                4er
            </div>
            <div class="small-3 greyborder">
                20
            </div>
            <div class="small-3 greyborder">
                12
            </div>
            <div class="small-3 greyborder" id="vierer">

            </div>
        </div>
        <div class="grid-x text-center" onclick="fuenfer()">
            <div class="small-3 greyborder">
                5er
            </div>
            <div class="small-3 greyborder">
                25
            </div>
            <div class="small-3 greyborder">
                15
            </div>
            <div class="small-3 greyborder" id="fuenfer">

            </div>
        </div>
        <div class="grid-x text-center" onclick="sechser()">
            <div class="small-3 greyborder">
                6er
            </div>
            <div class="small-3 greyborder">
                30
            </div>
            <div class="small-3 greyborder">
                18
            </div>
            <div class="small-3 greyborder" id="sechser">

            </div>
        </div>
        <div class="grid-x text-center">
            <div class="small-3 greyborder">
                Gesammt
            </div>
            <div class="small-3 greyborder">
                105
            </div>
            <div class="small-3 greyborder">
                63
            </div>
            <div class="small-3 greyborder" id="gesammt1">

            </div>
        </div>
        <div class="grid-x text-center">
            <div class="small-3 greyborder">
                Bonus bei >=63
            </div>
            <div class="small-3 greyborder">
                35
            </div>
            <div class="small-3 greyborder">
                35
            </div>
            <div class="small-3 greyborder" id="bonus">

            </div>
        </div>
        <div class="grid-x text-center">
            <div class="small-3 greyborder">
                Gesammt Oberer Teil
            </div>
            <div class="small-3 greyborder">
                140
            </div>
            <div class="small-3 greyborder">
                98
            </div>
            <div class="small-3 greyborder" id="gesammt2">

            </div>
        </div>
        <div class="grid-x text-center">
            <div class="small-3 greyborder greyback">
                Unterer Teil
            </div>
            <div class="small-3 greyborder greyback">
                Punktewert
            </div>
            <div class="small-3 greyborder greyback">
            </div>
            <div class="small-3 greyborder greyback">
                Erreichte Punkte
            </div>
        </div>
        <div class="grid-x text-center" onclick="dreierpasch()">
            <div class="small-3 greyborder">
                Dreierpasch
            </div>
            <div class="small-3 greyborder">
                alle Augen
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="dreierpasch">

            </div>
        </div>
        <div class="grid-x text-center" onclick="viererpasch()">
            <div class="small-3 greyborder">
                Viererpasch
            </div>
            <div class="small-3 greyborder">
                alle Augen
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="viererpasch">

            </div>
        </div>
        <div class="grid-x text-center" onclick="fullhouse()">
            <div class="small-3 greyborder">
                Full House
            </div>
            <div class="small-3 greyborder">
                25
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="fullhouse">

            </div>
        </div>
        <div class="grid-x text-center" onclick="kleinestrasse()">
            <div class="small-3 greyborder">
                kleine Straße
            </div>
            <div class="small-3 greyborder">
                30
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="klstrasse">

            </div>
        </div>
        <div class="grid-x text-center" onclick="großestrasse()">
            <div class="small-3 greyborder">
                Große Straße
            </div>
            <div class="small-3 greyborder">
                40
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="grstrasse">

            </div>
        </div>
        <div class="grid-x text-center" onclick="kniffel()">
            <div class="small-3 greyborder">
                Kniffel
            </div>
            <div class="small-3 greyborder">
                50
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="kniffel">

            </div>
        </div>
        <div class="grid-x text-center" onclick="chance()">
            <div class="small-3 greyborder">
                Chance
            </div>
            <div class="small-3 greyborder">
                alle Augen
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="chance">

            </div>
        </div>
        <div class="grid-x text-center">
            <div class="small-3 greyborder">
                Gesammt Unterer Teil
            </div>
            <div class="small-3 greyborder">

            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="gesammt3">

            </div>
        </div>
        <div class="grid-x text-center">
            <div class="small-3 greyborder">
                Gesammt Oberer Teil
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="gesammt4">
            </div>
        </div>
        <div class="grid-x text-center">
            <div class="small-3 greyborder">
                Gesammtsumme
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder">
            </div>
            <div class="small-3 greyborder" id="gesammt5">

            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/three.js-master/build/three.js"></script>
    <script>
        var zahlen = [];
        var wuerf = [true, true, true, true, true];
        for (var i = 0; i < 5; i++) {
            zahl = Math.floor(Math.random() * 6 + 1);
            zahlen.push(zahl);
        }
        function wrf(i) {
            wuerf[i] = !wuerf[i]
            document.getElementById("hallo" + i).style.background = wuerf[i] == false ? "rgb(255,0,0)" : "rgb(0,255,0)";
        }
        var count = 0;
        function wuerfel() {
            count += 1;
            if (count < 3) {
                window.wuerfeln(zahlen);
                if (count == 2) {
                    document.getElementById("btn").disabled = true;
                }
            }
        }
        var obererTeil = [0, 0, 0, 0, 0, 0, 0, 0, 0];
        var untererTeil = [0, 0, 0, 0, 0, 0, 0, 0, 0];
        function order() {
            var order = [0, 0, 0, 0, 0, 0];
            for (var i = 0; i < 5; i++) {
                zahl = zahlen[i];
                order[zahl - 1] += zahl;
            }
            return order;
        }
        document.getElementById("einser").innerHTML = " ";
        document.getElementById("zweier").innerHTML = " ";
        document.getElementById("dreier").innerHTML = " ";
        document.getElementById("vierer").innerHTML = " ";
        document.getElementById("fuenfer").innerHTML = " ";
        document.getElementById("sechser").innerHTML = " ";
        document.getElementById("gesammt1").innerHTML = " ";
        document.getElementById("bonus").innerHTML = " ";
        document.getElementById("gesammt2").innerHTML = " ";
        document.getElementById("gesammt3").innerHTML = " ";
        document.getElementById("gesammt4").innerHTML = " ";
        document.getElementById("gesammt5").innerHTML = " ";
        document.getElementById("dreierpasch").innerHTML = " ";
        document.getElementById("viererpasch").innerHTML = " ";

        function getWincon() {
            var temp = 0;
            for (var i = 0; i < 9; i++) {
                temp += obererTeil[i] != 0 ? 1 : 0;
                temp += untererTeil[i] != 0 ? 1 : 0;
            }
            var needed = obererTeil[7]<63&&obererTeil[6]==0?17:18;
            return temp == needed;
        }

        function einser() {
            if (obererTeil[0] == 0) {
                ordered = order();
                obererTeil[0] = ordered[0]
                obererTeil[7] += ordered[0];
                obererTeil[8] += ordered[0];
                document.getElementById("einser").innerHTML = ordered[0];
                document.getElementById("gesammt1").innerHTML = obererTeil[7];
                if (obererTeil[7] >= 63 && obererTeil[6] == 0) {
                    document.getElementById("bonus").innerHTML = 35;
                    obererTeil[6] = 35;
                    obererTeil[8] = obererTeil[7] + 35;
                }
                untererTeil[8] = untererTeil[7] + obererTeil[8];
                document.getElementById("gesammt2").innerHTML = obererTeil[8];
                document.getElementById("gesammt4").innerHTML = obererTeil[8];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function zweier() {
            if (obererTeil[1] == 0) {
                ordered = order();
                obererTeil[1] = ordered[1]
                obererTeil[7] += ordered[1];
                obererTeil[8] += ordered[1];
                document.getElementById("zweier").innerHTML = ordered[1];
                document.getElementById("gesammt1").innerHTML = obererTeil[7];
                if (obererTeil[7] >= 63 && obererTeil[6] == 0) {
                    document.getElementById("bonus").innerHTML = 35;
                    obererTeil[6] = 35;
                    obererTeil[8] += 35;
                }
                untererTeil[8] = untererTeil[7] + obererTeil[8];
                document.getElementById("gesammt2").innerHTML = obererTeil[8];
                document.getElementById("gesammt4").innerHTML = obererTeil[8];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function dreier() {
            if (obererTeil[2] == 0) {
                ordered = order();
                obererTeil[2] = ordered[2]
                obererTeil[7] += ordered[2];
                obererTeil[8] += ordered[2];
                document.getElementById("dreier").innerHTML = ordered[2];
                document.getElementById("gesammt1").innerHTML = obererTeil[7];
                if (obererTeil[7] >= 63 && obererTeil[6] == 0) {
                    document.getElementById("bonus").innerHTML = 35;
                    obererTeil[8] += 35;
                    obererTeil[6] = 35;
                }
                untererTeil[8] = untererTeil[7] + obererTeil[8];
                document.getElementById("gesammt2").innerHTML = obererTeil[8];
                document.getElementById("gesammt4").innerHTML = obererTeil[8];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function vierer() {
            if (obererTeil[3] == 0) {
                ordered = order();
                obererTeil[3] = ordered[3]
                obererTeil[7] += ordered[3];
                obererTeil[8] += ordered[3];
                document.getElementById("vierer").innerHTML = ordered[3];
                document.getElementById("gesammt1").innerHTML = obererTeil[7];
                if (obererTeil[7] >= 63 && obererTeil[6] == 0) {
                    document.getElementById("bonus").innerHTML = 35;
                    obererTeil[8] += 35;
                    obererTeil[6] = 35;
                }
                untererTeil[8] = untererTeil[7] + obererTeil[8];
                document.getElementById("gesammt2").innerHTML = obererTeil[8];
                document.getElementById("gesammt4").innerHTML = obererTeil[8];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function fuenfer() {
            if (obererTeil[4] == 0) {
                ordered = order();
                obererTeil[4] = ordered[4]
                obererTeil[7] += ordered[4];
                obererTeil[8] += ordered[4];
                document.getElementById("fuenfer").innerHTML = ordered[4];
                document.getElementById("gesammt1").innerHTML = obererTeil[7];
                if (obererTeil[7] >= 63 && obererTeil[6] == 0) {
                    document.getElementById("bonus").innerHTML = 35;
                    obererTeil[8] += 35;
                    obererTeil[6] = 35;
                }
                untererTeil[8] = untererTeil[7] + obererTeil[8];
                document.getElementById("gesammt2").innerHTML = obererTeil[8];
                document.getElementById("gesammt4").innerHTML = obererTeil[8];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function sechser() {
            if (obererTeil[5] == 0) {
                ordered = order();
                obererTeil[5] = ordered[5]
                obererTeil[7] += ordered[5];
                obererTeil[8] += ordered[5];
                document.getElementById("sechser").innerHTML = ordered[5];
                document.getElementById("gesammt1").innerHTML = obererTeil[7];
                if (obererTeil[7] >= 63 && obererTeil[6] == 0) {
                    document.getElementById("bonus").innerHTML = 35;
                    obererTeil[8] += 35;
                    obererTeil[6] = 35;
                }
                untererTeil[8] = untererTeil[7] + obererTeil[8];
                document.getElementById("gesammt2").innerHTML = obererTeil[8];
                document.getElementById("gesammt4").innerHTML = obererTeil[8];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function getMax(array) {
            var temp = 0;
            for (var i = 0; i < 7; i++) {
                if (array[i - 1] / i >= temp) {
                    temp = array[i - 1] / i;
                }
            }
            return temp;
        }
        function getFh(array) {
            temp = [0, 0]
            var ord = order();
            for (var i = 0; i < 7; i++) {
                var n = ord[i - 1] / i
                if (n == 2) {
                    temp[0] = 1;
                }
                if (n == 3) {
                    temp[1] = 1;
                }
            }
            return temp;
        }
        function getSum(array) {
            var temp = 0;
            for (var i = 0; i < 6; i++) {
                temp += array[i];
            }
            return temp;
        }
        function getStreet(array) {
            streetlen = 0;
            for (var i = 1; i < 8; i++) {
                if (array[i - 1] / i >= 1 && streetlen == 0) {
                    streetlen += 1;
                } else if (array[i - 1] / i >= 1 && streetlen > 0) {
                    streetlen += 1;
                } else if (array[i - 1] / i == 0 && streetlen > 0) {
                    break;
                }
            }
            return streetlen;
        }
        function dreierpasch() {
            if (untererTeil[0] == 0) {
                ordered = order();
                var m = getMax(ordered);
                var s = getSum(ordered);
                untererTeil[0] = m >= 3 ? s : -1;
                untererTeil[7] += m >= 3 ? s : 0;
                untererTeil[8] = obererTeil[8] + untererTeil[7];
                document.getElementById("dreierpasch").innerHTML = m >= 3 ? s : 0;
                document.getElementById("gesammt3").innerHTML = untererTeil[7];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function viererpasch() {
            if (untererTeil[1] == 0) {
                ordered = order();
                var m = getMax(ordered);
                var s = getSum(ordered);
                untererTeil[1] = m >= 4 ? s : -1;
                untererTeil[7] += untererTeil[1] <= 0 ? 0 : s
                untererTeil[8] = obererTeil[8] + untererTeil[7];
                document.getElementById("viererpasch").innerHTML = untererTeil[1] <= 0 ? 0 : s;
                document.getElementById("gesammt3").innerHTML = untererTeil[7];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function fullhouse() {
            if (untererTeil[2] == 0) {
                var fh = getFh()
                if (fh[0] == 1 && fh[1] == 1) {
                    untererTeil[2] = 25;
                } else {
                    untererTeil[2] = -1;
                }
                untererTeil[7] += untererTeil[2] <= 0 ? 0 : untererTeil[2];
                untererTeil[8] = obererTeil[8] + untererTeil[7];
                document.getElementById("fullhouse").innerHTML = untererTeil[2] <= 0 ? 0 : 25;
                document.getElementById("gesammt3").innerHTML = untererTeil[7];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function chance() {
            if (untererTeil[6] == 0) {
                ordered = order(zahlen);
                untererTeil[6] = getSum(ordered);
                untererTeil[7] += untererTeil[6] <= 0 ? 0 : untererTeil[6];
                untererTeil[8] = obererTeil[8] + untererTeil[7];
                document.getElementById("chance").innerHTML = untererTeil[6] <= 0 ? 0 : getSum(ordered);
                document.getElementById("gesammt3").innerHTML = untererTeil[7];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function kleinestrasse() {
            if (untererTeil[3] == 0) {
                ordered = order(zahlen);
                var len = getStreet(ordered);
                if (len >= 4) {
                    untererTeil[3] = 30;
                } else {
                    untererTeil[3] = -1;
                }
                untererTeil[7] += untererTeil[3] <= 0 ? 0 : untererTeil[3];
                untererTeil[8] = obererTeil[8] + untererTeil[7];
                document.getElementById("klstrasse").innerHTML = untererTeil[3] <= 0 ? 0 : untererTeil[3];
                document.getElementById("gesammt3").innerHTML = untererTeil[7];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function großestrasse() {
            if (untererTeil[4] == 0) {
                ordered = order(zahlen);
                var len = getStreet(ordered);
                console.log(len);
                if (len >= 5) {
                    untererTeil[4] = 40;
                } else {
                    untererTeil[4] = -1;
                }
                untererTeil[7] += untererTeil[4] <= 0 ? 0 : untererTeil[4];
                untererTeil[8] = obererTeil[8] + untererTeil[7];
                document.getElementById("grstrasse").innerHTML = untererTeil[4] <= 0 ? 0 : untererTeil[4];
                document.getElementById("gesammt3").innerHTML = untererTeil[7];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
        function kniffel() {
            if (untererTeil[5] == 0) {
                ordered = order();
                var m = getMax(ordered);
                untererTeil[5] = m >= 5 ? 50 : -1;
                untererTeil[7] += untererTeil[5] <= 0 ? 0 : 50;
                untererTeil[8] = obererTeil[8] + untererTeil[7];
                document.getElementById("kniffel").innerHTML = untererTeil[5] <= 0 ? 0 : untererTeil[5];
                document.getElementById("gesammt3").innerHTML = untererTeil[7];
                document.getElementById("gesammt5").innerHTML = untererTeil[8];
                count = 0;
                wuerf = [true, true, true, true, true];
                document.getElementById("btn").disabled = false;
                for (var i = 0; i < 5; i++) {
                    zahlen[i] = Math.floor(Math.random() * 6 + 1);
                    document.getElementById("hallo" + i).style.background = "rgb(0,255,0)";
                }
                if (getWincon()) {
                    document.getElementById("score").value=untererTeil[8];
                    document.getElementById("scoref").submit();
                } else {
                    window.wuerfeln(zahlen);
                }
            }
        }
    </script>
    <script type="module" src="js/dice.js"></script>
    <script type="module">
        import { wuerfeln } from './js/dice.js';
        window.wuerfeln = wuerfeln;
        wuerfeln(zahlen);
    </script>
</body>

</html>