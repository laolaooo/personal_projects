<?php include 'Header-NoActive.php'; ?>

<!-- Login Form -->
<div class="container my-5" style="padding-top: 124px;">

  <div class="text-center">
    <h1><b>Baptismal Certificate Request Form</b></h1>
  </div>
  
  <div class="text-center">
    <h2 style="margin-top: 50px;">Mode of Payment</h2>
  </div>

  <form action="index.php?m=requestformcomplete" method="POST">
    <div style="border: 1px solid #ccc; padding: 20px; border-left: 350px solid transparent; border-right: 350px solid transparent;margin-top: 50px;padding-top: 50px;">
      <p>Please select your preferred mode of payment for the baptismal certificate processing fee:</p>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMode" id="paymentMode1" value="gcash" required>
        <label class="form-check-label" for="paymentMode1">
        GCash
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMode" id="paymentMode2" value="creditCard" required>
        <label class="form-check-label" for="paymentMode2">
        Credit Card
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMode" id="paymentMode3" value="paypal" required>
        <label class="form-check-label" for="paymentMode3">
        PayPal
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMode" id="paymentMode4" value="bankTransfer" required>
        <label class="form-check-label" for="paymentMode4">
        Bank Transfer
        </label>
      </div>
      
      <p class="text-center" style="margin-top: 20px;">You will be directed to your selected mode of payment.</p>
      
      <div class="text-center" style="margin-top: 50px;">
        <button type="submit" class="btn btn-primary">Next</button>
      </div>
    </div>
  </form>
</div>

