
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>报价系统</title>
</head>
<body>
   <h3>报价系统</h3>
   <form action="" method="post">
    <div class="leixing">
        <p>类型：
            <input type="radio" name="leixing" value="5" checked><span>双胶纸</span>
            <input type="radio" name="leixing" value="10"><span>铜版纸</span>
            <input type="radio" name="leixing" value="20"><span>凸版纸</span>
            <input type="radio" name="leixing" value="30"><span>字典纸</span>
            <input type="radio" name="leixing" value="40"><span>白卡纸</span>
        </p>
    </div>
    <div class="chicun">
         <p>尺寸：
            <input type="radio" name="chicun" value="25" checked><span>5*5cm</span>
            <input type="radio" name="chicun" value="100"><span>5*10cm</span>
            <input type="radio" name="chicun" value="200"><span>10*5cm</span>
            <input type="radio" name="chicun" value="300"><span>10*10cm</span>
            <input type="radio" name="chicun" value="400"><span>50*50cm</span>
        </p>

    </div>
    <div class="shuliang">
         <p>数量：
            <input type="text" name="shuliang" value="1">
          
        </p>

    </div>
    <input type="submit" name="price" value="报价" class="js">


   </form>
   <style>
    body{
        background-color: #dfdfdf20;
    }
    h3{
        color: #333;
        padding-bottom: 10px;
        border-bottom: 1px solid #f10707;
        margin-left: 10px;
    }
    .leixing,.chicun,.shuliang P{
        font-weight: bold;
        color: #333;
        font-size: 18px;
    }
    .leixing,.chicun,.shuliang span{
        padding: 5px;
        font-size: 16px;
        font-weight: bold;
    }
    .js{
        padding: 5px 15px;
        font-size: 16px;
        font-weight: bold;
        background-color: #f10707;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 10px;
    }
    .result{
        margin-top: 20px;
        font-size: 20px;
        font-weight: bold;
        color: #f10707;
        margin-left: 10px;
    }
   </style>
</body>
</html>
<?php
$leixing = $_POST['leixing'];
$chicun = $_POST['chicun'];
$shuliang = $_POST['shuliang'];
if($shuliang=="0"){
    echo "<P>";
    echo "数量不能为0";
    echo "</p>";
}elseif($shuliang<"0"){
     echo "<P>";
    echo "数量不能为负数";
     echo "</p>";
}elseif(!is_numeric($shuliang)){
     echo "<P>";
    echo "数量必须为数字";
        echo "</p>";
}elseif($shuliang==""){
        echo "<P>";
    echo "数量不能为空";
        echo "</p>";
}elseif($shuliang=="abc"){
        echo "<P>";
    echo "数量必须为数字";
        echo "</p>";
}elseif($shuliang>="500"&&$shuliang<="1000"){
    $shuliang = $shuliang * 0.9;
    echo js($leixing,$chicun,$shuliang);

}elseif($shuliang>"1000"&&$shuliang<="5000"){
    $shuliang = $shuliang * 0.8;
    echo js($leixing,$chicun,$shuliang);
}
else{
    echo js($leixing,$chicun,$shuliang);
}
function js($leixing,$chicun,$shuliang){
    $price = ($leixing + $chicun) * $shuliang;
    echo "<p class='result'>";
    echo "总价为：".$price."元";
    echo "</p>";
    
}
?>