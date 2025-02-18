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
        transition: 0.3s
    }

    #tri .item:hover{
        background: var(--clr-primary);
        transform: scale(1);
    }

    #tri .item:hover h4, #tri .item:hover p {
        color: white;
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
            <h2>About Gaming Republic Hub</h2>
            <p>Gaming Republic Hub is a Malaysia-based company dedicated to serving the gaming community with innovative and reliable digital solutions. Founded by passionate gamers, we aim to create a hub where players can access everything they need to enhance their gaming experience. </p>
        </div>
    </div>

    <div class="row dou reverse">
        <div class="col">
            <h2>Service we offer</h2>
            <p>We offers the most popular game merchandise and services for all gamers. And to ensure that every transaction can be completed easily, quickly and safely. GRH protects the consumers' funds and makes virtual goods transactions easier</p>
        </div>
        <div class="col"><img src="{{ asset('img/services.png') }}"/></div>
    </div>

    <div class="row" id="goals">
        <h2> Our Goals</h2>
        <div id="tri" >
            <div class="col">
                <div class="item">
                    <img src="{{ asset('img/empower.png') }}" />
                    <h4>Empower Gamers</h4>
                    <p>Provide a seamless platform that makes top-ups and game credits easy and accessible for all players.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('img/trust.png') }}" />
                    <h4>Build Trust</h4>
                    <p> Establish a secure, reliable, and customer-focused service that gamers can depend on.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('img/innovate.png') }}" />
                    <h4>Innovate & Grow</h4>
                    <p>Continuously evolve with the gaming industry, bringing new opportunities and better experiences to our community.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection