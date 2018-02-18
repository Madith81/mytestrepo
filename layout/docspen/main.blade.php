@extends('simple-layout')

@section('content')

	<section class="home-section home-promo">
		<div class="promo-content">
			<div class="promo-text">
				<h1 class="promo-headline">DocsPen is a <strong>online documentation platform</strong> for readers, writers and developers. 👋</h1>
				<p class="promo-tagline">It’s the best place to write and publish a document or book, show off your work to the world, and find inspiration. </p>
				<p class="calls-to-action">
					<a href="/register" class="button-main button-green">Sign Up</a>
					<a href="/hello" class="button-main button-dark">Learn More</a>
				</p>
			</div>

			<div class="projects-promo">
				<p class="projects-promo-text"></p>
				<img class="projects-screenshot" src="https://production-assets.codepen.io/assets/home/projects-screenshot-467e7f59383af0f15a7800660f84cf9544837140d29f8f6336099799dd32afd7.png" alt="Projects screenshot">
			</div>
		</div>

		<div class="promo-landing-page-links">
			<a class="promo-items" href="/researchers/">
				<span class="docspen-for">DocsPen for</span>
				<span class="promo-for">Researchers</span>
			</a>

			<a class="promo-items" href="/writers/">
				<span class="docspen-for">DocsPen for</span>
				<span class="promo-for">Writers</span>
			</a>

			<a class="promo-items" href="/tudents/">
				<span class="docspen-for">DocsPen for</span>
				<span class="promo-for">Students</span>
			</a>

			<a class="promo-items" href="/blogging/">
				<span class="docspen-for">DocsPen for</span>
				<span class="promo-for">Teachers</span>
			</a>
   		</div>
	</section>

	<div class="Feature-bg">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-4">
					<div class="Feature">
						<img class="Feature-img" src="{{ cdn('imgs/writers.svg') }}">
						<h3>Made for writers</h3>
						<p>DocsPen helps structure your workflow, securing access control and publishing.</p>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4">
					<div class="Feature">
						<img class="Feature-img" src="{{ cdn('imgs/simple.svg') }}">
						<h3>Simple and beautiful</h3>
						<p>Create your documents easily using our beautiful and powerful web editors.</p>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4">
					<div class="Feature">
						<img class="Feature-img" src="{{ cdn('imgs/vcs.svg') }}">
						<h3>Version control</h3>
						<p>Never lose any of your data, all changes are backed up by modern version control.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="UseCases">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-offset-1">
					<div class="UseCasesIntro">
						<h2>Get started with DocsPen</h2>
						<hr>
						<p>
							Public books are always free.
							<br>
							<b>Join over 10,000 people</b>
							already using DocsPen.
						</p>
						<a href="/join" class="join-button" role="button">Join DocsPen</a>
					</div>
				</div>

				<div class="hidden-xs col-md-7">
					<div class="UseCasesContainer">
						<div class="container container-fluid">
							<div class="row">

								<div class="col-xs-4">
									<div class="UseCase">
										<img class="UseCase-img" src="{{ cdn('imgs/wikis.png') }}">
										<h5>Wikis</h5>
										<p>Publish a beautiful and clean wikis about everything.</p>
										<p>
											<a href="{{ baseUrl('/books/game-of-thrones') }}" target="_blank">View Example
												<i class="zmdi zmdi-arrow-right"></i>
											</a>
										</p>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="UseCase">
										<img class="UseCase-img" src="{{ cdn('imgs/knowledge.png') }}">
										<h5>Knowledge Base</h5>
										<p>Make a FAQ that can be easily browsed and searched.</p>
										<p>
											<a href="{{ baseUrl('/books/netflix') }}" target="_blank">View Example
												<i class="zmdi zmdi-arrow-right"></i>
											</a>
										</p>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="UseCase">
										<img class="UseCase-img" src="{{ cdn('imgs/edu.png') }}">
										<h5>Education Contents</h5>
										<p>Write a publish the content for your studends with attachme</p>
										<p>
											<a href="{{ baseUrl('/books/code') }}" target="_blank">View Example
												<i class="zmdi zmdi-arrow-right"></i>
											</a>
										</p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('partials.footer')

	<footer class="footer text-muted">
	  <div class="container">
	    <span class="footer-legal">© {{ date("Y") }} DocsPen Inc. All rights reserved.</span>
	  </div>
	</footer>

@stop
