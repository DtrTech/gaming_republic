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
                Gaming Republic Hub is an online service platform offered by Gaming Republic Hub Sdn Bhd (<b>GRH, “we”, “us”, “our”</b>). These terms of services (<b>"Terms of Services"</b>) set out by GRH to govern your access and use of <a href="{{ env('APP_URL', route('home') )}}" class="cr-main" target="_blank"> <font style="color: var(--clr-primary)">{{ env('APP_URL', route('home')) }}</font> </a> (<b>GRH Platform”</b>) and the purchase of any contents and / or services offered by our third party partners (<b>“Content Publisher”</b>) at the GRH Platform (the <b>“Contents and Services”</b>)
            </li>
            <li>
                By accessing the GRH Platform and / or purchase of any of the Contents and Services, you agree to be bound by these Terms of Service and consent to the processing of your personal data as set out in our Privacy Notice <a href="{{ route('tnc.privacy_notice') }}" target="_blank"><font style="color: var(--clr-primary)">{{ route('tnc.privacy_notice') }}</font></a> (the <b>“Privacy Notice”</b>) shall be an integral part of the Terms of Services. The Terms of Services and Privacy Notice may be amended by us from time to time without any prior written notice to you and any amendments made to these Terms of Services and / or Privacy Notice shall be effective when published on the GRH Platform (in respect of the Privacy Notice).
                Your continued use of the Contents and Services shall constitute your acceptance of the prevailing Terms of Services and / or Privacy Notice including any term which may have been amended by us from time to time. You are responsible to regularly check these Terms ofServices and / or Privacy Notice.
            </li>
            <li>
                These Terms of Services shall constitute a legal and binding agreement between you and GRH.
            </li>
            <li>
                If you are under the age of 18 (the <b>“Legal Age”</b>), you must obtain permission from your parent(s) or your guardian(s) to open and maintain an account in the GRH Platform.
                If you are the parent or legal guardian of a minor who is creating an account, you must accept and comply with these Terms of Services and Privacy Notice on the minor's behalf and you will be responsible for the minor’s actions, any charges associated with the minor’s use of the GRH Platform and/or any purchases of the Contents and Services made on the GRH Platform
            </li>
            <li>
                You understand and agree that the Contents and Services are provided in the GRH Platform us on "As-Is Basis" and that we assume no responsibility for the timeliness, currency, deletion, undelivered or failure to store any user communications or personalization settings.
                You also further agree that any purchase and / or subscription of any Contents and Services are subject to the respective Content Publisher’s terms and conditions.
            </li>
        </ol>
        <br>

        <h4>ACCOUNT, SUBSCRIPTION AND PAYMENT</h4>
        <ol>
            <li>
                As a user of the GRH Platform, you may have access and be able to subscribe to the Contents and Services made available to you (the&nbsp;<span style="font-weight: 700;">“Subscription”</span>).
            </li>
            <li>
                To subscribe and / or purchase any of the Contents and Services, you need to have a valid account in GRH Platform. You can create an account at the GRH Platform by being a subscriber with active mobile numbers and completing the registration process set out in the GRH Platform (<span style="font-weight: 700;">“Account”</span>). Your Account may also include billing information which you may provide to us for the purchase of any of the Contents and Services and / or Subscription available at the GRH Platform.
            </li>
            <li>
                You are responsible for the confidentiality of your login information including but not limited to your password and for the security of your computer system and / or any other device system. We are not responsible for the use of your Account and password and / or for any of the communication and activity on GRH Platform that results from the use of your login name and password by you or by any person to whom you may have disclosed to (whether intentionally or by negligence).
            </li>
            <li>
                We are no responsible in any way for the use of your Account by any other person (other than you) without your permission. If you believe that your login details (including your password) may have been compromised, you must contact us at hello@republic.gg without any delay. 
                For the avoidance of doubt, we shall not be liable in any manner whatsoever to you for any claims, proceedings, loss, damage, cost or expenses of any kind whatsoever
                suffered or incurred as direct or indirect result of your Account being compromised (in any way whatsoever)
            </li>
            <li>
                Your Account may be terminated if it is not active for 24 months consecutively.
            </li>
            <li>
                If you choose to self-delete your account, it will be permanently deleted.
            </li>
            <li>
                In the event that your account is terminated or deleted, all personal information including your e-mail address, home address, phone number and Facebook/Google login information will be permanently deleted.
            </li>
        </ol>
        <br>
        
        <h4>Representations and Warranties</h4>
        <p>By accessing the GRH Platform and transacting at the GRH Platform, you warrant that:</p>
        <br>
        <ol>
            <li>
                you are of Legal Age, otherwise, parent or guardian consent is required, and guardian enters into these Terms of Services;
            </li>
            <li>
                you are capable of entering into a legally binding agreement and not be barred from doing so under any applicable laws;
            </li>
            <li>
                you are not barred from any applicable laws from entering into these Terms of Services
            </li>
            <li>
                you are a active Malaysian phone numbers;&nbsp;
            </li>
            <li>
                you are using your actual identity;
            </li>
            <li>
                the personal particulars and information that you have provided to us are true, accurate, complete and current and there are no false or misleading or material omissions and you shall update your personal particulars promptly (if necessary);
            </li> 
            <li>
                you are solely responsible for maintaining the confidentiality of your Account’s information including the username and password; and
            </li>
        </ol>
        <br>
        
        <h4>IDENTITY VERIFICATION</h4>
        <ol>
            <li>
                <p>We may from time to time require verification of your identity to confirm your ownership of your Account. This verification process is required for purposes including but not limited to:</p>
                <ol>
                    <li>
                        Enabling us to take action when upon detection and/or suspicion of any unauthorized usage of any Credits and / or the Account have been detected; and
                    </li>
                    <li>
                        Resolving any disputes relating to the ownership of the Credits and / or Account.
                    </li>
                </ol>
            </li>
            <li>
                You hereby authorize us, whether acting on its own or through its third-party service providers, to make any inquiries and to collect any documentation that it considers necessary to verify your identity. As part of this verification process, we shall request, and you shall provide to us, information about yourself that is true, accurate, current, and complete, and which can be verified through documentation that is legally recognized and accepted in the location in which such documentation is issued.
            </li>
        </ol>
        <br>

        <h4>PROHIBITED ACTIVITIES</h4>
        <p>In accessing and/or using the GRH Platform, you shall not at any time, directly or indirectly engage in any of the following activities (<span style="font-weight: 700;">"Prohibited Activities"</span>) (this list is non-exhaustive):&nbsp;</p>
        <br>    
        <ol>
            <li>
                breach these Terms of Services;
            </li>
            <li>
                violate any applicable law, statute, ordinance, or regulation;
            </li>
            <li>
                infringe ours or any third party's copyright, patent, trademark, trade secret or other intellectual property rights, or rights of publicity or privacy;
            </li>
            <li>
                provide false, inaccurate or misleading information about yourself;
            </li>
            <li>
                refuse to cooperate in any investigation or provide confirmation of your identity;
            </li>
            <li>
                use an anonymizing proxy to disguise the place of your residence, whether to bypass geographical restrictions on GRH content, to purchase or redeem at pricings or currencies not applicable to your geographical residence, or for any other purpose;
            </li>
            <li>
                engage in potentially fraudulent or suspicious activities in the GRH Platform;
            </li>
            <li>
                maintaining an Account that we reasonably believe is linked to any illegal activities. In such event, we reserve the right to immediately terminate such Account
            </li>
            <li>
                defame, make libelous statements against, threaten, or harass any of our employees or Content Publisher or any other personnel engaged by us in relation to the provision of any Contents and Services;
            </li>
            <li>
                take any action that imposes an unreasonable or disproportionately large load on our infrastructure;
            </li>
            <li>
                access to the GRH Platform in any way that is not expressly authorized by us;
            </li>
            <li>
                reproduce, attempt to reproduce, or counterfeit, any of the Contents and Services;
            </li>
            <li>
                facilitate or allow any viruses, Trojan horses, worms or other computer programming routines that may damage, detrimentally interfere with, surreptitiously intercept or expropriate any system, data, or information from the GRH Platform;
            </li>
            <li>
                use any robot, spider, other automatic devices, or manual process to monitor;
            </li>
            <li>
                use any device, software or routine to bypass our robot exclusion headers, or interfere or attempt to interfere;
            </li>
            <li>
                take any action that may cause us to lose any of the services from its internet service providers, payment operators, or other third parties;
            </li>
            <li>
                alter, remove, cover, or otherwise deface any identification, trademark, copyright, or other notice from any part of the Contents and / or Services; and/or
            </li>
            <li>
                in our view, reflect poorly or tarnish our reputation
            </li>
        </ol>
        <br>

        <h4>DISPUTE RESOLUTION</h4>
        <ol>
            <li>
                For the avoidance of doubt, we are not a party to any transaction between you and any Content Publisher. You may contact us directly at&nbsp; <a style="color:#ff9c00" class="cr-main" href="mailto:{{ env('email', 'cs@gamingrepublichubmy.com') }}">{{ env('email', 'cs@gamingrepublichubmy.com') }}</a> &nbsp;with regards to any issues on the Subscription with the relevant Content Publisher. We will refer the matter to the Content Publisher to investigate. Any refund for the affected Subscription may be provided directly either by us or the relevant Content Publisher. We will inform you accordingly.<br>If we are unable to resolve your dispute with contact the relevant Content Publisher directly.
            </li>
        </ol>
        <br>
        
        <h4>INTELLECTUAL PROPERTY</h4>
        <ol>
            <li>
                All intellectual property rights in the GRH Platform are the property rights of GRH and its respective Content Publisher. We grant to you a non-exclusive, non-transferrable, and revocable right to access and use the services made available by us on the GRH Platform for your personal purposes. Therefore, they may not be reproduced, used or represented without our and / or the Content Publisher’s prior written authorization.
            </li>
            <li>
                These Terms of Service do not confer you any right to use any trademark(s) or product/service trade name(s) that are owned or registered by us. Our prior written approval is required prior to using any of such trademark(s) or product/service trade name(s).
            </li>
            <li>
                Save as provided herein, nothing in these Terms of Service shall be construed or deemed as granting or providing to you any right, license, interest, or permission to deal with any intellectual property right of the Contents and Services in any way including, without limitation, the right to copy, de-compile, transfer, publish, store, create derivative works or use the same and the right to use any of the Contents and / or Services in an unauthorized manner. You shall promptly notify us if you are aware of any third parties engaging in the aforementioned activities.
            </li>
        </ol>
        <br>
                
        <h4>SUSPENSION OR TERMINATION OF SERVICE</h4>
        <ol>
            <li>
                <span style="font-weight: 700;"><i>GRH-Initiated Suspension or Termination</i></span>
                <p>We may in our sole discretion suspend and / or terminate your access to GRH Platform and / or your Account at any time with immediate effect (without entitling you to receive any compensation in respect of such suspension or termination) if:</p>
                <ol>
                    <li>
                        you have created, or are likely to create, imminent harm (including an interruption, disruption or congestion) to GRH Platform network system;
                    </li>
                    <li>
                        you have engaged, are engaging, or are suspected to be engaging, whether directly or indirectly, in the Prohibited Activities;
                    </li>
                    <li>
                        your Account is terminated for any reason;
                    </li>
                    <li>
                        we are acting in compliance with a requirement of any relevant authority and / or law enforcement body;
                    </li>
                    <li>
                        you become subject to any bankruptcy proceedings;
                    </li>
                    <li>
                        you are in breach of any clauses of these Terms of Service;
                    </li>
                    <li>
                        you have at any time provided any false or incomplete information to us, and have failed to provide us with such true and complete information within 10 days of written notice from us requesting for such information;
                    </li>
                    <li>
                        in our sole discretion suspect that your Account has been accessed in an unauthorized manner or that the security of your Account has been compromised in any way, and you fail to adopt such remedial steps as may be prescribed by us within 5 days after informing you the same.
                    </li>
                </ol>
                <p>We may in our sole discretion suspend and / or terminate your access to GRH Platform and / or your Account at any time with immediate effect (without entitling you to receive any compensation in respect of such suspension or termination) if:</p>
            </li>
            <li>
                In addition to the above, we may upon providing you with at least 30 days' written notice:
                <ol>
                    <li>
                        suspend your access to the Account, in our sole discretion, determines that such suspension or termination is necessary to repair, maintain or improve the service;  
                    </li>
                
                </ol>
            </li>
            <li>
                Where we have suspended your access to your Account for any reason, you will not be able to utilize your Account. You will be able to resume use of your account when your access has been restored.
            </li>
            <li>
                We will not provide any compensation arising from any expiry and removal of your Account
            </li>
            <li>
                We will not provide any compensation arising from any expiry and removal of your Account
            </li>
            <li>
                We reserve the right to commence any legal action against you in relation to your breach of these Terms of Service.
            </li>
            <li>
                <p style="font-weight: 700;"><i>User-Initiated Termination</i></p>
                <ol>
                    <li>
                        You may, at any time, request the deactivation / termination of your Account through your Account.
                    </li>
                    <li>
                        Your Account will be deactivated / terminated within 30 days from the date of your request to deactivate / terminate.
                    </li>
                </ol>
            </li>
        </ol>
        <br>

        <h4>DISCLAIMERS AND LIMITATION OF LIABILITY</h4>
        <ol>
            <li>
                <p>We do not guarantee that the GRH Platform and / or the Contents and Services will be uninterrupted, secure, error-free, and free from viruses or other harmful components. You agree and understand that:</p>
                <ol>
                    <li>
                        the availability of the GRH Platform and / or Contents and Services are subject to the availability of resources, including but not limited to network availability; and
                    </li>
                    <li>
                        the use of the GRH Platform and / or purchase and / or subscription of the Contents and Services may be subject to any telecommunications, electronic or system failures, interruptions, or disruptions.
                    </li>
                </ol>
            </li>
            <li>
                THE GRH PLATFORM AND / OR THE CONTENTS AND SERVICES ARE PROVIDED 'AS IS'. WE GIVE NO GUARANTEE, REPRESENTATION OR WARRANTY, EXPRESS OR IMPLIED, IN RESPECT OF ANY ACCURACY, QUALITY, COMPLETENESS, TIMELINESS, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, NON-INFRINGEMENT OR TITLE OF ANY SOFTWARE, INFORMATION OR DATA, DIRECTIONS, INSTRUCTIONS OR NOTICES, VIEWS, OPINIONS AND RECOMMENDATIONS AVAILABLE ON, RECEIVED FROM, TRANSMITTED TO, OR PROVIDED FROM THE GRH PLATFORM AND / OR CONTENTS AND SERVICES.
            </li>
        </ol>
        <br>

        <h4>INDEMNIFICATION</h4>
        <ol>
            <li>
                Unless otherwise provided by applicable law, you shall indemnify us against any and all loss (including reasonable legal costs) suffered by us to any person as a result of your breach of these Terms of Services.
            </li>
        </ol>
        <br>

        <h4>FORCE MAJEURE</h4>
        <ol>
            <li>
                We shall not be liable for any delay or failure to comply with its obligations under these Terms of Service, where the cause of such delay or failure is beyond its reasonable control.
                Such causes may include an act of God, riot, civil commotion, strike, lockout or other labour disturbance, fire, war, acts of foreign enemies, perils of the sea, power outage, epidemics, pandemics, network congestion, telecommunications failure, electrical power failures, government directives and/or rules or any faults, interruption or disruption of the networks of any service provider or of your equipment or the equipment of any third party.
            </li>
        </ol>
        <br>

        <h4>GOVERNING LAW</h4>
        <ol>
            <li>
                These Terms of Service (and any non-contractual disputes/claims arising out of or in connection with them) are subject to the laws of Malaysia. Any dispute shall be resolved by referring it to the courts of Malaysia.
            </li>
        </ol>
        <br>

        <h4>MICELLENEOUS</h4>
        <ol>
        <li>
            <i>Entire Agreement</i>
            <p>These Terms of Service and other legal notices published by us on the GRH Platform shall constitute the entire agreement between you and GRH concerning your access and use of the Account. If any of the provisions of these Terms of Service shall be deemed invalid, void, or for any reason unenforceable, that provision shall be deemed severable and shall not affect the validity and enforceability of any of the remaining provisions of these Terms of Service, which shall continue in full force and shall not affect its legality, validity and enforceability.&nbsp;</p>
        </li>
        </ol>
    </div>
</section>
@endsection



