@extends('layouts.main-layout')

@section('content')
    
<div class="container">

  <h1>New Project</h1>

  <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
      @csrf
      <label for="name">Name</label>
      <input type="text" name="name">
      <br><br>
      <label for="description">Description</label>
      <input type="text" name="description">
      <br><br>
      <label for="main_image">Main image</label>
      <input type="file" name="main_image">
      <br><br>
      <label for="release_date">Release Date</label>
      <input type="date" name="release_date">
      <br><br>
      <label for="repo_link">Repo Link</label>
      <input type="text" name="repo_link">
      <br><br>
      <input type="submit" value="Add new project">
  </form>
  
</div>

@endsection