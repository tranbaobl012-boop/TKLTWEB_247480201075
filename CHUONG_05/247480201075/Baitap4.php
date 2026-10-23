<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $so1=$_POST['so1'];
    $so2=$_POST['so2'];
    $pheptinh=$_POST['tinh'];
        if($pheptinh=="Cộng"){
            $ketqua= $so1 + $so2;
        } else if ($pheptinh =="Trừ"){
            $ketqua= $so1 - $so2;
        } else if ($pheptinh =="Nhân"){
            $ketqua= $so1 * $so2;
        } else if ($pheptinh =="Chia"){
            if($so2 == 0){
                $ketqua ="Lỗi: Không chia được cho 0";
            }else {
                $ketqua = $so1 / $so2;
            }
        }
        else if($pheptinh =="mod"){
            if($so2 ==0){
                $ketqua = "Lỗi: không thể chia cho 0";
            }else{
            $ketqua= $so1 % $so2;
            }
        }
            echo "<p>Phép tính: $so1 $pheptinh $so2 </p>";
            echo "<p><b>Kết quả: $ketqua</b></p>";
    ?>
</body>
</html>