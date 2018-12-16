<script>


    @if(Session::has('success'))
        toastr.options.timeOut = 100;
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        toastr.success("{{ Session::get('success') }}", 'Alert', {timeOut: 1000})
    @endif

    @if(Session::has('info'))
        toastr.options.timeOut = 100;
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        toastr.info("{{ Session::get('info') }}", 'Alert', {timeOut: 1000})
    @endif

    @if(Session::has('warning'))
        toastr.options.timeOut = 100;
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        toastr.warning("{{ Session::get('warning') }}", 'Alert', {timeOut: 1000})
    @endif

</script>
