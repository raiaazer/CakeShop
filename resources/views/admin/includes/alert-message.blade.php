@if(session('success'))
<div class="alert alert-success alert-message d-flex justify-content-between">{{ session('success') }} <span style="cursor: pointer;" onclick="$(this).parent().remove();">&times;</span></div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-message d-flex justify-content-between">{{ session('error') }} <span style="cursor: pointer;" onclick="$(this).parent().remove();">&times;</span></div>
@endif
