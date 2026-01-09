@extends('layout.app')
@section('head_style')
<style>
    section .row{
        display: flex;
        max-width: 1024px;
        margin: 100px auto;
    }

    section .row .col{
        width: 50%;
    }

    section .row .col img{
        width: 100%;
        max-width: 500px;
    }

    section .row.dou{
        align-items: center;
    }

    section .row.dou .col{
        align-items: center;
        padding: 15px;
    }

    section .row.dou .col h2{
        margin-bottom: 15px;
    }

    #goals{
        flex-direction: column;
    }

    #goals h2{
        width: 100%; 
        margin-bottom: 15px;
        text-align: center;
    }

    #tri .col{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    #tri .item{
        flex: 0 0 calc(33.333% - 20px);
        margin: 10px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
        padding: 25px;
        border: 1px solid #f1f1f1;
        border-radius: var(--radius);
        transform: scale(0.98);
        transition: 0.3s;
        cursor: default;
    }

    #tri .item:hover{
        background: var(--theme-background-selected-2);
        transform: scale(1);
    }

    #tri .item:hover h4, #tri .item:hover p {
        color: var(--theme-button-primary-background);
    }

    #tri .item img{
        width: 60%;
        max-width: 100px;
    }

    #tri .item p{
        text-align: center
    }

    @media only screen and (max-width: 768px){
        section .row{
            flex-wrap: wrap;
            margin: 50px auto;
        }
    
        section .row .col {
            width: 100%;
        }

        section .row.dou .col img{
            width: 80%;
            margin: 0 10%;
        }

        section .row.dou .col h2{
            margin-bottom: 10px;
        }

        section .row.dou .col h2, section .row.dou .col p{
            text-align: center;
        }

        section .row.reverse{
            flex-direction: column-reverse;
        }

        #tri .item{
            flex: 0 0 100%;
            margin: 15px 0;
        }

        #goals h2{
            margin-bottom: 10px;
        }
    }
</style>
@endsection
@section('content')
<!-- ABOUT US -->
<section>
    <div class="row dou">
        <div class="col"><img src="{{ asset('img/about_us.png') }}"/></div>
        <div class="col">
            <h2>About G Jewel</h2>
            <p>G Jewel is a Malaysia-based online jewelry brand specializing in exquisite gold accessories. Founded with a passion for timeless elegance and modern craftsmanship, we offer a curated collection of gold rings, bracelets, and other fine jewelry designed for everyday luxury and special moments. Our mission is to provide customers with high-quality, reliable, and beautifully crafted gold pieces that elevate personal style and celebrate lasting value.</p>
        </div>
    </div>

    <div class="row dou reverse">
        <div class="col">
            <h2>Service we offer</h2>
            <p>We provide a curated selection of premium gold accessories, including rings, bracelets, and timeless jewelry pieces designed for everyday wear and special occasions. At G Jewel, we ensure every purchase is completed smoothly, securely, and with confidence—offering reliable service, trusted quality, and a seamless online shopping experience for our customers.</p>
        </div>
        <div class="col"><img src="{{ asset('img/services.png') }}"/></div>
    </div>

    <div class="row" id="goals">
        <h2> Our Goals</h2>
        <div id="tri" >
            <div class="col">
                <div class="item">
                    <img src="{{ asset('img/empower.png') }}" />
                    <h4>Elevate Style</h4>
                    <p>Offer beautifully crafted gold accessories that enhance personal style for everyday wear and special occasions.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('img/trust.png') }}" />
                    <h4>Build Trust</h4>
                    <p>Provide authentic gold jewelry with transparent pricing, secure payments, and reliable customer service.</p></p>
                </div>
                <div class="item">
                    <img src="{{ asset('img/innovate.png') }}" />
                    <h4>Grow with Elegance</h4>
                    <p>Continuously expand our collections and services to meet modern trends while preserving timeless value.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection