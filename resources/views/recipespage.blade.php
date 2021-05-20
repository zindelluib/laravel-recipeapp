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
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</td>
				</tr>
				@endforeach()
			</tbody>
		</table>

@include('parts.footer')	