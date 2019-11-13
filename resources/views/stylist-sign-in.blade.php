<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Become a stylist </title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="/images/orange-logo.png" rel="icon" type="image/x-icon" />
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
      <link rel="stylesheet" type="text/css" href = "/css/stylist-sign.css">
      <!-- Theme Style -->
    </head>
    <body>
        <div class="container-fluid ">
            <div class='row' id="logo">
                <a class="logo" href="/">
                    <img class="d-lg-block" src="/images/logo.png" alt="logo">  
                    <!-- <img class="d-block d-lg-none" src="/images/orange-logo.jpg" alt="mobile-logo">   -->
                </a>
            </div>
            <div class="row signup">
                <div class="col-lg-7 my-auto">
                    <div class="row">
                        <div class="col-10 offset-1 my-4">
                            <div class="d-flex" style="flex-direction: column;height: 100%;justify-content: space-between;">
                                <form action="">
                                    <div id="step-1">
                                        <h1 class="font-weight-bold mb-5 title">Are you representing a retail brand, boutique or are an independant stylist?</h1>
                                        <label class="radio-container mb-4">
                                            Boutique/Brand
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark">
                                                <i class="fas fa-check  check-sign"></i>
                                            </span>
                                        </label>
                                        <label class="radio-container">
                                            Independent
                                            <input type="radio" name="radio">
                                            <span class="checkmark">
                                                <i class="fas fa-check  check-sign"></i>
                                            </span>
                                        </label>
                                        <div class="text-right" style="margin-top: 7em;">
                                            <a class="btn circle-btn btn-primary text-white font-weight-bold py-3 " id="step1" style>
                                            Next Section
                                            </a>
                                        </div>
                                    </div>

                                    <div id="step-2" class="mt-5" style="display: none;">
                                        <h1 class="font-weight-bold mb-5 title">Start your new side job <br>-home office or freelance - <br>and earn money styling customers.</h1>
                                        <div class="">
                                            <span class ='font-weight-bold question'>Question 1
                                                <h5 class = 'text-dark mt-2'>What location or event are you an expert stylist in?</h5>
                                            </span>

                                            <label class="radio-container">
                                                Africa
                                                <input type="radio"  name="radio">
                                                <span class="checkmark">
                                                    <i class="fas fa-check check-sign"></i>
                                                </span>
                                            </label>
                                            <label class="radio-container">
                                                America
                                                <input type="radio" name="radio">
                                                <span class="checkmark">
                                                    <i class="fas fa-check check-sign"></i>
                                                </span>
                                            </label>
                                            <label class="radio-container">
                                                Asia
                                                <input type="radio" name="radio">
                                                <span class="checkmark">
                                                    <i class="fas fa-check check-sign"></i>
                                                </span>
                                            </label>
                                            <label class="radio-container">
                                                Oceania
                                                <input type="radio" name="radio">
                                                <span class="checkmark">
                                                    <i class="fas fa-check check-sign"></i>
                                                </span>
                                            </label>
                                            <label class="radio-container">
                                                Europe
                                                <input type="radio" name="radio">
                                                <span class="checkmark">
                                                    <i class="fas fa-check check-sign"></i>
                                                </span>
                                            </label>
                                            <label class="radio-container">
                                                Other
                                                <input type="radio" name="radio">
                                                <span class="checkmark">
                                                    <i class="fas fa-check check-sign"></i>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="mt-5">
                                            <span class ='font-weight-bold question'>Question 2
                                                <h5 class = 'text-dark mt-2'>How many hours would you like to work as a LocalAway expert each week?</h5>
                                            </span>
                                            <div>
                                                <span onclick="javascript:minusfunction()" class = "signature">-</span>
                                                <span id = "hours" class = "number">15</span>
                                                <span id = "plus" class = "signature">+</span>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <span class ='font-weight-bold question'>Question 3
                                                <h5 class = 'text-dark mt-2'>Interested? Tell us about yourself:</h5>
                                            </span>
                                            <div class="form-group mt-2">
                                                <label for="name" class="mt-2 text-secondary small">{{ __('Name') }}</label>
                                                <input id="name" type="name" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="">
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="email" class="mt-2 text-secondary small">{{ __('Email') }}</label>
                                                <input id="email" type="email" class="form-control border-none kt-portlet--border-bottom-danger" name="email" value="">
                                            </div>
                                        </div>
                                        <div class="text-right" style="margin-top: 7em;">
                                            <a class="btn circle-btn btn-primary text-white font-weight-bold py-3" id = "step2">
                                            Next Section
                                            </a>
                                        </div>
                                    </div>

                                    <div id="step-3" class = "mt-5" style="display: none;">
                                        <h1 class="font-weight-bold mb-5">Find out what you can earn as a local stylist.</h1>
                                        <div class="">
                                            <h5 class = 'text-dark mt-2 mb-4'>Martin, do you want to improve your chances? Send us  your resume and why you want ot be part of Local Away?</h5>
                                            <span class ='font-weight-bold question'>
                                                <i class="fas fa-upload"></i>    
                                                Upload Resume
                                                <p class='small text-dark ml-4 font-weight-bold'>Acceptable file types:doc,pdf</p>
                                            </span>
                                            <div class='upload-form d-flex justify-content-center align-items-center'>
                                                <label class= 'd-none d-lg-block'>Drag file here or</label>
                                                <label for="file-uploader" class='font-weight-bold upload-btn ml-lg-2'>Pick it from your computer</label>
                                                <input type="file" id="file-uploader">
                                            </div>
                                        </div>
                                        <div class = "mt-4">
                                            <span class ='font-weight-bold question'>
                                                Cover Letter
                                                <h5 class = 'text-dark mt-2'>Lorem ipsum dolor sit amet, consecteru adipiscing elit , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam?</h5>
                                                <div class="form-group ">
                                                    <label for="name" class="mt-3 text-secondary small">{{ __('Cover letter') }}</label>
                                                    <input id="name" type="name" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="">
                                                    <input id="name" type="name" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="">
                                                    <input id="name" type="name" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="">
                                                </div>
                                            </span>
                                            <span class ='font-weight-bold question'>
                                                LinkedIn Profile
                                                <div class="form-group">
                                                    <label for="name" class="text-secondary small">{{ __('URL') }}</label>
                                                    <input id="name" type="name" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="">
                                                </div>
                                            </span>
                                            <span class ='font-weight-bold question '>
                                                Relevant Link
                                                <div class="form-group ">
                                                    <label for="name" class=" text-secondary small">{{ __('URL') }}</label>
                                                    <input id="name" type="name" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="">
                                                    <label for="name" class=" text-secondary small">{{ __('URL') }}</label>
                                                    <input id="name" type="name" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="">
                                                    <label for="name" class=" text-secondary small">{{ __('URL') }}</label>
                                                    <input id="name" type="name" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="">
                                                </div>
                                            </span>
                                        </div>
                                        <div class='mt-5'>
                                            <label class="radio-container">
                                                <h5 class = 'text-dark px-2 mt-2 mb-4'>Please agree to our guidelines so that we can reach you.</h5>
                                                <input type="checkbox"  name="radio">
                                                <span class="checkmark">
                                                    <i class="fas fa-check check-sign "></i>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="text-right" style="margin-top: 7em;">
                                            <a class="btn circle-btn btn-primary text-white font-weight-bold py-3 " id = "step3">
                                            Submit
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div id="step-4" class = "m-auto col-10" style="display: none;">
                                        <h1 class="font-weight-bold mb-5 question text-center congrate title">Congratulations!</h1>
                                        <h4 class='text-center'>We have received your application <br>and will get in touch soon!</h3>
                                        <div class="text-center mt-4">
                                            <a class="btn circle-btn btn-primary text-white font-weight-bold py-3 ">
                                            localaway.com
                                            </a>
                                        </div>
                                        <div class='text-center mt-4'>
                                            <a href= ""  class='text-center small question a-link' id = "step4">View First Time Stylist</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 back-image d-lg-block d-none">
                    <div class="row mt-5">
                        <div class="col p-0" id="myProgress">
                            <div id="myBar"></div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col">
                            <h1 id = "title">Become part of the LocaAway Family</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/js/dropzone.js"></script>
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/stylist-sign-in.js"></script>
     
