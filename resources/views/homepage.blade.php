@extends('layouts.app')
@section('content')
{{-- 
    @auth
    <a href="{{ url('/home') }}">Home</a>
    @else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
    @endif
    @endauth --}}


    <main>
        <div class="filter">
            <span>Filter by</span> 
            <select name="" id="">
                <option value="Department" disabled selected>Department</option>
                <option value="CSE">Computer Science</option>
                <option value="CSE">Chemical</option>
            </select>
            <select name="" id="">
                    <option value="Department" readonly default>Status</option>
                    <option value="CSE">Solved</option>
                    <option value="CSE">Pending</option>
            </select>
        </div>
            @foreach( $complaints as $complaint) 
                <div class="complaint">
                    <span class="upvote"><i class="fas fa-angle-up"></i></span>
                    <h4 class="title">{{ $complaint->title }}</h4>
                    <span class="status">Pending</span>
                </div>
            @endforeach
    </main>


@endsection