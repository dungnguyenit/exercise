<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./Css/globalStyle.css">
<link rel="stylesheet" href="./Css//list.css">

<?php session_start(); ?>

<form action="" method="post">
  <div class="style-table">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">email</th>
          <th scope="col">phone</th>
          <th scope="col">address</th>
          <th colspan="4">option</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php
        if (isset($_SESSION['data'])) {
          $data = $_SESSION['data'];
          foreach ($data as $item) { ?>
            <tr>
              <th scope="row"><?php echo $item->id ?></th>
              <td><?php echo $item->firstName ?></td>
              <td><?php echo $item->lastName ?></td>
              <td><?php echo $item->email ?></td>
              <td><?php echo $item->phone ?></td>
              <td><?php echo $item->address ?></td>
              <td><a href="./uploadContract.php"><button type="button" class="btn btn-primary" value="">Edit</button></a></td>
              <td><button type="submit" class="btn btn-success" name="delete" value="<?php echo $item->id ?>">Delete</button></td>
              <td><a href="./detail.php"><button type="button" class="btn btn-danger">Detail</button></a></td>
              <td><a href="../index.php"><button type="button" class="btn btn-warning">Exit</button></a></td>
            </tr>
        <?php }
        } ?>
      </tbody>
    </table>
  </div>
</form>