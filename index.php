<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>正则表达式测试页面</title>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">PHP正则表达式测试</div>
        <div class="panel-body">
            <form action="" method="POST" name="form1">
                <div class="form-group input-group">
                    <div class="input-group-addon">字符串</div>
                    <input type="text" name="str" class="form-control" value="<?php print_r ($_POST["str"]);?>">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-addon">表达式</div>
                    <input type="text" name="reg" class="form-control" value="<?php if (isset($_POST["reg"])){
                                    echo ($_POST["reg"]);
                                 } else {
                                    echo "";
                                 }
                            ?>">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="提  交">
                </div>
            </form>
        </div>
        <div class="panel-footer">
            <?php
            if(isset($_POST["str"]) && isset($_POST["reg"])) {
                echo "★字符串：".htmlentities($_POST["str"]);
                echo "<br>★正则表达式：".htmlentities($_POST["reg"])."<br>";
                $reg = $_POST["reg"];
                $pattern = "@$reg@i";
                $r = preg_match_all($pattern, $_POST["str"], $matches);
                if($r){
                    echo '★匹配结果：';
                    foreach($matches[0] as $val){
                        echo '<div class="result">'.htmlentities($val).'</div><span>|</span>';
                    }
                    echo '<p>☆匹配到的数组:';
                    var_dump($matches);
                    echo '</p>';
                } else {
                    echo "<span>☆匹配结果：没匹配到任何东西</span>";
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