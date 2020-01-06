@extends('layouts.app')

<style>
    main {
        flex: 1 0 auto;
        padding-top: 70px;
    }

    @media only screen and (max-width: 500px) {
        .dynamic-text {
            font-size: 10vw;
        }
    }
</style>

@section('content')
<main>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-1-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone"></div>
            <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                <div style="background-color: #a9f0a8; height:80%; border-radius:20px; padding:16px;">
                    <h1 style="color:#34c932;">Successful</h1>
                    <p style="color:#34c932;">Your application has been submitted. We'll get to you through your email ASAP. Thank you.</p>
                    <i class="material-icons" style="color:#34c932; font-size:10vw;">check_circle</i>
                </div>
            </div>
            <div class="mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone"><img src="{{asset('../images/confirm.jpg')}}" style="object-fit:cover; width:100%; height:600px;" alt=""></div>
        </div>
    </div>
</main>
@endsection