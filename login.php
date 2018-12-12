<!DOCTYPE html>
<html lang="en">

<?php include_once("head-tag.php"); ?>
<?php include_once("database-connect.php"); ?>

<body class=" ">
<div class="wrapper ">
  <?php include_once("sidebar.php"); ?>
  <div class="main-panel">
    <!-- Navbar -->
    <?php include_once("top-nav-right.php"); ?>
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    <!-- End Navbar -->
<div class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">Login</h5>
            </div>
            <div class="card-body">
              <form id="LoginForm" onsubmit="retun false">
                <div class="row">
                  <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" id="Username" class="form-control" placeholder="Username" name="Username" value="michael23">
                    </div>
                  </div>
                  <div class="col-md-4 px-md-1">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Password" id="Password" name="Password" value="alligator3">
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="mike@email.com">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="Company" value="Mike">
                    </div>
                  </div>
                  <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                    </div>
                  </div>
                </div>
                <!--
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                    </div>
                  </div>
                </div>
                -->
                <!--
                <div class="row">
                  <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="City" value="Mike">
                    </div>
                  </div>
                  <div class="col-md-4 px-md-1">
                    <div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" placeholder="Country" value="Andrew">
                    </div>
                  </div>
                  
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label>Postal Code</label>
                      <input type="number" class="form-control" placeholder="ZIP Code">
                    </div>
                  </div>
                </div>--><!--
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>About Me</label>
                      <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                    </div>
                  </div>
                </div>-->

              </form>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-fill btn-primary">Save</button>
            </div>
          </div>
        </div>
        <?php include_once("user-card.php"); ?>
      </div>
    </div>
    <?php include_once("footer-and-cog.php"); ?>
    <?php include_once("core-js.php"); ?>
  </body>
</html>