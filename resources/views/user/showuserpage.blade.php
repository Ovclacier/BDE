@foreach ($users as $user)

    <td>{{ $user->name }}</td>
    <td>{{ $user->id }}</td><br>
    <td>{{ $user->email }}</td><br>

@endforeach