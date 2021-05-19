@include('parts.header',['title' => 'Recipes'])	
<a href="">Add New Recipe</a>
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
				<tr>
					<td>Fried Chicken</td>
					<td>A delicious fried chicken</td>
					<td>
						<a href="#">View</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</td>
				</tr>
				<tr>
					<td>Adobo</td>
					<td>Simple Adobo Recipe</td>
					<td>
						<a href="#">View</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</td>
				</tr>
			</tbody>
		</table>

@include('parts.footer')	