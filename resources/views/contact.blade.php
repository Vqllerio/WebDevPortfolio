@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<section class="py-5 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="section-title fw-bold">Get In Touch</h2>
                <p class="lead text-secondary">Let's collaborate and bring your ideas to life</p>
            </div>
        </div>

        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="floating-card h-100">
                    <h4 class="fw-semibold mb-4 gradient-text">Let's Connect</h4>
                    <p class="text-secondary mb-4">
                        I'm always open to discussing new opportunities, creative projects, 
                        or just having a chat about technology and innovation.
                    </p>

                    <div class="contact-info">
                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 50px; height: 50px;">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-semibold">Email</h6>
                                <a href="mailto:vallerio@example.com" class="text-secondary text-decoration-none">vallerio@example.com</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon bg-success rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 50px; height: 50px;">
                                <i class="fab fa-whatsapp text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-semibold">WhatsApp</h6>
                                <p class="text-secondary mb-0">+62 812-3456-7890</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon bg-info rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 50px; height: 50px;">
                                <i class="fab fa-linkedin-in text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-semibold">LinkedIn</h6>
                                <a href="#" class="text-secondary text-decoration-none">linkedin.com/in/vallerio</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="contact-icon bg-danger rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 50px; height: 50px;">
                                <i class="fab fa-github text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-semibold">GitHub</h6>
                                <a href="#" class="text-secondary text-decoration-none">github.com/vallerio</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h6 class="fw-semibold mb-3">Quick Response</h6>
                        <p class="text-secondary small">I typically reply within 24 hours. Let's make something amazing together!</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="floating-card">
                    <h4 class="fw-semibold mb-4 gradient-text">Send Message</h4>
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-secondary text-white" id="name" placeholder="Your Name">
                                    <label for="name" class="text-secondary">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-dark border-secondary text-white" id="email" placeholder="Your Email">
                                    <label for="email" class="text-secondary">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-secondary text-white" id="subject" placeholder="Subject">
                                    <label for="subject" class="text-secondary">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-dark border-secondary text-white" id="message" placeholder="Your Message" style="height: 150px"></textarea>
                                    <label for="message" class="text-secondary">Your Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-gradient w-100">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Additional Info -->
                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="floating-card text-center p-3">
                            <i class="fas fa-clock gradient-text fa-2x mb-2"></i>
                            <h6 class="fw-semibold">Response Time</h6>
                            <p class="text-secondary small mb-0">Within 24 hours</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="floating-card text-center p-3">
                            <i class="fas fa-code gradient-text fa-2x mb-2"></i>
                            <h6 class="fw-semibold">Availability</h6>
                            <p class="text-secondary small mb-0">Open for projects</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="floating-card text-center p-3">
                            <i class="fas fa-globe gradient-text fa-2x mb-2"></i>
                            <h6 class="fw-semibold">Location</h6>
                            <p class="text-secondary small mb-0">Makassar, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .contact-icon {
        transition: transform 0.3s ease;
    }

    .contact-icon:hover {
        transform: scale(1.1);
    }

    .form-control {
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #667eea !important;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        background: rgba(255, 255, 255, 0.05);
    }

    .form-floating label {
        color: rgba(255, 255, 255, 0.6) !important;
    }
</style>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        // Simulate form submission
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
        submitBtn.disabled = true;
        
        setTimeout(() => {
            // Show success message (in a real app, you'd handle the form submission properly)
            alert('Thank you for your message! I\'ll get back to you soon.');
            this.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
</script>
@endsection