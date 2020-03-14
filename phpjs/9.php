<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>js</h1>
        <script>
            i = 0 
            list = new Array("1","2","3");
            while(i<list.length){
                document.write(list[i]+"<br>");
                i = i + 1;
            }
            document.write("list의 길이는 "+ list.length+"이다.");
        </script>
        <h1>php</h1>
        <?php 
            $i = 0;
            $list = array("1","2","3");
            while($i < count($list)){
                echo "<li>".$list[$i]."</li>";
                $i = $i + 1;
            }
            echo "list의 길이는 ".count($list)."이다.";
        ?>
    </body>
</html>