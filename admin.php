<?php
include_once "DB_connect.php";

$db=$GLOBALS['db'];
$images = $db->getImages();
$contents = $db->getContent();
$emails = $db->getEmails();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <ul class="nav">

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Web page</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="admin.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Admin</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="insert_image_form.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Insert Image</span>
            </a>
          </li>




        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">


            <div class="row">

              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Content</h4>

                    </div>

                    <?php
                    foreach ($contents as $content){

                    ?>

                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">

                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject"> Text area</h6>

                                  <textarea name=text > <?php echo $content['content']; ?></textarea><br>
                                <a href="delete_content.php?id=<?php echo $content['id']; ?>">Delete</a>
                                <a href="update_content_form.php?id=<?php echo $content['id']; ?>">Update</a>


                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted"><?php echo $content['updated_at']; ?></p><br>



                              </div>
                            </div>
                          </div>

                          <?php    }
                          ?>




                        </div>
                      </div>
                    </div>



                  </div>
                </div>
              </div>
            </div>


            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Images</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>



                            <th>Desktop number</th>
                            <th>Mobile number</th>
                            <th>Source</th>
                            <th>Alt-text</th>
                            <th>Delete</th>
                            <th>Update</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <?php
                              foreach ($images as $image){

                              ?>

                            <td><?php echo $image['desktop_no']; ?></td>
                            <td><?php echo $image['mobile_no']; ?> </td>
                            <td><?php echo $image['src']; ?> </td>
                            <td><?php echo $image['alt']; ?></td>
                            <td><a href="delete.php?id=<?php echo $image['id']; ?>">Delete</a></td>

                            <td> <a href="update_form.php?id=<?php echo $image['id']; ?>">Update</a></td>

                          </tr>

                          <?php    }
                          ?>





                        </tbody>
                      </table>
                    </div>
                    <br><a href = "insert_image_form.php">Insert new image</a>
                  </div>

                </div>

              </div>

            </div>



            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Emails</h4>

                    </div>
                    <div class="preview-list">

                      <?php
                      foreach ($emails as $email){

                      ?>



                      <div class="preview-item border-bottom">

                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Meno : <?php echo $email['name']; ?> <br>Email :
                                  <?php echo $email['email']; ?>
                              </h6>

                            </div>
                              Message : <br><br>
                            <p class="text-muted"><?php echo $email['message']; ?></p>
                              <a href="delete_email.php?id=<?php echo $email['id']; ?>">Delete</a>

                              <a href="update_email_form.php?id=<?php echo $email['id']; ?>">Update</a>

                          </div>

                        </div>
                      </div>

                      <?php    }
                      ?>



                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>

            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>