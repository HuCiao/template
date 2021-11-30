@extends('layouts.layout')
@section('title','404')

@section('content')
<!-- fore zero fore page start here -->
<section class="fore-zero padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="zero-item text-center">
                <h1>Oops, sorry we can’t find that page</h1>
                <h2>{{ $msg }}</h2>
                <div class="zero-thumb">
                    <img src="{{URL::asset('images/404.png')}}" alt="404">
                </div>
                <div class="zero-content">
                    <a href="{{route('home.index')}}" class="lab-btn"><span>Back to Home</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scriptsAfterJs')
<script>
setTimeout('window.location="{{ route('home.index') }}"',5000)
</script>
@endsection
