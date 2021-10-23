@extends('site.layout.master')
@section('title','General information')
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
        class="card container"
        style="
          width: 50vh;
          margin: 20px auto;
          text-align: center;
          background-color: #FFFFFF;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2),
            0 12px 17px 2px rgba(0, 0, 0, 0.14),
            0 5px 22px 4px rgba(0, 0, 0, 0.12);
        "
      >
            @csrf
            @method('PUT')
      <div class="col-sm">
        <div class="form-group">
          <label for="exampleInputEmail1">বায়োডাটার ধরন</label>
          <select name="biodata_type" class="form-select" aria-label="Default select example">
            <!-- biodata_type -->
            @if($biodata_types)
              @foreach($biodata_types as $biodata_type)
                  <option value="{{$biodata_type->title}}">{{$biodata_type->title}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <br/>
        <div class="form-group">
          <label for="exampleInputEmail1">বৈবাহিক অবস্থা *</label>
          <select name="marital_status" class="form-select" aria-label="Default select example">
            @if($marital_status)
              @foreach($marital_status as $status)
                  <option value="{{$status->title}}">{{$status->title}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <br/>
        <div class="form-group">
          <label for="exampleInputEmail1">জন্মসন*</label>
          <select name="birth_year" class="form-select" aria-label="Default select example">
            @if($birth_years)
              @foreach($birth_years as $birth_year)
                  <option value="{{$birth_year->title}}">{{$birth_year->title}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <br/>
        <div class="form-group">
          <label for="exampleInputEmail1">উচ্চতা</label>
          <select name="height" class="form-select" aria-label="Default select example">
            @if($heights)
              @foreach($heights as $height)
                  <option value="{{$height->title}}">{{$height->title}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <br/>
        <div class="form-group">
          <label for="exampleInputEmail1">ওজন</label>
          <select name="weight" class="form-select" aria-label="Default select example">
            @if($weights)
              @foreach($weights as $weight)
                  <option value="{{$weight->title}}">{{$weight->title}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <br/>
        <div class="form-group">
          <label for="exampleInputEmail1">রক্তের গ্রুপ *</label>
          <select name="blood_group" class="form-select" aria-label="Default select example">
            <option value="জানা নেই" selected>জানা নেই</option>
            <option value="A+" >(A+)</option>
            <option value="A-"> (A-)</option>
            <option value="B+">(B+)</option>
            <option value="B-">(B-)</option> 
            <option value="O+">(O+)</option>
            <option value="O-">(O-)</option>
            <option value="AB+">(AB+)</option>
            <option value="AB-">(AB-)</option>
          </select>
        </div>
        </div>
        <br />
        <div class="form-group">
          <label for="exampleInputEmail1">পেশা *</label>
          <input name="occupation" type="text" class="form-control" id="floatingInput" placeholder="পদবী, প্রতিষ্ঠানের নাম">
        </div>
        <br/>
          
           <button class="btn btn-info" type="submit">save changes</button> 
        
        </form>
      </div>
    </div>
</div>
@endsection

@section('script')

@endsection

