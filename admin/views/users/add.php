<?php include_once "../../init.php"; ?>
<?php include_once "../header.php"; ?>
<?php include_once "../side.php"; ?>


<div class="form-panel bg-body-tertiary">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Add User </h4>
<?php
      if(isset($_GET['mes']) && isset($_GET['error'])) {
        echo "<div class='alert alert-danger'>{$_GET['mes']}</div>";
      }else if(isset($_GET['mes'])){
        echo "<div class='alert alert-success'>{$_GET['mes']}</div>";
      }else{
        echo "";
      }

?>

<form action="<?= controllers('users.php') ?>?action=add" method="post"
 enctype="multipart/form-data" class="my-3 container rounded-3 bg-body-secondary">
     <!-- Username -->
  <div class="my-3  w-75 m-auto">
    <label for="username" class="form-label">User name</label>
    <input type="text" class="form-control" id="username" name="username"
     placeholder="Enter name" aria-describedby="username">
  </div>

  <!-- Fullname -->
  <div class="mb-3 w-75 m-auto">
    <label for="full_name" class="form-label">Full name</label>
    <input type="text" class="form-control" id="full_name" name="full_name"
     placeholder="Enter full name" aria-describedby="full_name">
  </div>

  <!-- Phone -->
  <div class="mb-3 w-75 m-auto">
    <label for="phone" class="form-label">Phone number</label>
    <input type="text" class="form-control" id="phone" name="phone"
     placeholder="Enter phone number" aria-describedby="phone">
  </div>

  <!-- Email -->
  <div class="mb-3 w-75 m-auto">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email"
     placeholder="Enter email" aria-describedby="email">
  </div>

  <!-- Password -->
  <div class="mb-3 w-75 m-auto">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" id="password">
  </div>
 
  <!-- Avatar -->
   <div class="mb-3 w-75 m-auto">
  <label for="avatar" class="form-label">Avatar</label>
  <input class="form-control" type="file" name="avatar" id="avatar">
</div>
<div class="mb-3 w-75 m-auto">
  <input type="submit" class="btn btn-info my-3 px-4 " value="Add user" />
</div>
</form>

</div>
<?php include_once "../footer.php"; ?>