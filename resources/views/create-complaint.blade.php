@extends('layouts.app')

@section('content')
<div class="complaint single">
    <h1 class="title">Raise a complaint</h1>
    
    <form action="/complaint/create" method="POST">
        @csrf
        
        <input type="text" name="title" placeholder ="title">
        <textarea name="description" id="" cols="30" rows="10"  placeholder="Enter the description"></textarea>
       <br><br> <select name="dept" id="">
                <option value="Department" disabled selected>Department</option>
                <option value="CSE">Computer Science</option>
                <option value="CSE">Chemical</option>
            </select>
    
            <input type="text" name="roll_no" placeholder ="Roll No.">
            <input type="text" name="contact" placeholder ="Contact no.">
            <input type="submit" value="Submit">
    </form>

</div>
@endsection
