@extends('layouts.main-layout')

@section('content')
<div class="container text-center">

    <h1 class="my-3">Benvenuto, clicca il pulsante in basso per vedere i progetti o accedi per gestirli</h1>


    <a href="{{ route('project.view') }}" class="btn btn-primary">
        Clicca!
    </a>
    
</div>
@endsection