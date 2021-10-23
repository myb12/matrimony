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
              <label for="exampleInputEmail1">অর্জনকৃত সর্বোচ্চ ডিগ্রী*</label>
              <select class="form-select" aria-label="Default select example">
                <option value="1">মাধ্যমিক</option>
                <option value="2">উচ্চ মাধ্যমিক</option>
                <option value="3">স্নাতক</option>
                <option value="4">স্নাতকোত্তর</option>
              </select>
            </div>
            <br />
            <div class="form-group">
              <label for="exampleInputEmail1">অন্যান্য শিক্ষাগত যোগ্যতা</label>
              <input type="email" class="form-control" id="floatingInput"
                placeholder="শিক্ষার বিষয়, প্রতিষ্ঠানের নাম, পাসের সন ইত্যাদি।">
            </div>
            <br />
            <a href="./familyInfo.html"><button type="button" class="btn btn-info">save changes </button></a>

        </form>
      </div>
    </div>
  </div>
@endsection

@section('script')

@endsection

