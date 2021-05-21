@include('parts.header',['title' => $title ])
	<div class="flex-container">
		<h1>{{ $title }}</h1>
	</div>
	<div class="flex-container">
		@if($editmode)
		<form action="{{ url('user-recipes') . '/' . $recipe->id }}" style="width: 318px;" method="post" id="recipe-form">
		@else
		<form action="{{ url('user-recipes') }}" style="width: 318px;" method="post" id="recipe-form">
		@endif()
			@if(!$editmode)
				@csrf()
			@endif()
			<div class="form-box">
				<label>Recipe Name:&nbsp; </label><br>
				@if($editmode)
				<input type="text" name="recipename" class="form-input" value="{{ $recipe->name }}">
				@else()
				<input type="text" name="recipename" class="form-input" value="{{ old('recipename')}}">
				<small class="error">{{ $errors->first('recipename') }}</small>
				@endif()
				
			</div>
			<div class="form-box">
				<label>Description:&nbsp; </label><br>
				@if($editmode)
				<textarea style="height: 100px" class="form-input"  name="description" >
					{{ $recipe->description }}
				</textarea>
				@else
				<textarea style="height: 100px" class="form-input"  name="description" >
					@if(old('description'))
						{{ old('description') }}
					@endif
				</textarea>
				@endif()
			</div>
			@if($editmode)
			<input type="submit" name="submit" value="Update Recipe" id="recipeformbtn">
			@else
			<input type="submit" name="submit" value="Add Recipe" id="recipeformbtn">
			@endif()

		</form>
	</div>
@if($editmode)
	@push('scripts')
	<script>
		$(document).ready(function(){
			$('#recipe-form').submit(function(e){
				e.preventDefault();
				$.ajax({
					url: $(this).attr('action'),
					type: 'PUT',
					data: $(this).serialize(),
					success: function(res){
						alert(res.message);
						window.location   = res.redirecto;
					},
					error:function(error){
						var err  = error.responseJSON;
						alert(err.message);
					}
				});
			})
		})
	</script>
	@endpush()
@endif()
@include('parts.footer')		