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



<script>
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

@endsection



