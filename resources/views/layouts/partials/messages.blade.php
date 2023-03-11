@if ($message = Session::get('success'))
<div class="alert alert-soft-success" role="alert">
    {{ $message }}
</div>
@endif 

@if ($message = Session::get('error'))
<div class="alert alert-soft-danger" role="alert">
    {{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-soft-warning" role="alert">
    {{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-soft-info" role="alert">
    {{ $message }}
</div>
@endif
    
@if ($errors->any())
<div class="alert alert-soft-danger" role="alert">
    Үйлдэл гүйцэтгэх боломжгүй
</div>
@endif