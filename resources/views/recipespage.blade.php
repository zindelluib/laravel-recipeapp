@include('parts.header',['title' => 'Recipes'])	
<a href="{{ url('user-recipes/create') }}">Add New Recipe</a>
<a href="{{ url('logout') }}">Logout</a>
	<table>
			<thead>
				<tr>
					<th>Recipe Name</th>
					<th>Description</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				@foreach($recipes as $recipe)
				<tr>
					<td>{{ $recipe->name}}</td>
					<td>{{ $recipe->description }}</td>
					<td>
						<a href="{{ url('user-recipes/' . $recipe->id)}}">View</a>
						<a href="{{ url('user-recipes/' . $recipe->id) . '/edit'}}">Edit</a>
						<a href="{{ url('user-recipes/' . $recipe->id)}}" class="delete-recipe">Delete</a>
					</td>
				</tr>
				@endforeach()
			</tbody>
		</table>
@push('scripts')
<script>
	$(document).ready(function(){
		$('.delete-recipe').click(function(e){
			e.preventDefault();
			var confirm  =  window.confirm('Do you want to delete this recipe?');
			if(confirm){
				$.ajax({
					url: $(this).attr('href'),
					type: 'DELETE',
					success: function(res){
						alert(res.message);
						location.reload();
					},
					error: function(error){
						var err  = error.responseJSON;
						alert(err.message);
					}
				});
			}
		});
	});
</script>
@endpush()
@include('parts.footer')	