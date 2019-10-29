<div class="logo">
    <img src="image/logo-cttdt.png" alt="">
</div>
@if(\Illuminate\Support\Facades\Auth::check())
    @include('nav')
@endif