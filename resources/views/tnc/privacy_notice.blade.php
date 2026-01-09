@extends('layout.app')
@section('head_style')
<link href="{{ asset('css/tnc.css')}}" rel="stylesheet"/>
@endsection
@section('content')
<section class="row">
    <div style="padding:25px 0">
        <a class="link-return" href="{{ route('home') }}">
        <svg viewBox="0 0 448 512" stroke="1" width="14" height="14"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            Back to Home Page
        </a>
    </div>

    <div class="content">
        <h1>Privacy Notice</h1>
        <br>

        
        <h4>WHO WE ARE?</h4>
        <p>G Jewel (referred to as <b>“G Jewel”</b>, <b>“us”</b> or <b>“we”</b>) is committed to protecting and respecting your privacy.</p>
        <p>
        This Privacy Notice sets out the basis on which we collect, use, process and store your personal information when you visit or make purchases from our website
        <b>https://gjewel.store</b>, create an account, place orders, or interact with our services (collectively referred to as <b>“Services”</b>).
        Please read this Notice together with our Terms of Service.
        </p>
        <br>
        
        <h4>WHAT IS THE LAWFULNESS OF PROCESSING?</h4>
        <p>G Jewel processes your personal data based on:</p>
        <ol>
            <li><b>Performance of a contract</b> – to process orders, payments, deliveries, returns, and customer support.</li>
            <li><b>Legitimate business interests</b> – such as fraud prevention, website security, service improvement, and customer experience enhancement.</li>
            <li><b>Compliance with legal obligations</b> – including accounting, taxation, and lawful requests by authorities.</li>
            <li><b>Your consent</b> – where required for marketing communications and optional services.</li>
        </ol>
        <br>

        <h4>WHEN DO WE COLLECT YOUR PERSONAL INFORMATION?</h4>
        <p>We collect your personal information when you:</p>
        <ol>
            <li>Create an account or place an order on our website</li>
            <li>Subscribe to our newsletters or promotions</li>
            <li>Contact us via email, forms, or customer support</li>
            <li>Participate in promotions, surveys, or campaigns</li>
            <li>Browse our website using cookies and similar technologies</li>
        </ol>
        <br>

        <h4>WHAT DO WE COLLECT?</h4>
        <p>The information we collect may include:</p>
        <ol>
            <li>
                <b>Personal & Contact Information</b>
                <ol>
                    <li>Name</li>
                    <li>Billing and delivery address</li>
                    <li>Email address</li>
                    <li>Phone number</li>
                    <li>Payment and transaction details</li>
                </ol>
            </li>
            <li>
                <b>Order & Usage Information</b>
                <ol>
                    <li>Products viewed or purchased</li>
                    <li>Order history</li>
                    <li>Website interaction and preferences</li>
                </ol>
            </li>
            <li>
                <b>Technical Information</b>
                <ol>
                    <li>IP address</li>
                    <li>Browser and device type</li>
                    <li>Cookies and tracking data</li>
                </ol>
            </li>
        </ol>
        <br>

        <h4>HOW DO WE USE?</h4>
        <p>We use your personal information to:</p>
        <ol>
            <li>Process orders, payments, deliveries, and returns</li>
            <li>Provide customer support and respond to enquiries</li>
            <li>Send order updates and service-related messages</li>
            <li>Improve our website, products, and services</li>
            <li>Send promotional content (where consent is given)</li>
            <li>Prevent fraud and maintain platform security</li>
        </ol>
        <br>
       
        <h4>WHO DO WE SHARE WITH?</h4>
        <p>We may share your personal information with:</p>
        <ol>
            <li>Payment service providers</li>
            <li>Logistics and delivery partners</li>
            <li>IT, hosting, and security service providers</li>
            <li>Professional advisors (legal, accounting, audit)</li>
            <li>Authorities where required by law</li>
        </ol>
        <p>We do not sell your personal data to third parties.</p>
        <br>
      
        <h4>HOW DO WE PROTECT?</h4>
        <p>We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, loss, misuse, or disclosure.</p>
        <p>You are responsible for keeping your account credentials secure.</p>
        <br>

        <h4>DO WE TRANSFER?</h4>
        <p>Where necessary, your personal information may be processed by service providers outside Malaysia. We ensure appropriate safeguards are in place to protect your data in accordance with applicable laws.</p>
        <br>

        <h4>WHAT ARE YOUR RIGHTS?</h4>
        <p>You have the right to:</p>
        <ol>
            <li>Access your personal data</li>
            <li>Correct inaccurate information</li>
            <li>Withdraw consent for marketing communications</li>
            <li>Request deletion where legally permitted</li>
        </ol>
        <br>

        <h4>CHANGES TO THIS PRIVACY NOTICE</h4>
        <p>
        G Jewel reserves the right to update this Privacy Notice from time to time.
        Any changes will be published on our website.
        </p>
        <b style="font-size:12px">Updated 02 Jan 2026</b>
    </div>
</section>
@endsection



