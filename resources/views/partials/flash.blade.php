@if(session('status') == 'success')
    <div class="alert alert-success">
        {{ session('message') }}
    </div>

    <script>
        setTimeout(function(){
            $('.alert-success').fadeOut('slow');
        }, 3000);
    </script>
@endif
