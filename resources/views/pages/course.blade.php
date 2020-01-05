@extends('layouts.app')

<style>
	main {
		flex: 1 0 auto;
		padding-top: 70px;
	}

	.red-color-bg {
		background-color:#fc035e;
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
				<div class="mdc-card mdc-elevation--z0">
					<div id="dynamic-header" style="background-color:#531ceb; padding:8px;">
						<h2 id="course-name" class="mdc-typography" style="color:white; margin:10px 10px;">{{$course[0]}}</h2>
					</div>
					<div>
						<img src="{{asset($course[2])}}" alt="" style="height:500px; width:100%; object-fit:cover;">
					</div>
					<div style="padding:16px;">
						{{$course[1]}}
					</div>
					<div class="mdc-layout-grid">
						<div class="mdc-layout-grid__inner">
							<div
								class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
								<div class="mdc-card demo-card">
									<div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
										<div class="mdc-card__media mdc-card__media--16-9 demo-card__media"
											style="background-image: url({{asset('../images/sql.jpg')}});"></div>
										<div class="demo-card__primary" style="padding:16px;">
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Our Changing Planet</h2>
											<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
												by Kurt Wagner</h3>
										</div>
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
											style="padding:16px;">Visit ten places on our planet that are undergoing
											the biggest changes today.</div>
									</div>
									<div class="mdc-card__actions mdc-card__actions--full-bleed">
										<a class="mdc-button mdc-card__action mdc-card__action--button"
											href="#app-form">
											<span class="mdc-button__label">Apply</span>
											<i class="material-icons" aria-hidden="true">arrow_forward</i>
										</a>
									</div>
								</div>
							</div>
							<div
								class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
								<div class="mdc-card demo-card">
									<div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
										<div class="mdc-card__media mdc-card__media--16-9 demo-card__media"
											style="background-image: url({{asset('../images/jsf.jpg')}});"></div>
										<div class="demo-card__primary" style="padding:16px;">
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Our Changing Planet</h2>
											<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
												by Kurt Wagner</h3>
										</div>
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
											style="padding:16px;">Visit ten places on our planet that are undergoing
											the biggest changes today.</div>
									</div>
									<div class="mdc-card__actions mdc-card__actions--full-bleed">
										<a class="mdc-button mdc-card__action mdc-card__action--button"
											href="#app-form">
											<span class="mdc-button__label">Apply</span>
											<i class="material-icons" aria-hidden="true">arrow_forward</i>
										</a>
									</div>
								</div>
							</div>
							<div
								class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
								<div class="mdc-card demo-card">
									<div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
										<div class="mdc-card__media mdc-card__media--16-9 demo-card__media"
											style="background-image: url({{asset('../images/non.jpg')}});"></div>
										<div class="demo-card__primary" style="padding:16px;">
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Our Changing Planet</h2>
											<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
												by Kurt Wagner</h3>
										</div>
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
											style="padding:16px;">Visit ten places on our planet that are undergoing
											the biggest changes today.</div>
									</div>
									<div class="mdc-card__actions mdc-card__actions--full-bleed">
										<a class="mdc-button mdc-card__action mdc-card__action--button"
											href="#app-form">
											<span class="mdc-button__label">Apply</span>
											<i class="material-icons" aria-hidden="true">arrow_forward</i>
										</a>
									</div>
								</div>
							</div>
							<div
								class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
								<div class="mdc-card demo-card">
									<div class="mdc-card__primary-action demo-card__primary-action" tabindex="0">
										<div class="mdc-card__media mdc-card__media--16-9 demo-card__media"
											style="background-image: url({{asset('../images/dev.jpg')}});"></div>
										<div class="demo-card__primary" style="padding:16px;">
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Our Changing Planet</h2>
											<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
												by Kurt Wagner</h3>
										</div>
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
											style="padding:16px;">Visit ten places on our planet that are undergoing
											the biggest changes today.</div>
									</div>
									<div class="mdc-card__actions mdc-card__actions--full-bleed">
										<a class="mdc-button mdc-card__action mdc-card__action--button"
											href="#app-form">
											<span class="mdc-button__label">Apply</span>
											<i class="material-icons" aria-hidden="true">arrow_forward</i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div
				class="mdc-layout-grid__cell--span-1-desktop mdc-layout-grid__cell--span-1-tablet mdc-layout-grid__cell--span-4-phone">
			</div>
		</div>
	</div>
</main>

<script>
	var x = document.getElementById("dynamic-header");
	var y = document.getElementById("course-name").textContent;

	if (y == "Web Development"){
		x.style.backgroundColor = "#fc035e";
	} else if (y == "Object Oriented Programming"){
		x.style.backgroundColor = "#1a90f0";
	} else if (y == "Github and Version Control"){
		x.style.backgroundColor = "#7e12b8";
	} else if (y == "Android Development"){
		x.style.backgroundColor = "#22ba2c";
	}
</script>
@endsection