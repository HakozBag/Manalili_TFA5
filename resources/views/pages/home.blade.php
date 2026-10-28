@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="welcome">
        <p class="label">YOUR STORE, ORGANIZED</p>

        <h1>Welcome to Manalili POS</h1>

        <p>
            View customer information and store user accounts
            in one convenient place.
        </p>

        <a class="button" href="{{ route('customers.index') }}">
            View Customers
        </a>
    </section>

    <section class="cards">
        <article class="card">
            <span class="number">01</span>
            <h2>Customers</h2>
            <p>Browse customer names, emails, and contact numbers.</p>
            <a href="{{ route('customers.index') }}">View customers &rarr;</a>
        </article>

        <article class="card">
            <span class="number">02</span>
            <h2>Users</h2>
            <p>View store users and their assigned roles.</p>
            <a href="{{ route('users.index') }}">View users &rarr;</a>
        </article>

        <article class="card">
            <span class="number">03</span>
            <h2>About</h2>
            <p>Learn about the project and its features.</p>
            <a href="{{ route('about') }}">About the project &rarr;</a>
        </article>
    </section>
@endsection