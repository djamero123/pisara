<!doctype html>
<html lang="en">
  <head>
   <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type='text/javascript' src="assets/myjs/curriculum.js"></script>
    <title>PISARA</title>
  </head>
  <body class="body">
<div class="main-wrapper">
 
<div class="form-wrapper">
<form>
  <div class="form-group">
    <select class="form-control" id='SYfilter' name="gradelevel">
      <option value="SY:2019-2020">SY:2019-2020</option>
      <option value="SY:2018-2019">SY:2018-2019</option>
      <option value="SY:2017-2018">SY:2017-2018</option>
    </select>
  </div>
</form>
    

</div>
<div class="post-wrapper">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Grade Level</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody id = "SYtable">

 <!-- Bootstrap CSS <tr>
     
      <th scope="row">Grade 1</th>
    <td>
      
      
        <div class = "col-sm-2 form-group pull-left">
          <form method="post" action="http://localhost/pisara/create_class/update"> 
            <button type="submit" class="btn btn-default pull-left">
              <i class="fa fa-home"></i>
            </button>
          </form>
        
          <form method="post" action="http://localhost/pisara/create_class/update"> 
            <button type="submit" class="btn btn-default pull-left">
              <i class="fa fa-home"></i>
            </button>
          </form>
        </div>
        
   </td>

 
    
    </tr> -->
  
    
     
    
       
  
  </tbody>
</table>
</div>
</div>
 
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>