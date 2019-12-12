            
            
            
            <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Employee</th>

						</tr>
					</thead>
					<tbody>
						@foreach($employee as $a)
						<tr>
							<td>{{ $a->startup_id }}</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>