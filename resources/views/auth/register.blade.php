@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="passwimageord" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="dropdown col-md-6">
                                <input type="file" name="image" id="">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="biodata-type" class="col-md-4 col-form-label text-md-right">Biodata Type</label>

                            <div class="dropdown col-md-6">
                                    <select name="biodata-type" id="biodata-type" class="form-control">
                                        <option  disabled selected>Plese select an option</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="marital-status" class="col-md-4 col-form-label text-md-right">Marital Status</label>

                            <div class="dropdown col-md-6">
                                    <select name="marital-status" id="marital-status" class="form-control">
                                        <option  disabled selected>Plese select an option</option>
                                        <option value="male">Married</option>
                                        <option value="female">Unmarried</option>
                                    </select>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth-year" class="col-md-4 col-form-label text-md-right">Birth Year</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="number" name="birth-year" id="birth-year">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">Height</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="height" id="height">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">Weight</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="weight" id="weight">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="blood-group" class="col-md-4 col-form-label text-md-right">Blood Group</label>

                            <div class="dropdown col-md-6">
                                    <select name="blood-group" id="blood-group" class="form-control">
                                        <option  disabled selected>Plese select an option</option>
                                        <option value="male">Married</option>
                                        <option value="female">Unmarried</option>
                                    </select>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="present-address" class="col-md-4 col-form-label text-md-right">Present Address</label>

                            <div class="col-md-6">
                                   <textarea name="present-address" id="present-address" cols="30" rows="5" class="form-control"></textarea>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="permanent-address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>

                            <div class="col-md-6">
                                   <textarea name="permanent-address" id="permanent-address" cols="30" rows="5" class="form-control"></textarea>
                             </div>
                        </div>


                        <div class="form-group row">
                            <label for="highest-degree" class="col-md-4 col-form-label text-md-right">Highest Degree</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="highest-degree" id="highest-degree">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="other-degree" class="col-md-4 col-form-label text-md-right">Other Educational Qualification</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="other-degree" id="other-degree">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="fathers-name" class="col-md-4 col-form-label text-md-right">Father's Name</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="fathers-name" id="fathers-name">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="mothers-name" class="col-md-4 col-form-label text-md-right">Mother's Name</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="mothers-name" id="mothers-name">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="fathers-occupation" class="col-md-4 col-form-label text-md-right">Father's Occupation</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="fathers-occupation" id="fathers-occupation">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="mothers-occupation" class="col-md-4 col-form-label text-md-right">Mother's Occupation</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="mothers-occupation" id="mothers-occupation">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="num-sis" class="col-md-4 col-form-label text-md-right">Number of Sisters</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="number" name="num-sis" id="num-sis">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="num-bro" class="col-md-4 col-form-label text-md-right">Number of Brothers</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="number" name="num-bro" id="num-bro">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="sisters-occupation" class="col-md-4 col-form-label text-md-right">Sister's Occupation</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="sisters-occupation" id="sisters-occupation">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="brothers-occupation" class="col-md-4 col-form-label text-md-right">Brother's Occupation</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="brothers-occupation" id="brothers-occupation">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="maternal-uncles-occupation" class="col-md-4 col-form-label text-md-right">Maternal Uncle's Occupation</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="maternal-uncles-occupation" id="maternal-uncles-occupation">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="paternal-uncles-occupation" class="col-md-4 col-form-label text-md-right">Paternal Uncle's Occupation</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="paternal-uncles-occupation" id="paternal-uncles-occupation">
                             </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="about-you" class="col-md-4 col-form-label text-md-right">About You</label>

                            <div class="col-md-6">
                                   <textarea name="about-you" id="about-you" cols="30" rows="5" class="form-control ckeditor"></textarea>
                             </div>
                        </div>


                        <div class="form-group row">
                            <label for="idea-marriage" class="col-md-4 col-form-label text-md-right">Your idea about Marriage</label>

                            <div class="col-md-6">
                                   <textarea name="idea-marriage" id="idea-marriage" cols="30" rows="5" class="form-control"></textarea>
                             </div>
                        </div>


                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="age" id="age">
                             </div>
                        </div>


                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">District</label>

                            <div class="dropdown col-md-6">
                                    <select name="district" id="district" class="form-control">
                                        <option  disabled selected>Plese select an option</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="chittagong">Chittagong</option>
                                        <option value="comilla">Comilla</option>
                                    </select>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="phone" id="phone">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="guardians-phone" class="col-md-4 col-form-label text-md-right">Guardian's Phone</label>

                            <div class="col-md-6">
                                    <input class="form-control" type="text" name="guardians-phone" id="guardians-phone">
                             </div>
                        </div>


                        <div class="form-group row">
                            <label for="type-of-partner" class="col-md-4 col-form-label text-md-right">What type of partner do you want?</label>

                            <div class="col-md-6">
                                   <textarea name="type-of-partner" id="type-of-partner" cols="30" rows="5" class="form-control"></textarea>
                             </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
