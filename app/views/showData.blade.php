<html>

  <head>
  	<link rel="stylesheet" type="text/css" href="{{ url() }}/css/style.css"/>
  </head>
 <body>

 	<div class="showdata">

<?php

$data=DB::table('temp')->where('table_username',Session::get('key'))->first();

echo'<b>' ;print_r($data->table_username); echo '</b>  ';
echo'<b>' ;print_r($data->table_password);  echo '</b>  ';
echo'<b>'; print_r($data->id);echo'</b>';


?>






    </div>
  </body>
 </html> 
