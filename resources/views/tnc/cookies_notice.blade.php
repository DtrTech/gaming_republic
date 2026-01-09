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
        <p>
            We automatically collect certain information through cookies, pixel tags (also known as clear gifs or web beacons),
            analytics tools, and similar technologies when you visit or use the G Jewel website
            (<b>https://gjewel.store</b>).
        </p>
        <p>
            Selected third parties may also place cookies or similar technologies on our website.
            The use of such technologies by third parties is governed by their own privacy policies
            and is not covered by this Cookie Notice, except where required by law.
        </p>
        <br>
   
        <h4>Cookies</h4>
        <ol>
            <li>
                A cookie is a small text file that a website places on your device to help recognise your browser
                and remember certain information about your visit. Cookies do not identify you personally.
            </li>
            <li>
                Our website uses different types of cookies, including but not limited to:
                <br>
                <b>Functional cookies, Analytics cookies, and Advertising cookies.</b>
            </li>
            <li>
                Functional cookies remember your preferences (such as language or cart items).
                Analytics and advertising cookies help us understand how visitors use our website
                and allow us to improve our content, products, and marketing.
            </li>
            <li>
                You may control or disable cookies through your browser settings.
                Please note that disabling cookies may affect certain website functions,
                including checkout and account features.
            </li>
            <li>
                To learn more about cookies, please visit
                <a class="cr-main" href="https://www.aboutcookies.org" target="_blank">www.aboutcookies.org</a>.
            </li>
        </ol>
        <br>

        <h4>Pixel Tags</h4>
        <ol>
            <li>
                Pixel tags (also known as web beacons or clear gifs) are small, invisible images used to track
                website activity such as page visits and interactions. They typically work together with cookies.
            </li>
            <li>
                We may also use pixel tags in emails or newsletters to determine whether messages have been opened
                and to measure engagement. If your email settings block images, these pixel tags may not function.
            </li>
        </ol>
        <br>

        <h4>Digital Analytics Tools</h4>
        <ol>
            <li>
                We use analytics tools to analyse how users interact with our website,
                including browsing behaviour, product views, and purchases.
                This information helps us improve website performance, user experience,
                and personalise marketing content where permitted by law.
            </li>
        </ol>
    </div>
</section>
@endsection



