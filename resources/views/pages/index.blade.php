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

    .header-bg {
        position: absolute;
        height: 500px;
        object-fit: cover;
        width: 100%;
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

    .front-posts-div {
        margin: 1% 10%;
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
            <img class="header-bg" src="{{asset('images/header-bg-compressed.jpg')}}" alt="">
            <div class="intro-section-header-div">
                <h1 class="intro-header mdc-typography--headline2"><span style="color:#651ee8; font-weight:bold;">C</span>ODING <span style="color:#651ee8; font-weight:bold;">C</span>OURSES</h1>
                <span class="intro-subtitle mdc-typography--subtitle1" style="display:block;">For absolute beginners from the scratch</span>
                <button class="mar-l mdc-button mdc-button--raised" onclick="window.location.href = '/c_square/public/apply'">
                    <div class="mdc-button__ripple"></div>
                    <span class="mdc-button__label">Get started</span>
                    <i class="material-icons mdc-button__icon" aria-hidden="true">arrow_forward</i>
                </button>
            </div>
        </div>
        <div class="mdc-layout-grid front-posts-div">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell">
                    <div class="first-row">
                        <span class="first-row-head mdc-typography--headline5">Exclusive Learning</span>
                        <p class="first-row-text">Learning is fun when doubts get cleared right on time. We will make learning fun and intuitive for anybody who is interested in this journey of coding.</p>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell">
                    <div class="first-row">
                        <span class="first-row-head mdc-typography--headline5">All day services</span>
                        <p class="first-row-text">We are available all day to get you to your success. You just have to be willing to learn it all. Learning has never been so simple and effective. We have a community full of dedicated people to help you in your endavour.</p>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell">
                    <div class="first-row">
                        <span class="first-row-head mdc-typography--headline5">Range of courses</span>
                        <p class="first-row-text">We are not just basics. We go all in. Learn anything from our range of courses. We are proud to tell you that, even engineers won't be able to beat you after you join here.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid" style="padding:0px 30px;">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-6">
                    <img style="object-fit:cover; width:100%; height:100%;" src="{{asset('images/app_development.jpg')}}" alt="">
                </div>
                <div class="mdc-layout-grid__cell--span-6" style="padding:40px;">
                    <span style="font-size:8vw; line-height:9vw;">Learn the best practices</span>
                    <p>Knowing something itself isn't enough. You have to perfect it. With proper guidelines and learning curve you would achieve something that is very fulfilling. Knowing something itself isn't enough. You have to perfect it. With proper guidelines and learning curve you would achieve something that is very fulfilling. Knowing something itself isn't enough. You have to perfect it. With proper guidelines and learning curve you would achieve something that is very fulfilling. Knowing something itself isn't enough. You have to perfect it. With proper guidelines and learning curve you would achieve something that is very fulfilling.</p>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid" style="padding:0px 30px;">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-6" style="padding:40px;">
                    <span style="font-size:8vw; line-height:9vw;">Always Up-To-Date</span>
                    <p>Knowing something itself isn't enough. You have to perfect it. With proper guidelines and learning curve you would achieve something that is very fulfilling. Knowing something itself isn't enough. You have to perfect it. With proper guidelines and learning curve you would achieve something that is very fulfilling. Knowing something itself isn't enough. You have to perfect it. With proper guidelines and learning curve you would achieve something that is very fulfilling. Knowing something itself isn't enough. You have to perfect it. With proper guidelines and learning curve you would achieve something that is very fulfilling.</p>
                </div>
                <div class="mdc-layout-grid__cell--span-6">
                    <img style="object-fit:cover; width:100%; height:100%;" src="{{asset('images/new_devc.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </main>
@endsection
