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
              <div class="mdc-layout-grid__cell--span-1-desktop mdc-layout-grid__cell--span-1-tablet mdc-layout-grid__cell--span-4-phone"></div>
              <div class="mdc-layout-grid__cell--span-10-desktop mdc-layout-grid__cell--span-6-tablet mdc-layout-grid__cell--span-4-phone">
                <div class="mdc-card mdc-elevation--z5 demo-card demo-basic-with-header">
                    <div class="demo-card__primary" style="padding:16px;">
                      <h2 class="demo-card__title mdc-typography mdc-typography--headline3">{{$course[0]}}</h2>
                      <h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">by Jamid Deka</h3>
                    </div>
                    <div class="mdc-card__primary-action demo-card__primary-action">
                      <div class="mdc-card__media mdc-card__media--16-9 demo-card__media" style="background-image: url({{asset($course[2])}}); height:350px;"></div>
					  <div class="demo-card__secondary mdc-typography mdc-typography--body2" style="padding:16px;">{{$course[1]}}</div>
					  <div class="mdc-layout-grid">
						<div class="mdc-layout-grid__inner">
						  <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
							<div class="mdc-card demo-card">
								<div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
								  <div class="mdc-card__media mdc-card__media--16-9 demo-card__media" style="background-image: url({{asset('../images/back.jpg')}});"></div>
								  <div class="demo-card__primary" style="padding:16px;">
									<h2 class="demo-card__title mdc-typography mdc-typography--headline6">Our Changing Planet</h2>
									<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">by Kurt Wagner</h3>
								  </div>
								  <div class="demo-card__secondary mdc-typography mdc-typography--body2" style="padding:16px;">Visit ten places on our planet that are undergoing the biggest changes today.</div>
								</div>
								<div class="mdc-card__actions">
								  <div class="mdc-card__action-buttons">
									<button class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> Read</button>
									<button class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> Bookmark</button>
								  </div>
								  {{-- <div class="mdc-card__action-icons">
									<button class="mdc-icon-button mdc-card__action mdc-card__action--icon--unbounded" aria-pressed="false" aria-label="Add to favorites" title="Add to favorites">
									  <i class="material-icons mdc-icon-button__icon mdc-icon-button__icon--on">favorite</i>
									  <i class="material-icons mdc-icon-button__icon">favorite_border</i>
									</button>
									<button class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="Share" data-mdc-ripple-is-unbounded="true">share</button>
									<button class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="More options" data-mdc-ripple-is-unbounded="true">more_vert</button>
								  </div> --}}
								</div>
							  </div>
						  </div>
						  <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
							<div class="mdc-card demo-card">
								<div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
								  <div class="mdc-card__media mdc-card__media--16-9 demo-card__media" style="background-image: url({{asset('../images/jig.jpg')}});"></div>
								  <div class="demo-card__primary" style="padding:16px;">
									<h2 class="demo-card__title mdc-typography mdc-typography--headline6">Our Changing Planet</h2>
									<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">by Kurt Wagner</h3>
								  </div>
								  <div class="demo-card__secondary mdc-typography mdc-typography--body2" style="padding:16px;">Visit ten places on our planet that are undergoing the biggest changes today.</div>
								</div>
								<div class="mdc-card__actions">
								  <div class="mdc-card__action-buttons">
									<button class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> Read</button>
									<button class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> Bookmark</button>
								  </div>
								  {{-- <div class="mdc-card__action-icons">
									<button class="mdc-icon-button mdc-card__action mdc-card__action--icon--unbounded" aria-pressed="false" aria-label="Add to favorites" title="Add to favorites">
									  <i class="material-icons mdc-icon-button__icon mdc-icon-button__icon--on">favorite</i>
									  <i class="material-icons mdc-icon-button__icon">favorite_border</i>
									</button>
									<button class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="Share" data-mdc-ripple-is-unbounded="true">share</button>
									<button class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="More options" data-mdc-ripple-is-unbounded="true">more_vert</button>
								  </div> --}}
								</div>
							  </div>
						  </div>
						  <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
							<div class="mdc-card demo-card">
								<div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
								  <div class="mdc-card__media mdc-card__media--16-9 demo-card__media" style="background-image: url({{asset('../images/pop.jpg')}});"></div>
								  <div class="demo-card__primary" style="padding:16px;">
									<h2 class="demo-card__title mdc-typography mdc-typography--headline6">Our Changing Planet</h2>
									<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">by Kurt Wagner</h3>
								  </div>
								  <div class="demo-card__secondary mdc-typography mdc-typography--body2" style="padding:16px;">Visit ten places on our planet that are undergoing the biggest changes today.</div>
								</div>
								<div class="mdc-card__actions">
								  <div class="mdc-card__action-buttons">
									<button class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> Read</button>
									<button class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> Bookmark</button>
								  </div>
								  {{-- <div class="mdc-card__action-icons">
									<button class="mdc-icon-button mdc-card__action mdc-card__action--icon--unbounded" aria-pressed="false" aria-label="Add to favorites" title="Add to favorites">
									  <i class="material-icons mdc-icon-button__icon mdc-icon-button__icon--on">favorite</i>
									  <i class="material-icons mdc-icon-button__icon">favorite_border</i>
									</button>
									<button class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="Share" data-mdc-ripple-is-unbounded="true">share</button>
									<button class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="More options" data-mdc-ripple-is-unbounded="true">more_vert</button>
								  </div> --}}
								</div>
							  </div>
						  </div>
						  <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
							<div class="mdc-card demo-card">
								<div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
								  <div class="mdc-card__media mdc-card__media--16-9 demo-card__media" style="background-image: url({{asset('../images/ang.jpg')}});"></div>
								  <div class="demo-card__primary" style="padding:16px;">
									<h2 class="demo-card__title mdc-typography mdc-typography--headline6">Our Changing Planet</h2>
									<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">by Kurt Wagner</h3>
								  </div>
								  <div class="demo-card__secondary mdc-typography mdc-typography--body2" style="padding:16px;">Visit ten places on our planet that are undergoing the biggest changes today.</div>
								</div>
								<div class="mdc-card__actions">
								  <div class="mdc-card__action-buttons">
									<button class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> Read</button>
									<button class="mdc-button mdc-card__action mdc-card__action--button">  <span class="mdc-button__ripple"></span> Bookmark</button>
								  </div>
								  {{-- <div class="mdc-card__action-icons">
									<button class="mdc-icon-button mdc-card__action mdc-card__action--icon--unbounded" aria-pressed="false" aria-label="Add to favorites" title="Add to favorites">
									  <i class="material-icons mdc-icon-button__icon mdc-icon-button__icon--on">favorite</i>
									  <i class="material-icons mdc-icon-button__icon">favorite_border</i>
									</button>
									<button class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="Share" data-mdc-ripple-is-unbounded="true">share</button>
									<button class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded" title="More options" data-mdc-ripple-is-unbounded="true">more_vert</button>
								  </div> --}}
								</div>
							  </div>
						</div>
						</div>
					  </div>
                    </div>
                  </div>
              </div>
              <div class="mdc-layout-grid__cell--span-1-desktop mdc-layout-grid__cell--span-1-tablet mdc-layout-grid__cell--span-4-phone"></div>
            </div>
          </div>
    </main>
@endsection
