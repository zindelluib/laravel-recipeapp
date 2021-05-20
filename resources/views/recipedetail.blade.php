@include('parts.header',['title' => $recipe->name ])	
	<div class="flex-container" style="margin-top: 50px;">
		<h1>{{ $recipe->name }}</h1>
	</div>

	<div class="flex-container" style="width: 85%;margin:0 auto">
		<p>{{ $recipe->description }}
		<br><br><a href="{{ url('user-recipes')}}">Go back</a>
	</p>
	</div>
@include('parts.footer')