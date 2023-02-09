@extends('layouts.main-layout')

@section('content')
<style lang="scss" scoped>
    .my_container{
        gap: 1rem;
    }

    .card {
        width: calc((100% - 2rem) / 3);
        padding: 1rem;
    }

    .my_info {
        width: 25%;
    }
</style>

<div class="container d-flex flex-wrap mt-5 my_container">

    @foreach ($projects as $project)
    <div class="card">
        <a href="{{ route('project.show', $project) }}">
            <img src="{{ $project -> main_image }}" class="img-fluid">
        </a>

        <h3 class="card-title">{{ $project -> name }}</h3>

        <div class="card-text my-3">{{ ($project -> description) != "" ? $project -> description : 'No Description'}}</div>

        <a href="{{ route('project.show', $project) }}" class="btn btn-primary my_info">
            Info
        </a>
    </div>
    @endforeach
</div>

@endsection