@if (session('pass'))
    <script>
        var toastHTML = "{{session('pass')}}";
        M.toast({
            html: toastHTML,
            classes:"green"
        });
    </script>
@endif
