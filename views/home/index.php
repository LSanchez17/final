<?php
include('views/elements/header.php');?>
<div class="container">
  <div class="page-header">
    <h1>Latest News from <?php echo $title;?></h1>
</div>
 <div class="container">
  <div class="panel panel-default">
   <div class="panel-body">
    <h2>Welcome to the Mango forum!  Please enjoy your stay and feel free to register, comment,
       or simply read our posts!</h2>
    <img src="views/img/iupui.jpg">
   </div>
  </div>
 </div>
   <br></br>
   <br></br>
 <div class="panel-body">
  <h2> CrunchyRoll Newly Added Episode Feed</h2>
 </div>
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>