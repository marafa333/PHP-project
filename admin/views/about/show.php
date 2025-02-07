<?php include_once "../../init.php"; ?>
<?php include_once "../header.php"; ?>
<?php include_once "../side.php"; ?>
<?php $abouts = get("abouts"); ?>


<div class="form-panel">
                  	  <h4 class="mb text-black"><i class="fa fa-angle-right"></i> About</h4>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Edit / Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $id = 1;
    foreach ($abouts as $about) { ?>
    <tr>
      <th scope='row'><?= $id++ ?></th> 
      <td><?= $about['about_title'] ?></td>
      <td><?= $about['about_description'] ?></td>
      <td>
        <a href="<?=  controllers('about.php') ?>?action=edit&id=<?= $about['id'] ?>" class="btn btn-warning">edit</a>
        <a href="<?=  controllers('about.php') ?>?action=delete&id=<?= $about['id'] ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   <?php }
    ?>
    <tr>
      <th scope="col"><?php echo sum( 'abouts','id',$conn )  ?> About</th>
    </tr>
  </tbody>
</table>
</div>



<?php include_once "../footer.php"; ?>