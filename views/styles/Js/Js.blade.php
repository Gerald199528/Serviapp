
    {!! Html::script('matrix/assets/libs/jquery/dist/jquery.min.js')!!}
    <!-- Bootstrap tether Core JavaScript -->
    {!! Html::script('matrix/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')!!}
    {!! Html::script('matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')!!}
    {!! Html::script('matrix/assets/extra-libs/sparkline/sparkline.js')!!}
     <!--Wave Effects -->
     {!! Html::script('matrix/dist/js/waves.js')!!}
    {!! Html::script('matrix/dist/js/sidebarmenu.js')!!}
     <!--Custom JavaScript -->
     {!! Html::script('matrix/dist/js/custom.min.js')!!}
    {!! Html::script('matrix/assets/libs/flot/excanvas.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.pie.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.time.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.stack.js')!!}
    {!! Html::script('matrix/assets/libs/flot/jquery.flot.crosshair.js')!!}
    {!! Html::script('matrix/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')!!}
    {!! Html::script('matrix/dist/js/pages/chart/chart-page-init.js')!!}

     <!-- this page js -->
      {!! Html::script('matrix/assets/libs/jquery-steps/build/jquery.steps.min.js')!!}
      {!! Html::script('matrix/assets/libs/jquery-validation/dist/jquery.validate.min.js')!!}

     <!-- list category -->

     {!! Html::script('matrix/assets/extra-libs/multicheck/datatable-checkbox-init.js')!!}
     {!! Html::script('matrix/assets/extra-libs/multicheck/jquery.multicheck.js')!!}
     {!! Html::script('matrix/assets/extra-libs/DataTables/datatables.min.js')!!}
     {!! Html::script('sweetalert2/app.js')!!}
     {!! Html::script('date/index.js')!!}
     {!! Html::script('select/user.js')!!}
     {!! Html::script('select/reporte.js')!!}


     <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

     <script>
             /****************************************
         *       Basic Table                   *
         ****************************************/
         new DataTable('#example');
      </script>


<script>
    // Basic Example with form
    var form = $("#example-form");
    form.validate({
      errorPlacement: function errorPlacement(error, element) {
        element.before(error);
      },
      rules: {
        confirm: {
          equalTo: "#password",
        },
      },
    });
    form.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      onStepChanging: function (event, currentIndex, newIndex) {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
      },
      onFinishing: function (event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
      },
      onFinished: function (event, currentIndex) {
        alert("Submitted!");
      },
    });
  </script>

