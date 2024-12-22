<?php include_once "../../init.php"; ?>
<?php include_once "../header.php"; ?>
<?php include_once "../side.php"; ?>
<?php $contacts = get("contacts"); ?>


<div class="form-panel">
                  	  <h4 class="mb text-black"><i class="fa fa-angle-right"></i> All Contacts</h4>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">contact name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Edit / Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($contacts as $contact) { ?>
    <tr>
      <th scope='row'><?= $contact['id'] ?></th> 
      <td><?= $contact['contact_name'] ?></td>
      <td><?= $contact['contact_email'] ?></td>
      <td><?= $contact['contact_number'] ?></td>
      <td>
        <a href="<?=  controllers('contact.php') ?>?action=edit&id=<?= $contact['id'] ?>" class="btn btn-warning">edit</a>
        <a href="<?=  controllers('contact.php') ?>?action=delete&id=<?= $contact['id'] ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   <?php }
    ?>
    <tr>
      <th scope="col"><?php echo sum( 'contacts','id',$conn )  ?> Contacts</th>
    </tr>
  </tbody>
</table>
</div>



<?php include_once "../footer.php"; ?>