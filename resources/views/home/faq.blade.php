@extends('home.layouts.app')
@section('content')



<!-- sec-about-banner start here -->
<section class="sec-about-banner donate-bg" style="background: linear-gradient(
    360deg,
    rgba(10, 41, 46, 0.5) 0%,
    rgba(10, 41, 46, 0.5) 100%
  ),
  url({{asset(get_cms('banner_image','faqs','value'))}}) no-repeat;
background-size: cover;
padding: 180px 0 240px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="about-details">
                    <h2>{{ get_cms('banner_tittle','faqs','value') }}</h2>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">home</a>
                        </li>
                        <span> /</span>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">{{ get_cms('banner_tittle','faqs','value') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sec-about-banner end here -->


<!-- Faq Section Start Here -->
<section class="faq-sec-main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="faq-img-div">
                    <img src="{{ asset(get_cms('section_1_image','faqs','value')) }}" alt="image" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="faq-content-main">
                    <div class="faq-cont-head">
                        <h6>{{ get_cms('section_1_heading','faqs','value') }}</h6>
                        <h2>{{ get_cms('section_1_tittle','faqs','value') }}</h2>
                        <p>{{get_cms('section_1_desc','faqs','value') }}</p>
                    </div>

                    <div class="accordion" id="accordionExample">

                        @foreach ($data as $key => $faq)
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne{{ $key }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne{{ $key }}" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $faq->question ?? ''}}</button>

                            </h2>
                            <div id="collapseOne{{ $key }}" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $faq->answer ?? ''}}
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Section End Here -->

@endsection
