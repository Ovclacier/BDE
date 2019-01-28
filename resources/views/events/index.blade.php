
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Event</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('events.create') }}"> Create New Event</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>                             
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        
        @foreach ($event as $events)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $events->title }}</td>
            <td>{{ $events->description }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('comments.show',$events->id_event) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('events.edit',$events->id_event) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $event->links() !!}