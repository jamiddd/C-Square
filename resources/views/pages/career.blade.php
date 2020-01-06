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
                                    style="width:100%; min-height:300px; height:100%; object-fit:cover;"></div>
                            <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone"
                                style="padding:20px;">
                                <div style="margin: 50px 0px;">
                                    <h3 class="mdc-typography--headline3" style="margin: 15px 0px;">Join us today</h3>
                                    <span id="career-intro">Get ready to explore your passion and harness the true power of problem solving inside of you.</span>
                                </div>
                                {!!Form::open(['action' => 'RequestsController@store', 'method' => 'POST'])!!}
				                    {!!Form::token()!!}
                                    <div class="mdc-text-field mdc-text-field--outlined"
                                        data-mdc-auto-init="MDCTextField" style="margin-bottom:8px; width:100%; max-width:500px;">
                                        <input class="mdc-text-field__input" oninput="validateTextFields()" id="text-field-hero-input-2" name="name">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input-2"
                                                    class="mdc-floating-label">Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div class="mdc-text-field-helper-text mdc-text-field-helper-text--validation-msg" aria-hidden="true">Name cannot be empty</div>
                                    </div>
                                    <div class="mdc-text-field mdc-text-field--outlined"
                                        data-mdc-auto-init="MDCTextField" style="margin-bottom:8px; width:100%; max-width:500px;">
                                        <input class="mdc-text-field__input" oninput="validateTextFields()" id="text-field-hero-input-3" name="email">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input-3"
                                                    class="mdc-floating-label">Email</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div class="mdc-text-field-helper-text mdc-text-field-helper-text--validation-msg" aria-hidden="true">Email is invalid or empty</div>
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
                                    <span style="font-size:0.7rem; margin-left:5px;">Individual subjects can be selected later.</span>
                                    <div class="mdc-select" data-mdc-auto-init="MDCSelect">
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
                                                <li class="mdc-list-item" data-value="Android Development">
                                                    Android Development
                                                </li>
                                                <li class="mdc-list-item mdc-list-item--selected"
                                                    data-value="Object Oriented Programming" aria-selected="true">
                                                    Object Oriented Programming
                                                </li>
                                                <li class="mdc-list-item" data-value="Github and Version Control">
                                                    Github and Version Control
                                                </li>
                                                {{-- <li class="mdc-list-item" data-value="Data structure and algorithms">
                                                    Data structure and algorithms
                                                </li> --}}
                                                <li class="mdc-list-item" data-value="Web Development">
                                                    Web Development
                                                </li>
                                                {{-- <li class="mdc-list-item" data-value="Database Management">
                                                    Database Management
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mdc-form-field" style="width:100%;">
                                        <div class="mdc-radio">
                                            <input class="mdc-radio__native-control" type="radio" id="radio-1"
                                                name="radios" checked>
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-1">Learner</label>
                                        <div class="mdc-radio">
                                            <input class="mdc-radio__native-control" type="radio" id="radio-2"
                                                name="radios">
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-2">Teacher</label>
                                    </div>
                                    <input type="text" value="" id="course-input-1" name="course" style="display:none;">
                                    <input type="text" value="" id="user_type-1" name="user_type" style="display:none;">
                                    <button class="mdc-button mdc-button--unelevated" id="submit-btn" style="margin-top:30px;" disabled>
                                        <div class="mdc-button__ripple"></div>
                                        <span class="mdc-button__label">APPLY</span>
                                        <i class="material-icons mdc-button__icon" aria-hidden="true">done</i>
                                    </button>
                                    {!!Form::hidden('_method', 'POST')!!}
                                {!! Form::close() !!}
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

    document.getElementById('radio-1').onclick = function() {
        document.getElementById('user_type-1').value = "Learner";
        console.log(document.getElementById('user_type-1').value);
        document.getElementById('career-intro').innerHTML = "Get ready to explore your passion and harness the true power of problem solving inside of you."
    }

    document.getElementById('radio-2').onclick = function() {
        document.getElementById('user_type-1').value = "Teacher";
        console.log(document.getElementById('user_type-1').value);
        document.getElementById('career-intro').innerHTML = "We need support from all the enthusiatic programmers out there who think they can teach the best and contribute to our project of developing Guwahati."
    }

    function validateTextFields(){
        if(document.getElementById('text-field-hero-input-2').value === "" || document.getElementById('text-field-hero-input-3').value === ""){
            document.getElementById("submit-btn").disabled = true;     
        } else {
            if (validateEmail(document.getElementById('text-field-hero-input-3').value)){
                document.getElementById("submit-btn").disabled = false;
            } else {
                document.getElementById("submit-btn").disabled = true;
            }
        }
    }

    

//     $(function(){
// 	$("#get").click(function(){
//   	var val = $("input[name=my-radio]:checked").val()
//   	$("#result").html("You have selected " + val);
//   });
// });
    
    // const MDCSelect = mdc.select.MDCSelect;
    // const courseSelect = new MDCSelect(document.querySelector('.mdc-select'));
    // const courseSelect1 = new MDCSelect(document.querySelector('.mdc-select-course-1'));
</script>
@endsection