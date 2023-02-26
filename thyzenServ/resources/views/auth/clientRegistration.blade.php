<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('CSS/clientRegistration.css')}}">
</head>
</head>

<body>



    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">

                            <div class="row g-0">
                                <form action="{{route('register-client')}}" method="post">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5" style="color: #4835d4;">Basic Information</h3>

                                            <!-- <div class="mb-4 pb-2" >
                                            <select class="select">
                                                <option value="1">Title</option>
                                                <option value="2">Mr.</option>
                                                <option value="3">Ms.</option>
                                                <option value="4">Mrs.</option>
                                            </select>
                                        </div> -->

                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev2">First name</label>
                                                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="First_Name" value="{{ old('First_Name') }}"/>
                                                        <span class="text-danger">@error('First_Name') {{$message}} @enderror</span>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev3">Last name</label>

                                                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" name="Last_Name" value="{{old('Last_Name')}}"/>
                                                        <span class="text-danger">@error('Last_Name') {{$message}} @enderror</span>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- <div class="mb-4 pb-2">
                                                <div class="col-md-6 mb-4"> 

                                                <h6 class="mb-2 pb-1">Gender: </h6>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked />
                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                                                    <label class="form-check-label" for="otherGender">Other</label>
                                                </div>


                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Date of Birth (DOB)</label>

                                                    <input type="text" id="form3Examplev4" placeholder="dd/mm/yyyy" class="form-control form-control-lg" />
                                                </div>
                                            </div>-->

                                            <div class="mb-4">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea9" class="form-control form-control-lg" name="email" value="{{ old('email') }}"/>
                                                    <label class="form-label" for="email">Your Email</label>
                                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <div class="form-outline form-white">
                                                    <input type="password" id="form3Examplea9" class="form-control form-control-lg" name="password"/>
                                                    <label class="form-label" for="password">Password</label>
                                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="col-lg-6 bg-indigo text-white">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Contact Information</h3>

                                            <!-- <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea2">Street</label>
                                                </div>
                                            </div> -->



                                            <div class="row">
                                                <!-- <div class="col-md-5 mb-4 pb-2">

                                                    <div class="form-outline form-white">
                                                        <input type="text" id="form3Examplea4" class="form-control form-control-lg" />
                                                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                                                    </div>

                                                </div> -->
                                                <div class="col-md-7 mb-4 pb-2">

                                                    <div class="form-outline form-white">
                                                        <input type="text" id="form3Examplea5" class="form-control form-control-lg" name="city" value="{{old('city')}}"/>
                                                        <label class="form-label" for="form3Examplea5">City</label>
                                                        <span class="text-danger">@error('city') {{$message}} @enderror</span>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea6" class="form-control form-control-lg" name="country" value="{{old('country')}}"/>
                                                    <label class="form-label" for="form3Examplea6">Country</label>
                                                    <span class="text-danger">@error('country') {{$message}} @enderror</span>
                                                </div>
                                            </div>

                                            <div class="row">


                                                <div class="col-md-7 mb-4 pb-2">

                                                    <div class="form-outline form-white">
                                                        <input type="text" id="form3Examplea8" class="form-control form-control-lg" name="Phone_Number" value="{{old('Phone_Number')}}" />
                                                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                                                        <span class="text-danger">@error('Phone_Number') {{$message}} @enderror</span>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                                <!-- <input class="form-check-input me-3" type="checkbox" value=""
                                                id="form2Example3c" /> -->

                                            </div>

                                            <!-- <a href="newlogin.html" type="button" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</a>
                                         -->
                                            <div>
                                                <button class="btn btn-block btn-secondary" type="submit">Register</button>
                                            </div>
                                            <br>
                                            <a href="login" style="color:black;">Have an account? Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>