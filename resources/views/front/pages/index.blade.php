@extends('front.layout.app')

@section('content')



	<div class="content clearfix reveal-side-navigation">

				<!-- Parallax Section -->
	      @include('front.partials.parallax')
				<!-- Parallax Section End -->

				<!-- About Section -->
	      @include('front.partials.about')
				<!-- About Section End-->

				<!-- Services Section -->
	      @include('front.partials.services')
				<!-- Service Section End -->

				<!-- Portfolio Section -->
	      @include('front.partials.portfolio')
				<!-- Portfolio Section End -->

				<!-- Blog Section -->
	      @include('front.partials.blog')
				<!-- Blog Section End -->

				<!-- Contact Section -->
	      @include('front.partials.contact')
				<!-- Contact Section End -->

	</div>
    
@endsection