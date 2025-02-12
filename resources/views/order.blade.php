@extends('layout.app')
@section('head_style')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet"/>
<style>
    #order-options {
        display: flex;
        width: 100%;
        justify-content: space-around;
        background: #f1f1f1;
        border-radius: var(--radius);
        padding: 8px;
    }

    #order-options .option{
        display: flex;
        flex: 0 0 25%;
        padding: 8px;
        background: #f1f1f1;
        justify-content: center;
        font-weight: 700;
        color: #6f6f6f

    }

    #order-options .option.active{

        background: var(--clr-primary);
   
        color: white;
        border-radius: var(--radius)
    }
</style>
@endsection

@section('content')
<section id="profile-wrapper">
    <div class="col col-left">
        @include('layout.profile_menu')
    </div>
    <div class="col col-right">
        <h2 class="title">Order History</h2>
        <hr>
        <div id="order-options">
            <div class="option {{ $status == 'pending' ? 'active' : '' }}">Pending</div>
            <div class="option {{ $status == 'complete' ? 'active' : '' }}">Completed</div>
            <div class="option {{ $status == 'failed' ? 'active' : '' }}">Failed</div>
            <div class="option {{ $status == 'refund' ? 'active' : '' }}">Refund</div>
        </div>

        {{ $page }}/ {{ $max_page }}

        <div class="pagination"></div>

        @php
    // Get the total number of pages


    // Get the current page


    // Define the maximum number of pages to display
    $max = 5;

    // Calculate the range of pages to display
    $startPage = max(1, $page - 2); // Ensure the start page is at least 1
    $endPage = min($max_page, $page + 2); // Ensure the end page is the last page

    // Adjust the start page if there are fewer than 5 pages to display
    if ($endPage - $startPage < $max - 1) {
        if ($startPage == 1) {
            $endPage = min($max_page, $startPage + $max - 1);
        } else {
            $startPage = max(1, $endPage - $max + 1);
        }
    }
@endphp

<div class="custom-pagination">
    <!-- Previous Button -->
    @if($page > 1)
        <a href="{{ route('order', ['status' => $status, 'page' => $page - 1]) }}">Previous</a>
    @endif

    <!-- Page Numbers -->
    @for ($i = $startPage; $i <= $endPage; $i++)
        <a href="{{ route('order', ['status' => $status, 'page' => $i]) }}"
           class="{{ $i == $page ? 'active' : '' }}">
            {{ $i }}
        </a>
    @endfor

    <!-- Next Button -->
    @if($page < $max_page)
        <a href="{{ route('order', ['status' => $status, 'page' => $page + 1]) }}">Next</a>
    @endif
</div> 
    </div>
</section>
<script>
    $(document).ready(function(){
        $('#link-orders').addClass('active');

        

    });
</script>
@endsection



