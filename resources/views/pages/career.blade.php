@extends('layouts.app')

<style>
    main {
        flex: 1 0 auto;
        padding-top: 70px;
    }

    .career-style {
        border-bottom: 4px solid white;
    }
</style>

@section('content')
<main>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div
                class="mdc-layout-grid__cell--span-1-desktop mdc-layout-grid__cell--span-1-tablet mdc-layout-grid__cell--span-4-phone">
            </div>
            <div
                class="mdc-layout-grid__cell--span-10-desktop mdc-layout-grid__cell--span-6-tablet mdc-layout-grid__cell--span-4-phone">
                <div class="mdc-card mdc-elevation--z5">
                    <div class="mdc-layout-grid" style="padding:0%;">
                        <div class="mdc-layout-grid__inner">
                            <div
                                class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                                <img src="{{asset('../images/career.jpg')}}" alt=""
                                    style="width:100%; height:600px; object-fit:cover;"></div>
                            <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone"
                                style="padding:20px;">
                                <div style="margin: 50px 0px;">
                                    <h3 class="mdc-typography--headline3" style="margin: 15px 0px;">Join us today</h3>
                                    <span>We need support from all the enthusiatic programmers out there who think they
                                        can teach the best and contribute to our project of developing Guwahati.</span>
                                </div>
                                <form action="#" method="POST">
                                    <div class="mdc-text-field mdc-text-field--outlined"
                                        data-mdc-auto-init="MDCTextField" style="margin-bottom:8px; width:100%;">
                                        <input class="mdc-text-field__input" id="text-field-hero-input-2">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input-2"
                                                    class="mdc-floating-label">Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field mdc-text-field--outlined"
                                        data-mdc-auto-init="MDCTextField" style="margin-bottom:8px; width:100%;">
                                        <input class="mdc-text-field__input" id="text-field-hero-input-3">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input-3"
                                                    class="mdc-floating-label">Email</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    {{-- <div class="mdc-text-field mdc-text-field--outlined" data-mdc-auto-init="MDCTextField" style="margin-bottom:8px;">
                                            <input class="mdc-text-field__input" id="text-field-hero-input-2">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input-2" class="mdc-floating-label">Course</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> --}}
                                    <div class="mdc-select">
                                        <div class="mdc-select__anchor" style="margin-bottom:16px;">
                                            <i class="mdc-select__dropdown-icon"></i>
                                            <div class="mdc-select__selected-text">Courses</div>
                                            <span class="mdc-floating-label mdc-floating-label--float-above">Pick a
                                                course</span>
                                            <div class="mdc-line-ripple"></div>
                                        </div>

                                        <div class="mdc-select__menu demo-width-class mdc-menu mdc-menu-surface">
                                            <ul class="mdc-list">
                                                {{-- <li class="mdc-list-item" data-value=""></li> --}}
                                                <li class="mdc-list-item" data-value="grains">
                                                    Android Development
                                                </li>
                                                <li class="mdc-list-item mdc-list-item--selected"
                                                    data-value="vegetables" aria-selected="true">
                                                    Object Oriented Programming
                                                </li>
                                                <li class="mdc-list-item" data-value="fruit">
                                                    Github
                                                </li>
                                                <li class="mdc-list-item" data-value="fruit">
                                                    Data structure and algorithms
                                                </li>
                                                <li class="mdc-list-item" data-value="fruit">
                                                    Web Development
                                                </li>
                                                <li class="mdc-list-item" data-value="fruit">
                                                    Database Management
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mdc-form-field" style="width:100%;">
                                        <div class="mdc-radio">
                                            <input class="mdc-radio__native-control" type="radio" id="radio-1"
                                                name="radios">
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-1">Learner</label>
                                        <div class="mdc-radio">
                                            <input class="mdc-radio__native-control" type="radio" id="radio-2"
                                                name="radios" checked>
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-2">Teacher</label>
                                        <div class="mdc-radio">
                                            <input class="mdc-radio__native-control" type="radio" id="radio-3"
                                                name="radios">
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-3">Other</label>
                                    </div>
                                    <button class="mdc-button mdc-button--unelevated">
                                        <div class="mdc-button__ripple"></div>
                                        <span class="mdc-button__label">APPLY</span>
                                        <i class="material-icons mdc-button__icon" aria-hidden="true">done</i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    const MDCRadio = mdc.radio.MDCRadio;
    const MDCFormField = mdc.formField.MDCFormField;
    const radio = new MDCRadio(document.querySelector('.mdc-radio'));
    const formField = new MDCFormField(document.querySelector('.mdc-form-field'));
    formField.input = radio;
    // const MDCSelect = mdc.select.MDCSelect;
    // const courseSelect = new MDCSelect(document.querySelector('.mdc-select'));
    // const courseSelect1 = new MDCSelect(document.querySelector('.mdc-select-course-1'));
</script>
@endsection