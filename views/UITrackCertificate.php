<?php include 'Header-NoActive.php'; ?>

<!-- Login Form -->
<div class="container my-5" style="padding-top: 124px;">

  <div class="text-center">
    <h1><b> Track Baptismal Certificate Form</b></h1>
  </div>

  <div style="border: 1px solid #ccc; padding: 20px; border-left: 350px solid transparent; border-right: 350px solid transparent;margin-top: 50px;padding-top: 50px;">
    
    <p>Please enter your unique ticket number. You can find your ticket number in the email address you provided during registration.<br></p>
    
    <form action="index.php?m=trackcertificate" method="POST">
      <div class="form-group">
        <label for="ticketNumber">Ticket Number:</label>
        <input type="text" class="form-control" id="ticketNumber" name="ticketNumber" required>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </div>
    </form>

    <?php
    if (isset($_POST['ticketNumber'])) {
        $ticketNumber = $_POST['ticketNumber'];
        // Fetch the status and other details from the database based on the ticket number
        // For demonstration, let's assume the details are fetched and stored in variables
        
        /*
        $status = null; // This should be fetched from the database
        $ticketName = null; // Example ticket name
        $baptizedName = null; // Example name of the person being baptized
        $requesterName = null; // Example requester's name
        $requesterEmail = null; // Example requester's email
        */
        


        $status = "verification"; // This should be fetched from the database
        $ticketName = "TKT-001234"; // Example ticket name
        $baptizedName = "Carl Wendell Bayocot"; // Example name of the person being baptized
        $requesterName = "Carl Wendell Bayocot"; // Example requester's name
        $requesterEmail = "carlwendellb.bayocot@gmail.com"; // Example requester's email

        

        // Check if the ticket exists
        if ($status && $ticketName && $baptizedName && $requesterName && $requesterEmail) {
            echo '<div class="mt-5">';
            echo '<h3>Tracking Status</h3>';
            echo '<ul class="list-group">';
            echo '<li class="list-group-item ' . ($status == 'verification' ? 'active' : '') . '">Verification' . ($status == 'verification' ? ' - Your certificate is being verified.' : '') . '</li>';
            echo '<li class="list-group-item ' . ($status == 'issuance' ? 'active' : '') . '">Issuance' . ($status == 'issuance' ? ' - Your certificate is being issued.' : '') . '</li>';
            echo '<li class="list-group-item ' . ($status == 'delivery' ? 'active' : '') . '">Delivery' . ($status == 'delivery' ? ' - Your certificate is out for delivery.' : '') . '</li>';
            echo '</ul>';
            echo '</div>';

            echo '<div class="mt-5">';
            echo '<h3>Ticket Information</h3>';
            echo '<p><strong>Ticket Name:</strong> ' . $ticketName . '</p>';
            echo '<p><strong>Name of Baptized Individual:</strong> ' . $baptizedName . '</p>';
            echo '<p><strong>Requester\'s Information:</strong></p>';
            echo '<p>Name: ' . $requesterName . '</p>';
            echo '<p>Email: ' . $requesterEmail . '</p>';
            echo '</div>';
        } else {
            echo '<div class="mt-5">';
            echo '<h3>Tracking Status</h3>';
            echo '<p>No ticket found with the provided ticket number. Please check your ticket number and try again.</p>';
            echo '</div>';
        }
    }
    ?>

  </div>
</div>

