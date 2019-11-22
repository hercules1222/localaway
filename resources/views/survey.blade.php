<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <title>Go Survey</title>
    <link rel="stylesheet" href="/css/newlanding/survey/survey.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/59286bb0a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid m-0 p-0">
            <nav class='row justify-content-center'>
                <h2 id="title" class="font-weight-bold" style="opacity:0;"></h2>
            </nav>
            <form class="wizard-container">
                <div class="wizard-body" style="top: 0">

                    <div class="item item-show row start-part">
                        <div class="col-4 text-center">
                            <img src="/images/newlanding/logo.png" alt="logo" width="100">       
                            <p class="h5 mt-3 text-secondary">Tell us more about your preferences and we’ll send you what you need.</p>
                            <button class="btn-circle my-3 item-button" data-key="13" id="start-button" type="button">Start</button>
                            <div class="arrow-btn">Press <strong>Enter</strong>   
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row item-show first-part">
                        <div class="col-lg-6">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2 m-0" aria-hidden="true"></i>
                                    What kind of fashion are you selling?<br>
                                </span>
                                <p class="color-blue mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="women-clothes" name="fashion_style[]" value="women's colthes">
                                <label for="women-clothes" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Women’s Clothes</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="men-clothes" name="fashion_style[]" value="women's colthes">
                                <label for="men-clothes" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Women’s Clothes</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="kid-clothes" name="fashion_style[]" value="kid's colthes">
                                <label for="kid-clothes" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Kids' Clothes</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="second-hand" name="fashion_style[]" value="second-hand colthes">
                                <label for="second-hand" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Seond-Hand Clothes</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="sustainable-brand" name="fashion_style[]" value="sustainable-brand">
                                <label for="sustainable-brand" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Sustainable Brands</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="70"  id="sales" name="fashion_style[]" value="sales">
                                <label for="sales" class="answer d-flex">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Sales-Items/Outlet</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="71"  id="accessories" name="fashion_style[]" value="accessories">
                                <label for="accessories" class="answer d-flex">
                                    <div class="character ">
                                        <span>G</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Accessories( Sunglassess, Jewelry, Bags, Hats, Scarves...)</span>
                                    </div>
                                </label>                                    

                                <input type="checkbox" data-key="72"  id="event" name="fashion_style[]" value="event">
                                <label for="event" class="answer d-flex">
                                    <div class="character ">
                                        <span>H</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Event-specific</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How many fashion items would you like to add to your L/A portfolio?<br>
                                </span>
                            </div>
                            <div class="answers my-4">
                                <input type="radio" data-key="65"  id="3-a" name="fashion_counts" value="">
                                <label for="3-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>more than 10</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="3-b" name="fashion_counts" value="">
                                <label for="3-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>more than 50</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="3-c" name="fashion_counts" value="">
                                <label for="3-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>more than 100</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Do you have an online shop, and if so, on what platform(s)?<br>
                                </span>
                                <p class="color-blue mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="4-a" name="online_shop[]" value="">
                                <label for="4-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="4-b" name="online_shop[]" value="">
                                <label for="4-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Boutique’s webpage</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="4-c" name="online_shop[]" value="">
                                <label for="4-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Instagram</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="4-d" name="online_shop[]" value="">
                                <label for="4-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Facebook</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="4-e" name="online_shop[]" value="">
                                <label for="4-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Partner shop</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="70"  id="4-f" name="online_shop[]" value="">
                                <label for="4-f" class="answer d-flex other">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Other</span>
                                        <input type="text" class="hidden-text" style="display: none;">
                                    </div>
                                </label>

                                
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What technology you are using for your online shop?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="5-a" name="shop_technology" value="">
                                <label for="5-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Shopify</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="5-b" name="shop_technology" value="">
                                <label for="5-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Magento</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="5-c" name="shop_technology" value="">
                                <label for="5-c" class="answer d-flex other">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>etc</span>
                                        <input type="text" class="hidden-text" style="display: none;">
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How big is your inventory?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="6-a" name="inventory_size" value="">
                                <label for="6-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>more than 10</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="6-b" name="inventory_size" value="">
                                <label for="6-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>more than 100</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="6-c" name="inventory_size" value="">
                                <label for="6-c" class="answer d-flex other">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>etc</span>
                                        <input type="text" class="hidden-text" style="display: none;">
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How many brands do you sell?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="7-a" name="brands_numbder" value="">
                                <label for="7-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>1</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="7-b" name="brands_numbder" value="">
                                <label for="7-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>2</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="7-c" name="brands_numbder" value="">
                                <label for="7-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>3</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="7-d" name="brands_numbder" value="">
                                <label for="7-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>4</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="69"  id="7-e" name="brands_numbder" value="">
                                <label for="7-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>more than 10</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How do you style your customers?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="8-a" name="stylist_number" value="" class="link-expand">
                                <label for="8-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>We are also stylists</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="8-b" name="stylist_number" value=""  class="link-expand">
                                <label for="8-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>We work with/ have separate stylist</span>
                                    </div>
                                </label>

                                <label class="answer expanded d-flex" style="visibility: hidden;">
                                    <span>How many:</span>
                                    <div class="answer-body">
                                        <input type="text" class="hidden-text" name="stylist_number">
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Is your boutique part of a fashion-chain?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="9-a" name="fashion_chain" value="">
                                <label for="9-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="9-b" name="fashion_chain" value="">
                                <label for="9-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What percentage of revenue comes from offline/online?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="revenue_percentage" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                        How do you combine on- and offline strategy?<br>
                                </span>
                                <!-- <p class="color-blue mt-4">Choose as many as possible</p> -->
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="combine_strategy" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What percentage of customers are locals/”friends”/referring c  vs. 1-time customers (from abroad)?<br>
                                </span>
                                <!-- <p class="color-blue mt-4">Choose as many as possible</p> -->
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="abroad_percentage" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                    <div class="item row ">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How do you advertise your brand? -online<br>
                                </span>
                                <p class="color-blue mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="13-a" name="advertize_online[]" value="">
                                <label for="13-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Google</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="13-b" name="advertize_online[]" value="">
                                <label for="13-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Facebook</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="13-c" name="advertize_online[]" value="">
                                <label for="13-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Instagram</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="13-d" name="advertize_online[]" value="">
                                <label for="13-d" class="answer d-flex other">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>etc</span>
                                        <input type="text" class="hidden-text" style="display: none;">
                                    </div>
                                </label>

                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row first-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How do you advertise your brand? -offline<br>
                                </span>
                                <p class="color-blue mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="14-a" name="advertize_offline[]" value="">
                                <label for="14-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Flyers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="14-b" name="advertize_offline[]" value="">
                                <label for="14-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Newspaper</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="14-c" name="advertize_offline[]" value="">
                                <label for="14-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Magazine</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="14-d" name="advertize_offline[]" value="">
                                <label for="14-d" class="answer d-flex other">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>etc</span>
                                        <input type="text" class="hidden-text" style="display: none;">
                                    </div>
                                </label>

                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>




                    <div class="item row second-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What are your target customers?<br>
                                </span>
                                <p class="color-blue mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="15-a" name="taget_customer[]" value="">
                                <label for="15-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Low income level</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="15-b" name="taget_customer[]" value="">
                                <label for="15-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Medium income level</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="15-c" name="taget_customer[]" value="">
                                <label for="15-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>High income level</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="15-d" name="taget_customer[]" value="">
                                <label for="15-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Age below 30</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="15-d" name="taget_customer[]" value="">
                                <label for="15-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Age between 30 and 50</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="70"  id="15-d" name="taget_customer[]" value="">
                                <label for="15-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>F</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Age 50+</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="71"  id="15-d" name="taget_customer[]" value="">
                                <label for="15-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>G</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Local customers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="72"  id="15-d" name="taget_customer[]" value="">
                                <label for="15-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>H</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>International customers</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="73"  id="15-d" name="taget_customer[]" value="">
                                <label for="15-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>I</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Likely to travel </span>
                                    </div>
                                </label>

                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row second-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What are the buying habits of your customers?<br>
                                </span>
                                <p class="color-blue mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="16-a" name="customer_habit[]" value="">
                                <label for="16-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>brand loyalty</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="16-b" name="customer_habit[]" value="">
                                <label for="16-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>impulse buyer</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="16-c" name="customer_habit[]" value="">
                                <label for="16-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>price awareness</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="68"  id="16-d" name="customer_habit[]" value="">
                                <label for="16-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>quality awareness</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="69"  id="16-d" name="customer_habit[]" value="">
                                <label for="16-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>unique features they look out for</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>


                    <div class="item row third-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Do you need a photographer to come by and take pictures of your fashion portfolio?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="17-a" name="photographer_needed" value="">
                                <label for="17-a" class="answer d-flex">
                                    <div class="character">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="17-b" name="photographer_needed" value="">
                                <label for="17-b" class="answer d-flex">
                                    <div class="character">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No, I have enough capacity and the skills to take pictures myself (based on guidelines)</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="17-c" name="photographer_needed" value="">
                                <label for="17-c" class="answer d-flex">
                                    <div class="character">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No, I already have illustrations of my fashion portfolio</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How often would you need the service of a photographer?<br>(OR how often does your collection change?)<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="18-a" name="photographer_period" value="">
                                <label for="18-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Never</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="18-b" name="photographer_period" value="">
                                <label for="18-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Once/month</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="18-c" name="photographer_period" value="">
                                <label for="18-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Every 4 months</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="18-d" name="photographer_period" value="">
                                <label for="18-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Every 6 months</span>
                                    </div>
                                </label>    

                                <input type="radio" data-key="69"  id="18-e" name="photographer_period" value="">
                                <label for="18-e" class="answer d-flex">
                                    <div class="character ">
                                        <span>E</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Once/year</span>
                                    </div>
                                </label>    
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How would you like to get notified in case of a sold item?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="19-a" name="communication_tool" value="">
                                <label for="19-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>E-Mail</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="19-b" name="communication_tool" value="">
                                <label for="19-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Text Message</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="19-c" name="communication_tool" value="">
                                <label for="19-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Other</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Do you use an Inventory Management System (IMS)?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="20-a" name="use_IMS" value="" class="if">
                                <label for="20-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="20-b" name="use_IMS" value="" class="if">
                                <label for="20-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row if-no" style="visibility:hidden;">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    If no, how do you keep your inventory up-to-date?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="21-a" name="inventory_update_method" value="">
                                <label for="21-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Excel</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="21-b" name="inventory_update_method" value="">
                                <label for="21-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Paper</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row if-yes" style="visibility:hidden;">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    If yes (1), what kind of IMS do you use?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="22-a" name="IMS_type" value="">
                                <label for="22-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Excel</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="22-b" name="IMS_type" value="">
                                <label for="22-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Software-Based: Name</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row if-yes" style="visibility:hidden;">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    If yes (2), do you sell your clothes through 3rd party platforms like Amazon?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="23-a" name="3rd_party" value="">
                                <label for="23-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, It is </span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="23-b" name="3rd_party" value="">
                                <label for="23-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, It is </span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="23-c" name="3rd_party" value="">
                                <label for="23-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No, but I am open to sell clothes through a curated 3rd party platform</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="23-d" name="3rd_party" value="">
                                <label for="23-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No, but I am open to advertise your clothes/brand on 3rd party platform</span>
                                    </div>
                                </label>


                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Is the shipping	 of clothes a logistic possibility for you?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="24-a" name="logistic_possibility" value="">
                                <label for="24-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No </span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="24-b" name="logistic_possibility" value="">
                                <label for="24-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, international shipping</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="24-c" name="logistic_possibility" value="">
                                <label for="24-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, but inland shipping only</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="68"  id="24-d" name="logistic_possibility" value="">
                                <label for="24-d" class="answer d-flex">
                                    <div class="character ">
                                        <span>D</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, but only by courier (parcel pick-up service)</span>
                                    </div>
                                </label>


                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row ">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What payment services do you accept?<br>
                                </span>
                                <p class="color-blue mt-4">Choose as many as possible</p>
                            </div>
                            <div class="answers mt-4">
                                <input type="checkbox" data-key="65"  id="25-a" name="paymnet_method[]" value="">
                                <label for="25-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Credit Card</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="66"  id="25-b" name="paymnet_method[]" value="">
                                <label for="25-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Debit</span>
                                    </div>
                                </label>

                                <input type="checkbox" data-key="67"  id="25-c" name="paymnet_method[]" value="">
                                <label for="25-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Paypal</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Would you agree on shipping several sizes to a customer (for fitting purposes)?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="26-a" name="shipping_several" value="">
                                <label for="26-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="26-b" name="shipping_several" value="">
                                <label for="26-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row third-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Do you accept returns (from LocalAway buyers)?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="27-a" name="accept_return" value="">
                                <label for="27-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="27-b" name="accept_return" value="">
                                <label for="27-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="27-c" name="accept_return" value="">
                                <label for="27-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes, but not for sales items</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>




                    <div class="item row forth-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What do you expect from partnering with L/A?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="28-a" name="expect" value="">
                                <label for="28-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>1</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="28-b" name="expect" value="">
                                <label for="28-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>2</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="67"  id="28-c" name="expect" value="">
                                <label for="28-c" class="answer d-flex">
                                    <div class="character ">
                                        <span>C</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>3</span>
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    I would agree to give LocalAway 10% of the price of items sold via the platform<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input type="radio" data-key="65"  id="29-a" name="fee" value="" class='link-expand'> 
                                <label for="29-a" class="answer d-flex">
                                    <div class="character ">
                                        <span>A</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>Yes</span>
                                    </div>
                                </label>

                                <input type="radio" data-key="66"  id="29-b" name="fee" value="" class='link-expand'>
                                <label for="29-b" class="answer d-flex">
                                    <div class="character ">
                                        <span>B</span>
                                    </div>
                                    <div class="answer-body">
                                        <span>No</span>
                                    </div>
                                </label>

                                <label class="answer expanded d-flex" style="visibility: hidden;">
                                    <span>Why:</span>
                                    <div class="answer-body">
                                        <input type="text" class="hidden-text" name="stylist_number">
                                    </div>
                                </label>
                            </div>
                            <div class="arrow-btn" style="opacity:0;">   
                                <a class="btn btn-primary ok-button">OK</a>
                                Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    How would you like to be contacted in the future?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="contact" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    Would you like to add anything?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="anything" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                    <div class="item row forth-part">
                        <div class="col-lg-6 ">
                            <div class="question">
                                <span class="h3">
                                    <i class="fa fa-long-arrow-right arrow2" aria-hidden="true"></i>
                                    What is your boutique’s address?<br>
                                </span>
                            </div>
                            <div class="answers mt-4">
                                <input class="text-answer" type="text"  name="address" value="" placeholder = "Type your answer here..." >
                            </div>
                        </div>
                    </div>

                </div>
            </form>

            
            <div class="navigation-bar p-5 d-flex" style="opacity:0;">
                <div id="myProgress">
                    <div id="myBar"></div>
                </div>
                <button class="btn btn-primary prev-button mx-2">Prev</button>
                <button class="btn btn-primary next-button">Next</button>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="/js/survey/survey.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>