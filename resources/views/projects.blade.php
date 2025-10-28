@extends('layouts.app')

@section('title', 'Projects Showcase')

@section('content')
<section class="py-5 mt-5">
    <div class="container">
        <h2 class="section-title fw-bold text-center">Featured Projects</h2>
        <div class="row">
            @foreach($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="floating-card h-100 d-flex flex-column">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top rounded-3 mb-3" alt="{{ $project->title }}">
                    @else
                        <div class="bg-dark rounded-3 d-flex align-items-center justify-content-center" style="height: 200px;">
                            <i class="fas fa-image text-secondary fa-2x"></i>
                        </div>
                    @endif

                    <h5 class="fw-semibold mb-2 gradient-text">{{ $project->title }}</h5>
                    <p class="text-secondary flex-grow-1">{{ $project->description }}</p>

                    @if($project->link)
                    <a href="{{ $project->link }}" target="_blank" class="btn btn-gradient mt-auto">
                        <i class="fas fa-external-link-alt me-2"></i>View Project
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
