<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>

<!--Scripts-->
<script src=" {{ asset('site/jquery.js') }} "></script>
<script src=" {{ asset('site/datepicker.js') }} "></script>
<script src=" {{ asset('site/datepicker.css') }} "></script>


</head>
<body>
<h1>Calendario</h1>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );


$( "body"  ).on('change', ()=>{
   let valor = $('#datepicker').val()
  alert(valor)
});



  </script>



</head>
<body>
 
<p>Date: <input type="text" id="datepicker"></p>
 
 
</body>
</html>