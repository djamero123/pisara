
$(document).ready(function(){
  $('#SYfilter').change(function(){
   
   //var sy =  $('#SYfilter').val() 
    $.ajax({
      url: 'http://localhost/pisara/Curriculum/get_filter_sy',
      method:'get',
      data:{'schoolyear':$('#SYfilter').val()},
      async:'true',
      dataType: "json",
      success: function(data)
      {
      console.log(data);
      createTableByForLoop(data);
      },
     
      
    
    }); 
  });
});

 
function createTableByForLoop(data)
{
  var fa = 'fa fa-home';
  var eTable="";
  console.log(fa);
  for(var i=0; i<data.length;i++)
  {
    eTable += "<tr>";
    eTable += "<td>"+data[i].gradelevel+"</td>";
    eTable += "<td>";
    eTable += "<div class ="+"col-sm-2 form-group pull-left"+">";
    //eTable += "<form method="+"post"+" action="+"http://localhost/pisara/create_class/update"+">";
    //eTable += "<button type="+"submit"+" class="+"btn btn-default pull-left"+">";
    eTable += "<i id="+"ibutton"+"class=' "+fa+"' '></i>";
    eTable += "</button></form>";
    eTable += "</tr>";
  }
  $('#SYtable').html(eTable);
}

function addclass(){
  var x = document.getElementById("ibutton");
  x.classList.add("fa-home")
}

          
            
             
          
          
        
         //<form method="post" action="http://localhost/pisara/create_class/update"> 
            //<button type="submit" class="btn btn-default pull-left">
             // <i class="fa fa-home"></i>
            //</button>
         // </form>
        //</div>





                     
             
          
function createTableByJqueryEach(data)
{
 
 
  var eTable="<table><thead><tr><th colspan='3'>Created by Jquery each</th></tr><tr><th>Name</th><th>Title</th><th>Salary</th</tr></thead><tbody>"
  $.each(data,function(index, row){
    // eTable += "<tr>";
    // eTable += "<td>"+value['name']+"</td>";
    // eTable += "<td>"+value['title']+"</td>";
    // eTable += "<td>"+value['salary']+"</td>";
    // eTable += "</tr>";
 
    eTable += "<tr>";
    $.each(row,function(key,value){
      eTable += "<td>"+value+"</td>";
    });
    eTable += "</tr>";
  });
  eTable +="</tbody></table>";
  $('#eachTable').html(eTable);
}