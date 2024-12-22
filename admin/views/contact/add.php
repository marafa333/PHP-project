<?php include_once "../../init.php"; ?>
<?php include_once "../header.php"; ?>
<?php include_once "../side.php"; ?>

<div class="form-panel bg-body-tertiary">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Add Contact </h4>
<?php
      if(isset($_GET['mes']) && isset($_GET['error'])) {
        echo "<div class='alert alert-danger'>{$_GET['mes']}</div>";
      }else if(isset($_GET['mes'])){
        echo "<div class='alert alert-success'>{$_GET['mes']}</div>";
      }else{
        echo "";
      }

?>

<form action="<?= controllers('contact.php') ?>?action=add" method="post"
 enctype="multipart/form-data" class="my-3 container rounded-3 bg-body-secondary">
    <!-- Contact name -->
  <div class="my-3 w-75 m-auto">
    <label for="contact_name" class="form-label">Contact name</label>
    <input type="text" class="form-control" id="contact_name" name="contact_name"
     placeholder="Enter contact name" aria-describedby="contact_name">
  </div>

    <!-- Email -->
    <div class="mb-3 w-75 m-auto">
    <label for="contact_email" class="form-label">Contact Email</label>
    <input type="contact_email" class="form-control" id="contact_email" name="contact_email"
     placeholder="Enter contact email" aria-describedby="contact_email">
  </div>

  <!-- Contact number -->
  <div class="mb-3 w-75 m-auto">
    <label for="contact_number" class="form-label">Contact number</label>
    <input type="text" class="form-control" id="contact_number" name="contact_number"
     placeholder="Enter contact number" aria-describedby="contact_number">
  </div>

  <!-- Contact message -->
  <div class="mb-3 w-75 m-auto">
    <label for="contact_message" class="form-label">Contact message</label>
    <input type="contact_message" class="form-control" id="contact_message" name="contact_message"
     placeholder="Enter contact message" aria-describedby="contact_message">
  </div>

<div class="mb-3 w-75 m-auto">
  <input type="submit" class="btn btn-info my-3 px-4 " value="Add contact" />
</div>
</form>

</div>
<?php include_once "../footer.php"; ?>