<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>C Square</title>

         <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0px !important;
                scroll-behavior: smooth;
            }

            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            .footer {
                /* width: 100%; */
                /* height: 400px; */
                background-color: #f5f5f5;
            }
        </style>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body class="mdc-typography">
        @include('layouts.top-app-bar')
        @yield('content')
        @include('layouts.footer')
        
        <div class="mdc-snackbar" data-mdc-auto-init="MDCSnackbar">
            <div class="mdc-snackbar__surface">
              <div class="mdc-snackbar__label"
                   role="status"
                   aria-live="polite">
                Email copied successfully.
              </div>
              <div class="mdc-snackbar__actions">
                <button type="button" class="mdc-button mdc-snackbar__action"></button>
              </div>
            </div>
          </div>
        
        <script>
        
        </script>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            const MDCSnackbar = mdc.snackbar.MDCSnackbar;
            const MDCSelect = mdc.select.MDCSelect;
            // const MDCFooFoundation = mdc.foo.MDCFooFoundation;
            var cpbtn = document.getElementById("copyEmailButton");
            cpbtn.onclick = function(){
                var copyText = document.getElementById("email-id");
                copyText.select();
                copyText.setSelectionRange(0, 99999); /*For mobile devices*/
                document.execCommand("copy");
                console.log(copyText.value)

                const snackbar = new MDCSnackbar(document.querySelector('.mdc-snackbar'));
                snackbar.open();
            }

            const select = new MDCSelect(document.querySelector('.mdc-select'));

            select.listen('MDCSelect:change', () => {
                console.log(`Selected option at index ${select.selectedIndex} with value "${select.value}"`)
                document.getElementById("course-input").value = select.value;
                if (document.getElementById("course-input-1") != null){
                    document.getElementById("course-input-1").value = select.value;
                }
            });

            function validateTextFieldsAlt(){
                if (document.getElementById('text-field-hero-input').value === "" || document.getElementById('text-field-hero-input-1').value === ""){
                    document.getElementById("another-submit-btn").disabled = true;     
                } else {
                    if (validateEmail(document.getElementById('text-field-hero-input-1').value)){
                        document.getElementById("another-submit-btn").disabled = false;
                    } else {
                        document.getElementById("another-submit-btn").disabled = true;
                    }
                }
            }

            function validateEmail(mail){
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
                    return (true)
                }
                return (false)
            }

        </script>
        <script>
            window.mdc.autoInit();
        </script>
    </body>
</html>
