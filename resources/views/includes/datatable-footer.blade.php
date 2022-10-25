@include('components.footer-content')


    @include('includes.datatable-scripts')
     <script type='text/javascript' id='newsprk-main-js-extra'>
        /* <![CDATA[ */
        var newsprk_obj = {
            "newsticker_slider": {
                "newsticker_slider_timeout": "100000",
                "newsticker_slider_speed": "3000",
                "newsticker_autoplay_enable": true,
                "newsticker_nav_enable": true,
                "autoplay_hover_pause": true
            }
        };
    /* ]]> */
    </script>
<script>

  // tender datatables
  $(document).ready(function () {
    $('#example').DataTable();
  });

   
</script>
