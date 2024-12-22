<?php include_once "../../init.php"; ?>
<?php include_once "../header.php"; ?>
<?php include_once "../side.php"; ?>
<?php $trainer = get('trainer');?>

<div class="form-panel bg-body-tertiary">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Trainer </h4>
<?php
      if(isset($_GET['mes']) && isset($_GET['error'])) {
        echo "<div class='alert alert-danger'>{$_GET['mes']}</div>";
      }else if(isset($_GET['mes'])){
        echo "<div class='alert alert-success'>{$_GET['mes']}</div>";
      }else{
        echo "";
      }

?>

<form action="<?= controllers('trainers.php') ?>?action=edit&id=<?= $trainer['id'] ?>" method="post"
 enctype="multipart/form-data" class="my-3 container rounded-3 bg-body-secondary">
    <!-- Trainer name -->
  <div class="my-3 w-75 m-auto">
    <label for="trainer_name" class="form-label">Trainer name</label>
    <input type="text" class="form-control" id="trainer_name" name="trainer_name"
     placeholder="Enter trainer name" value="<?= $trainer['trainer_name'] ?>" aria-describedby="trainer_name">
  </div>

    <!-- Trainer image -->
    <div class="mb-3 w-75 m-auto">
  <label for="trainer_image" class="form-label">Trainer image</label>
  <img src="<?= uploads($trainer['trainer_image']) ?>" width="75" height="75" alt="">
  <input class="form-control" type="file" name="trainer_image" id="trainer_image">
</div>

  <!-- Trainer facebook -->
  <div class="mb-3 w-75 m-auto">
  <label for="trainer_facebook" class="form-label">Trainer facebook</label>
  <div class="input-group">
    <span class="input-group-text" id="trainer_facebook">https://www.facebook.com/</span>
    <input type="text" value="<?= $trainer['trainer_facebook'] ?>" placeholder="Enter trainer facebook" class="form-control" name="trainer_facebook" id="trainer_facebook" aria-describedby="trainer_facebook">
  </div>
</div>
 
  <!-- Trainer twitter -->
  <div class="mb-3 w-75 m-auto">
  <label for="trainer_twitter" class="form-label">Trainer twitter</label>
  <div class="input-group">
    <span class="input-group-text" id="trainer_twitter">https://x.com/</span>
    <input type="text" value="<?= $trainer['trainer_twitter'] ?>" placeholder="Enter trainer twitter" class="form-control" name="trainer_twitter" id="trainer_twitter" aria-describedby="trainer_twitter">
  </div>
</div>

  <!-- Trainer instagram -->
  <div class="mb-3 w-75 m-auto">
  <label for="trainer_instagram" class="form-label">Trainer instagram</label>
  <div class="input-group">
    <span class="input-group-text" id="trainer_instagram">https://www.instagram.com/</span>
    <input type="text" value="<?= $trainer['trainer_instagram'] ?>" placeholder="Enter trainer instagram" class="form-control" name="trainer_instagram" id="trainer_instagram" aria-describedby="trainer_instagram">
  </div>
</div>

<div class="mb-3 w-75 m-auto">
  <input type="submit" class="btn btn-info my-3 px-4 " value="Edit trainer" />
</div>
</form>

</div>
<?php include_once "../footer.php"; ?>