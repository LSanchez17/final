
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>

    </div>

<br></br>

<div class="container">
   <h1>Comments:</h1>
    <?php echo 'Comments: ' . $comments . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">' . $first_name . ' ' . $last_name . '</a>' . ' on: ' . $date; ?>
</div>

<br></br>
<br></br>

<div class="container">
<?php 
  if($u->isRegistered()){
?>
  include('views/elements/comment_form.php')
<?php
}
else{
?>

<a href="<?php echo BASE_URL;?>/register">Register to post comments!</a>

<?php
}
?>
</div>

<?php include('views/elements/footer.php');?>