<!DOCTYPE html>
<html lang="en">
<style>
    .container2 {
        display: flex;
        flex-direction: row;
    }

    button {
        width: 70px;
        height: 50px;
    }

    body {
        display: flex;
        justify-content: center;
        flex-wrap: nowrap;
        flex-direction: column;
        align-items: center;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control page</title>
</head>

<body>
    <?php
    include ("fetch.php");
    ?>

    
    <div class="container"></div>
    <form action="moveforward.php" method="post">

        <button style="margin-bottom: 10px;" name="forward" value="forward">forward</button>
    </form>
    <br>
    <span class="container2">
        <form action="moveleft.php" method="post">

            <button name="left" value="left">left</button>
        </form>
        <form action="stopmoving.php" method="post">
            <button name="stop" value="stop">stop</button>
        </form>
        <form action="moveright.php" method="post">
            <button style="margin-bottom: 10px;" name="right" value="right">right</button>
        </form>

        </form>
    </span>
    <br>
    <form action="movebackward.php" method="post">
        <button>backward</button>
        </div>

    </form>

</body>
</html>