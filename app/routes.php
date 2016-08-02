<?php



Route::get('/pass',function(){

return View::make('pass');

});


Route::get('/',function(){

return View::make('hello');

});

Route::post('/form_submitted', function()
{ 
 $user=$_POST['form_usr'];
 $pass=$_POST['form_pass'];


$rules=array(
   'form_usr' => 'required|alpha_num',
    'form_pass'=>'required|min:3'
  );

$validator= Validator::make(Input::all(),$rules);

if($validator->fails()){

  return Redirect::to('signup')->withInput()->withErrors($validator->messages());

/*
if(empty($_POST['form_usr'])  ||   empty($_POST['form_pass']) )
{
    echo "\n Error: all fields are required";
}          */
    }
else{

 $hash_pass=Hash::make($pass); 
 date_default_timezone_set("Asia/Calcutta");
 DB::table('temp')->insert(array('table_username' => $user,'table_password' =>$hash_pass,'date'=> date("Y:m:d  h:i:sa")) );


echo 'login_successful';

return View::make('hello');

}

});
 

 Route::post('signup', function()
{ 
    return View::make('signup');

});


 Route::get('signup', function()
{ 
    return View::make('signup');

});



 Route::post('/login_check', function()
{ 
$user=$_POST['login_usr'];
$pass=$_POST['login_pass'];

if(empty($_POST['login_usr'])  ||   empty($_POST['login_pass']) )
{
    echo "\n Error: all fields are required";
}
else{

Session::put('key',$user);
$table_row=DB::table('temp')->where('table_username',$user)->first();
if($table_row){
$table_pass=$table_row->table_password;
//$Re_hash=Hash::needsRehash($table_pass);



if($user==$table_row->table_username and Hash::check($pass,$table_pass)){
     return View::make('login_successful')->withName($user);}
   else {echo "Permission denied!!";
     return View::make('hello');}
    
 }
else
    {echo "Permission denied!!";
     return View::make('hello');}
   
  
  }

});

 Route::post('/redirect','HomeController@logOut');
     
   




 Route::get('/details',function(){

return View::make('showData');

 });


 Route::get('/all_user',function(){

return View::make('all_user');

 });

 Route::get('about_us',function(){

 return View::make('about_us');

 });
 
 Route::get('bootstrap_page',function(){
       
   return View::make('bootstrap_page');
 });

 Route::get('compressPage',function(){

return View::make('compressPage');


 });