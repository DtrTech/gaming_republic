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
    }
</style>