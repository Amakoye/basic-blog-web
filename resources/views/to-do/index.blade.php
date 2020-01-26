<table>
    <tr>
        <th>Task</th>
        <th>Action</th>
    </tr>
    @foreach ($todos as $todo)
    <tr>
    <td>{{$todo->task}}</td>
    </tr>
    @endforeach
</table>
