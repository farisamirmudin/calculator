<?php
$num = 0;
$exp = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['num']){
        $num = (int)$_POST['num'];
    }
    else if ($_POST['exp']) {
        $exp = $_POST['exp'];
    }

    if($exp === '='){

    }
}
function($todo, $num)
{
    switch ($todo) {
        case '+':
            $num += $num;
    }
}





?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        button {
            width:40px;
            height:40px;
            margin-bottom: 5px;
        }
    </style>
    <title>Products CRUD</title>
</head>
<body>

<div>
    <input style="width: 165px; height:80px; border:1px solid black; margin-bottom: 5px; text-align: right" value="<?php echo $num ?>">
    <form action="" method="post">
        <div>
            <button type="submit" name="exp">AC</button>
            <button type="submit" name="exp">+/-</button>
            <button type="submit" name="exp">%</button>
            <button type="submit" name="exp">/</button>
        </div>
        <div>
            <button type="submit" name="num" value="7">7</button>
            <button type="submit" name="num" value="8">8</button>
            <button type="submit" name="num" value="9">9</button>
            <button type="submit" name="exp" value="*">*</button>
        </div>
        <div>
            <button type="submit" name="num" value="4">4</button>
            <button type="submit" name="num" value="5">5</button>
            <button type="submit" name="num" value="6">6</button>
            <button type="submit" name="exp" value="-">-</button>
        </div>
        <div>
            <button type="submit" name="num" value="1">1</button>
            <button type="submit" name="num" value="2">2</button>
            <button type="submit" name="num" value="3">3</button>
            <button type="submit" name="exp" value="+">+</button>
        </div>
        <div>
            <button type="submit" style="width:85px" name="num" value="0">0</button>
            <button type="submit" name="exp" value=".">.</button>
            <button type="submit" name="exp" value="=">=</button>
        </div>

    </form>
</div>
</body>
</html>
