            
            
            
            <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Employee</th>

						</tr>
					</thead>
					<tbody>
						@foreach($startup as $a)
						<tr>
							<td>{{ $a->name }}</td>
							@foreach($a->employees as $b )
							<td>{{ $b->username }}</td>
							@endforeach
						</tr>
						@endforeach
					</tbody>
				</table>