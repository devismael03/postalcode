
<!DOCTYPE html>
<html lang="en">
<head>
  <title>API example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style >
  .jumbotron{
    background-color: #00cccc;
  }
</style>
</head>
<body>

<div class="container">
  <div class="row">
  <div class="col-sm-1"></div>
    <div class="col-sm-10">
  <div class="jumbotron text-center">
    <h1>Küçə adına görə poçt indeksinin tapılması.</h1>
    <p>Məlumatlar rəsmi olaraq E hökümət portalnın APİ-sindən alınır.</p>
  </div>
  </div>
<div class="col-sm-1"></div>
</div>
</div>


<div class="container">
  <div class="row">
  <div class="col-sm-1"></div>
    <div class="col-sm-10">
<span style="font-size:30px;">Küçə adı : </span>

<div class="form-inline">
        <div class="form-group">

          <input  required="required" type="text" name="str" id="str" class="form-control" >
        </div>

        <button id="btn"  class="btn btn-danger">Tap</button>
  </div>





  </div>
<div class="col-sm-1"></div>
</div>
</div>
<hr>

      <div class="result"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
    $('#str').keydown(function (e){
          if(e.keyCode == 13){
            if($("#str").val()==''){
              window.alert("Zəhmət olmasa küçə adı daxil edin");
            }
            else{

           if(!isNaN($("#str").val())){
             window.alert("Rəqəm daxil edilə bilməz");
           }
           else{



              var street;
              street=$("#str").val();

              gonder(street);
            }
          }
        }
      });




   $("#btn").click(function(){
     if($("#str").val()==''){
       window.alert("Zəhmət olmasa küçə adı daxil edin");
     }
     else{

    if(!isNaN($("#str").val())){
      window.alert("Rəqəm daxil edilə bilməz");
    }
    else{

                    var street;
                    street=$("#str").val();
                   gonder(street);

    }
   }
 });


 function gonder(str)
   {
      $(".result").html("<img src='squares.gif'>");
       $.ajax({
           type: "POST",
           url: "ajax.php",
           data: {str:str},
           success: function(result){
               $(".result").html(result);
           }
       });
   }
  });
</script>
</body>
</html>
