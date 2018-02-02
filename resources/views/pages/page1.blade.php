@extends('app')

@section('content')
<!-- Warming Up -->
<link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>

<body>
	<!--Video Section-->
	<section class="jumbotron content-section video-section" style="height: 480px">
  		<div class="pattern-overlay">
  		<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vr0qNXmkUJ8',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:0.7}">bg</a>
    		<div class="container">
      			<div class="row">
        			<div class="col-lg-12">
        				<h1>Full Width Video</h1>  
        				<h4>Enjoy Adding Full Screen Videos to your Page Sections</h4>
       				</div>
      			</div>
    		</div>
  		</div>
	</section>
	<script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
</body>

@endsection

@section('js')

<script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $(".player").mb_YTPlayer();

});
</script>
@endsection