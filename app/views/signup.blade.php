<!doctype html>
<html>
    <head>

<style type="text/css">

 .message{

   color:red;
   font-weight: bold;
         }

</style>
     


      </head>
  <body>
  	<center><h2>Sign Up Form </h2>

      @foreach($errors->all("<p class='message'> :message </p>") as $error)
          {{ $error}}
      @endforeach

      {{Form::open(array('url'=>'/form_submitted')) }}

       {{Form::text('form_usr')}}           <br>
       {{Form::password('form_pass')}}  <br>

       {{ Form::submit('Fill this form')}}

      {{ Form::close() }}

    </center>
  </body>
</html>