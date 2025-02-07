<?php include_once "../../init.php"; ?>
<?php include_once "../header.php"; ?>
<?php include_once "../side.php"; ?>
<?php $trainers = get("trainers"); ?>


<div class="form-panel">
                  	  <h4 class="mb text-black"><i class="fa fa-angle-right"></i> All Trainers</h4>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">trainer name</th>
      <th scope="col">Facebook link</th>
      <th scope="col">Edit / Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $id = 1;
    foreach ($trainers as $trainer) { ?>
    <tr>
      <th scope='row'><?= $id++ ?></th> 
      <td><?= $trainer['trainer_name'] ?></td>
      <td><a href="https://www.facebook.com/<?= $trainer['trainer_facebook'] ?>" class="btn btn-primary" target="_blank">Facebook</a></td>
      <td>
        <a href="<?=  controllers('trainers.php') ?>?action=edit&id=<?= $trainer['id'] ?>" class="btn btn-warning">edit</a>
        <a href="<?=  controllers('trainers.php') ?>?action=delete&id=<?= $trainer['id'] ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   <?php }
    ?>
    <tr>
      <th scope="col"><?php echo sum( 'trainers','id',$conn )  ?> Trainers</th>
    </tr>
  </tbody>
</table>
</div>



<?php include_once "../footer.php"; ?>