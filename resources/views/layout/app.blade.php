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
        @include('layout.sidebar')
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
                        
                        <div class="forgot-password hide">
                            <a class="link" href="#">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-submit" onclick="showLoading()">Login</button>
                        <div id="no-account">No account yet? <a class='link' href="#" onclick="$('#modal-login').hide();$('#modal-register').show();">Sign Up Now</a></div>
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
                        <div id="no-account">Already have an account? <a class='link' href="#" onclick="$('#modal-register').hide();$('#modal-login').show();">Login Now</a></div>
                    </form>
                </div>
            </div>
        </div>
        <div style="padding:0;margin:0;min-height: calc(100vh - 358px)">

        @yield('content')
        </div>
        @include('layout.footer')
        <script>
            function showSidebar(){
                $('#sidebar').addClass('active');
            }

            function hideSidebar(){
                $('#sidebar').removeClass('active');
            }

            function logout(){
                console.log("{{ route('user.logout') }}");
                $('.btn-logout').prop('disabled',true);
                $.ajax({
                    url: "{{ route('user.logout') }}",
                    method: 'POST',
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    success: function(response) {
                        if(response.success == true){
                            window.location.href = "{{ route('home') }}";
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

            
            function fetchProducts(query) {
                $.ajax({
                    url: "{{ route('product.search') }}",
                    method: 'POST',
                    data: {query:query},
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    success: function(response) {
                        displayResults(response.result);
                    },
                    error: function() {
                        console.log('failed to get data from server.');
                    },
                    complete: function(){

                        hideLoading();
                    }
                });
            }

            function displayResults(products) {
                $('#search-results').html('');
                console.log(products.length);
                if(products.length < 1){
                    $('#search-results').html('<p>No result found.</p>');
                    $('#search-results').removeClass('hide')
                }
                else{
                    products.forEach(function(product){
                        let productUrl = `{{ route('product.view', ['product' => '__PRODUCT_SHORT_NAME__']) }}`.replace('__PRODUCT_SHORT_NAME__', product.short_name);
                        let element = $(`
                            <div class="result">
                                <a href="${productUrl}" class="product-item">
                                    <img src="{{ asset('img/products/') }}/${product.image}" alt="${product.name}"/>${product.name}
                                </a>
                            </div>
                        `);

                $('#search-results').append(element);
                    });

                    $('#search-results').removeClass('hide')
                }
            }

            $(document).ready(function(){
                let debounceTimer;
                $('#search').on('focus',function(){
                    $(this).closest('.search-wrapper').addClass('active');
                    
                });

                $("#search").on("input", function() {
                    clearTimeout(debounceTimer);
                    const query = this.value.trim();
                    
                    if (query.length === 0) {
                        document.getElementById("results").innerHTML = "";
                        return;
                    }

                    debounceTimer = setTimeout(() => {
                        fetchProducts(query);
                    }, 300);
                });

                $('#search').on('blur',function(){
                   // $(this).closest('.search-wrapper').removeClass('active');
                 //   $('#search-results').addClass('hide');
                  //  $(this).val('');
                });
                
                $('#btn-request-otp').on('click', function(event) {
                    event.preventDefault();

                    const button = $(this);
                    const form = $('#form-register');

                    if (form[0].checkValidity()) {
                        // Disable button and show spinner immediately
                        button.prop('disabled', true);
                        button.html('<svg id="spinning-loading" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M12 3a9 9 0 1 0 9 9"></path> </svg>');

                        // Prepare form data for AJAX
                        const formData = new FormData(form[0]);

                        // Send AJAX request
                        $.ajax({
                            url: "{{ route('user.request_otp') }}",
                            method: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                            success: function(response) {
                                if (response.success) {
                                    // Start countdown only after success
                                    let seconds = 60;
                                    const originalText = button.text();

                                    // Set initial button HTML with countdown
                                    button.html(`
                                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                                        Please wait <span id="otp-countdown">60</span>s
                                    `);

                                    // Update countdown every second
                                    const interval = setInterval(() => {
                                        seconds--;
                                        $('#otp-countdown').text(seconds);

                                        if (seconds <= 0) {
                                            clearInterval(interval);
                                            button.prop('disabled', false);
                                            button.text(originalText); // Restore original button text
                                        }
                                    }, 1000);

                                    // Show success message
                                    setDefaultSwal('success', '', response.message);
                                } else {
                                    // If the request was unsuccessful, restore the button
                                    button.prop('disabled', false);
                                    button.html('Request OTP'); // Restore original button text
                                    setDefaultSwal('error', '', response.message);
                                }
                            },
                            error: function() {
                                // If there is an error, restore the button and show error message
                                button.prop('disabled', false);
                                button.html('Request OTP'); // Restore original button text
                                setDefaultSwal('error', '', 'There is something wrong, please try again.');
                            }
                        });
                    } else {
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
                            if(response.success == true){
                                setDefaultSwal('success','','Login successful.');
                            }
                            else{
                                setDefaultSwal('error','',response.message);
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
                });
                document.addEventListener("click", function(event) {
                    const sidebar = document.getElementById("sidebar");
                    const toggleButton = document.getElementById("btn-show-sidebar");
                    if (
                        sidebar && 
                        !sidebar.contains(event.target) && 
                        !toggleButton.contains(event.target)
                    ) {
                        hideSidebar();
                    }

                    if (!$(event.target).closest(".search-wrapper").length) {
                        $("#search-results").addClass("hide");
                        $('.search-wrapper').removeClass('active');
                        $('.search-wrapper').val();
                        
                    }
                });

                document.getElementById("btn-show-sidebar").addEventListener("click", function (event) {
                    event.stopPropagation();
                    showSidebar();
                });
            })
        </script>
    </body>
</html>