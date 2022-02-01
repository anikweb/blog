@extends('frontend.master')
@section('content')
<!--------------------------------------
HEADER
--------------------------------------->
<div class="container">
	<div class="jumbotron jumbotron-fluid mb-3 pt-0 pb-0 bg-lightblue position-relative">
		<div class="pl-4 pr-0 h-100 tofront">
			<div class="row justify-content-between">
				<div class="col-md-6 pt-6 pb-6 align-self-center">
					<h1 class="secondfont mb-3 font-weight-bold">Mundana is an HTML Bootstrap Template for Professional Blogging</h1>
					<p class="mb-3">
						Beautifully crafted with the latest technologies, SASS & Bootstrap 4.1.3, Mundana is the perfect design for your professional blog. Homepage, post article and category layouts available.
					</p>
					<a href="./article.html" class="btn btn-dark">Read More</a>
				</div>
				<div class="col-md-6 d-none d-md-block pr-0" style="background-size:cover;background-image:url({{ asset('frontend/img/demo/home.jpg') }});">	</div>
			</div>
		</div>
	</div>
</div>
<!-- End Header -->
<!--------------------------------------
MAIN
--------------------------------------->
<div class="container pt-4 pb-4">
	<div class="row">
		<div class="col-lg-6">
			<div class="card border-0 mb-4 box-shadow h-xl-300">
                <div style="background-image: url({{ asset('frontend/img/demo/1.jpg') }}); height: 150px;    background-size: cover;    background-repeat: no-repeat;"></div>
				<div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
					<h2 class="h4 font-weight-bold">
					<a class="text-dark" href="./article.html">Brain Stimulation Relieves Depression Symptoms</a>
					</h2>
					<p class="card-text">
						 Researchers have found an effective target in the brain for electrical stimulation to improve mood in people suffering from depression.
					</p>
					<div>
						<small class="d-block"><a class="text-muted" href="./author.html">Favid Rick</a></small>
						<small class="text-muted">Dec 12 &middot; 5 min read</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="flex-md-row mb-4 box-shadow h-xl-300">
				<div class="mb-3 d-flex align-items-center">
					<img height="80" src="{{ asset('frontend/img/demo/blog4.jpg') }}">
					<div class="pl-3">
						<h2 class="mb-2 h6 font-weight-bold">
						<a class="text-dark" href="./article.html">Nasa's IceSat space laser makes height maps of Earth</a>
						</h2>
						<div class="card-text text-muted small">
							 Jake Bittle in LOVE/HATE
						</div>
						<small class="text-muted">Dec 12 &middot; 5 min read</small>
					</div>
				</div>
				<div class="mb-3 d-flex align-items-center">
					<img height="80" src="{{ asset('frontend/img/demo/blog5.jpg') }}">
					<div class="pl-3">
						<h2 class="mb-2 h6 font-weight-bold">
						<a class="text-dark" href="./article.html">Underwater museum brings hope to Lake Titicaca</a>
						</h2>
						<div class="card-text text-muted small">
							 Jake Bittle in LOVE/HATE
						</div>
						<small class="text-muted">Dec 12 &middot; 5 min read</small>
					</div>
				</div>
				<div class="mb-3 d-flex align-items-center">
					<img height="80" src="{{ asset('frontend/img/demo/blog6.jpg') }}">
					<div class="pl-3">
						<h2 class="mb-2 h6 font-weight-bold">
						<a class="text-dark" href="./article.html">Sun-skimming probe starts calling home</a>
						</h2>
						<div class="card-text text-muted small">
							 Jake Bittle in LOVE/HATE
						</div>
						<small class="text-muted">Dec 12 &middot; 5 min read</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row justify-content-between">
		<div class="col-md-8">
			<h5 class="font-weight-bold spanborder"><span>All Stories</span></h5>
			<div class="mb-3 d-flex justify-content-between">
				<div class="pr-3">
					<h2 class="mb-1 h4 font-weight-bold">
					<a class="text-dark" href="./article.html">Nearly 200 Great Barrier Reef coral species also live in the deep sea</a>
					</h2>
					<p>
						There are more coral species lurking in the deep ocean that previously thought.
					</p>
					<div class="card-text text-muted small">
						 Jake Bittle in SCIENCE
					</div>
					<small class="text-muted">Dec 12 &middot; 5 min read</small>
				</div>
				<img height="120" src="{{ asset('frontend/img/demo/blog8.jpg') }}">
			</div>
			<div class="mb-3 d-flex justify-content-between">
				<div class="pr-3">
					<h2 class="mb-1 h4 font-weight-bold">
					<a class="text-dark" href="./article.html">East Antarctica's glaciers are stirring</a>
					</h2>
					<p>
						Nasa says it has detected the first signs of significant melting in a swathe of glaciers in East Antarctica.
					</p>
					<div class="card-text text-muted small">
						 Jake Bittle in SCIENCE
					</div>
					<small class="text-muted">Dec 12 &middot; 5 min read</small>
				</div>
				<img height="120" src="{{ asset('frontend/img/demo/1.jpg') }}">
			</div>
			<div class="mb-3 d-flex justify-content-between">
				<div class="pr-3">
					<h2 class="mb-1 h4 font-weight-bold">
					<a class="text-dark" href="./article.html">50 years ago, armadillos hinted that DNA wasn’t destiny</a>
					</h2>
					<p>
						Nasa says it has detected the first signs of significant melting in a swathe of glaciers in East Antarctica.
					</p>
					<div class="card-text text-muted small">
						 Jake Bittle in SCIENCE
					</div>
					<small class="text-muted">Dec 12 &middot; 5 min read</small>
				</div>
				<img height="120" src="{{ asset('frontend/img/demo/5.jpg') }}">
			</div>
		</div>
		<div class="col-md-4 pl-4">
            <h5 class="font-weight-bold spanborder"><span>Popular</span></h5>
			<ol class="list-featured">
				<li>
                    <span>
                        <h6 class="font-weight-bold">
                            <a href="./article.html" class="text-dark">Did Supernovae Kill Off Large Ocean Animals?</a>
                        </h6>
                        <p class="text-muted">
                            Jake Bittle in SCIENCE
                        </p>
                    </span>
				</li>
				<li>
                    <span>
                        <h6 class="font-weight-bold">
                            <a href="./article.html" class="text-dark">Humans Reversing Climate Clock: 50 Million Years</a>
                        </h6>
                        <p class="text-muted">
                            Jake Bittle in SCIENCE
                        </p>
                    </span>
				</li>
				<li>
                    <span>
                        <h6 class="font-weight-bold">
                            <a href="./article.html" class="text-dark">Unprecedented Views of the Birth of Planets</a>
                        </h6>
                        <p class="text-muted">
                            Jake Bittle in SCIENCE
                        </p>
                    </span>
				</li>
				<li>
                    <span>
                        <h6 class="font-weight-bold">
                            <a href="./article.html" class="text-dark">Effective New Target for Mood-Boosting Brain Stimulation Found</a>
                        </h6>
                        <p class="text-muted">
                            Jake Bittle in SCIENCE
                        </p>
                    </span>
				</li>
			</ol>
		</div>
	</div>
</div>
@endsection
