@if (count($errors) > 0)
    @foreach ($errors as $error)
        <div id="document" class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div id="document" class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div id="document" class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

<script>
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs

    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});

});
</script>