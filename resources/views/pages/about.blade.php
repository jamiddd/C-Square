@extends('layouts.app')

<style>
    main {
        flex: 1 0 auto;
        padding-top:70px;
    }
</style>

@section('content')
    <main>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-1-tablet mdc-layout-grid__cell--span-4-phone"></div>
              <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-6-tablet mdc-layout-grid__cell--span-4-phone">
                  <h1 class="first-row-head mdc-typography--headline1" style="text-align:center; margin:0%;">Hi!</h1>
                <img src="{{asset('../images/group.jpg')}}" width="100%" style="object-fit:cover;" alt="">
                <div>
                    We are the <b>C-Square team</b>. Dedicated to help and guide anyone who wishes to go on a creative journey of Coding. Thank you for giving us an oppurtunity to broadcast this awareness of programming knowledge as a mainstream subject. 
                </div>
              <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-1-tablet mdc-layout-grid__cell--span-4-phone"></div>
            </div>
          </div>
    </main>
@endsection
