@extends('layout.app')
@section('content')
<section class="product-section bg-white">
    <div class='row'>
        <h2>Top sale</h2>
        <div class="products">
            <div class="product">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/starrail.png') }}"/>
                </div>
                <h4 class="product-name">Star Rail</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/starrail.png') }}"/>
                </div>
                <h4 class="product-name">Star Rail</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/starrail.png') }}"/>
                </div>
                <h4 class="product-name">Star Rail</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/starrail.png') }}"/>
                </div>
                <h4 class="product-name">Star Rail</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/starrail.png') }}"/>
                </div>
                <h4 class="product-name">Star Rail</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/starrail.png') }}"/>
                </div>
                <h4 class="product-name">Star Rail</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/starrail.png') }}"/>
                </div>
                <h4 class="product-name">Star Rail</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/starrail.png') }}"/>
                </div>
                <h4 class="product-name">Star Rail</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="product-section bg-grey" >
    <div class="row">
        <h2>Top sale</h2>
        <div class="products">
            @foreach($products as $product)
            <div class="product" onclick="window.location.href='{{ route('product.view', ['product' => $product->short_name]) }}'">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/'.$product->image) }}"/>
                </div>
                <h4 class="product-name">{{ $product->name }}</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM 4.90</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection



