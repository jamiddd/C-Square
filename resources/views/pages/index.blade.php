@extends('layouts.app')

@section('content')
    {{-- <div style="margin-top:56px;">
        <div class="mdc-layout-grid" style="background-color:#f1f1f1;">
            <h1>Hello World</h1>
        </div>
    </div> --}}
    <style>
    /* Personal stylesheet for this page, Elements belonging to this page only */
    main {
        flex: 1 0 auto;
    }

    .intro-section {
        position: relative;
        height:500px;
    }

    .home-style {
        border-bottom: 4px solid white;
    }

    .header-bg {
        position: absolute;
        height: 500px;
        object-fit: cover;
        width: 100%;
    }

    @media only screen and (max-width: 500px) {
        .intro-section-header-div {
            right: 5%;
        }
    }

    .intro-section-header-div {
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        position: absolute;
        top: 20%;
        left: 5%;
    }

    .intro-header {
        /* line-height: 1rem; */
        /* background-color: rgba(255, 255, 255, 0.8); */
        margin: 10px 0px !important;
    }

    .intro-subtitle {
        /* background-color: rgba(255, 255, 255, 0.8); */
        margin: 20px 10px !important;
    }

    .mar-l {
        margin-left: 10px;
    }
    .first-row {
        padding: 8px;
    }

    .first-row-head {
        text-decoration: underline;
    }

    .first-row-text {
        text-align: justify;
    }

    </style>
    <main class="main-content">
        <div class="intro-section">
            <img class="header-bg" src="{{asset('images/back.jpg')}}" alt="">
            <div class="intro-section-header-div">
                <h1 class="intro-header mdc-typography--headline2">Coding Courses</h1>
                <span class="intro-subtitle mdc-typography--subtitle1" style="display:block;">For absolute beginners from the scratch</span>
                <button class="mar-l mdc-button mdc-button--raised" onclick="window.location.href = '#app-get-started'">
                    <div class="mdc-button__ripple"></div>
                    <span class="mdc-button__label">Get started</span>
                    <i class="material-icons mdc-button__icon" aria-hidden="true">arrow_forward</i>
                </button>
            </div>
        </div>
        <div class="mdc-layout-grid front-posts-div">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-1"></div>
                <div class="mdc-layout-grid__cell--span-10">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
                            <div class="first-row">
                                <span class="first-row-head mdc-typography--headline5">Exclusive Learning</span>
                                <p class="first-row-text">Learning is fun when doubts get cleared right on time. We will make learning fun and intuitive for anybody who is interested in this journey of coding.</p>
                                <button class="mdc-button mdc-button">
                                    <div class="mdc-button__ripple"></div>
                                    <span class="mdc-button__label">Learn More</span>
                                    <i class="material-icons mdc-button__icon" aria-hidden="true">arrow_forward</i>
                                </button>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
                            <div class="first-row">
                                <span class="first-row-head mdc-typography--headline5">All day services</span>
                                <p class="first-row-text">We are available all day to get you to your success. You just have to be willing to learn it all. Learning has never been so simple and effective. We have a community full of dedicated people to help you in your endavour.</p>
                                <button class="mdc-button mdc-button">
                                    <div class="mdc-button__ripple"></div>
                                    <span class="mdc-button__label">Learn More</span>
                                    <i class="material-icons mdc-button__icon" aria-hidden="true">arrow_forward</i>
                                </button>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
                            <div class="first-row">
                                <span class="first-row-head mdc-typography--headline5">Range of courses</span>
                                <p class="first-row-text">We are not just basics. We go all in. Learn anything from our range of courses. We are proud to tell you that, even engineers won't be able to beat you after you join here.</p>
                                <button class="mdc-button mdc-button">
                                    <div class="mdc-button__ripple"></div>
                                    <span class="mdc-button__label">Learn More</span>
                                    <i class="material-icons mdc-button__icon" aria-hidden="true">arrow_forward</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell--span-1"></div>
            </div>
        </div>
        <div id="app-get-started" class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
                    <img style="object-fit:cover; width:100%; height:400px;" src="{{asset('images/app_development.jpg')}}" alt="">
                </div>
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone" style="padding:16px;">
                    <span style="font-size:6vw; line-height:7vw;">Learn the best practices</span>
                    <p style="text-align:justify;">Learning the right way of programming is essential. Especially important when the world runs on efficiency. To get the best output of work and passion, we'll put your effort in the right direction. The best coding practices can make you a good programmer right away. </p>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone" style="padding:16px;">
                    <span style="font-size:6vw; line-height:7vw;">Always Up-To-Date</span>
                    <p>In the new era of technology, being up-to-date is excrutiatingly crucial. You can learn the best and updated topics right here. Our learning curve will always follow the most updated route of programming.</p>
                </div>
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
                    <img style="object-fit:cover; width:100%; height:400px;" src="{{asset('images/new_devc.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
                    <img style="object-fit:cover; width:100%; height:400px;" src="{{asset('images/com.jpg')}}" alt="">
                </div>
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone" style="padding:16px;">
                    <span style="font-size:6vw; line-height:7vw;">Community Building</span>
                    <p style="text-align:justify;">As a programmer we always need to be connected to learn new topics everyday and to challenge ourselves on a daily basis. Getting help from your co-learners when you need them will improve the learning process.</p>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone" style="padding:16px;">
                    <span style="font-size:6vw; line-height:7vw;">Support for Personal Development</span>
                    <p>We can support you in your personal projects. Bugs be damned.</p>
                </div>
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
                    <img style="object-fit:cover; width:100%; height:400px;" src="{{asset('images/xnon.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </main>
@endsection
