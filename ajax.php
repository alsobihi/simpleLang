<?php


if (isset($_POST['id'])) {
  # اذا تم طلب تغير اللغة نفذ الكود التالي
	   $id  = $_POST['id'];
      $lang  = $_POST['lang'];

      if ($id == 1) {
      	# اذا تم طلب اللغة العربية أطبع الكود التالي
?>

  	<br>
  	النص العربي هنا
  	<br>

  <input type="number"  id="id" name="id" value="2"  hidden>
 
  

<?php 


      }
      elseif ($id == 2) {
      	# اذا تم طلب لغة انجليزية أطبع الكود التالي
?>


  	<br>
English Text Here
  	<br>





  <input type="number"  id="id" name="id" value="1"  hidden>
 



<?php 
      }
      else{
      	# اذا حدث خلل أعرض النص الإفتراضي
?>

  	<br>
  	النص العربي هنا
  	<br>

  <input type="number"  id="id" name="id" value="2"  hidden>



<?php 
      }


}


?>