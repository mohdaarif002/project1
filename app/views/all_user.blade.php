<html>
  <body>

   
      <?php
        $data=DB::table('temp')->get();   ?>

        
<table>
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
