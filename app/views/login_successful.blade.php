<html>
  <body>
  	  <center>

<?php
echo'WElcome to your account '.$name;



?>

<br><br>


{{ Form::open(array('url' => '/redirect')) }}

{{Form::submit('Log_out')}}

{{Form::close()}}

{{HTML::link('details','SHOW DETAILS')}}
<br><br>

{{HTML::link('all_user','SHOW ALL USER')}}

   </center>
 </body>
</html>
  