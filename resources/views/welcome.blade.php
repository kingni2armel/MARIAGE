<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mariage</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{url('assets/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{url('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">  
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{url('assets/images/logo-dark.svg')}}" alt="logo">
              </div>
              <h4>Hello bienvenue !</h4>
              <h6 class="font-weight-light">Conneter vous pour continuer</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SE CONNECTER</a>
                  <a href="{{route('getpagesdash')}}">dashboard</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
               
              
              
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{url('assets/js/off-canvas.js')}}"></script>
  <script src="{{url('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{url('assets/js/template.js')}}"></script>
  <script src="{{url('assets/js/settings.js')}}"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
