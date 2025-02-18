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
        <h1>Cookie Notice</h1>
        <br>
        <h4>HOW DO WE USE COOKIES AND SIMILAR TECHNOLOGIES?</h4>
        <p>We collect information automatically through the use of cookies, pixel tags (also called clear gifs or web beacons), digital analytics network tools, and other similar technologies when you visit and/or use our online services.</p>
        <p>Selected third parties also set their own cookies or place pixel tags on our websites. The use of these technologies by third parties are subjected to their own privacy policies and is not covered by this privacy notice, except for purposes listed below.</p>
        <br>
   
        <h4>Cookies</h4>
        <ol>
            <li>A cookie is a text file containing small amounts of information that a website can send to your browser, which may then be stored on your computer as an anonymous tag that identifies your computer but not you.</li>
            <li>
                Our websites use 3 types of cookies for different purposes, including but not limited to:
                <br>   
                <b>Functionality cookies, Analytics cookies and Advertising cookies.</b>
                <br>
                <!-- <div style="width: 100; overflow-x: auto">
                    <table class="table table-auto border-collapse">
                        <thead>
                            <tr>
                                <th scope="col">Type of cookie</th>
                                <th scope="col">Name of cookie</th>
                                <th scope="col">Who serves it</th>
                                <th scope="col">What it does</th>
                                <th scope="col">How to block it</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <b>Strictly necessary cookies.</b> These cookies are necessary to provide you with services available through our websites and to use some of its features, such as access to secured areas. Without these cookies, services you have asked for, like shopping baskets and secured customer account pages, would not be possible.
                                </td>
                                <td>
                                    Not Applicable
                                </td>
                                <td>
                                    Not Applicable
                                </td>
                                <td>
                                    Stores information on your preference to enable us to provide relevant services upon your subsequent visit.
                                </td>
                                <td> 
                                    Not applicable.<br> These cookies are strictly necessary for the functionality of the website. No opt out is available.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <b>Functionality cookies.</b> hese cookies record information on the choices you’ve made and allow us to tailor the website for you.  For example, these cookies allow us to:
                                    <ul>
                                        <li>Save your location preference if you have set your location on the homepage;</li>
                                        <li>Remember settings you have applied, such as layout, text size, preferences, and colours; and</li>
                                        <li>Show you when you are logged in.</li>
                                    </ul>
                                </td>
                                <td>
                                    LoginMsisdn<br>
                                    dsoUser<br>
                                    loginEmail<br>
                                    loginUserId
                                </td>
                                <td>
                                    GRH</td>
                                <td>
                                    Stores information on your preference to enable us to provide relevant services upon your subsequent visit.
                                </td>
                                <td>
                                    Not applicable.<br> These cookies are strictly necessary for the functionality of the website. No opt out is available.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <b>Analytics Cookies</b> These cookies collect information that is used either in aggregate form to help us understand how the website is being used or how effective our marketing campaigns are, or to help us customise the website for you.  This information will also be used for the purpose of evaluating your use of the website, compiling reports on website activity and other analyses relating to website activity and internet usage.
                                </td>
                                <td>
                                    Google Analytics / Google Tag Manager
                                </td>
                                <td>
                                    Google
                                </td>
                                <td>
                                    Measure users’ interaction with website content.
                                </td>
                                <td>
                                    You may disable any of these cookies by opting out.<br>
                                    By doing so, web analytics tracking will be unavailable.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <b>Advertising Cookies.</b> These cookies are used to make advertising messages more relevant to you.  They perform functions like preventing the same ad from continuously reappearing, ensuring that ads are properly displayed, and in some cases selecting advertisements that are based on your interests.
                                </td>
                                <td>
                                    Facebook Conversion and Remarketing Tracking<br>
                                    Google Adwords Conversion and Remarketing Tracking<br>
                                    Comscore Scorecard
                                </td>
                                <td>
                                    Facebook<br>
                                    Google<br>
                                    Comscore
                                </td>
                                <td>
                                    Tracks website visits, advertising impressions, email, sales conversions and other types of activity on the web.</td>
                                <td>
                                    You may disable any of these cookies by opting out from the advertisements in your Google and Facebook setting.<br>
                                    If you opt out of these cookies, you will still see advertisements on our website, but these advertisements will not be tailored to your interests.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
            </li>
            <li>Information collected from analytics and advertising cookies are stored on a per-session basis, but functionality cookies may be set to store your preferences when you navigate our websites on your subsequent visits.</li>
            <li>You can set your browser for a notification prior to you receiving a cookie, giving you the chance to decide whether to accept it or not. For most types of cookies, including those we use for analytics and advertising purposes, you have the right to tell us that you do not want to use them when you visit our websites. You can also set your browser to turn off the cookies; however, if you do this, some of our websites may not work properly.</li>
            <li>If you want to know more about cookies, check out <a class="cr-main" href="www.aboutcookies.org">www.aboutcookies.org</a>.</li>
        </ol>
        <br>

        <h4>Pixel tags</h4>
        <ol>
            <li>A pixel tag, also known as a clear gif or web beacon, is an invisible tag which we may place on certain pages of our website. When you access these pages, pixel tags generate a generic notice of that visit. Usually, they work in conjunction with cookies and record when a computer visits a page. If you turn off the cookies, the pixel tag will simply detect an anonymous website visit.</li>
            <li>A ‘smart pixel’ is a tiny graphics file containing a unique identifier that is embedded within an e-mail.&nbsp; We may use smart pixels in our email campaigns or newsletters.&nbsp; They allow us to track whether the e-mail was opened successfully and to record certain information about the activities of the recipient(s).&nbsp; Users who have set their e-mail to refuse automatic downloads of images within the e-mails they receive will not be served our smart pixel unless they actively choose to download the images within the e-mail.</li>
        </ol>
        <br>

        <h4>Digital Analytics Network Tools</h4>
        <ol>
            <li>We may use digital analytics network tools to process and analyse common attributes associated with your use of our websites, products and/or services. We may generate or maintain our own customer profiles using internal data sources including personal information which you provide to us, or personal information obtained from third parties associated with or in collaboration with us. We may use this information for various reasons, including to provide you with better network support services, customer support services, and also to present targeted or tailored marketing campaigns or content to you.</li>
        </ol>
    </div>
</section>
@endsection



