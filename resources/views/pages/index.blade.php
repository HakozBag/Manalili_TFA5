@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <div class="page-heading">
        <p class="label">CUSTOMER DIRECTORY</p>
        <h1>Customer Accounts</h1>
        <p>Customer names and contact information.</p>
    </div>

    <section class="panel">
        <div class="panel-heading">
            <h2>Customer List</h2>
            <span class="badge">{{ count($customers) }} records</span>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phone Number</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer['id'] }}</td>
                            <td>{{ $customer['full_name'] }}</td>
                            <td>{{ $customer['email'] }}</td>
                            <td>{{ $customer['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection