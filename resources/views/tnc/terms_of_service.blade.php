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
        <h1>Terms of Service</h1>
        <br>
   
        <h4>INTRODUCTION</h4>
        <ol>
            <li>
                G Jewel is an online jewelry platform operated by Am Salam G Sdn Bhd (<b>“Company”, “we”, “us”, “our”</b>).These Terms of Service (<b>“Terms”</b>) govern your access to and use of <a href="{{ env('APP_URL', route('home') )}}" class="cr-main" target="_blank"> <font style="color: var(--theme-button-primary-background)">{{ env('APP_URL', route('home')) }}</font> </a>
                (the <b>“Platform”</b>) and the purchase of gold jewelry and related products offered on the Platform (the <b>“Products”</b>).
            </li>
            <li>
                By accessing the Platform and/or purchasing any Products, you agree to be bound by these Terms and consent to the processing of your personal data in accordance with our Privacy Notice, which forms an integral part of these Terms. We may amend these Terms and/or the Privacy Notice from time to time without prior notice. Any changes will be effective upon publication on the Platform. Your continued use of the Platform constitutes acceptance of the updated Terms.
            </li>
            <li>
                These Terms constitute a legally binding agreement between you and G Jewel.
            </li>
            <li>
                If you are under the age of 18 (“Legal Age”), you must obtain consent from your parent or legal guardian to access or use the Platform. If you are a parent or legal guardian, you agree to these Terms on behalf of the minor and are responsible for their actions and purchases.
            </li>
            <li>
                All Products are provided on an “as-is” basis, subject to availability. We do not guarantee uninterrupted access to the Platform and are not responsible for delays, errors, or failures in transactions beyond our reasonable control.
            </li>
        </ol>
        <br>

        <h4>ACCOUNT, SUBSCRIPTION AND PAYMENT</h4>
        <ol>
            <li>
                To place an order on the Platform, you may be required to create an account (“Account”). You are responsible for ensuring that all information provided is accurate, complete, and current.
            </li>
            <li>
                You are responsible for maintaining the confidentiality of your login credentials and for all activities conducted through your Account. G Jewel shall not be liable for any unauthorized use of your Account resulting from your failure to safeguard your credentials.
            </li>
            <li>
                If you believe your Account has been compromised, you must notify us immediately. We shall not be responsible for any losses arising from unauthorized access to your Account.
            </li>
            <li>
                Accounts that remain inactive for 24 consecutive months may be terminated.
                If you choose to delete your Account, it will be permanently removed, and all associated personal data will be deleted in accordance with applicable laws.
            </li>
        </ol>
        <br>
        
        <h4>Representations and Warranties</h4>
        <p>By accessing and using the Platform, you represent and warrant that:</p>
        <br>
        <ol>
            <li>
                you are of Legal Age or have obtained parental/guardian consent;
            </li>
            <li>
                you are legally capable of entering into binding agreements;
            </li>
            <li>
                you are using your true identity;
            </li>
            <li>
                all personal information provided is accurate, complete, and up to date;
            </li>
            <li>
                you will not use the Platform for any unlawful or unauthorized purpose.
            </li>
        </ol>
        <br>
        
        <h4>IDENTITY VERIFICATION</h4>
        <p>
            We reserve the right to verify your identity where necessary, including for fraud prevention, payment verification, or dispute resolution. You authorize us to collect and verify information and documents required for such purposes.
        </p>
        <br>

        <h4>PROHIBITED ACTIVITIES</h4>
        <p>You agree not to engage in any activities that include, but are not limited to:</p>
        <br>
        <ol>
            <li>
                violating these Terms or applicable laws;
            </li>
            <li>
                providing false or misleading information;
            </li>
            <li>
                engaging in fraudulent, suspicious, or abusive behavior;
            </li>
            <li>
                interfering with the Platform’s security or operations;
            </li>
            <li>
                infringing intellectual property rights;
            </li>
            <li>
                using automated tools to access or scrape the Platform;
            </li>
            <li>
                attempting to damage or disrupt the Platform or its services.
            </li>
        </ol>
        <br>

        <h4>ORDERS, RETURNS AND DISPUTES</h4>
        <ol>
            <li>
                All purchases made through the Platform are subject to our return, refund, and exchange policies as stated on the Platform.
            </li>
            <li>
                If you experience any issues with your order, you may contact our customer support. We will review and respond in accordance with our policies and applicable laws.to using any of such trademark(s) or product/service trade name(s).
            </li>
        </ol>
        <br>
        
        <h4>INTELLECTUAL PROPERTY</h4>
        <ol>
            <li>
                All content on the Platform, including logos, designs, text, images, and trademarks, are the intellectual property of G Jewel or its licensors. You may not reproduce, distribute, or use any content without prior written permission.
            </li>
            <li>
                Nothing in these Terms grants you any rights to use our trademarks or branding without authorization.
            </li>
        </ol>
        <br>
                
        <h4>SUSPENSION OR TERMINATION OF SERVICE</h4>
        <ol>
            <li>
                <p>We may suspend or terminate your access to the Platform or your Account immediately if:</p>
                <ol>
                    <li>
                        you breach these Terms;
                    </li>
                    <li>
                        fraudulent or unlawful activity is suspected;
                    </li>
                    <li>
                        required by law or regulatory authorities;
                    </li>
                    <li>
                        your Account security is compromised.
                    </li>
                </ol>
                <p>You may request account termination at any time through your Account settings. Termination will take effect within a reasonable processing period.</p>
            </li>
        </ol>
        <br>

        <h4>DISCLAIMERS AND LIMITATION OF LIABILITY</h4>
         <ol>
            <li>
                The Platform and Products are provided “<b>as is</b>” and “<b>as available</b>”. We make no warranties, express or implied, regarding accuracy, availability, or fitness for a particular purpose.
            </li>
            <li>
                To the fullest extent permitted by law, G Jewel shall not be liable for any indirect, incidental, or consequential damages arising from the use of the Platform or purchase of Products.
            </li>
        </ol>
        <br>

        <h4>INDEMNIFICATION</h4>
        <p>You agree to indemnify and hold harmless G Jewel from any claims, damages, losses, or expenses arising from your breach of these Terms or misuse of the Platform.</p>
        <br>

        <h4>FORCE MAJEURE</h4>
        <p>We shall not be liable for delays or failures caused by events beyond our reasonable control, including but not limited to natural disasters, power outages, network failures, government actions, or other force majeure events.</p>
        <br>

        <h4>GOVERNING LAW</h4>
        <p>These Terms shall be governed by and construed in accordance with the laws of Malaysia. Any disputes shall be subject to the exclusive jurisdiction of the courts of Malaysia.</p>
        <br>

        <h4>MICELLENEOUS</h4>
        <p>These Terms constitute the entire agreement between you and G Jewel regarding your use of the Platform. If any provision is deemed invalid or unenforceable, the remaining provisions shall remain in full force and effect.</p>
    </div>
</section>
@endsection



