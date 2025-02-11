@extends('layout.app')
@section('head_style')
<style>

    .row{
        max-width: 1024px !important;
    }
    .upper{
        display: flex;
        justify-content: center;
        position: relative;
        flex-direction: column;
        align-items: center;
    }
    .upper img{
        width:  100%;
        max-width: 1200px;
        margin: auto;
    }

    .upper h1{
        text-align: center;
        padding: 15px;
        margin-bottom: 25px;
    }

    .block{
        margin-bottom: 50px;
        width: 75%
    }

    .block .inner-block img{
        width: 100%;
        margin-bottom: 15px
    }

    .block .inner-block h2{
        margin-bottom: 15px
    }

    .block .inner-block p{
        margin-bottom: 15px;
        line-height: 1.5
    }
</style>
@endsection
@section('content')
@if(isset($error))
<div id="failed">
    <img src="{{ asset('img/no_result.png') }}"/>
    <label>{{ $error }}</label>
    <button class="btn btn-submit" onclick="window.location.href='{{ route('home') }}'">Back to home page</button>
</div>
@else
<!-- CHECKOUT -->
<section class="single-checkout" id="checkout-section">
   
    <div  style="padding:25px 0" class="row">
        <a  href="{{ route('news.index') }}">Back to News</h2>
    </div>

    <div class="row" id="main">
        @include('source.news.'.$page)
    </div>
</section>
<script>
  
</script>
@endif
@endsection



