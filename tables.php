<?php 
        $sql = "SELECT * FROM bets WHERE bet_date >= UTC_DATE() ORDER BY bet_date ASC";
        $result = $conn->query($sql) or die($conn->error);
        $get_bet_data = 0;

        if ($result->num_rows > 0) 
        {
            $get_bet_data = 0;
        }

        else
            $get_bet_data = 1;
?>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-sm-6 text-left">
          <h5 class="card-category">Current</h5>
          <h2 class="card-title">Bets</h2>
        </div>
        <div class="col-sm-6">

          <div id="tab" class="btn-group btn-group-toggle float-right" data-toggle="buttons">
            <a href="#NFL" class="btn btn-sm btn-primary btn-simple active" data-toggle="tab">
              <input type="radio" /> NFL
            </a>
            <a href="#NBA" class="btn btn-sm btn-primary btn-simple" data-toggle="tab">
              <input type="radio" /> NBA
            </a>
            <a href="#NHL" class="btn btn-sm btn-primary btn-simple" data-toggle="tab">
              <input type="radio" /> NHL
            </a>
            <a href="#CFB" class="btn btn-sm btn-primary btn-simple" data-toggle="tab">
              <input type="radio" /> CFB
            </a>
            <a href="#CBB" class="btn btn-sm btn-primary btn-simple" data-toggle="tab">
              <input type="radio" /> CBB
            </a>
            <a href="#MLB" class="btn btn-sm btn-primary btn-simple" data-toggle="tab">
              <input type="radio" /> MLB
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive ps">
        <table class="table tablesorter " id="">
          <thead class=" text-primary">
            <tr>
              <th>
                Date
              </th>
              <th>
                Game
              </th>
              <th>
                Line
              </th>
          </tr>
        </thead>
          <tbody>
          <div class="tab-content">
          <div class="tab-pane active" id="NFL">
            <?php 
            while($row = $result->fetch_assoc()) 
                {?>
                  <tr>
                    <td>
                      <?php echo $row["bet_date"] ?>
                    </td>
                    <td>
                      <?php echo $row["bet_title"] ?>
                    </td>
                    <td>
                      <?php echo $row["bet_description"] ?>
                    </td>
                  </tr>


                  <?php 
                } /* END WHILE LOOP */
            ?>
          </div><!-- END TAB PANE -->
          <div class="tab-pane" id="NBA">
            <?php 
              $sql = "SELECT * FROM bets WHERE bet_date >= UTC_DATE() AND sport = 'NBA' ORDER BY bet_date ASC";
              $result = $conn->query($sql) or die($conn->error);

            while($row = $result->fetch_assoc()) 
                {?>
                  <tr>
                    <td>
                      <?php echo $row["bet_date"] ?>
                    </td>
                    <td>
                      <?php echo $row["bet_title"] ?>
                    </td>
                    <td>
                      <?php echo $row["bet_description"] ?>
                    </td>
                  </tr>


                  <?php 
                } /* END WHILE LOOP */
            ?>
          </div><!-- END TAB PANE -->
          <div class="tab-pane" id="NHL">
            <?php 
              $sql = "SELECT * FROM bets WHERE bet_date >= UTC_DATE() AND sport = 'NHL' ORDER BY bet_date ASC";
              $result = $conn->query($sql) or die($conn->error);

            while($row = $result->fetch_assoc()) 
                {?>
                  <tr>
                    <td>
                      <?php echo $row["bet_date"] ?>
                    </td>
                    <td>
                      <?php echo $row["bet_title"] ?>
                    </td>
                    <td>
                      <?php echo $row["bet_description"] ?>
                    </td>
                  </tr>


                  <?php 
                } /* END WHILE LOOP */
            ?>
          </div><!-- END TAB PANE -->


        </div><!-- END TAB CONTENT -->

          </tbody>
        </table>

        <div id="tab" class="btn-group btn-group-justified" data-toggle="buttons">
                <a href="#prices" class="btn btn-default active" data-toggle="tab">
                  <input type="radio" />Prices
                </a>
                <a href="#features" class="btn btn-default" data-toggle="tab">
                  <input type="radio" />Features
                </a>
                <a href="#requests" class="btn btn-default" data-toggle="tab">
                  <input type="radio" />Requests
                </a>
                <a href="#contact" class="btn btn-default" data-toggle="tab">
                  <input type="radio" />Contact
                </a>
              </div>

              <div class="tab-content">
                <div class="tab-pane active" id="prices">Prices content</div>
                <div class="tab-pane" id="features">Features Content</div>
                <div class="tab-pane" id="requests">Requests Content</div>
                <div class="tab-pane" id="contact">Contact Content</div>
              </div>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
          <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
            
          </div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
          <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>