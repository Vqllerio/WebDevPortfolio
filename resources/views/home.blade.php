@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero-section">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-4">
                    <h1 class="display-3 fw-bold mb-3">
                        Hi, I'm Vallerio 
                        <span class="animated-emoji">👋</span>
                    </h1>
                    <p class="lead text-secondary mb-4">
                        I'm an <span class="gradient-text fw-semibold">Informatics student</span> passionate about 
                        fullstack development, innovation, and building meaningful digital experiences that make a difference.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('projects') }}" class="btn btn-gradient" style="pointer-events:auto; opacity:1;">
                            <i class="fas fa-rocket me-2"></i>View My Projects
                        </a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light">
                            <i class="fas fa-user me-2"></i>About Me
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="floating-card text-center">
                    <div class="position-relative">
                        <div class="bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                             style="width: 120px; height: 120px; background: var(--primary-gradient);">
                            <i class="fas fa-code text-white fa-3x"></i>
                        </div>
                    </div>
                    <h4 class="fw-semibold mb-3">Fullstack Developer</h4>
                    <p class="text-secondary">Crafting digital solutions with modern technologies</p>
                    <div class="mt-4">
                        <span class="skill-badge">Laravel</span>
                        <span class="skill-badge">Flutter</span>
                        <span class="skill-badge">JavaScript</span>
                        <span class="skill-badge">React</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection