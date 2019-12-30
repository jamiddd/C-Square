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
        background-color: rgba(255, 255, 255, 0.8);
        position: absolute;
        top: 20%;
        right: 5%;
        left: 5%;
    }

    .intro-header {
        /* line-height: 1rem; */
        /* background-color: rgba(255, 255, 255, 0.8); */
        margin: 20px 0px !important;
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
                <h1 class="intro-header mdc-typography--headline1">LET'S CODE</h1>
                <h4 class="intro-subtitle mdc-typography--headline4">Code & Create</h4>
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

    </main>
@endsection
