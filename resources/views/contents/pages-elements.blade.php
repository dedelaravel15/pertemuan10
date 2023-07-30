<!DOCTYPE html>
<html dir="ltr" lang="en">
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
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset('/assets/images/favicon.png')}}"
    />
    <link href="{{asset('/dist/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/libs/toastr/build/toastr.min.css')}}" rel="stylesheet" />
  </head>

  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
     @include('partial.header')
     @include('partial.sidebar')
     @include('partial.page-element')
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../dist/js/waves.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <script src="../dist/js/custom.min.js"></script>
    <script src="../assets/libs/toastr/build/toastr.min.js"></script>
    <script>
      $(function () {
        $("#ts-success").on("click", function () {
          toastr.success("Have fun storming the castle!", "Miracle Max Says");
        });

        $("#ts-info").on("click", function () {
          toastr.info(
            "We do have the Kapua suite available.",
            "Turtle Bay Resort"
          );
        });

        $("#ts-warning").on("click", function () {
          toastr.warning(
            "My name is Inigo Montoya. You killed my father, prepare to die!"
          );
        });

        $("#ts-error").on("click", function () {
          toastr.error(
            "I do not think that word means what you think it means.",
            "Inconceivable!"
          );
        });
      });
    </script>
  </body>
</html>
