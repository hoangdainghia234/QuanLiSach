    <script src="{{ asset('template/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('template/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

    <script src="{{ asset('template/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('template/assets/js/widgets.js') }}"></script>
    <script src="{{ asset('template/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>

    <script>
        (function($) {
            "use strict";
            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })($);
    </script>

    <script src="{{ asset('template/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('template/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('template/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <!-- Gmaps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2jlT6C_to6X1mMvR9yRWeRvpIgTXgddM"></script>
    <script src="{{ asset('template/vendors/gmaps/gmaps.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/init-scripts/gmap/gmap.init.js') }}"></script>

    <script src="{{ asset('template/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>

    <script src="{{ asset('template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.algeria.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.argentina.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.brazil.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.france.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.germany.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.greece.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.iran.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.iraq.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.russia.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.tunisia.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.europe.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.usa.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/vendors/jqvmap/dist/maps/jquery.vmap.turkey.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/assets/js/init-scripts/vector-map/vector.init.js') }}"></script>


    <script src="{{ asset('template/vendors/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/init-scripts/peitychart/peitychart.init.js') }}"></script>
    <script src="{{ asset('template/vendors/flot/excanvas.min.js') }}"></script>
    <script src="{{ asset('template/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('template/vendors/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('template/vendors/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('template/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('template/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('template/vendors/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('template/assets/js/init-scripts/flot-chart/curvedLines.js') }}"></script>
    <script src="{{ asset('template/assets/js/init-scripts/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/init-scripts/flot-chart/flot-chart-init.js') }}"></script>
    <script src="{{ asset('template/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/init-scripts/chart-js/chartjs-init.js')}}"></script>
    

    <script src="{{ asset('template/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="{{ asset('template/assets/js/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('template/assets/js/toastr.min.js') }}"></script>
	<script src="{{ asset('template/assets/js/klorofil-common.js') }}"></script>
    <script src="{{ asset('template/assets/js/select2.min.js')}}"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script>
        $(document).ready(function() {
            $('.standardSelect').select2();
            $('.defaultsel').select2({
                minimumResultsForSearch: Infinity,
                width:'100%'
            });
        });
        $(":input").inputmask();
        $(function(){
            var url = window.location;
            var element = $('ul.nav a').filter(function() {
                return this.href == url || url.href.indexOf(this.href) == 0;
            }).parent().addClass('active').parent().parent().addClass('active');
        });
        $(window).on('load',function(event){
            $('body').removeClass('preloading');
            $('.load').delay(400).fadeOut('fast');
        });
    </script>
    <!--<script>
        $(function () {
            $.get("template/vendors/bootstrap/dist/css/bootstrap.min.css", function (data) {
                var version = data.match(/v[.\d]+[.\d]/);
                alert(version);
            });
        });
    </script>