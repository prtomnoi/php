<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="POST">
            <label for="">คะแนนที่ฉันได้</label>
            <input type="text" name="score">
            <!-- <input type="text" name="score1">
            <input type="text" name="score2"> -->
            <button type="submit">คำนวนเกรด</button>
    </form>
    <?PHP 
    //    print_r($_GET);
       echo $_GET["score"];
       echo $_GET["score1"];
       echo $_GET["score2"];
    ?>
</body>
</html>