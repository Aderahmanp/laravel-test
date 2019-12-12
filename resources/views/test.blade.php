<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Startup</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{{$employee->username}}</td>
            <td>{{$employee->startup->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
