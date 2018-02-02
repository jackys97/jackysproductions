@extends('app')

@section('content')

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
}

.parallax {
    /* The image used */
    background-image: url('https://www.canyontours.com/wp-content/uploads/2013/09/West-Rim.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.containerA {
    width: 100%;
    border: 5px ;
    padding: 5px;

    background-color: rgba(0,0,0,0.5)
}

</style>
</head>
<body>
<div class="parallax"></div>
	<div class="jumbotron containerA">
		fdsfasdfjkl;fdsjfsakl;jsdkaljfksal;djfsdlkj
		<br>
		fdsjaflkdsj;fsdjfklsadjflksajfklsajfl;asdjfkl;sadjfklasdfhgsudia
		<br>
		fjikasldhfouiwdqfhwiokfvhsdykjfhsa
	</div>

<div class="parallax"></div>
</body>

@endsection