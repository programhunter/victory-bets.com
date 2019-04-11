<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <i class="fas fa-rocket"></i>
      <!--<img width="30" height="30" position="inline-block" src="img/rocket-ship.png"/>-->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="admin.jsp">Admin <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="instructor.jsp">Instructor</a>
        </li>
      </ul>
      <ul class="navbar-nav d-md-none d-lg-block">
        <div class="btn-group dropleft">
          <button style="color: #fff;" class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user pr-1"></i>
          </button>
          <div class="dropdown-menu">
            <div class="dropdown-item"><small>Logged in as: <br><b>jared@syntelinc.com</b></small></div>
            <a class="dropdown-item" href="#"><small><i class="fas fa-lock pr-2"></i>Change Password</small></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><small>Logout</small></a>
          </div>
        </div>
      </ul>

    </div>
  </div><!-- /Container -->
</nav>