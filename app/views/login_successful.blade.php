<html>
    <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">    
          <link href="bootstrap/css/style.css" rel="stylesheet">
    	
    </head>
  <body>
 
  	<div class="mainsection">
  	  
 

WElcome to your account {{ $name }}




<br><br>


{{ Form::open(array('url' => '/redirect')) }}

{{Form::submit('Log_out')}}

{{Form::close()}}

{{HTML::link('details','SHOW DETAILS')}}
<br><br>

{{HTML::link('all_user','SHOW ALL USER')}}


  

  </div>
 </body>
</html>
  