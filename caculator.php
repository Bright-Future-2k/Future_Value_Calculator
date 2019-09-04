<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
<input type="text" name="so_nam" placeholder="Số năm">
<input type="text" name="so_tien_dau_tu" placeholder="Số tiền đầu tư">
<input type="text" name="lai_suat" placeholder="Lãi suất">
<input type="submit" value="Caculate">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $number_year = $_POST['so_nam'];
    $number_money = $_POST['so_tien_dau_tu'];
    $interest_rate = ($_POST['lai_suat']);
    $future_price = $number_money + ($number_money * $interest_rate);

    echo $future_price ."$";

}
?>
</body>
</html>