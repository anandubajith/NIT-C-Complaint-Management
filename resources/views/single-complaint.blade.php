@extends('layouts.app')

@section('content')
<div class="complaint single">
    <h1 class="title">{{ $complaint->title }}</h1>
    {{ $complaint->updated_at }}
    <p>{{ $complaint->description }}</p>

</div>
@endsection