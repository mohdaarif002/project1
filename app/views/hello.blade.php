
{{-- skipmin --}}
<!doctype html>
<html>
  <body>
    
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

 

  </body>
</html>
