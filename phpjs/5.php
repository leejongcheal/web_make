<!-- for conditional statement -->
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <h1>JavaScript</h1>
  <script>
    result = (1==2);
    document.write("1==2 : ");
    if(result){
      document.write("참");
    } else if(!result) {
      document.write("거짓");
    }
  </script>
  <h1>php</h1>
  <?php
    $result = (1==2);
    echo "1==2 : ";
    if($result){
      echo "참";
    } else if(!$result){
      echo "거짓";
    }
  ?>
</body>
</html>