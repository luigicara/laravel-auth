@extends('layouts.main-layout')

@section('content')
    
<div class="container">
  <h1>Edit Project</h1>

  <form method="POST" action="{{ route('project.update', $project) }}" enctype="multipart/form-data">
      @csrf
      <label for="name">Name</label>
      <input type="text" name="name" value="{{ $project -> name }}">
      <br><br>
      <label for="description">Description</label>
      <input type="text" name="description" value="{{ $project -> description }}">
      <br><br>
      <label for="main_image">Main image</label>
      <input type="file" name="main_image"value="{{ $project -> main_image }}">
      <br><br>
      <label for="release_date">Release Date</label>
      <input type="date" name="release_date" value="{{ $project -> release_date }}">
      <br><br>
      <label for="repo_link">Repo Link</label>
      <input type="text" name="repo_link" value="{{ $project -> repo_link }}">
      <br><br>
      <input type="submit" value="Update project">
  </form>

</div>

@endsection