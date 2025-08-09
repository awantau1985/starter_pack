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

{{-- refactor path --}}
<audio id="audio-alert" src="{{ asset('audio/alert.mp3')}}" preload="auto"></audio>
<audio id="audio-fail"  src="{{ asset('audio/fail.mp3') }}"  preload="auto"></audio>
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
{{-- end refactor path --}}
