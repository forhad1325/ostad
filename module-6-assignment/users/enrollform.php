<?php 
include_once 'functions.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta value="" name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Registration Form</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col">

          <div style="padding: 50px;">
            <h2>User Registration Form</h2>

            <form class="row g-3" action="<?php echo $currentPagelink; ?>" method="POST">

              <div class="col-md-6">
                <label for="s_fname" class="form-label">Full name *</label>
                <input type="text" class="form-control" value="<?php echo $s_fname; ?>" name="s_fname">
                <?php echo $s_fname_EmptyNotice;?>

              <div class="col-md-6">
                <label for="s_email" class="form-label">Email *</label>
                <input type="email" class="form-control" value="<?php echo $s_email; ?>" name="s_email">
                 <?php echo $s_email_EmptyNotice; ?>
              </div>

              <div class="col-md-6">
                <label for="s_pass" class="form-label">Password *</label>
                <input type="password" class="form-control" value="<?php echo $s_pass; ?>" name="s_pass">
                <?php echo $s_pass_EmptyNotice;?>
              </div>
                
              <div class="col-md-6">
               <label for="s_image" class="form-label">Upload Photo</label>
                <input class="form-control" type="file" id="s_image">
                <?php echo $s_image_EmptyNotice;?>
              </div>

              <div class="col-12">
                <button name="s_submit" type="submit" class="btn btn-primary">Submit</button>
              </div>

            </form>

            <?php echo $sucessMessage; ?>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
          <?php s_dataShow(); ?>
      </div>
    </div>

    




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>