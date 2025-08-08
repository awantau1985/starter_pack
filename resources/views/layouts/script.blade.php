@stack('myScript')

<script>
    function logout() {
        console.log('here');
        var sound = document.getElementById("audio-alert");
        sound.play();
    }
    function fail() {
        var sound = document.getElementById("audio-fail");
        sound.play();
    }
</script>
<audio id="audio-alert" src="#" preload="auto"></audio>
<audio id="audio-fail"  src="#"  preload="auto"></audio>

{{-- <audio id="audio-alert" src="{{ asset('audio/alert.mp3')}}" preload="auto"></audio>
<audio id="audio-fail"  src="{{ asset('audio/fail.mp3') }}"  preload="auto"></audio> --}}
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- ChartJS -->

<script src="{{ asset ('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<script src="{{ asset ('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset ('plugins/sparklines/sparkline.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ asset ('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset ('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset ('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset ('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset ('js/demo.js')}}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('js/dashboard.js')}}"></script>
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.toast').forEach(function (toastEl) {
            var toast = new bootstrap.Toast(toastEl, { delay: 3000 });
            toast.show();
        });
    });
</script>
    