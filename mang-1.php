<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng 1 chiều</title>
</head>
<body>
    <h1>Mảng 1 chiều</h1>
    <hr>
    <?php
        $a = array("Xin","Chào","Devmaster");
        print_r($a);
        echo "<p>";

        $a = array(5=> "Xin","Chào","Devmaster");
        echo "<p>";
        print_r($a);

        $a = ["Xin","Chào","Devmaster"];
        echo "<p>";
        print_r($a);

        $a = [3=>"Xin", 4=>"Chào","Devmaster"];
        echo "<p>";
        print_r($a);

        $countries = array( "us" => "United State",
                            "uk" => "United Kingdom",
                            "vn" => "Viet Nam",
                            "cn" => "China" );
        echo "<p>";
        print_r($countries);

        #duyệt mảng
        echo "<p>";
        foreach ($countries as $key => $value){
            echo "<h2> key: $key <-> value: $value";
        }
        echo "<p>";
        foreach ($countries as $value){
            echo "<h2> $value";
        }
        
        #Mảng 2 chiều
        $products = [
            ["Iphone", 10, 10000],
            ["Samsung", 15, 12000],
            ["LG", 5, 5000],
        ];

        #in ra mảng 2 chiều 
    ?>
</body>
</html>