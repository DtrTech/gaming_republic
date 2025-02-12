<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Online games,shop garena my,Garena reward,redeem code,Genshin,Republic gg,Codashop mobile legends,Diamond ml,Topup ml,Coda shop ml">
        <title>Gaming Republic Hub</title>
        <link rel="icon" href="{{ asset('img/icon.png') }}">
        <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
     
        @include('layout.script')
        @include('layout.style')
        @yield('head_style')

    </head>
    <body>
@include('layout.header')
<!-- LOGIN -->
<div id="modal-login" class="modal">
    <div class="modal-content modal-400">
        <button type="button" class="btn-close-modal" onclick="closeModal(this)" data-bs-dismiss="modal" aria-label="Close"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M18 6l-12 12"></path><path d="M6 6l12 12"></path></svg></button>
        <div class="content form-wrapper">
            <div class="header">
                <h2>Login</h2>
                <p>Welcome back!</p>
            </div>
            <form id="form-login" enctype="multipart/form-data">
                @csrf
                <div class="input-field">
                    <label>Username / Email:</label>
                    <input type="text" name="username" placeholder="e.g: example@mail.com" autocomplete="off" required>
                </div>

                <div class="input-field">
                    <label>Password:</label>
                    <input type="password" name="password" autocomplete="off" required>
                </div>
                
                <div class="forgot-password">
                    <a class="link" href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-submit" onclick="showLoading()">Login</button>
                <div id="no-account">No account yet? <a class='link' href="#">Sign Up Now</a></div>
            </form>
        </div>
    </div>
</div>

<div id="modal-register" class="modal">
    <div class="modal-content modal-400">
        <button type="button" class="btn-close-modal" onclick="closeModal(this)" data-bs-dismiss="modal" aria-label="Close"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M18 6l-12 12"></path><path d="M6 6l12 12"></path></svg></button>
        <div class="content form-wrapper">
            <div class="header">
                <h2>Register</h2>
                <p>Welcome! let's get started</p>
            </div>
            <form id="form-register" enctype="multipart/form-data">
                @csrf
                <div class="input-field">
                    <label>Username:</label>
                    <input type="text" name="username" placeholder="e.g: jackson2000" autocomplete="off" required>
                </div>

                <div class="input-field">
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="e.g: example@mail.com" autocomplete="off" required>
                </div>

                <div class="input-field">
                    <label>Password:</label>
                    <input type="password" name="password" autocomplete="off" required>
                </div>
                <div class="input-field">
                    <label>Re-enter Password:</label>
                    <input type="password" name="password_confirmation" autocomplete="off" required>
                </div>
                
                <div class="input-field input-otp">
                    <label>OTP Verification:</label>
                    <div>
                        <input name="otp" type="text" autocomplete="off">
                        <button id="btn-request-otp" type="button">Get OTP</button>
                    </div>
                </div>
                <div id="accept-tnc"> <input type="checkbox" name="read-"required/>I agree with the <a class='link' href="#">Terms & Conditions</a></div>
                <button type="submit" class="btn btn-submit" onclick="showLoading()">Create Account</button>
                <div id="no-account">Already have an account? <a class='link' href="#">Login Now</a></div>
            </form>
        </div>
    </div>
</div>
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

        $(document).ready(function(){
            $('#btn-request-otp').on('click', function(event){
                event.preventDefault(); // Prevent form submission when OTP button is clicked
                
                // Validate the form fields before proceeding
                const form = $('#form-register');
                if (form[0].checkValidity()) {  // Check if the form is valid
                    showLoading();  // Show loading state

                    const formData = new FormData(form[0]);

                    $.ajax({
                        url: "{{ route('user.request_otp') }}",  // Adjust this route as necessary
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                        success: function(response) {
                            console.log(response);
                            if(response.success == true) {
                                setDefaultSwal('success', '', response.message);
                            } else {
                                setDefaultSwal('error', '', response.message);
                            }
                        },
                        error: function() {
                            setDefaultSwal('error', '' ,'There is something wrong, please try again.');
                        },
                        complete: function(){
                            hideLoading();  // Hide loading state
                        }
                    });
                } else {
                    // If the form is not valid, prompt the user to fill out the form
                    form[0].reportValidity();
                }
            });

            $('#form-register').on('submit', function(event){
                event.preventDefault();
                showLoading();
                const formData = new FormData(this);
                const btn = $(this).find('button[type="submit"]');
                $(btn).prop("disabled", true);
                $.ajax({
                    url: "{{ route('user.register') }}",
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    success: function(response) {
                        console.log(response);
                        if(response.success == true){
                    
                        }
                        else{
                        // setDefaultSwal('error','',response.message);
                        }
                    },
                    error: function() {
                        setDefaultSwal('error','', "{{ __('register.error_message') }}");
                    },
                    complete: function(){
                        $(btn).prop("disabled", false);
                        hideLoading();
                    }
                });
            })

            $('#form-login').on('submit', function(event){
                event.preventDefault();
                showLoading();
                const formData = new FormData(this);
                const btn = $(this).find('button[type="submit"]');
                $(btn).prop("disabled", true);
                $.ajax({
                    url: "{{ route('user.login') }}",
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
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
                        $(btn).prop("disabled", false);
                        hideLoading();
                    }
                });
            })
        })
    </script>
   </body>
</html>