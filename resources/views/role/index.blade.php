
@extends('layouts.backend' , ['title' => 'Role Index'])

@section('content')
<div>
    <h1>Role Index</h1>
    <div class="container-fluid">
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                <th scope="col">Name | {{ $roles->count() }}</th>
                    <th scope="col">User Count | {{ $users->count() }}</th>
                    <th scope="col">Permissions | {{ $permissions->count() }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>
                        {{ $role->users->count() }}
                    </td>
                    <td>
                        <ul class="list-group">
                            @foreach ($role->permissions as $permission)
                            <li class="list-group-item list-group-item-action">{{ $permission->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection


