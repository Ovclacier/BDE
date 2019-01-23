

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                   
                    
                    You are logged in! 
                </div>
            </div>
        </div>
    </div>
</div>
@if(checkPermission(['student','cesi','bde']))
                    <a href="{{ url('permissions-all-users') }}"><button>Access All Users</button></a>
                    @endif


                    @if(checkPermission(['cesi','bde']))
                    <a href="{{ url('permissions-cesi-bde') }}"><button>Access Admin and Superadmin</button></a>
                    @endif


                    @if(checkPermission(['bde']))
                    <a href="{{ url('permissions-bde') }}"><button>Access Only Superadmin</button></a>
                    @endif
@endsection