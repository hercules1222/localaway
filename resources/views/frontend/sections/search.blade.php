<section class="section-search pb-0"  >
  <div class="container">
    <div class="row check-availabilty" id="next">
      <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
        <form class = "" action="/answer" method="post">
          @csrf
          <div class = "row">
            <div class="col">
              <h2 class='text-black'>Tell us about what  you need</h2>
              <p>Weekly wardrobe? Date night? We’ve got you covered.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 mb-3 mb-lg-0 ">
              <div class="row">
                <div class="col-md-6 col-lg-6 mb-3 mb-md-0 pl-0">
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <div class = "picker-wrapper">
                      <i class="far fa-calendar-alt form-item"></i>
                      <select name="event" id="evnet" class="form-control pl-5">
                        <option class='text-black font-weight-bold' placeholder="Event Type" value="">Event Type</option>
                        <option value="Casual Friday">Casual Friday</option>
                        <option value="Holiday Party">Holiday Party</option>
                        <option value="Brunch">Brunch</option>
                        <option value="Date Night">Date Night</option>
                        <option value="Workout">Workout</option>
                        <option value="Workout">Concert</option>
                        <option value="Weekend">Weekend</option>
                        <option value="Influencer Pics">Influencer Pics</option>
                        <option value="Interview">Interview</option>
                        <option value="Interview">Vacation</option>
                        <option value="Golf">Golf</option>
                        <option value="Sleeping">Sleeping</option>
                        <option value="Wine Tasting">Wine Tasting</option>
                        <option value="Getting Outside">Getting Outside</option>
                        <option value="Cocktail Hour">Cocktail Hour</option>
                        <option value="Conference">Conference</option>
                        <option value="Travel Day">Travel Day</option>
                        <option value="Tourist Day">Tourist Day</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-3 mb-md-0 pl-0">
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <div class = "picker-wrapper">
                      <i class="fas fa-map-marker-alt form-item"></i>
                      <select name="location" id="adults" class="form-control pl-5">
                        <option class='text-black font-weight-bold' placeholder="" value="">Location</option>
                        <option value="New York">New York</option>
                        <option value="Los Angeles">Los Angeles</option>
                        <option value="Chicago">Chicago</option>
                        <option value="Houston">Houston</option>
                        <option value="Phoenix">Phoenix</option>
                        <option value="Philadelphia">Philadelphia</option>
                        <option value="San Antonio">San Antonio</option>
                        <option value="San Diego">San Diego</option>
                        <option value="Dallas">Dallas</option>
                        <option value="San Jose">San Jose</option>
                        <option value="Austin">Austin</option>
                        <option value="Jacksonville">Jacksonville</option>
                        <option value="Fort Worth">Fort Worth</option>
                        <option value="Columbus">Columbus</option>
                        <option value="San Francisco">San Francisco</option>
                        <option value="Charlotte">Charlotte</option>
                        <option value="Indianapolis">Indianapolis</option>
                        <option value="Seattle">Seattle</option>
                        <option value="Denver">Denver</option>
                        <option value="Washington">Washington</option>
                        <option value="Boston">Boston</option>
                        <option value="El Paso">El Paso</option>
                        <option value="Detroit">Detroit</option>
                        <option value="Nashville">Nashville</option>
                        <option value="Portland">Portland</option>
                        <option value="Memphis">Memphis</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Las Vegas">Las Vegas</option>
                        <option value="Louisville">Louisville</option>
                        <option value="Baltimore">Baltimore</option>
                        <option value="Milwaukee">Milwaukee</option>
                        <option value="Albuquerque">Albuquerque</option>
                        <option value="Tucson">Tucson</option>
                        <option value="Fresno">Fresno</option>
                        <option value="Mesa">Mesa</option>
                        <option value="Sacramento">Sacramento</option>
                        <option value="Atlanta">Atlanta</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Miami">Miami</option>
                        <option value="Raleigh">Raleigh</option>
                        <option value="Omaha">Omaha</option>
                        <option value="Long Beach">Long Beach</option>
                        <option value="Virginia Beach">Virginia Beach</option>
                        <option value="Oakland">Oakland</option>
                        <option value="Minneapolis">Minneapolis</option>
                        <option value="Tulsa">Tulsa</option>
                        <option value="Arlington">Arlington</option>
                        <option value="Tampa">Tampa</option>
                        <option value="New Orleans">New Orleans</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 align-self-end">
              <button type="submit" class="btn btn-block text-white btn-brown">Let's Go!</button>
            </div>
          </div>
          <div class="row pt-3 d-none">
            <div class="col d-flex">
              <div class="checkbox">
                <label>
                  <input type="checkbox">
                  <span class="cr">
                    <i class="cr-icon fa fa-check"></i>
                  </span>
                  I am traveling for work.
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>