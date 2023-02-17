  <?php
  //Sample 1
  $some_boolean_condition = TRUE;
  if( $some_boolean_condition){
  	echo 'This is a if block condition' . PHP_EOL;
  	echo 'This is a true condition' . PHP_EOL;

  } else {
  	echo 'This is a else block condition' . PHP_EOL;
  	echo 'This is a false condition' . PHP_EOL;

  }
  $one_more_boolean_condition = FALSE;
  if ( $some_boolean_condition && $one_more_boolean_condition ) {
  	echo 'This is a if block condition' . PHP_EOL;
  	echo 'This is a true condition' . PHP_EOL;

  }else {
  	echo 'This is a else block condition' . PHP_EOL;
  	echo 'This is a false condition' . PHP_EOL;


  }
  ?>
  
  <!doctype html>
  <html>
  <head>
      <title>
         if else Statements
      </title>
  </head>
  <body>
     <?php if ($some_boolean_condition || true){?>
        <h1>This is a true Condition</h1>

    <?php } else { ?>
    	<h1>This is false Condition</h1>

    <?php } ?>

  </body>