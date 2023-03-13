<?php 

    $currentPagelink = 'http://'.$_SERVER['SERVER_NAME'].''.$_SERVER['REQUEST_URI'];
    $userfile = getcwd().'/users.csv';
    $user_csv = fopen("/users.csv","r"); 
    var_dump($user_csv);

    /*
    *
      user Form Fields
    *
    */

    // First Name Field
    $s_fname = '';
    $s_fname_EmptyNotice = '';
    if ( isset($_POST['s_fname']) && !empty($_POST['s_fname']) ) {
      $s_fname = $_POST['s_fname'];
      $s_fname = htmlspecialchars($s_fname);
    }
    if ( isset($_POST['s_fname']) && empty($s_fname) ) {
      $s_fname_EmptyNotice = '<div class="alert alert-danger" role="alert">
                            This field should not be empty
                          </div>';
    }

    // Password Field
    $s_pass = '';
    $s_pass_EmptyNotice = '';
    if ( isset($_POST['s_pass']) && !empty($_POST['s_pass']) ) {
      $s_pass = $_POST['s_pass'];
      $s_pass = htmlspecialchars($s_pass);
    }
    if ( isset($_POST['s_pass']) && empty($s_pass) ) {
      $s_pass_EmptyNotice = '<div class="alert alert-danger" role="alert">
                            This field should not be empty
                          </div>';
    }

    // Email Field
    $s_email = '';
    $s_email_EmptyNotice = '';
    if ( isset($_POST['s_email']) && !empty($_POST['s_email']) ) {
      $s_email = $_POST['s_email'];
      $s_email = htmlspecialchars($s_email);
      $s_email = filter_input(INPUT_POST, 's_email', FILTER_VALIDATE_EMAIL);
    }
    if ( isset($_POST['s_email']) && empty($s_email) ) {
      $s_email_EmptyNotice = '<div class="alert alert-danger" role="alert">
                            This field should not be empty
                          </div>';
    }



 


    /*
    *
      user Form Fields
    *
    */


    /*
    *
      user Form Database to users.txt
    *
    */

      $sucessMessage ="";

      if ( isset($_POST['s_submit']) && empty($s_fname_EmptyNotice) && empty($s_pass_EmptyNotice) && empty($s_email_EmptyNotice) && empty($s_phone_EmptyNotice) && empty($s_course_EmptyNotice) && empty($s_classDay_EmptyNotice) && empty($s_bookingMoney_EmptyNotice) && empty($s_trnMobile_EmptyNotice) ) {
        
        $s_alldata = "";
        if (is_file($userfile)) {
          $s_alldata = file_get_contents($userfile);
        }

        $s_alldataArr = json_decode($s_alldata);

        $s_submitData = $_POST;

        $s_alldataArr[] = $s_submitData;

        $s_alldataJson = json_encode($s_alldataArr);

        file_put_contents($userfile, $s_alldataJson);

        $sucessMessage = '<div class="alert alert-success" role="alert">
                            Thanks for your Enrollment, we will confirm you via Mobile and Email.
                          </div>';

      }

    /*
    *
      user Form Database to users.txt
    *
    */

    /*
    *
      user Form Data Show from users.txt
    *
    */
      $userData = file_get_contents($userfile);
      $userData = json_decode($userData, true);

      function s_dataShow(){
        global $userData;
        if ($userData) {
          $i = 0;
          $userDataLength = count($userData);
          while($i<$userDataLength) : 
            $userId = $i+1;
            ?>
            <div class="col-3">
              <div class="card" style="width: 100%;margin-bottom: 20px;">
                  <img src="https://thumbs.dreamstime.com/b/no-thumbnail-image-placeholder-forums-blogs-websites-148010362.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $userData[$i]['s_fname']; ?> <?php echo $userData[$i]['s_pass']."(ID: $userId)"; ?></h5>
                    <?php if($userData[$i]['s_email']) : ?>
                    <p class="card-text"><strong>Email:</strong> <?php echo $userData[$i]['s_email']; ?></p>
                    <?php endif; ?>
                     <?php if($userData[$i]['s_phone']) : ?>
                    <p class="card-text"><strong>Phone:</strong> <?php echo $userData[$i]['s_phone']; ?></p>
                    <?php endif; ?>
                     <?php if($userData[$i]['s_course']) : ?>
                    <p class="card-text"><strong>Course:</strong> <?php echo ucwords($userData[$i]['s_course']); ?></p>
                    <?php endif; ?>
                     <?php if($userData[$i]['s_classDay']) : ?>
                    <p class="card-text"><strong>Class Shedule:</strong> <?php 
                      $s_classDayItems = $userData[$i]['s_classDay'];
                      foreach($s_classDayItems as $s_classDayItem){
                        echo ucwords($s_classDayItem).", ";
                      }
                     ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
          <?php 
          $i++;
          endwhile;
        
        }
      }
    
    /*
    *
      user Form Data Show from users.txt
    *
    */



?>