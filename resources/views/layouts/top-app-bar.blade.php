<style>
    .top-app-bar-item {
        height: 60px;
        display: inline-block;
        line-height: 60px;
        padding: 0px 16px;
        color: white;
        text-decoration: none;
    }

    .link-div {
        height: 60px;
    }

    .burger {
        display: none;
    }

    @media only screen and (max-width: 500px) {
        .top-app-bar-item {
            display: none;
        }

        .burger {
            display: block;
        }
    }

    .top-app-bar-item:hover {
        /* border-bottom: 4px solid white; */
        background-color: #5729c2;
        /* height: 64px;
        line-height: 64px;
        padding: 8px 16px;
        color: white;
        text-decoration: none; */
    }

    .c2:active {
        color: white;
    }
</style>
<aside class="mdc-drawer mdc-drawer--modal">
    <div class="mdc-drawer__content">
        <nav class="mdc-list">
            <a class="mdc-list-item mdc-list-item--activated" href="#" aria-current="page">
                <i class="material-icons mdc-list-item__graphic" aria-hidden="true">inbox</i>
                <span class="mdc-list-item__text">Inbox</span>
            </a>
            <a class="mdc-list-item" href="#">
                <i class="material-icons mdc-list-item__graphic" aria-hidden="true">send</i>
                <span class="mdc-list-item__text">Outgoing</span>
            </a>
            <a class="mdc-list-item" href="#">
                <i class="material-icons mdc-list-item__graphic" aria-hidden="true">drafts</i>
                <span class="mdc-list-item__text">Drafts</span>
            </a>
        </nav>
    </div>
</aside>
<div class="mdc-drawer-scrim"></div>
<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button burger">menu</button>
            <span class="mdc-top-app-bar__title c2"><a href="/" style="text-decoration:none; font-family: 'Bebas Neue', cursive; font-size:2.4rem; color:white;">C<sup>2</sup></a></span>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
            <div class="link-div">
                <a class="top-app-bar-item course-menu-toggle" href="#">Course</a>
                <div class="mdc-menu-surface--anchor">
                    <div class="mdc-menu mdc-menu-surface">
                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                            <li class="mdc-list-item" role="menuitem" onclick="window.location.href = '/course/Web_Development'">
                                <span class="mdc-list-item__text">Web Development</span>
                            </li>
                            <li class="mdc-list-item" role="menuitem" onclick="window.location.href = '/course/Object_Oriented_Programming'">
                                <span class="mdc-list-item__text">Object Oriented Programming</span>
                            </li>
                            <li class="mdc-list-item" role="menuitem" onclick="window.location.href = '/course/Github_And_Version_Control'">
                                <span class="mdc-list-item__text">Github and Version Control</span>
                            </li>
                            <li class="mdc-list-item" role="menuitem" onclick="window.location.href = '/course/Android_Development'">
                                <span class="mdc-list-item__text">Android Development</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="top-app-bar-item" href="/about">About</a>
            <a class="top-app-bar-item" href="/contacts">Contacts</a>
            <button class="mdc-button" style="background-color:white; color:purple; margin-left:10px;" onclick="window.location.href = '/apply'">
                <div class="mdc-button__ripple"></div>
                <span class="mdc-button__label">Apply Now</span>
            </button>
            {{-- <button class="mdc-button" aria-label="Download">Courses</button> --}}
            {{-- <button class="material-icons mdc-top-app-bar__action-item mdc-icon-button" aria-label="Print this page">print</button>
            <button class="material-icons mdc-top-app-bar__action-item mdc-icon-button" aria-label="Bookmark this page">bookmark</button> --}}
        </section>
    </div>
</header>
