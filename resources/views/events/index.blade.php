

                <h2>Event</h2>          
                <a href="{{ route('events.create') }}"> Create New Event</a>  
   
    <table>
        <tr>
            <th>No</th>                             
            <th>Titre</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        
        @foreach ($events as $event)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $event->title }}</td>
            <td>{{ $event->description }}</td>
            <td>{{ $event->date_event }}</td>
            <td>
                    <a href="{{ route('events.show', $event->id) }}">Show</a>
                    <a href="{{ route('events.edit', $event->id) }}">Edit</a>

            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $events->links() !!}