@if (session('fail'))
    <script>
        var toastHTML = "{{session('fail')}}";
        M.toast({
            html: toastHTML,
            classes:"red"
        });
    </script>
@endif
