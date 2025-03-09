<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thực hành số 3</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <caption>Hiển thị danh sách số lẻ <br /> Số chẵn và tổng tương ứng</caption>
            <tr>
                <td>Nhập số bất kì</td>
                <td>
                    <input type="text" name= "number" id="number" />
                </td>
                <td>
                    <input type="submit" value="Xử Lý" name="xuly" />
                </td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_POST["xuly"])){
            $sochan = $sole="";
            $tongchan = $tongle = 0;
            $number = $_POST["number"];
            $i = 1;
            while ($i <= $number){
                if($i%2==0){
                    $sochan .=$i.",";
                    $tongchan += $i;
                }else{
                    $sole .=$i. ",";
                    $tongle += $i;
                }
                $i++;
            }
            echo "Danh sách số chẵn :" .$sochan."<br/>";
            echo "Tổng các số chẵn :" .$tongchan."<br/>";
            echo "Danh sách số lẻ :" .$sole."<br/>";
            echo "Tổng các số lẻ :" .$tongle;
        }
    ?>
</body>
</html>