<form class="step6">
<div class="row">
  <div class="col-12">
    <h5 class="sub-page-title">Final Step</h5>
  </div>

  <div class="col-12 mt-3">
    <div class="my-form-row">
      <p class="question">Choose your plan</p>
      
      <div class="row">
        <div class="col-12 col-md-4 col-lg-12 col-xl-4 py-2">
          <div class="plan" value="gold">
            <p class="plan-title">Gold Member</p>
            <p>
              One time style fee 29 CHF<br/><br/>
              Personalized occassion based capsule. Feel ready for anything, delivered conveniently to you.<br/><br/>
              <small>Fee is waived if you purchase over 29 CHF for clothes.</small>
            </p>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-12 col-xl-4 py-2">
          <div class="plan selected" value="silver">
            <p class="plan-title">Silver Flyer</p>
            <p>
              Monthly 19 CHF<br/>(Most popular option)<br/><br/>
              Subscribe for seasonal capsule wardrobe updates, and cancel free anytime.<br/><br/>
              Refresh your closet each month with a few fresh pieces that go with what you already own.<br/><br/>
              <small>Fee is waived if you purchase over 19 CHF for clothes.</small>
            </p>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-12 col-xl-4 py-2">
          <div class="plan" value="platnium">
            <p class="plan-title">Platnium</p>
            <p>
              199 CHF Package<br/><br/>
              Personal Styling Experience Package. A day in the life...<br/><br/>
              Meet your stylist!<br/><br/>
              Go shopping at local boutiques. This includes personal tour-guide and style advice, plus lunch and site seeing, with photos taken in new clothes.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 my-3">
    <p class="question">Select Payment Option</p>

    <p>
      Only $10 for shipping and hanlding due now.
      Your credit card will not be charged unless you decide to keep some of the clothes,
      and if you do the 10$ fee will be completely waived.
    </p>
    <div class="my-form-row">
      <label class="radio-container">
        Credit Card
        <input type="radio" name="payment" value="credit-card">
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>
    </div>

    <div class="credit-card">
      <div class="my-form-row">
        <label for="step6-credit-card-number">*Credit Card Number</label>
        <input id="step6-credit-card-number" class="form-control" />
      </div>

      <div class="my-form-row">
        <label for="step6-credit-card-type">*Credit Card Type</label>
        <br/>
        <img src="/images/customer-signup/credit-cards.png" />
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="my-form-row">
            <label for="step6-expiration-month">*Expiration Date</label>
            <select id="step6-expiration-month" class="form-control" />
              <option>Month</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">Sepember</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="my-form-row">
            <label for="step6-expiration-year"></label>
            <input id="step6-expiration-year" class="form-control" />
          </div>
        </div>
      </div>

      <div class="my-form-row">
        <label for="step6-cvv">*CVV</label>
        <input id="step6-cvv" class="form-control" style="max-width: 100px; width: 100%" />
      </div>
    </div>

    <div class="my-form-row">
      <label class="radio-container">
        Paypal
        <input type="radio" name="payment" value="paypal" checked>
        <span class="checkmark">
          <i class="fas fa-check check-sign"></i>
        </span>
      </label>
    </div>
  </div>

  <div class="col-12">
    <div class="my-form-row text-right">
      <button class="round-btn next-button" type="button">Get my outfits!</button>
    </div>
  </div>
</div>
</form>
