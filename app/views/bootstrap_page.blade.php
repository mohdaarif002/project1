<html>

<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
 <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="bootstrap/css/style.css" rel="stylesheet">
    </head>

 <body>

      <div class="row">
          
          <div class="col-xs-4" style="background-color:red">
             first
          </div>
          <div class="col-xs-4" style="background-color:blueviolet">
                second
          </div>
          <div class="col-xs-4" style="background-color:yellow">
                  third
          </div>
    
      </div>
         <div class="row">
          
          <div class="col-md-4" style="background-color:red">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Option 1</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Option 2</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox" value="" >Option 3</label>
                    </div>    
          </div>
          <div class="col-md-4" style="background-color:blueviolet">
                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" id="name">
                    
                </div> 
          </div>
          <div class="col-md-4" style="background-color:yellow">
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                    </ul>
                    </div>
          </div>
    
      </div>
 
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>