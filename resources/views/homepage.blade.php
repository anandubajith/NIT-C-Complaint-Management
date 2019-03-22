@extends('layouts.app')
@section('content')
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
            <a href="/complaint/{{ $complaint->id}}">
                <div class="complaint">
                    <span class="upvote"><i class="fas fa-angle-up"></i></span>
                    <h4 class="title">{{ $complaint->title }}</h4>
                    <span class="status">Pending</span>
                </div>
            </a>
            @endforeach
    </main>


@endsection