<html>
 <body>

<?php

$data=DB::table('temp')->where('table_username',Session::get('key'))->first();

echo'<b>' ;print_r($data->table_username); echo '</b>  ';
echo'<b>' ;print_r($data->table_password);  echo '</b>  ';
echo'<b>'; print_r($data->id);echo'</b>';


?>







  </body>
 </html> 
