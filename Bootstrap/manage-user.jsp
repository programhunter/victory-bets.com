<jsp:include page="head-tag.jsp"/>

<body class="bg-light">

  <jsp:include page="nav.jsp"/>
  <div class="container-fluid">
    <div class="container mt-2 pt-4 pb-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background: transparent;">
          <li class="breadcrumb-item"><a href="admin.jsp">Admin</a></li>
          <li class="breadcrumb-item active">Users</li>
          <li class="breadcrumb-item active" aria-current="page">Manage User</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Tabs -->
  <div class="container-fluid">
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="admin.jsp">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="streams.jsp">Streams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.jsp">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modules.jsp">Modules</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="container-fluid bg-white" style="min-height: 100vh;">
    <div class="container pb-5">
      <div class="row justify-content-center">
        <div class="card col-md-6 col-sm-12 col-lg-5 mt-4 py-3 shadow">
          <div class="card-header text-muted noto bg-white">
            <i class="fas fa-user pr-2"></i> Edit User
            <span style="float: right;">
              <form>
                <a href="" class="btn btn-sm btn-danger">
                  <span style="white-space: nowrap;"><i class="fas fa-user-minus"></i> Delete </span>
                </a>
              </form>
            </span>
          </div>
          <form>
            <div class="form-group row mt-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail3" placeholder='${param.id}'>
              </div>
            </div>

            <div class="form-group row mt-1">
              <label for="inputEmail3" class="col-sm-4 col-form-label">User Level</label>
              <div class="col-sm-8 pt-2">
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                      <label class="custom-control-label noto text-muted" for="customRadio"><small>Onsite</small></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                      <label class="custom-control-label noto text-muted" for="customRadio2"><small>Offsite</small></label>
                    </div> 
              </div>
            </div>
            <div class="row justify-content-center mt-1">
              <div class="row pt-3">
                <div class="col-6">
                    <button class="btn btn-sm ghost" type="submit">
                      <span style="white-space: nowrap;"><i class="fas fa-user-edit"></i> Update </span>
                    </button>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Tabs -->

  <!-- Optional JavaScript -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- Bootstrap.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>