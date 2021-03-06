<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
  var KTAppOptions = {
    "colors": {
      "state": {
        "brand": "#5d78ff",
        "metal": "#c4c5d6",
        "light": "#ffffff",
        "accent": "#00c5dc",
        "primary": "#5867dd",
        "success": "#34bfa3",
        "info": "#36a3f7",
        "warning": "#ffb822",
        "danger": "#fd3995",
        "focus": "#9816f4"
      },
      "base": {
        "label": [
          "#c5cbe3",
          "#a1a8c3",
          "#3d4465",
          "#3e4466"],
        "shape": [
          "#f0f3ff",
          "#d9dffa",
          "#afb4d4",
          "#646c9a"]
      }
    }
  };
</script>
<!-- end::Global Config -->
<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{assets('vendors/global/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{assets('js/scripts.bundle.js')}}" type="text/javascript"></script>
<!--end::Global Theme Bundle -->
<!--begin::Page Vendors(used by this page) -->
@yield('script')
<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->
<script src="{{assets('js/pages/dashboard.js')}}" type="text/javascript"></script>
<!--end::Page Scripts -->
