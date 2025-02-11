<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Online games,shop garena my,Garena reward,redeem code,Genshin,Republic gg,Codashop mobile legends,Diamond ml,Topup ml,Coda shop ml">
        <title>Republic.GG</title>
        <link rel="icon" href="https://republic.gg/v2/img/logo-square.png">
        <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
     
        @include('layout.script')
        @include('layout.style')
        @yield('head_style')

    </head>
    <body>
@include('layout.header')






    @yield('content')
    


     

    <!-- <script type="text/javascript">
        (function ($) {
            $.fn.refreshCaptcha = function () {
                let elem =this
                $.ajax({
                    type: "GET",
                    url: "https://republic.gg/v2/reload-captcha",
                    success: function (data) {
                        elem.html(data.captcha);
                    }
                });
            };
        }(jQuery));

         /**
         * Function to copy code to clipboard
         */
        function copyPinCodeToClipboard($code, e){

            let clickElement = $(e);
            
            clickElement.find('> #tooltip_'+$code).text('Copied');
            
            $('.serial-numbers').find('span:not(#tooltip_'+$code+')').text('Copy to clipboard');

            navigator.clipboard.writeText($code);
        }
    </script>
        <script type="text/javascript">
        $(function() {
            initSwiper();
        })

        function initSwiper() {
            var swiper = new Swiper('#main-banner', {
                effect: "creative",
                grabCursor: true,
                calculateHeight: true,
                centeredSlides: true,
                autoHeight: false,
                slidesPerView: "auto",
                creativeEffect: {
                    prev: {
                        // shadow: true,
                        translate: ['-100%', 0, -300],
                    },
                    next: {
                        // shadow: true,
                        translate: ['100%', 0, -300]
                    }
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                },
            });
        }
    </script> --> <!--
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '.btn-show-side-nav', function(e) {
                $('#side-nav').css('left', '0');
            });
        });
    </script>
        <script type="text/javascript">
            $(function() {
                $(document).on('click', '#btn-close-side-nav', function(e) {
                    $('#side-nav').css('left', '-100vw');
                });
            });
        </script>
           <script type="text/javascript">
           $(function() {
               function searchItem(searchString) {
                   $.ajax({
                       type: "POST",
                       url: "https://republic.gg/v2/item/search",
                       data: {
                           "_token": "lYMPNgbVtlR6kPo9r7vhUdPQyOpeBIbBuU6s4xw9",
                           "search_string": searchString
                       },
                       success: function(response) {
                           $('.navbar-search-result').html('');
                           if (response.data) {
                               response.data.forEach(item => {
                                   $('.navbar-search-result').append(
                                       `<a class="block border-b-dgrey border-b-2 py-1 hover:opacity-80" 
                                         href="${item.purchase_url}" >${item.name}</a>`
                                   );
                               });
                               $('.navbar-search-result').removeClass('hidden');
                               $('.div-navbar-search').addClass('rounded-br-none rounded-bl-none')
                           }
                       }
                   });
               }
               $(document).on('click', '.div-navbar-search', function(e) {
                   if ($('.navbar-search-result').hasClass('hidden'))
                       e.preventDefault();
                   $(this).removeClass('w-fit').addClass('w-full border-2 border-yellow-dark')
                   $('.navbar-search').removeClass('hidden');
                   $('.btn-clear-search').removeClass('hidden');
                   $('.navbar-search').trigger('focus');
               });

               $(document).on('keyup', '.navbar-search', function(e) {
                   e.stopImmediatePropagation()
                   if (e.key !== "Enter") {
                       $('.navbar-search-result').addClass('hidden');
                       $('.div-navbar-search').removeClass('rounded-br-none rounded-bl-none')
                       searchItem($(this).val());
                   }
               });

               $(document).on('click', '.btn-clear-search', function(e) {
                   $('.navbar-search-result').addClass('hidden').html('');
                   $('.div-navbar-search').removeClass('rounded-br-none rounded-bl-none')
                   $('.navbar-search').val('');
               });
           });
       </script> -->
          <!-- <script type="text/javascript">
           $(function() {
               function searchItem(searchString) {
                   $.ajax({
                       type: "POST",
                       url: "https://republic.gg/v2/item/search",
                       data: {
                           "_token": "lYMPNgbVtlR6kPo9r7vhUdPQyOpeBIbBuU6s4xw9",
                           "search_string": searchString
                       },
                       success: function(response) {
                           $('.navbar-search-result').html('');
                           if (response.data) {
                               response.data.forEach(item => {
                                   $('.navbar-search-result').append(
                                       `<a class="block border-b-dgrey border-b-2 py-1 hover:opacity-80" 
                                         href="${item.purchase_url}" >${item.name}</a>`
                                   );
                               });
                               $('.navbar-search-result').removeClass('hidden');
                               $('.div-navbar-search').addClass('rounded-br-none rounded-bl-none')
                           }
                       }
                   });
               }
               $(document).on('click', '.div-navbar-search', function(e) {
                   if ($('.navbar-search-result').hasClass('hidden'))
                       e.preventDefault();
                   $(this).removeClass('w-fit').addClass('w-full border-2 border-yellow-dark')
                   $('.navbar-search').removeClass('hidden');
                   $('.btn-clear-search').removeClass('hidden');
                   $('.navbar-search').trigger('focus');
               });

               $(document).on('keyup', '.navbar-search', function(e) {
                   e.stopImmediatePropagation()
                   if (e.key !== "Enter") {
                       $('.navbar-search-result').addClass('hidden');
                       $('.div-navbar-search').removeClass('rounded-br-none rounded-bl-none')
                       searchItem($(this).val());
                   }
               });

               $(document).on('click', '.btn-clear-search', function(e) {
                   $('.navbar-search-result').addClass('hidden').html('');
                   $('.div-navbar-search').removeClass('rounded-br-none rounded-bl-none')
                   $('.navbar-search').val('');
               });
           });
       </script>
    -->
    <script>
        function logout(){
            console.log("{{ route('user.logout') }}");
            $('.btn-logout').prop('disabled',true);
            $.ajax({
                url: "{{ route('user.logout') }}",
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                success: function(response) {
                    if(response.success == true){
                        window.location.reload();
                    }
                    else{
                        setDefaultSwal('error','',response.message);
                    }
                },
                error: function() {
                    setDefaultSwal('error','', "There is something wrong, please try again.");
                },
                complete: function(){

                    hideLoading();
                }
            });
        }
    </script>
   </body>
</html>