<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer Sign Up </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="/images/orange-logo.png" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" type="text/css" href = "/css/pages/customer-signup.css">

  <!-- Custom Font Style -->
  <style type="text/css">
    @font-face {
      font-family: Avenir-Black;
      src: url("/fonts/Avenir-Black.ttf");
    }
    
    @font-face {
      font-family: Poppins-Regular;
      src: url("/fonts/Poppins-Regular.ttf");
    }
  </style>
</head>
<body>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-5 side-image d-lg-block d-none p-0">
        <div class="back-image" step="step-1"></div>
        <div class="back-image" step="step-2" style="display:none;"></div>
        <div class="back-image" step="step-3" style="display:none;"></div>
        <div class="back-image" step="step-4" style="display:none;"></div>
        <div class="back-image" step="step-5" style="display:none;"></div>
        <div class="back-image" step="step-6" style="display:none;"></div>

        <div class="side-image-overlay">
          <a class="logo" href="/">
            <img class="d-lg-block" src="/images/logo.png" alt="logo">
          </a>
          <div class="side-progress-bar">
            <div class="progress-value"></div>
          </div>
          <div class="image-title">
            <p class="px-3">Feel ready and prepared for any trip or event</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-7 offset-lg-5 p-5">
        <form id="customer-signup" action="/cutomer-signup" method="post" enctype="multipart/form-data">
          @csrf
          <div id="step-1" class="step" step="1">
            @include ('customer.signup.step1')
          </div>

          <div id="step-2" class="step" step="2" style="display: none;">
            @include ('customer.signup.step2')
          </div>

          <div id="step-3-woman" class="step" step="3" style="display: none;">
            @include ('customer.signup.step3-woman')
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script type="text/javascript" src="/js/dropzone.js"></script>
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/pages/customer-signup.js"></script>

