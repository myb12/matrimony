@extends('site.layout.master')
@section('title','Home')
@section('content')
 <!-- Slider Start -->
    <div
      id="carouselExampleFade"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
      class="full"
    >
      <div class="carousel-inner" width="100%" , align-items="center" }}>
        <div class="carousel-item active">
          <img src="{{asset('assets/site/images/first.jpg')}}" class="d-block w-100" alt="first" />
        </div>
        <div class="carousel-item">
          <img src="{{asset('assets/site/images/second.jpg')}}" class="d-block w-100" alt="second" />
        </div>
        <div class="carousel-item">
          <img src="{{asset('assets/site/images/third.jpg')}}" class="d-block w-100" alt="third" />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Slider End -->

    <!-- Search From Start -->
    <div style="background-color: #f5f5f5; padding: 10px">
      <div
        class="card container"
        style="
          width: 50vh;
          margin-top: 20px;
          background-color: #ed5565;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2),
            0 12px 17px 2px rgba(0, 0, 0, 0.14),
            0 5px 22px 4px rgba(0, 0, 0, 0.12);
        "
      >
        <div class="row" ,>
          <div class="col-sm">যেমন বায়োডাটা খুঁজছি</div>
          <div class="col-sm">
            <select class="form-select" aria-label="Default select example">
              <option value="1" selected>সব বায়োডাটা</option>
              <option value="2">পাত্রের বায়োডাটা</option>
              <option value="3">পাত্রীর বায়োডাটা</option>
            </select>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-sm">যেমন বৈবাহিক অবস্থা খুঁজছি</div>
          <div class="col-sm">
            <select class="form-select" aria-label="Default select example">
              <option value="1" selected>সকল ধরনের</option>
              <option value="2">বিবাহিত</option>
              <option value="3">অবিবাহিত</option>
              <option value="2">ডিভোর্সী</option>
              <option value="3">বিপত্নীক</option>
              <option value="3">বিধবা</option>
            </select>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-sm">যে জেলায় খুঁজছেন</div>
          <div class="col-sm">
            <select class="form-select" aria-label="Default select example">
              <option value="1" selected>সকল জেলা</option>
              <option value="2">ঢাকা</option>
              <option value="3">চট্টগ্রাম</option>
              <option value="2">সিলেট</option>
              <option value="3">ময়মনসিংহ</option>
              <option value="3">বরিশাল</option>
            </select>
          </div>
        </div>
        <br />
        <div style="text-align: right">
          <button
            type="button"
            class="btn btn-success"
            style="font-weight: bold"
          >
            বায়োডাটা খুঁজুন
          </button>
        </div>
      </div>
    </div>
    <!-- Search From End -->
    <!-- Bio data Maker Start -->
    <div class="formDiv" style="text-align: center">
      <div style="padding: 20px">
        <button
          type="button"
          class="btn btn-info"
          style="padding: 20px; color: white; font-weight: bold; width: 300px"
        >
          <a href="./otherPages/form/name.html">চলুন বায়োডাটা তৈরী করি</a>
        </button>
      </div>
      <div style="padding: 20px">
        <button
          type="button"
          class="btn btn-info"
          style="padding: 20px; color: white; font-weight: bold; width: 250px"
          }}
        >
          বায়োডাটা বানানোর পদ্ধতি
        </button>
      </div>
    </div>
    <!-- Bio data Maker End -->

    <!-- Quantity of Bio Showcase Start-->
    <div class="container" id="counter" style="margin-top: 20px">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="card mb-3">
            <img
              class="card-img-top img-fluid"
              src="{{asset('assets/site/images/totalAll.png')}}"
              alt="Card image cap"
              width="400"
            />
            <div class="card-body">
              <h2 class="card-title" style="text-align: center">
                <span class="counter-value" data-count="2100">0</span> +
              </h2>
              <h5 class="card-text" style="text-align: center">
                সর্বমোট বায়োডাটা আছে
              </h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card mb-3">
            <!-- set a width on the image otherwise it will expand to full width       -->
            <img
              class="card-img-top img-fluid"
              src="{{asset('assets/site/images/man.png')}}"
              alt="Card image cap"
              width="400"
            />
            <div class="card-body">
              <h2 class="card-title" style="text-align: center">
                <span class="counter-value" data-count="1250">0</span> +
              </h2>
              <h5 class="card-text" style="text-align: center">
                মোট পাত্রের বায়োডাটা আছে
              </h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card mb-3">
            <img
              class="card-img-top img-fluid"
              src="{{asset('assets/site/images/woman.png')}}"
              alt="Card image cap"
              width="200px"
            />
            <div class="card-body">
              <h2 class="card-title" style="text-align: center">
                <span class="counter-value" data-count="850">0</span> +
              </h2>
              <h5 class="card-text" style="text-align: center">
                মোট পাত্রীর বায়োডাটা আছে
              </h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card mb-3">
            <!-- set a width on the image otherwise it will expand to full width       -->
            <img
              class="card-img-top img-fluid"
              src="{{asset('assets/site/images/totalDone.png')}}"
              alt="Card image cap"
              width="400"
            />
            <div class="card-body">
              <h2 class="card-title" style="text-align: center">
                <span class="counter-value" data-count="35">0</span> +
              </h2>
              <h5 class="card-text" style="text-align: center">
                সর্বমোট সফল সমাপ্তি
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Quantity of Bio Showcase End --->

    <!-- Quate Start -->
    <div style="background-color: #eee" class="quote">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-9 col-xl-7">
            <div class="card" style="border-radius: 15px">
              <div class="card-body p-5">
                <div class="text-center mb-4 pb-2">
                  <img
                    src="https://freepngimg.com/thumb/wedding/25737-6-wedding-heart-transparent.png"
                    alt="Bulb"
                    width="100"
                  />
                </div>
                <figure class="text-center mb-0">
                  <blockquote class="blockquote">
                    <p class="pb-3">
                      <i class="fas fa-quote-left fa-xs text-primary"></i>
                      <span class="lead font-italic">
                        বিয়ে করে পুরুষ মানুষ একটা ক্ষুদ্র সাম্রাজ্য পায়, এবং
                        স্ত্রীটি পায় একজন প্রেমময় পরিচালক।
                      </span>
                      <i class="fas fa-quote-right fa-xs text-primary"></i>
                    </p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0">
                    জন লোগান
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Quate ENd -->
@endsection

@section('script')

@endsection
