@extends('site.layout.master')
@section('title','Educational qualification')
@section('content')
  <div class="fnqTitle container">
    <h3>প্রয়োজনীয় তথ্য গুলো পূরন করুন</h3>
  </div>

  <div class="container">
    <div class="row">
      <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
        <div class="breadcrumb">
          <a href="./name.html" class="breadcrumb-item" onClick=formField() id="one">নাম</a>
          <a href="./generalInfo.html" class="breadcrumb-item" onClick=formField() id="two">সাধারন তথ্য</a>
          <a href="./address.html" class="breadcrumb-item" onClick=formField() id="three">ঠিকানা</a>
          <a href="./education.html" class="breadcrumb-item" onClick=formField() id="four">শিক্ষাগত যোগ্যতা</a>
          <a href="./familyInfo.html" class="breadcrumb-item" onClick=formField() id="five">পারিবারিক তথ্য</a>
          <a href="./personalInfo.html" class="breadcrumb-item" onClick=formField() id="six">ব্যক্তিগত তথ্য</a>
          <a href="./marriageInfo.html" class="breadcrumb-item" onClick=formField() id="seven">বিয়ে সংক্রান্ত তথ্য</a>
          <a href="./lifePartner.html" class="breadcrumb-item" onClick=formField() id="night">জীবন সঙ্গীর সম্পর্কে</a>
          <a href="./contact.html" class="breadcrumb-item" onClick=formField() id="ten">যোগাযোগ</a>
        </div>
      </nav>
    </div>
    <div>
      <!-- Search From Start -->
      <div style="background-color: #f5f5f5; padding: 10px">
        <form class="card container" style="
          width: 50vh;
          margin: 20px auto;
          text-align: center;
          background-color: #FFFFFF;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2),
            0 12px 17px 2px rgba(0, 0, 0, 0.14),
            0 5px 22px 4px rgba(0, 0, 0, 0.12);
        ">
          <div class="col-sm">
            <div class="form-group">
              <label for="exampleInputEmail1">বাবার নাম *</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="বাবার নাম">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">মায়ের নাম *</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="মায়ের নাম">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">বাবার পেশা *</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="পদবী, প্রতিষ্ঠানের নাম">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">মায়ের পেশা *</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="পদবী, প্রতিষ্ঠানের নাম">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">বোনের সংখ্যা</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="যদি থাকে">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">ভাইয়ের সংখ্যা</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="যদি থাকে">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">বোনদের পেশা</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="পদবী, প্রতিষ্ঠানের নাম">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">ভাইদের পেশা</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="পদবী, প্রতিষ্ঠানের নাম">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">মামাদের পেশা</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="যদি থাকে">
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">চাচাদের পেশা</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="যদি থাকে">
            </div>
            <br />
            <a href="./personalInfo.html"><button type="button" class="btn btn-info">save changes </button></a>

        </form>
      </div>
    </div>
  </div>
@endsection