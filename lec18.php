 <!-- associative arrays in php  -->
 <?php
   //Simple arrays
   $arr = array('This','That','What');
   echo $arr[0];
   echo "<br>";
   echo $arr[1];
   echo "<br>";
   echo $arr[2];
   echo "<br>";echo "<br>";

   //Associative arrays-- we associate KEYS with VALUES
   $favcolor = array('Shubham' => 'red','Rohan' => 'green', 'Harry' => 'brown', 8 => 'Black');
   //How to access the VALUE
   echo $favcolor['Harry'];
   echo "<br>";
   echo $favcolor['Shubham'];
   echo "<br>";
   echo $favcolor[8];
   echo "<br>";echo "<br>";

   //for LOOPING the associtaive arrays
   foreach ($favcolor as $key => $value)
   {
      echo "Favorite color of $key is $value.<br>";
   }
 ?>