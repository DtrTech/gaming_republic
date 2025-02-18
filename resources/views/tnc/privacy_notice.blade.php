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
        <p>Gaming Republic Hub Sdn Bhd (referred to <b>GRH</b>, <b>“us”</b> or <b>“we”</b>) is committed to protecting and respecting your privacy.</p>
        <p>This Privacy Notice sets out the basis on which we collect, use, process and store your personal information when you subscribe to any of our products and services, including telecommunications network, applications, digital services and solutions, or visit any of our office branches or GRH stores, and any of our websites (collectively referred to as <b>“Services”</b>). Please read this Notice in context with the Terms of Service of the service that you use. It may set out additional service-specific terms regarding your personal information which we collected from you and the related processing activities.</p>
        <br>
        
        <h4>WHAT IS THE LAWFULNESS OF PROCESSING?</h4>
        <p>GRH will process your personal data based on:</p>
        <ol>
            <li>
                <b>The performance of your contract</b> and to act on your requests. For example, allowing you to make calls and texts, and browsing the Internet on your phone and enabling us to generate your bill, based on your usage.
            </li>
            <li>
                <b>Legitimate business interests,</b> for example, fraud prevention, maintaining the security of our network and services, direct marketing, and the improvement of our services. Whenever we rely on this lawful basis to process your data, we assess our business interests to make sure they do not override your rights. For more information on your rights, visit the 'What Are Your Rights' section below.
            </li>
            <li>
                <b>Compliance with a mandatory legal obligation,</b> including accounting and tax requirements, and any lawful request from the government or law enforcement officials which are subject to strict internal policies (such as retention periods) and procedures.
            </li>
            <li>
                <b>Consent which you provided</b> where GRH does not rely on other legal basis. When you give your consent, you may withdraw it at any time. For more information on your rights, visit the ‘What Are Your Rights' section below.
            </li>
        </ol>
        <br>

        <h4>WHEN DO WE COLLECT YOUR PERSONAL INFORMATION?</h4>
        <p>We collect your personal information in three ways:</p>
        <ol>
            <li>
                <b>Information you give us</b>
                <p>GRH will collect your personal information when you:</p>
                <ol
                    <li>Buy or use any of our Services,</li>
                    <li>Register for a specific Service,</li>
                    <li>Subscribe to newsletters, alerts or other Services from us,</li>
                    <li>Contact us through various channels or ask for information about a Service,
                    </li>
                    <li>Apply for a position to work in Digi,</li>
                    <li>Take part in a competition, prize draw or survey,</li>
                    <li>Publish your information publicly, and</li>
                    <li>Are the customer of a business that we acquire.</li>
                </ol>
            </li>
            <li>
                <b>Information we collect automatically</b>
                <ol>
                    <li>When you use our Services,</li>
                    <li>Buy or use any of our Services,</li>
                    <li>When you visit or browse any of our websites, we use cookies (small text files stored in your browser) and other techniques such as web beacons (small, clear picture files used to follow your movements on our website). For more details on this and how to opt-out, visit the 'Cookie Notice'.</li>
                    <li>When you visit any of our office branches / GRH stores, we may also collect information about you on CCTV as part of our security and crime prevention measures.</li>
                </ol>
            </li>
            <li>
                <b>Information from other sources</b>
                <ol>
                    <li>We may also collect information from third-party sources before initiating your Services, or get background information with regards to employment opportunities, or where you have given permission to other companies to share information about you. The third-party sources include fraud-prevention agencies, business directories, credit check reference and vetting agencies, billing calculating agencies, business partners and connected network providers.</li>
                </ol>
            </li>
        </ol>
        <br>

        <h4>WHAT DO WE COLLECT?</h4>
        <p>The types of information we collect depend on the use of our Services and the ways that you interact with us. This may include: </p>
        <ol>
            <li>
                <b>Contact, billing and other information you provide </b>
                <p>This includes your:</p>
                <ol>
                    <li>Name,</li>
                    <li>Address</li>
                    <li>Telephone and/or mobile number,</li>
                    <li>Date of birth,</li>
                    <li>Gender,</li>
                    <li>Email address,</li>
                    <li>Images,</li>
                    <li>CCTV recording and footages,</li>
                    <li>Identification number,</li>
                    <li>Credit or debit card information,</li>
                    <li>Swiss Code and other payment passwords,</li>
                    <li>Security information used for authentication,</li>
                    <li>Access to accounts and services information</li>
                </ol>
            </li>
            <li>
                <b>How you use our Services and your devices</b>
                <p>This includes:</p>
                <ol>
                    <li>Call records containing phone numbers you call and receive calls from
                        (including those you make to our contact centre), </li>
                    <li>The time and duration of the call or how you are using data,</li>
                    <li>Websites you visit,</li>
                    <li>Text records,</li>
                    <li>Wireless location,</li>
                    <li>Application and feature usage,</li>
                    <li>Product and device-specific information and identifiers,</li>
                    <li>Router connections,</li>
                    <li>Service options you choose,</li>
                    <li>Mobile and device numbers,</li>
                    <li>Video streaming,</li>
                    <li>Video packages and usage,</li>
                    <li>Demographic data,</li>
                    <li>Interest-based data,</li>
                    <li>Traffic flow,</li>
                    <li>Speed,</li>
                    <li>Capacity,</li>
                    <li>Power, and</li>
                    <li>Environmental conditions such as nearby Wi-Fi access points, connectivity,
                        and Internet browsing behaviour information</li>
                </ol>
            </li>
            <li>
                <b>How you use our websites and applications</b>
                <ol>
                    <li>This includes information about your browsing, searching and buying activities; IP address, mobile phone number, device numbers and identifiers, web addresses of the sites you come from and go to next, screen records, browser and operating system information, platform type, connection speed and attributes collected using cookies, web beacons and other technologies.</li>
                    <li>When your device’s web browser utilises our data services to access websites other than our own, we automatically capture information associated with your browsing activities, and measure and monitor network and internet connection performance.</li>
                </ol>
            </li>
            <li>
                <b>Location of your wireless devices</b>
                <ol>
                    <li>This can be precise as it uses Global Positioning System (GPS) data or when your devices communicate with cell towers, Wi-Fi routers or access points and/or with other technologies, including the satellites and other location information.</li>
                </ol>
            </li>
        </ol>
        <p>We may not be able to process your application and/or provide you with our Services for reasons such as: </p>
        <ol>
            <li>If you fail to supply us with the necessary personal information;</li>
            <li>If the personal information supplied is incomplete and not accurate; and/or</li>
            <li>If you withdraw your consent for us to process your personal information.</li>
        </ol>
        <p>Our online services may contain links to third party websites, or access to third party services (such as social networks or VoIP services). We have no control over how third-party websites and services process your personal information and we are not responsible for their privacy practices. Please read the privacy policies of any third-party websites or services that you access from our websites or services.</p>
        <br>

        <h4>HOW DO WE USE?</h4>
        <p>GRH may use and process your personal information for the following purposes:</p>
        <ol>
            <li>
                <b>Contact, billing and other information you provide</b>
                <ol>
                    <li>
                        <p>Processing your application and providing you with our Services</p>
                        <p>To keep you updated on your subscription, benefit and rewards.</p>
                        <p>To provide relevant information about the Services.</p>
                    </li>
                    <li>
                        <p>Billing and customer care </p>
                        <p>To issue you the bill statement for using our Services and payment collection.</p>
                        <p>To recover debts or trace those who owe us money resulting from the use of our Services.</p>
                        <p>To respond to any questions or concerns you may have about our Services.</p>
                        <p>To monitor and record our communications with you for training purposes and quality assurance.</p>
                    </li>
                    <li>
                        <p>Service messages</p>
                        <p>To send you latest information that relates to your subscribed Services, benefits and rewards.</p>
                        <p>To notify changes to our terms and conditions or service interruptions.</p>
                        <p>To send you public service announcements either on our own behalf or on behalf of the statutory and/or regulatory bodies.</p>
                    </li>
                    <li>
                        <p>Roaming services</p>
                        <p>To connect you to our roaming partners, solve technical issues (if any) and improve your roaming experiences.</p>
                        <p>To detect and resolve fraudulent use of our networks (and our partners' roaming networks).</p>
                    </li>
                </ol>
            </li>
            <li>
                <b>To manage and improve our Services</b>
                <ol>
                    <li>To manage the volumes of calls, texts, troubleshooting, and other uses of our Services for a better customer experience.</li>
                    <li>To develop more interesting and relevant Services, including implementing parental controls.</li>
                </ol>
            </li>
            <li>
                <b>To send marketing materials and personalise our Services to you</b>
                <ol>
                    <li>
                        <p>Marketing</p>
                        <p>Depending on the extent of consent obtained from you, to send you promotional materials relating to our Services, or promote the Services of our partners or such third parties which we think may be of interest to you.</p>
                        <p>We tailor these messages based on the Services you’ve subscribed from us in the past, or information we have from third parties.</p>
                        <p>You can control your marketing permissions and the data we use to tailor these communications at any time. For more details on this and how to prevent processing of your personal information, visit the 'What Are Your Rights' section below.</p>
                    </li>
                    <li>
                        <p>Online advertising</p>
                        <p>To target our marketing and advertising campaigns [and those of our partners] more effectively and personalised, and to make your online experience more efficient and enjoyable. This is known as interest-based advertising. It can be on websites belonging to Digi, other organisations as well as other online media channels such as social media sites. We may also combine data collected via the cookies with other data we have collected about you.</p>
                        <p>To prevent any processing of information, you can change your cookies settings. Refer to the ‘Cookie Notice’ for more information.</p>
                        <p>Opting out of interest-based advertising does not stop advertisements from being displayed – it is just that they would not be tailored to your interest. To stop receiving advertising on your social media, go to the relevant platform’s ad settings.</p>
                    </li>
                </ol>
            </li>
            <li>
                <b>To conduct research and analytics</b>
                <ol>
                    <li>To conduct research, monitor and analyse customer use of our Services on an anonymous or personalised basis, in order to identify general trends, conduct market research or surveys, internal marketing analysis, customer segmentation, develop new Services, and improve our understanding of our customers’ patterns, behaviours and choices.</li>
                    <li>To create aggregated statistics about our sales, customer network traffic, location patterns and customer demographics. Such aggregated statistics do not include information that can personally identify you.</li>
                </ol>
            </li>
            <li>
                <b>To carry out credit checks, fraud prevention and security measures</b>
                <ol>
                    <li>
                        <p>Credit checks</p>
                        <p>To carry out a credit check when you apply for a contract for any Services with us.</p>
                        <p>To verify your identity when you request access to your account and for general account management purposes. We sometimes supplement the information we collect about you with information from other sources to assess the accuracy of the information that we hold.</p>
                        <p>To exchange information about you with credit reference agencies while you have a relationship with us. This includes your settled accounts or any outstanding debt you have with us. This information may be supplied to other organisations by the credit reference agencies.</p>
                    </li>
                    <li>
                        <p>Fraud prevention and security</p>
                        <p>To protect your account from unauthorised access, fraud, misuse or damage to our Services.</p>
                        <p>To prevent illegal activities, suspected fraud, and potential threats to our Services and customers.</p>
                        <p>To detect and stop cyber security threats to our internal systems, network and Services.</p>
                    </li>
                </ol>
            </li>
        </ol>
        <br>
       
        <h4>WHO DO WE SHARE WITH?</h4>
        <p>We use partners and service providers for a variety of business purposes. In such cases, where applicable, we share information about you with:</p>
        <ol>
            <li>
                <b>Affiliates:</b> We may share your personal information with Telenor Group for processing activities listed in ‘How Do We Use’ section above.
            </li>
            <li>
                <b>Roaming Partners:</b> We share your personal information with roaming partners when you choose to roam on local or foreign networks, to facilitate or extend our Services so that we can provide a better service to you.
            </li>
            <li>
                <b>Data Processors:</b> We may share your personal information to third parties for research or statistical analytics purposes to help us understand how you use our Services.
            </li>
            <li>
                <b>Professional Advisors:</b> We engage professional advisors on matters relating to our Services, including debt collection agencies, credit reporting agencies, legal advisors, accountants and auditors.
            </li>
            <li>
                <b>Fraud Management:</b> We will release information if it’s reasonable for the purpose of protecting us against fraud, defending our rights or property, or to protect the interests of our customers.
            </li>
            <li>
                <b>Law Enforcement:</b> We may also need to release your information to comply with our legal obligations and to respond to the authorities’ lawful demands. Your personal data shall only be provided in good faith, when we are obliged to do so in accordance with the law and pursuant to an exhaustive evaluation of all legal requirements.
            </li>
            <li>
                <b>Other Organisations:</b> If our company is reorganised or sold to another organisation, we will provide your information to that organisation.
            </li>
        </ol>
        <p>Where you buy a third-party product or service through your GRH account, the contract is with the party selling that product or service. As part of this, you are agreeing that GRH may pass certain personal information (for instance, to verify your mobile number) to such parties to complete your purchase. The seller’s terms and conditions, privacy and cookie notice will apply to how it uses your personal information – please read them carefully.</p>
        <p>When we share your personal information, we will take steps to ensure that the recipient will protect your privacy, keep your personal information secure and process it in accordance with applicable law and this privacy notice.</p>
        <p>We will not sell the personal information that we process about you to third parties without your consent.</p>
        <br>
      
        <h4>HOW DO WE PROTECT?</h4>
        <p>We have a specialised security team who constantly review and improve our measures to protect your personal information from any loss, misuse, modification, unauthorised or accidental access or disclosure, alteration or destruction.</p>
        <p>We will never ask for your secured personal or account information through an unsolicited means of communication. You are responsible for keeping your personal and account information secure and to not share it with others.</p>
        <p>Our website may provide links to third-party websites. We are not responsible for the security and content of such third-party websites. Make sure you read the respective organisation’s privacy and cookie notice before using or putting your personal information on their sites.</p>
        <br>

        <h4>DO WE TRANSFER?</h4>
        <p>When we need to transfer your personal information to countries outside Malaysia for processing purposes, we will take appropriate steps to ensure that your personal information is adequately protected (for countries that may not provide the same level of protection as Malaysia). This includes having a proper legal agreement that covers the data transfer and carrying out data security reviews of any recipients to ensure that personal information in that country will not be processed in a manner which would contradict applicable data protection laws in Malaysia.</p>
        <br>  

        <h4>WHAT ARE YOUR RIGHTS?</h4>
        <p>You have rights in relation to the personal information that we hold about you. Your privacy rights include: </p>
        <ol>
            <li><b>Right to withdraw consent:</b> At any point of time, you have the right to withdraw your consent to us to use, process or share your personal information by contacting us or walking into a GRH Store. However, withdrawing your consent will result in us not being able to process your application and/or provide you with our services.</li>
            <li><b>Right to access your information:</b> At any point of time, you can request a copy of the personal information that we hold about you by contacting us or access the information directly through your account on our GRH website.</li>
            <li><b>Right to correct personal data:</b> At any point of time, you can request to correct or amend your personal information that is inaccurate by walking into a Digi Store or through your account on our GRH website.</li>
            <li>
                <b>Right to prevent processing:</b>
                <ol>
                    <li>You can request for us to temporarily suspend processing activities of your personal information when you believe that there are concerns over the accuracy, legitimacy and lawfulness of the processing. During the temporary suspension period, we may not be able to process your application and/or provide you with our Services.</li>
                    <li>
                        <p>You can request for us to cease processing activities of your personal information for marketing purposes. If you no longer want to receive personalised content and marketing messages from Digi, you can choose to opt-out at any time.</p>
                        <p>Please note: You may still receive marketing messages for a short period after opting out while we update our records.</p>
                    </li>
                    <li>You can request for us to cease or not to begin processing your personal information if the processing causes or is likely to cause you unwarranted substantial damage or distress. If you exercise this right, we will not be able to process your application and/or provide services to you.</li>
                </ol>
            </li>
        </ol>
        <p>To ensure that the personal information we hold about you is correct and up to date, we may from time to time contact you to verify the accuracy of your personal information in our record. However, it is your responsibility to ensure that you provide us with true, accurate and complete information.</p>
        <br>
        <h4>CHANGES TO THIS PRIVACY NOTICE</h4>
        <p>GRH reserves its right to amend this Privacy Notice from time to time based on changes as per the business, legal and regulatory requirements and applicable laws. We encourage you to revisit this notice periodically, allowing you to see any changes made by checking the effective date below.</p>
        <p>If we decide to use or disclose information that identifies you personally in a way that is materially different from what we stated in our Privacy Notice at the time we collected that information from you, we will give you a choice about the new use or disclosure by appropriate means, which may include an opportunity to opt-out.</p>
        <br>
        <b style="font-size: 12px">Updated 02 Jan 2025</b>
    </div>
</section>
@endsection



