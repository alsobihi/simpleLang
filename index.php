<?php









?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


      <script>
      
         $(document).ready(function(){
          $("#box").click(function(){
            var lang = new $("#lang").val();
            var id = new $("#id").val();

      $.ajax({
        url:'ajax.php',
        data:{lang:lang,id:id},
        type:'POST',
        success:function(data) {
          $("#result").html(data);


      }});
  });

  });
</script>
<div id="result">

  	<br>
  	النص العربي هنا
  	<br>

  <input type="number"  id="id" name="id" value="2"  hidden>
</div>




  <div id="box">
 <input type="button" id="lang" name="lang" value="اللغة">
  </div>


