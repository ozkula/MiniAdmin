<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('global/head'); ?>
    </head>
    <body>
    <!-- navigation UP -->
        <nav class="navbar navbar-fixed-top nav-bar-head">
            <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand brand-color-head" href="#">
                Admin Website
              </a>
            </div>
          </div>
        </nav>
    <!-- End Navigation Up  -->
        <div class="container-fluid content-main">
            <div class="row">
                <div class="col-md-3"><?php $this->load->view('global/sidebar'); ?></div>
                <div class="col-md-9">
                    <div class="main-content">
                    <?php $this->load->view('main_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php $this->load->view('global/footer'); ?>
</html>