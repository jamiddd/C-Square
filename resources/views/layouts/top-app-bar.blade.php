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
        background-color: #4616c9;
        /* height: 64px;
        line-height: 64px;
        padding: 8px 16px;
        text-decoration: none; */
    }

    .c2:active {
        color: white;
    }
</style>
<aside class="mdc-drawer mdc-drawer--modal">
    <div class="mdc-drawer__content">
        <nav class="mdc-list">
            <a id="home-nav" class="mdc-list-item" href="/" aria-current="page" tabindex="0">
              <i class="material-icons mdc-list-item__graphic" aria-hidden="true">inbox</i>
              <span class="mdc-list-item__text">Home</span>
            </a>
            <a id="about-nav" class="mdc-list-item" href="/about" tabindex="1">
              <i class="material-icons mdc-list-item__graphic" aria-hidden="true">star</i>
              <span class="mdc-list-item__text">About</span>
            </a>
            <a id="career-nav" class="mdc-list-item" href="/career" tabindex="2">
              <i class="material-icons mdc-list-item__graphic" aria-hidden="true">account_circle</i>
              <span class="mdc-list-item__text">Career</span>
            </a>
            {{-- <a class="mdc-list-item" href="#">
              <i class="material-icons mdc-list-item__graphic" aria-hidden="true">drafts</i>
              <span class="mdc-list-item__text">Drafts</span>
            </a> --}}
      
            <hr class="mdc-list-divider">
            <h6 class="mdc-list-group__subheader">Courses</h6>
            <a class="mdc-list-item" href="/course/Web_Development">
              <i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
              <span class="mdc-list-item__text">Web Development</span>
            </a>
            <a class="mdc-list-item" href="/course/Android_Development">
              <i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
              <span class="mdc-list-item__text">Android Development</span>
            </a>
            <a class="mdc-list-item" href="/course/Github_And_Version_Control">
              <i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
              <span class="mdc-list-item__text">Github and Version Control</span>
            </a>
            <a class="mdc-list-item" href="/course/Object_Oriented_Programming">
                <i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
                <span class="mdc-list-item__text">Object Oriented Programming</span>
            </a>
          </nav>
    </div>
</aside>
<div class="mdc-drawer-scrim"></div>
<header class="mdc-top-app-bar" id="my-header">
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button burger">menu</button>
            <span class="c2"><a href="/" style="text-decoration:none; font-family: 'Bebas Neue', cursive; font-size:2.1rem; color:white;">CSQUARE</a></span>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
            <div class="link-div">
                <a class="top-app-bar-item home-style" href="/">Home</a>
                <a class="top-app-bar-item course-menu-toggle course-style" href="#">Courses</a>
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
            <a class="top-app-bar-item about-style" href="/about">About</a>
            <a class="top-app-bar-item career-style" href="/career">Career</a>
            <button class="mdc-button" style="background-color:white; color:#531ceb; margin-left:10px; margin-right:16px;" onclick="window.location.href = '/career'">
                <div class="mdc-button__ripple"></div>
                <span class="mdc-button__label">Apply Now</span>
            </button>
            {{-- <button class="mdc-button" aria-label="Download">Courses</button> --}}
            {{-- <button class="material-icons mdc-top-app-bar__action-item mdc-icon-button" aria-label="Print this page">print</button>
            <button class="material-icons mdc-top-app-bar__action-item mdc-icon-button" aria-label="Bookmark this page">bookmark</button> --}}
        </section>
    </div>
</header>
