<?php include_once "../../init.php"; ?>
<?php include_once "../header.php"; ?>
<?php include_once "../side.php"; ?>

<div class="form-panel bg-body-tertiary">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Add About </h4>
<?php
      if(isset($_GET['mes']) && isset($_GET['error'])) {
        echo "<div class='alert alert-danger'>{$_GET['mes']}</div>";
      }else if(isset($_GET['mes'])){
        echo "<div class='alert alert-success'>{$_GET['mes']}</div>";
      }else{
        echo "";
      }

?>

<form action="<?= controllers('about.php') ?>?action=add" method="post"
 enctype="multipart/form-data" class="my-3 container rounded-3 bg-body-secondary">
    <!-- About_title -->
  <div class="my-3 w-75 m-auto">
    <label for="about_title" class="form-label">About title</label>
    <input type="text" class="form-control" id="about_title" name="about_title"
     placeholder="Enter about title" aria-describedby="about_title">
  </div>
<!-- About_description -->
<div class="mb-3 w-75 m-auto">
    <label for="about_description" class="form-label">About description</label>
    <input type="text" class="form-control" id="about_description" name="about_description"
     placeholder="Enter about description" aria-describedby="about_description">
  </div>
    <!-- image -->
    <div class="mb-3 w-75 m-auto">
  <label for="about_image" class="form-label">Image</label>
  <input class="form-control" type="file" name="about_image" id="about_image">
</div>
<div class="mb-3 w-75 m-auto">
  <input type="submit" class="btn btn-info my-3 px-4 "value="Add about" />
</div>
</form>

</div>
<?php include_once "../footer.php"; ?>