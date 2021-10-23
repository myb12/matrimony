@extends('site.layout.master')
@section('title','Address')
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
        <form 
        action="{{route('biodata.update',Auth::user()->id)}}"
        method="post"
        class="card container" style="
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
            @csrf
            @method('PUT')
          <div class="col-sm">
            <div class="form-group">
              <label for="permanent_address">স্থায়ী ঠিকানা *</label>
              <input name="permanent_address" type="text" class="form-control" id="permanent_address"
                placeholder="গ্রাম/শহর, থানা, পোষ্ট অফিস, জেলা, বিভাগ" value="{{$user->permanent_address}}">
            </div>
            <br />
            <div class="form-group">
              <label for="present_address">বর্তমান ঠিকানা *</label>
              <input  name="present_address" type="text" class="form-control" id="present_address"
                placeholder="গ্রাম/শহর, থানা, পোষ্ট অফিস, জেলা, বিভাগ" value="{{$user->present_address}}">
            </div>
            <br />
            <button type="submit" class="btn btn-info">save changes </button>

        </form>
      </div>
    </div>
  </div>
  
@endsection

@section('script')

@endsection

