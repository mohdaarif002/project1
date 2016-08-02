<html
     <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="bootstrap/css/style.css" rel="stylesheet">

            <script src="javascript.js">
            </script>    
    </head>
    
  <body>

   
      <?php
        $data=DB::table('temp')->get();   ?>

        
      <table class="table table-bordered">
	   <tr><th>Name</th>  <th>Password</th> <th>ID</th></tr>
        @foreach($data as $person)
         
        	<tr>
        	<td>{{$person->table_username}}</td>
           <td> {{$person->table_password}}</td>
            <td>{{$person->id}}</td>

            <tr>

        @endforeach


</table>


  	</body>
 </html> 		
