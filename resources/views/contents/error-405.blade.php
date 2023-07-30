<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>405</title>

    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset('/assets/images/favicon.png')}}"
    />
    <link href="{{asset('/dist/css/style.min.css')}}" rel="stylesheet" />

  </head>

  <body>
    <div class="main-wrapper">
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <div class="error-box">
        <div class="error-body text-center">
          <h1 class="error-title text-danger">405</h1>
          <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
          <p class="text-muted mt-4 mb-4">
            YOU SEEM TO BE TRYING TO FIND HIS WAY HOME
          </p>
          <a
            href="index.html"
            class="
              btn btn-danger btn-rounded
              waves-effect waves-light
              mb-5
              text-white
            "
            >Back to home</a
          >
        </div>
      </div>
    </div>
    <script src="{{asset('/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script>
      $(".preloader").fadeOut();
    </script>
  </body>
</html>
