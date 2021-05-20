@include('parts.header',['title' => 'Add New Recipe'])
<div class="flex-container">
		<h1>Add New Recipe</h1>
	</div>
	<div class="flex-container">
		<form action="{{ url('user-recipes') }}" style="width: 318px;" method="post">
			@csrf()
			<div class="form-box">
				<label>Recipe Name:&nbsp; </label><br>
				<input type="text" name="recipename" class="form-input" value="{{ old('recipename')}}">
				<small class="error">{{ $errors->first('recipename') }}</small>
			</div>
			<div class="form-box">
				<label>Description:&nbsp; </label><br>
				<textarea style="height: 100px" class="form-input"  name="description" >
					@if(old('description'))
						{{ old('description') }}
					@endif
				</textarea>
			</div>
			<input type="submit" name="submit" value="Add Recipe" id="recipeformbtn">

		</form>
	</div>

@include('parts.footer')		