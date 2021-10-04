# Laravel Bootstrap Dashboard

A Laravel package that implements bootstrap dashboard example.
[https://getbootstrap.com/docs/4.1/examples/dashboard](https://getbootstrap.com/docs/4.1/examples/dashboard). 

To install the package:

    composer require thiagogomesverissimo/laravel-bootstrap-dashboard
    
Extends in your template:

    @extends('laravel-usp-theme::main')

Sections available to override:

 - title
 - system_name
 - search
 - user
 - sidebar
 - body

An example that can be inserted in your base.html.twig:

    @extends('laravel-usp-theme::main')

    @section('title') Sistema @endsection
    @section('system_name') Sistema @endsection

    @section('user')
        @auth
            <a class="btn btn-danger" href="/logout">logout</a>
        @else
            <a class="btn btn-success" href="/login">login</a>
        @endaouth
    @stop

    @section('sidebar')
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="/users">
                <span data-feather="home"></span>
                Manage users 
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/reports">
                <span data-feather="file"></span>
                Reports
            </a>
        </li>
    </ul>
    @stop

    @section('body')


    @stop
