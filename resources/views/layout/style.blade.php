<link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">
<link rel="stylesheet" href="{{asset('css/modal.css')}}">
<style>
    #spinning-loading{
        animation: spinning-loading 1s linear infinite;
    }

    @keyframes spinning-loading{
        0%{
            transform: rotate(0deg);
        }

        25%{
            transform: rotate(90deg);
        }

        50%{
            transform: rotate(180deg);
        }

        75%{
            transform: rotate(270deg);
        }

        100%{
            transform: rotate(360deg);
        }
    }

    .btn-disabled{
        background: grey !important;
        text-transform: lowercase !important;
    }

    #contact-info{
        width: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: nowrap;
        flex-direction: column;
        margin: auto;
    }

    #contact-info div{
        background: white;
        padding: 5px;
        border-radius: 5px;
        margin: auto;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 5px;
        align-items: center;
    }

    #contact-info div span{
        font-size: 12px;
        font-weight: 600;
        color: var(--clr-primary);
        text-transform: uppercase;
    
    }
</style>