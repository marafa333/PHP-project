<?php include_once "../../init.php"; ?>
<?php include_once "../header.php"; ?>
<?php include_once "../side.php"; ?>
<?php $users = get("users"); ?>


<div class="form-panel">
                  	  <h4 class="mb text-black"><i class="fa fa-angle-right"></i> All Users</h4>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User name</th>
      <th scope="col">Email</th>
      <th scope="col">Edit / Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($users as $user) { ?>
    <tr>
      <th scope='row'><?= $user['id'] ?></th> 
      <td><?= $user['full_name'] ?></td>
      <td><?= $user['email'] ?></td>
      <td>
        <a href="<?=  controllers('users.php') ?>?action=edit&id=<?= $user['id'] ?>" class="btn btn-warning">Edit</a>
        <a href="<?=  controllers('users.php') ?>?action=delete&id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   <?php }
    ?>
    <tr>
      <th scope="col"><?php echo sum( 'users','id',$conn )  ?> Users</th>
    </tr>
  </tbody>
</table>
</div>



<?php include_once "../footer.php"; ?>