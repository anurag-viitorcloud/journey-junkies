@extends('layouts.app')
<style>
    .main-title{

color: var(--natural-1, #252525);

text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);

font-size: 40px;

font-family: Inter;

font-weight: 600;

line-height: 24px;

}




.sub-title{

color: var(--natural-2, #464D53);

text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);

font-size: 22px;

font-family: Inter;

line-height: 24px;

}
</style>
@section('content')
    <div class="pagetitle" >
        <h1 class="mt-5 main-title">Hey, {{ auth()->user()->name }} 👋</h1>
        <h3 class="mt-3 sub-title">What are your thoughts today?</h3>
    </div><!-- End Page Title -->

    <section class="section dashboard pt-8">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row mt-5 pt-5">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6 ">
                        <div class="card info-card sales-card">

                            <div class="card-body pt-4">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/vector52.png') }}">
                                    </div>
                                    <div class="ps-3">
                                        <h6>Email Personalization</h6>
                                        <span class="text-muted small pt-1 fw-bold">Personalized for email out reach</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body pt-4">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/gmail.png') }}">
                                    </div>
                                    <div class="ps-3">
                                        <h6>Linkdin Personalization</h6>
                                        <span class="text-muted small pt-1 fw-bold">Personalized intro for linkdin</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body pt-4">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/social-media-caption.png') }}">
                                    </div>
                                    <div class="ps-3">
                                        <h6>My Digital Diary</h6>
                                        <span class="text-muted small pt-1 fw-bold">Write your thoughts of the day</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->



                </div>
            </div><!-- End Left side columns -->

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body pt-4">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/blog.png') }}">
                                    </div>
                                    <div class="ps-3">
                                        <h6>Blog Ideas</h6>
                                        <span class="text-muted small pt-1 fw-bold">get greate blog ideas in few clicks</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body pt-4">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/website.png') }}">
                                    </div>
                                    <div class="ps-3">
                                        <h6>Website Headlines</h6>
                                        <span class="text-muted small pt-1 fw-bold">for your website and maketing</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body pt-4">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/product.png') }}">
                                    </div>
                                    <div class="ps-3">
                                        <h6>Product Descriptions</h6>
                                        <span class="text-muted small pt-1 fw-bold">Craft a caption for your product</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->



                </div>
            </div><!-- End Left side columns -->

             <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
  
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body pt-4">
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/google.png') }}">
                      </div>
                      <div class="ps-3">
                        <h6>Google Ad Copy</h6>
                        <span class="text-muted small pt-1 fw-bold">That converts more customers</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body pt-4">
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/social-media-caption.png') }}">
                      </div>
                      <div class="ps-3">
                        <h6>Social Media Post</h6>
                        <span class="text-muted small pt-1 fw-bold">facebook or instagram post</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body pt-4">
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/facebook.png') }}">
                      </div>
                      <div class="ps-3">
                        <h6>Facebook Ad Copy</h6>
                        <span class="text-muted small pt-1 fw-bold">That convert more customers</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->



            </div>
          </div><!-- End Left side columns -->
        </div>
    </section>
@endsection
