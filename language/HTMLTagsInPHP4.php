   <!doctype html>

   <html>
   <head>
      <title>PHP and HTML</title>
   </head>
   <body>
      <h1>Embed PHP in HTML</h1>
      <!-- Sample 1 -->
      <?php echo "Hello world!" ?>
      <!-- Sample 2 -->
      <?php
         echo "<p> Sample 1: This text is printed from PHP!</p>";
      ?>

      <?= "<hr>" ?>

      <p>
      
       <?php
          echo "Sample 2: This text is printed from PHP!";

           ?>
      </p>

      <!-- Sample 3 -->
     <!--   <p style="color:#FF0000;">Sample 3: This a red text!</p>-->

     <p <?="style=color:#FF0000;"?>>Sample 3: This a red text!</p>

     <!-- Sample 4 -->
     <?="<p>" ?>
         Sample 4: This text is printed from PHP!
      <?="</p>" ?>


   </body>
   </html>
