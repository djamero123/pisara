<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PISARA</title>
  </head>
  <body class="body">
<div class="main-wrapper">
 
<div class="form-wrapper">
<form method="post" action="http://localhost/pisara/create_class">
  <div class="form-group">
    <label for="exampleFormControlInput1"><strong>SUBJECT TITLE</strong></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title">
  </div>
    <span style="color: red"><?=(isset($msg1))?$msg1:''?></span>
  <div class="form-group">
    <label for="exampleFormControlSelect1"><strong>GRADE LEVEL</strong></label>
    <select class="form-control" id="exampleFormControlSelect1" name="gradelevel">
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
  </div>
    
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><strong>SUBJECT DESCRIPTION</strong></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>

  </div>
     <span style="color: red"><?=(isset($msg2))?$msg2:''?></span>
    <div class="form-group">
    <label for="exampleFormControlSelect1"><strong>SUBJECT UNITS</strong></label>
    <select class="form-control" id="exampleFormControlSelect1" name="unit">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    

  <button type="submit" class="btn btn-primary">Create subject</button>
  <span style="color: green"><?=(isset($flashmsg))?$flashmsg:''?></span>
</form>
</div>
<br>
<div class="post-wrapper">
<table class="table">
  <thead>
    <tr>
      <th scope="col">SUBJECT ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">GRADE LEVEL</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">UNITS</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>

    <?php if(!empty($posts)){ ?>

    
<?php foreach ($posts as $post) {?>
 <tr>
     
      <th scope="row"><?php echo $post->subjectID; ?></th>
      <td><?php echo $post->title; ?></td>
      <td><?php echo $post->gradelevel; ?></td>
      <td><?php echo $post->description; ?></td>
      <td><?php echo $post->unit; ?></td>
      <td>
        <button type="button" class="btn btn-success" >Create Schedule</button>
        <form method="post" action="http://localhost/pisara/create_class/update"> 
        <button type="submit" class="btn btn-primary">Update Subject</button>
        </form>
         
       <form method="post" action="http://localhost/pisara/create_class/delete"> 
       <button type="submit" class="btn btn-danger" name="subjectID" value="<?php echo $post->subjectID; ?>">Delete Subject &nbsp;</button>
       </form>
      </td>
    </tr>
  
<?php }?>
<?php }?>
    
     
    
       
  
  </tbody>
</table>
</div>
</div>
 
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>