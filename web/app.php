<!DOCTYPE html>
<html lang="da">
  <head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="app.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>      
   <div id="box">
   <script>
   $('#box').click(function() {
    $(this).animate({width: 200,height: 200});
});

$(document).keyup(function( event ) {
    if(event.which === 13) {
        $('#box').animate({width: 100,height: 100});
    }
});
</script>
      Tryk og saa enter
   </div>  
  </body>
</html>
