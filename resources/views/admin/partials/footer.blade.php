<!-- /.content-wrapper -->
<footer class="main-footer">
   <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
   </div>
   All rights
   reserved.
</footer>
<!-- jQuery 3 -->
<script src="{{asset('public/admin_assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/admin_assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- <script src="bower_components/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
   $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('public/admin_assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- Morris.js charts -->
<script src="{{asset('public/admin_assets/bower_components/raphael/raphael.min.js')}}"></script>
<!-- <script src="bower_components/raphael/raphael.min.js"></script> -->
<script src="{{asset('public/admin_assets/bower_components/morris.js/morris.min.js')}}"></script>
<!-- <script src="bower_components/morris.js/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="{{asset('public/admin_assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> -->
<!-- jvectormap -->
<script src="{{asset('public/admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
<script src="{{asset('public/admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{asset('public/admin_assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{asset('public/admin_assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="{{asset('public/admin_assets/bower_components/moment/min/moment.min.js')}}"></script> -->
<script src="{{asset('public/admin_assets/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- <script src="bower_components/moment/min/moment.min.js"></script> -->
<script src="{{asset('public/admin_assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->
<!-- datepicker -->
<script src="{{asset('public/admin_assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('public/admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Time Picker Script -->
<script src="{{asset('public/admin_assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- Time Picker Script -->
<!-- <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- Slimscroll -->
<script src="{{asset('public/admin_assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<script src="{{asset('public/admin_assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- <script src="bower_components/fastclick/lib/fastclick.js"></script> -->
<!-- AdminLTE App -->
<script src="{{asset('public/admin_assets/dist/js/adminlte.min.js')}}"></script>
<!-- <script src="dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('public/admin_assets/dist/js/pages/dashboard.js')}}"></script> -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/admin_assets/dist/js/demo.js')}}"></script>
<!-- <script src="dist/js/demo.js"></script> -->
<script src="{{asset('public/admin_assets/js/custom.js')}}"></script>
<script src="{{asset('public/admin_assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script>
   $(function () {
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     //bootstrap WYSIHTML5 - text editor
     $('.textarea').wysihtml5()
     $('.select2').select2();
     CKEDITOR.replace('editor1')
   })
   function load_js()
   {
    var head= document.getElementsByTagName('head')[0];
    var script= document.createElement('script');
    script.type= 'text/javascript';
    script.src= '{{ asset("public/assets/js/custom.js") }}';
    head.appendChild(script);
   } 
   window.onload = function () {   
   var url = $("#baseurl").val()+'/admin/chart';
   console.log(url);
   $.getJSON(url, function(data) {    
     console.log(data[3].total_price);
     var options = {
       title: {
         text: "Monthly Sales Summary"               
       },
       data: [              
       {
           // Change type to "doughnut", "line", "splineArea", etc.
           type: "column",
           dataPoints: [
           { label: "January",  y: data[0].total_price  },
           { label: "February", y: data[1].total_price  },
           { label: "March", y: data[2].total_price  },
           { label: "April",  y: data[3].total_price  },
           { label: "May",  y: data[4].total_price  },
           { label: "June",  y: data[5].total_price  },
           { label: "July",  y: data[6].total_price  },
           { label: "August",  y: data[7].total_price  },
           { label: "September",  y: data[8].total_price  },
           { label: "October",  y: data[9].total_price  },
           { label: "November",  y: data[10].total_price  },
           { label: "December",  y: data[11].total_price  }
           ]
         }
         ]
       };   
       $("#chartContainer").CanvasJSChart(options);
       var options_order = {
         title: {
           text: "Monthly Orders Summary"              
         },
         data: [              
         {
           // Change type to "doughnut", "line", "splineArea", etc.
           type: "column",
           dataPoints: [
           { label: "January",  y: data[0].order_count  },
           { label: "February", y: data[1].order_count  },
           { label: "March", y: data[2].order_count  },
           { label: "April",  y: data[3].order_count  },
           { label: "May",  y: data[4].order_count  },
           { label: "June",  y: data[5].order_count  },
           { label: "July",  y: data[6].order_count  },
           { label: "August",  y: data[7].order_count  },
           { label: "September",  y: data[8].order_count  },
           { label: "October",  y: data[9].order_count  },
           { label: "November",  y: data[10].order_count  },
           { label: "December",  y: data[11].order_count  }
           ]
         }
         ]
       };
   
       $("#chartContainer_order").CanvasJSChart(options_order);
     });
     //Better to construct options first and then pass it as a parameter
   }
</script>
</body>
</html>