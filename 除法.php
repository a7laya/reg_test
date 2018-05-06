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
    <div class="panel panel-danger">
        <div class="panel-heading">除法计算</div>
        <div class="panel-body">
            <form action="" method="POST" name="form1">
                <div class="form-group input-group">
                    <input type="text" name="a" class="form-control" value="<?php print_r(rand(11,100))?>">
                    <div class="input-group-addon">÷</div>
                    <input type="text" name="b" class="form-control" value="<?php print_r(rand(1,10))?>">
                    <div class="input-group-addon">=</div>
                    <input type="text" name="c" class="form-control" value="">

                </div>
                <div class="form-group">
                    <input class="btn btn-danger btn-block" type="submit" value="提交">
                </div>
            </form>
        </div>
        <div class="panel-footer">
            <?php
            switch($_POST["a"]%$_POST["b"]){
                CASE 0:
                    echo $_POST["a"]."÷".$_POST["b"]."=".$_POST["a"]/$_POST["b"];
                    break; 
                default: 
                    echo $_POST["a"]."÷".$_POST["b"]."=".floor($_POST["a"]/$_POST["b"]);
                    echo ""."余数是"."".$_POST["a"]%$_POST["b"];             
            }


            ?>
        </div>
    </div>
</div>
</body>
</html>