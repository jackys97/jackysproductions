 @extends('app')

@section('content')

<body>

<div class="page-header header-style">
	<h1>Welcome to Jacky's very first genuine website<br>
		<small>// the dreamroom //</small>
	</h1>
</div>

<div class="container-fluid">
	<div>	<!-- Slideshow -->
		<div class="slider-pro" id="my-slider">
			<div class="sp-slides">
				<!-- Slide 1 -->
				<div class="sp-slide">
					<img class="sp-image" src="{{ asset('/images/IMG_1132.jpg') }}"/>
					<p class="sp-caption">Some Description...</p>
				</div>
		
				<!-- Slide 2 -->
				<div class="sp-slide">
					<img class="sp-image" src="{{ asset('/images/DSC_5784.jpg') }}"/>
					<p class="sp-caption">Some Description...</p>
				</div>
		
				<!-- Slide 3 -->
				<div class="sp-slide">
					<img class="sp-image" src="{{ asset('/images/DSC_6610.jpg') }}"/>
					<p class="sp-caption">Some Description...</p>
				</div>

				<div class="sp-slide">
					<img class="sp-image" src="{{ asset('/images/DSC03639.jpg') }}"/>
					<p class="sp-caption">Some Description...</p>
				</div>

				<div class="sp-slide">
					<img class="sp-image" src="{{ asset('/images/FullSizeRender_new.jpg') }}"/>
					<p class="sp-caption">Some Description...</p>
				</div>
			</div>
		</div>
	</div>

	<div>	<!-- My Interests -->
		<div class="row">
			<div class="col-sm-6">
				<div>
					<h1>My Interests</h1>
				</div>
				<div>
					<p class="lead">Something about my interests.</p>
				</div>
				<div>
					<p>Some description text here ... Some description text here ...
						Some description text here ... Some description text here ...
					Some description text here ... Some description text here ... </p>
				</div>

				<div class="row">
					<div class="col-sm-5 col-xs-12">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
							LEARN MORE
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-5 col-sm-offset-1">
				<img class="img-rounded img-responsive" src="{{ asset('/images/image1.png') }}">
			</div>
		</div>
	</div>

	<div>	<!-- Solme Videos -->
		<div>
			<h1>Some Videos</h1>
		</div>

		<div class="row">

			<div class="col-ssm-6 col-md-4">
				<div class="thumbnail">
					<img src="{{ asset('/images/image2.png') }}">
					<div class="caption">
						<h5>Some description text here ... Some description text here ... 
							Some description text here ... Some description text here ... 
							Some description text here ... Some description text here ... </h5>
						<p>...</p>
						<p><a href="http://uvision.hku.hk/m/21431" class="btn btn-primary" role="button">Button</a>
							<a href="http://uvision.hku.hk/m/21431" class="btn btn-default" target="blank" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-ssm-6 col-md-4">
				<div class="thumbnail">
					<img src="{{ asset('/images/image2.png') }}">
					<div class="caption">
						<h5>Some description text here ... Some description text here ... 
							Some description text here ... Some description text here ... 
							Some description text here ... Some description text here ... </h5>
						<p>...</p>
						<p><a href="http://uvision.hku.hk/m/21431" class="btn btn-primary" role="button">Button</a>
							<a href="http://uvision.hku.hk/m/21431" class="btn btn-default" target="blank" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-ssm-6 col-md-4">
				<div class="thumbnail">
					<img src="{{ asset('/images/image2.png') }}">
					<div class="caption">
						<h5>Some description text here ... Some description text here ... 
							Some description text here ... Some description text here ... 
							Some description text here ... Some description text here ... </h5>
						<p>...</p>
						<p><a href="http://uvision.hku.hk/m/21431" class="btn btn-primary" role="button">Button</a>
							<a href="http://uvision.hku.hk/m/21431" class="btn btn-default" target="blank"role="button">Button</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">

      	<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	<h4 class="modal-title" id="myModalLabel">Image Gallery</h4>
      	</div>

      	<div class="modal-body">
      		<div class="row">
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="strip thumbnail" data-strip-group="gallery">
      					<img src="{{ asset('/images/image.png') }}">
    				</a>
 				</div>
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="strip thumbnail" data-strip-group="gallery">
      					<img src="{{ asset('/images/image.png') }}">
    				</a>
 				</div>
			</div>
      	</div>

      	<div class="modal-footer">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	<button type="button" class="btn btn-primary">Save changes</button>
      	</div>

    	</div>
  	</div>
	</div>	

</div>
</body>
@endsection

@section('js')

<script src="{{ asset('/slider-pro/dist/js/jquery.sliderPro.min.js') }}"></script>
<script src="{{ asset('/strip/dist/js/strip.pkgd.min.js') }}"></script>
<script type="text/javascript">
	jQuery( document ).ready(function( $ ) {
		$( '#my-slider' ).sliderPro(
				{
					width: '90%',
					arrows: true,
					aspectRatio: 1.5,
					visibleSize: '100%',
					forceSize: 'fullWidth'
				}
			);
	});


</script>

@endsection