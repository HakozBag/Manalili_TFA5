@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <div class="page-heading">
        <p class="label">STORE TEAM</p>
        <h1>User Accounts</h1>
        <p>Store users, contact information, and assigned roles.</p>
    </div>

    <section class="panel">
        <div class="panel-heading">
            <h2>User List</h2>
            <span class="badge">{{ count($users) }} records</span>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td>{{ $user['username'] }}</td>
                            <td>{{ $user['full_name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>
                                <span class="badge">
                                    {{ $user['role'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection