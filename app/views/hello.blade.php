<!doctype html>
<html>
  <body>
    
  


      {{Form::open(array('url'=>'/login_check')) }}

      {{Form::label('login_usr','User_name: ')}} {{Form::text('login_usr')}}           <br>
      {{Form::label('login_pass','password: ')}} {{Form::password('login_pass')}}  <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      {{ Form::submit()}}

      {{ Form::close() }}

      <br>

      {{ Form::open(array('url'=>'/signup'))}}
       
       {{Form::submit('signup_here ')}}
       {{HTML::link('/','same_page')}}

      {{ Form::close()}}

  </body>
</html>
