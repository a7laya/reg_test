<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">正则表达式</div>
        <div class="panel-body">
            <form action="" method="POST" name="form1">
                <div class="form-group input-group">
                    <div class="input-group-addon">输入字符串</div>
                    <input type="text" name="str" class="form-control" value="<?php print_r ($_POST["str"]);?>">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-addon">输入表达式</div>
                    <input type="text" name="reg" class="form-control" value="<?php print_r ($_POST["reg"]);?>">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="提  交">
                </div>
            </form>
        </div>
        <div class="panel-footer">
            <?php
            if($_POST["str"]&&$_POST["reg"]) {
                echo "字符串：".htmlentities($_POST["str"]);
                echo "<br>正则表达式：".$_POST["reg"]."<br>";
                $reg = $_POST["reg"];
                $pattern = "@$reg@i";
                $r = preg_match_all($pattern, $_POST["str"], $matches);
                if($r){
                    echo '用print_r($matches)：';
                    print_r($matches);
                    echo '<br>用foreach($matches[0] as $val)匹配到的东西:<br>';
                    foreach($matches[0] as $val){
                        echo htmlentities($val).' ';
                    }
                } else {
                    echo "没匹配到任何东西";
                }
            } else {
                echo "";
            }


            ?>
        </div>
    </div>
</div>
</body>
</html>