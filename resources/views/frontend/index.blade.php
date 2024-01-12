@extends('frontend.layouts.app')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>@lang('Tung Nguyen')</h1>
        <p>@lang("I'm a") <span class="typed"
                                data-typed-items="@lang('Technical Leader'), @lang('Developer'), @lang('Freelancer'), @lang('Photographer'),@lang('Motorhead')"></span>
        </p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>@lang('About')</h2>
                <p>@lang('about_description')</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img
                        src="{{isset($settings)&&$settings->avatar_img?asset('storage/'.$settings->avatar_img): asset('img/avatar.jpg')}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>{{isset($settings)&&$settings->about_title?$settings->about_title: 'Web Developer & Technology Enthusiast.'}}</h3>
                    <p class="fst-italic">
                        @lang('something to say here')
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>@lang('Birthday'):</strong>
                                    <span>{{isset($settings)&&$settings->about_dob?$settings->about_dob: '03 Oct 1989'}}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                    <span>{{isset($settings)&&$settings->about_phone?$settings->about_phone: '(+84) 0914 83 1089'}}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>@lang('Address'):</strong>
                                    <span>{{isset($settings)&&$settings->about_address?$settings->about_address: 'Hanoi, Vietnam'}}</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>@lang('Age'):</strong> <span>30</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span>{{isset($settings)&&$settings->about_email?$settings->about_email: 'tungnguyenls2008@gmail.com'}}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>@lang('Freelance'):</strong>
                                    <span>@lang('Available')</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        @lang('additional_description')
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <h2>@lang('Facts')</h2>
                <p>@lang('face_description')</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{isset($settings)&&$settings->facts_num_1?$settings->facts_num_1: '473'}}" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>@lang('Happy Clients')</strong> @lang('something')</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{isset($settings)&&$settings->facts_num_2?$settings->facts_num_2: '34'}}" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>@lang('Projects')</strong> @lang('something')</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{isset($settings)&&$settings->facts_num_3?$settings->facts_num_3: '9606'}}" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>@lang('Hours Of Coding')</strong> @lang('something')</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{isset($settings)&&$settings->facts_num_4?$settings->facts_num_4: '30'}}" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>@lang('Mentored Successors')</strong> @lang('something')</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>@lang('Skills')</h2>
                <p>@lang('skill description')</p>
            </div>

            <div class="row skills-content">
                <div class="col-lg-6" data-aos="fade-up">
                    @foreach($skills as $skill)
                        @if($skill->id %2!=0)
                            <div class="progress">
                                <span class="skill">{{$skill->name}} <i class="val">{{$skill->value}}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->value}}" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    @foreach($skills as $skill)
                        @if($skill->id %2==0)
                            <div class="progress">
                                <span class="skill">{{$skill->name}} <i class="val">{{$skill->value}}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->value}}" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>@lang('Resume')</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">@lang('Summary')</h3>
                    <div class="resume-item pb-0">
                        <h4>@lang('Tung Nguyen')</h4>
                        <p><em>@lang('Dynamic and deadline-oriented PHP Developer with over 5 years of experience crafting and executing user-focused digital solutions. Proficient in conceptualizing and delivering robust web applications, from the initial coding phase to the refinement of the final, polished product.')</em></p>
                        <ul>
                            <li>{{isset($settings)&&$settings->about_address?$settings->about_address: 'Hanoi, Vietnam'}}</li>
                            <li>{{isset($settings)&&$settings->about_phone?$settings->about_phone: '(+84) 0914 83 1089'}}</li>
                            <li>{{isset($settings)&&$settings->about_email?$settings->about_email: 'tungnguyenls2008@gmail.com'}}</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">@lang('Education')</h3>
                    @foreach($resumeDetails as $resumeDetail)
                        @if($resumeDetail->type=='education')
                        <div class="resume-item">
                            <h4>{{$resumeDetail->name}}</h4>
                            <h5>{{$resumeDetail->time}}</h5>
                            <p><em>{{$resumeDetail->place}}</em></p>
                            <p>{{$resumeDetail->description}}</p>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">@lang('Professional Experience')</h3>
                   @foreach($resumeDetails as $resumeDetail)
                       @if($resumeDetail->type=='experience')
                            <div class="resume-item">
                                <h4>{{$resumeDetail->name}}</h4>
                                <h5>{{$resumeDetail->time}}</h5>
                                <p><em>{{$resumeDetail->place}}</em></p>
                                {!! $resumeDetail->details !!}
                            </div>
                       @endif
                   @endforeach
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>@lang('Portfolio')</h2>
                <p>@lang('portfolio description')</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">@lang('All')</li>
                        @php
                            $uniqueTypes = $portfolios->unique('type');
                        @endphp

                        @foreach($uniqueTypes as $portfolio)
                            <li data-filter=".filter-{{$portfolio->type}}">@readable($portfolio->type)</li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio->type}}">
                        <div class="portfolio-wrap">
                            <img src="{{asset('storage/'.$portfolio->image)}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('storage/'.$portfolio->image)}}" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="{{$portfolio->name}}"><i class="bx bx-plus"></i></a>
                                <a href="{{route('portfolio-detail',['id'=>$portfolio->id])}}" title="@lang('More Details')"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                        sint occaecati cupiditate non provident</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-binoculars"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                        cum soluta nobis est eligendi</p>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{asset('img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{asset('img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.001796881578!2d105.9397979758406!3d20.99256508901966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135af112fd24c39%3A0x449047b9da371c2e!2sS2.09%20-%20Vinhomes%20Ocean%20Park!5e0!3m2!1sen!2s!4v1704426807440!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection
