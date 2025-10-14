@extends('layouts.app')
@section('title', 'Projects')

@section('content')
<h2 class="mb-4">My Projects</h2>

<div class="row">
  @foreach($projects as $project)
  <div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
      @if($project->image)
      <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
      @endif
      <div class="card-body">
        <h5 class="card-title">{{ $project->title }}</h5>
        <p class="card-text">{{ $project->description }}</p>
        @if($project->link)
        <a href="{{ $project->link }}" target="_blank" class="btn btn-outline-primary">View Project</a>
        @endif
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
