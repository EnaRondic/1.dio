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


 
  <?php
  //Sample 2
  $input1 = null;
  $input2 = 34;
  if ( is_null($input1)) {
   echo '$input1 is not empty';
  }else {
   echo '$input1 is empty';
  }

  //condition 2
  if ( isset($input1) && !is_null($input1)) {
   echo '$input1 is not empty';
  }else {
   echo '$input1 is empty';
  }

  //condition 3
  if($input1 != ""){
   echo '$input1 is not empty';
  }else{
    echo '$input1 is empty';
  }

  //best way to check if the field is empty
  if(!empty($input1)){
   echo '$input1 is not empty';
  }else {
     echo '$input1 is empty';
  }

if($input2 >= 34){
   echo '$input2 is greater or equal than 34';
  }else {
     echo '$input1 is less than 34';
  }


?>