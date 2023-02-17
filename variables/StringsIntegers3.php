<!doctype html>
<html>
<head>
    <title>
        Variables and Constants
    </title>
</head>
<body>

    <!-- Sample 1 -->
    <h1>Define Strings</h1>
    <?php

        $name = "John, Smith";
        $message = "This is a string message";
        echo $name .":" . $message;

    ?>

    <h1>Define Integers</h1>

    <?php

        $version = 7.0;
        echo "PHP version is $version";
        
            ?>

      <!-- Sample 2 -->
      <h1>Combine string and integer</h1>  
      <?php
        echo "$name: $message";
        echo "name: $name";
        $language="PHP";
        echo "$language version is $version";


      ?>  

      <!-- Sample 3 -->
      <h1>Add Two Values</h1>
      <?php
        $firstvalue = 10;
        $secondvalue = 20;
        $total = $firstvalue + $secondvalue;

        echo "total:". $total;


      ?>  


</body>
</html>

