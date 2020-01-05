<style>
    .tdn {
        list-style-type: none;
    }
</style>
<div class="footer">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-4-phone" style="padding:15px;">
                <h1 class="mdc-typography--headline1" style="margin: 20px 0px; color:#ff6666; font-family: Arial, Helvetica, sans-serif; font-weight:bold;">C-Square.</h1>
                <p class="first-row-text">We are a group of enthusiastic community trying to share as much knowledge as we can to spread the awareness of this beautiful subject that is not yet considered mainstream. As we head into the future, we need to learn more and more about the complex nature of computers and computing. We are here to prepare you to take that leap into the future.</p>
                <h6 class="mdc-typography--subtitle1" style="text-align:right; margin:10px 0px;">- By C-Square Team</h6>
            </div>
            <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone" style="padding:16px;">
                <h5 class="mdc-typography--headline5">Contact Us</h5>
                <p>Yellow Stone Apartment, Niribili Path, Beharbari 781029, Guwahati, Kamrup-M, Assam.</p>
                <p>Phone No. - 7627989889, 6003499695</p>
                <span>Email - <span id="myEmail">jamiddeka1@gmail.com</span></span><button id="copyEmailButton" onclick="copyToClipboard()" class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="Copy" data-mdc-ripple-is-unbounded="true">file_copy</button>
            </div>
            <div id="app-form" class="mdc-layout-grid__cell--span-3 mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone" style="padding:16px;">
                <h5 class="mdc-typography--headline5">Apply Now</h5>
                <form action="#" method="POST">
                    <div class="mdc-text-field mdc-text-field--outlined" data-mdc-auto-init="MDCTextField" style="margin-bottom:8px; width:100%;">
                        <input class="mdc-text-field__input" id="text-field-hero-input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                            </div>
                        <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                    <div class="mdc-text-field mdc-text-field--outlined" data-mdc-auto-init="MDCTextField" style="margin-bottom:8px; width:100%;">
                        <input class="mdc-text-field__input" id="text-field-hero-input-1">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input-1" class="mdc-floating-label">Email</label>
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
                        <div class="mdc-select__anchor" style="width:100%; margin-bottom:16px;">
                          <i class="mdc-select__dropdown-icon"></i>
                          <div class="mdc-select__selected-text">Courses</div>
                          <span class="mdc-floating-label mdc-floating-label--float-above">Pick a course</span>
                          <div class="mdc-line-ripple"></div>
                        </div>

                        <div class="mdc-select__menu demo-width-class mdc-menu mdc-menu-surface">
                          <ul class="mdc-list">
                            {{-- <li class="mdc-list-item" data-value=""></li> --}}
                            <li class="mdc-list-item" data-value="grains">
                              Android Development
                            </li>
                            <li class="mdc-list-item mdc-list-item--selected" data-value="vegetables" aria-selected="true">
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
<script>
    function copyToClipboard() {
        var copyEmailBtn = document.querySelector('#copyEmailButton');
        copyEmailBtn.addEventListener('click', function(event) {
        // Select the email link anchor text
        var emailLink = document.querySelector('#myEmail');
        var range = document.createRange();
        range.selectNode(emailLink);
        window.getSelection().addRange(range);

        try {
            // Now that we've selected the anchor text, execute the copy command
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copy email command was ' + msg);
        } catch(err) {
            console.log('Oops, unable to copy');
        }

        // Remove the selections - NOTE: Should use
        // removeRange(range) when it is supported
        window.getSelection().removeAllRanges();
        });
    }
</script>
