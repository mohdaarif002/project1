<!DOCTYPE html>

<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="bootstrap/css/style.css" rel="stylesheet">

    </head>

  <body>
     
      @if( Session::get('msg')=='T')
       <script>
            alert('Thanks For Visiting here!!');
            </script>
      @else
          <script>
            alert('Welcome to Drone World!!');
            </script>
       @endif     
      
      
   <div class="mainsection">  
    
  <h2>Welcome to drone website</h2>

      {{Form::open(array('url'=>'/login_check','method'=>'POST')) }}

      {{Form::label('login_usr','Usr_name: ')}} {{Form::text('login_usr')}}           <br>
      {{Form::label('login_pass','Password: ')}} {{Form::password('login_pass')}}     <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      {{ Form::submit()}}

      {{ Form::close() }}

      <br>

      {{ Form::open(array('url'=>'/signup'))}}
       
       {{Form::submit('signup_here ')}}
       <br><br>
       {{HTML::link('/','Refresh')}}
       <br><br>

       {{HTML::link('about_us','ABOUT US')}}

      {{ Form::close()}}
      
       {{HTML::link('bootstrap_page','bootstrap_magic')}}
        <br><br>
       {{HTML::link('compressPage','compress_images')}}

 
   </div>
  </body>
</html>
