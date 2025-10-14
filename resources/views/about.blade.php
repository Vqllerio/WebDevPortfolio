@extends('layouts.app')
@section('title', 'About')

@section('content')
<section class="py-5 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="section-title fw-bold">About Me</h2>
                <div class="floating-card">
                    <p class="lead text-secondary mb-4">
                        I'm an <span class="gradient-text fw-semibold">18-year-old Informatics student</span> at 
                        Ciputra School of Business Makassar, specializing in fullstack development and passionate 
                        about solving real-world problems with technology.
                    </p>
                    
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle p-2 me-3">
                                    <i class="fas fa-graduation-cap text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-semibold">Education</h6>
                                    <p class="mb-0 text-secondary">Ciputra School of Business Makassar</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success rounded-circle p-2 me-3">
                                    <i class="fas fa-bullseye text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-semibold">Goal</h6>
                                    <p class="mb-0 text-secondary">Building innovative digital experiences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="floating-card">
                    <h4 class="fw-semibold mb-4 gradient-text">Technical Skills</h4>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <h6 class="fw-semibold mb-3">Frontend</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-badge">HTML/CSS</span>
                                <span class="skill-badge">JavaScript</span>
                                <span class="skill-badge">React</span>
                                <span class="skill-badge">Flutter</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-semibold mb-3">Backend</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-badge">Laravel</span>
                                <span class="skill-badge">PHP</span>
                                <span class="skill-badge">Java</span>
                                <span class="skill-badge">MySQL</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h6 class="fw-semibold mb-3">Currently Learning</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-badge">React Native</span>
                            <span class="skill-badge">Node.js</span>
                            <span class="skill-badge">Python</span>
                            <span class="skill-badge">AWS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection