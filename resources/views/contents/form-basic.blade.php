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
    <title>Form Basic</title>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset('/assets/images/favicon.png')}}"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('/assets/libs/select2/dist/css/select2.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('/assets/libs/jquery-minicolors/jquery.minicolors.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('/assets/libs/quill/dist/quill.snow.css')}}"
    />
    <link href="{{asset('/dist/css/style.min.css')}}" rel="stylesheet" />
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
      @include('partial.pagebasic');
    </div>
    <script src="{{asset('/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('/dist/js/waves.js')}}"></script>
    <script src="{{asset('/dist/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('/dist/js/custom.min.js')}}"></script>
    <script src="{{asset('/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('/dist/js/pages/mask/mask.init.js')}}"></script>
    <script src="{{asset('/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('/assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('/assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{asset('/assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{asset('/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('/assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script src="{{asset('/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script>
      $(".select2").select2();
      $(".demo").each(function () {
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>
  </body>
</html>
