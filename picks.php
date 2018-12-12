<!DOCTYPE html>
<html lang="en">

<?php include_once("head-tag.php"); ?>
<?php include_once("database-connect.php"); ?>

<body>
  <div class="wrapper">
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
          <?php include_once("tables.php"); ?>
          <?php //include_once("user-card.php"); ?>
        </div>
      </div>

      <?php include_once("core-js.php"); ?>
    </div><!-- Main Panel End -->
  </div><!-- Wrapper End -->
</body>
</html>