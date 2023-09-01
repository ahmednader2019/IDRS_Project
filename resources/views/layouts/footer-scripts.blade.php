<!-- jquery -->
<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'assets/js/';

</script>
<!-- chart -->
<script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>


<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>


<!-- calendar -->
<script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>

<script src="{{ URL::asset('assets/js/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ URL::asset('assets/js/jvectormap/jquery-jvectormap-init.js') }}"></script>

<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>
<script>
    function showTextBox2(qNum) {
        document.getElementById(qNum + "-textbox").style.display = "block";
    }

    function hideTextBox2(qNum) {
        document.getElementById(qNum + "-textbox").style.display = "none";
    }
</script>
<script>
    function showTextBox() {
        var textBox = document.getElementById("text-box");
        textBox.style.display = "block";
    }

    function hideTextBox() {
        var textBox = document.getElementById("text-box");
        textBox.style.display = "none";
    }
</script>

<script>
    setInterval(function() {
        $("#driver-table").load(window.location.href + " #driver-table");

        $("#unreadNotifications").load(window.location.href + " #unreadNotifications");
        $("#unreadNotification_count").load(window.location.href + " #unreadNotification_count");

    }, 5000);
</script>
