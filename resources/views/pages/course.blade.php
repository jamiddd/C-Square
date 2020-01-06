@extends('layouts.app')

<style>
	main {
		flex: 1 0 auto;
		padding-top: 70px;
	}

	.red-color-bg {
		background-color:#fc035e;
	}

	.course-style {
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
				<div class="mdc-card mdc-elevation--z0">
					<div id="dynamic-header" style="padding:8px;">
						<h2 id="course-name" class="mdc-typography" style="color:white; margin:10px 10px;">{{$course[0]}}</h2>
					</div>
					<div>
						<img src="{{asset($course[2])}}" alt="" style="height:500px; width:100%; object-fit:cover;">
					</div>
					<div style="padding:16px;">
						<p style="font-size:1.4rem;">{{$course[1]}}</p>
					</div>
					<div class="mdc-layout-grid">
						<div class="mdc-layout-grid__inner">
							<div
								class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
								<div class="mdc-card demo-card" style="height:100%;">
									<div class="mdc-card__primary-action demo-card__primary-action" style="height:inherit;" tabindex="0">
										<div class="mdc-card__media mdc-card__media--16-9 demo-card__media"
											style="background-image: url({{asset('../images/sql.jpg')}});"></div>
										<div class="demo-card__primary" style="padding:16px;">
											@if ($course[0] == "Web Development")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Build a basic website from Scratch</h2>	
											@endif
											@if ($course[0] == "Android Development")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Build a basic Android App from scratch</h2>
											@endif
											@if ($course[0] == "Github and Version Control")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Version Control Basics</h2>
											@endif
											@if ($course[0] == "Object Oriented Programming")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												C Programming Basics</h2>
											@endif
											<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
												Beginner Level</h3>
										</div>
										@if ($course[0] == "Web Development")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">Start your web development career by making a simple website using HTML, CSS & Javascript.</div>	
										@endif
										@if ($course[0] == "Object Oriented Programming")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">A simple to understand language that goes as old as starting of operating system like windows.</div>	
										@endif
										@if ($course[0] == "Github and Version Control")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">Github is like home to all developers. You'll learn how to save your work in a very efficient way.</div>	
										@endif
										@if ($course[0] == "Android Development")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">Start this week with building a simple app and learn all the basics of Android Development.</div>	
										@endif
									</div>
									<div class="mdc-card__actions mdc-card__actions--full-bleed">
										<a class="mdc-button mdc-card__action mdc-card__action--button"
											href="/career">
											<span class="mdc-button__label">Apply</span>
											<i class="material-icons" aria-hidden="true">arrow_forward</i>
										</a>
									</div>
								</div>
							</div>
							@if ($course[0] != "Github and Version Control")
							<div
								class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
								<div class="mdc-card demo-card" style="height:100%;">
									<div class="mdc-card__primary-action demo-card__primary-action" style="height:inherit;" tabindex="0">
										<div class="mdc-card__media mdc-card__media--16-9 demo-card__media"
											style="background-image: url({{asset('../images/jsf.jpg')}});"></div>
										<div class="demo-card__primary" style="padding:16px;">
											@if ($course[0] == "Web Development")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Learn to use Front-End Frameworks</h2>	
											@endif
											@if ($course[0] == "Android Development")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Android app with database connection</h2>
											@endif
											@if ($course[0] == "Github and Version Control")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Version Control Basics</h2>
											@endif
											@if ($course[0] == "Object Oriented Programming")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												C++ Programming Basics</h2>
											@endif
											<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
												Beginner Level</h3>
										</div>
										@if ($course[0] == "Web Development")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">Front-End means the design part of website. Do you think you are good at designing a website? Try CSS frameworks, which will boost your productivity and save you a lot of time.</div>	
										@endif
										@if ($course[0] == "Object Oriented Programming")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">The older brother of C which is more advanced and far more powerful. It is primarily used for developing performance based programs because of its low-level nature.</div>	
										@endif
										@if ($course[0] == "Github and Version Control")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;"></div>	
										@endif
										@if ($course[0] == "Android Development")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">An app which can save data is more useful than a short-term memory-loss app. Learn the core of android with networking, with MySQL database.</div>	
										@endif
									</div>
									<div class="mdc-card__actions mdc-card__actions--full-bleed">
										<a class="mdc-button mdc-card__action mdc-card__action--button"
											href="/career">
											<span class="mdc-button__label">Apply</span>
											<i class="material-icons" aria-hidden="true">arrow_forward</i>
										</a>
									</div>
								</div>
							</div>
							@endif
							@if ($course[0] != "Github and Version Control")
							<div
								class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
								<div class="mdc-card demo-card" style="height:100%;">
									<div class="mdc-card__primary-action demo-card__primary-action" style="height:inherit;" tabindex="0">
										<div class="mdc-card__media mdc-card__media--16-9 demo-card__media"
											style="background-image: url({{asset('../images/non.jpg')}});"></div>
										<div class="demo-card__primary" style="padding:16px;">
											@if ($course[0] == "Web Development")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Learn to use Back-End Frameworks</h2>	
											@endif
											@if ($course[0] == "Android Development")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Android app with Firebase as Backend</h2>
											@endif
											@if ($course[0] == "Github and Version Control")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Version Control Basics</h2>
											@endif
											@if ($course[0] == "Object Oriented Programming")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Python Programming Basics</h2>
											@endif
											<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
												Beginner Level</h3>
										</div>
										@if ($course[0] == "Web Development")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">Back-End Frameworks are the brain behind every websites. Without this, the website is barely skin. PHP, JS, Python and many other languages are used.</div>	
										@endif
										@if ($course[0] == "Object Oriented Programming")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">The heart of every new programmer and the language that created a new era. Easy to learn, easy to read and highly portable.</div>	
										@endif
										@if ($course[0] == "Github and Version Control")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;"></div>	
										@endif
										@if ($course[0] == "Android Development")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">Google's own database is a really handy system that can help you build amazing apps. Firebase is an all-round database and services that can act as a backend database for Android Application. You can store data, images, and do all sorts of amazing things.</div>	
										@endif
									</div>
									<div class="mdc-card__actions mdc-card__actions--full-bleed">
										<a class="mdc-button mdc-card__action mdc-card__action--button"
											href="/career">
											<span class="mdc-button__label">Apply</span>
											<i class="material-icons" aria-hidden="true">arrow_forward</i>
										</a>
									</div>
								</div>
							</div>
							@endif
							@if ($course[0] != "Github and Version Control")
							<div
								class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-4-phone">
								<div class="mdc-card demo-card" style="height:100%;">
									<div class="mdc-card__primary-action demo-card__primary-action" style="height:inherit;" tabindex="0">
										<div class="mdc-card__media mdc-card__media--16-9 demo-card__media"
											style="background-image: url({{asset('../images/dev.jpg')}});"></div>
										<div class="demo-card__primary" style="padding:16px;">
											@if ($course[0] == "Web Development")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Progressive Web Apps</h2>	
											@endif
											@if ($course[0] == "Android Development")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Production level Android app</h2>
											@endif
											@if ($course[0] == "Github and Version Control")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Version Control Basics</h2>
											@endif
											@if ($course[0] == "Object Oriented Programming")
											<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
												Java Programming Basics</h2>
											@endif
											<h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
												Beginner Level</h3>
										</div>
										@if ($course[0] == "Web Development")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">Progressive web apps are basically fully-featured apps on website. They act like a native app just like android and iOS but they are websites. They can even be visited offline.</div>	
										@endif
										@if ($course[0] == "Object Oriented Programming")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">Java is said to be one of the most powerful and versatile language, with high security and portability features. It was a go to language for all developers before python took over the mantle of responsibility.</div>	
										@endif
										@if ($course[0] == "Github and Version Control")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;"></div>	
										@endif
										@if ($course[0] == "Android Development")
										<div class="demo-card__secondary mdc-typography mdc-typography--body2"
										style="padding:16px;">With great knowledge of Android app developement, comes great responsibility. In a real world scenario, we need everything to work accordingly. Building an app to satisfy user needs, require immense hardwork and patience.</div>	
										@endif
									</div>
									<div class="mdc-card__actions mdc-card__actions--full-bleed">
										<a class="mdc-button mdc-card__action mdc-card__action--button"
											href="/career">
											<span class="mdc-button__label">Apply</span>
											<i class="material-icons" aria-hidden="true">arrow_forward</i>
										</a>
									</div>
								</div>
							</div>	
							@endif	
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