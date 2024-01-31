@extends('LandingPage.layout.main')
@section('content')
    <!-- Hero Start -->
    <div class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-text">
                        <h1>Selamat Datang di Ahlinya Ayam</h1>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasell nec pretum mi. Curabi ornare velit non. Aliqua metus
                            tortor auctor quis sem.
                        </p>
                        <a class="btn" href="https://htmlcodex.com/barber-shop-template">Download Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="img/ayam.png" alt="Hero Image">
                    </div>
                </div>
            </div>
            {{-- <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                data-target="#videoModal">
                <span></span>
            </button> --}}
        </div>
    </div>
    <!-- Hero End -->

    <!-- Video Modal Start-->
    {{-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="img/ayam-sakit.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Learn About Us</p>
                        <h2>25 Years Experience</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                            facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                            viverra quis sem.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                            facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                            viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis
                            porttitor. Aliquam interdum at lacus non blandit.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->
    {{-- <div class="testimonial">
        <div class="container">
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <img src="img/testimonial-1.jpg" alt="Image">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut mollis mauris. Vivamus egestas
                        eleifend dui ac consequat. Fusce venenatis at lectus in malesuada. Suspendisse sit amet dolor et
                        odio varius mattis.
                    </p>
                    <h2>Client Name</h2>
                    <h3>Profession</h3>
                </div>
                <div class="testimonial-item">
                    <img src="img/testimonial-2.jpg" alt="Image">
                    <p>
                        Phasellus pellentesque tempus pretium. Quisque in enim sit amet purus venenatis porttitor sed non
                        velit. Vivamus vehicula finibus tortor. Aliquam vehicula molestie pulvinar. Sed varius libero in leo
                        finibus, ac consectetur tortor rutrum.
                    </p>
                    <h2>Client Name</h2>
                    <h3>Profession</h3>
                </div>
                <div class="testimonial-item">
                    <img src="img/testimonial-3.jpg" alt="Image">
                    <p>
                        Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut
                        vestibulum massa. Integer quis magna non enim luctus interdum. Phasellus sed eleifend erat. Aliquam
                        ligula ex, semper vel tempor pellentesque, pretium eu nulla.
                    </p>
                    <h2>Client Name</h2>
                    <h3>Profession</h3>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Team Start -->
    {{-- <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Barber Team</p>
                <h2>Meet Our Hair Cut Expert Barber</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Master Barber</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Hair Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Gloria Edwards</h2>
                            <p>Beard Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Color Expert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


    <!-- Contact Start -->
    {{-- <div class="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject"
                                        required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Contact End -->


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest From Blog</p>
                <h2>Jenis Penyakit Ayam</h2>
            </div>
            <div class="owl-carousel blog-carousel">
                @foreach ($landingpagePenyakit as $penyakitlandingpage)
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/storage/{{ $penyakitlandingpage->gambar }}" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">{{ $penyakitlandingpage->kode_penyakit }}</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>{{ $penyakitlandingpage->due_date }}</p>
                        </div>
                        <div class="blog-text">
                            <h2><a href="/home/{{ $penyakitlandingpage->id }}">{{ $penyakitlandingpage->nama_penyakit }}</a>
                            </h2>
                            <p>
                                {{ Illuminate\Support\Str::limit($penyakitlandingpage->definisi, 100) }}
                            </p>
                            <h2>Pencegahan</h2>
                            <p>
                                {{ Illuminate\Support\Str::limit($penyakitlandingpage->penangganan, 150) }}
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
