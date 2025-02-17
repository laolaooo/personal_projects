<?php include 'Header-NoActive.php'; ?>

<!-- Login Form -->
<div class="container my-5" style="padding-top: 124px;">

  <div class="text-center">
    <h1><b>Baptismal Certificate Request Form</b></h1>
  </div>

  <div class="text-center">
    <h2 style="margin-top: 50px;">Requester's Information</h2>
  </div>

  <form action="index.php?m=requestformmop" method="POST">
    
    <table width="600" border="0" align="center">
      <div class="form-group">
          <tbody>

            <tr>
              <td height="30" valign="bottom">Full Name <span style="color: red;">*</span>:</td>
            </tr>
            <tr>
              <td><input class="form-control" name="Full Name" type="text" id="fullName" size="60"  required></td>
            </tr> <!-- FULL NAME -->

            <tr>
              <td height="30" valign="bottom">Email <span style="color: red;">*</span>:</td>
            </tr>
            <tr>
              <td><input class="form-control" name="Email" type="text" id="email" size="60"  required></td>
            </tr> <!-- EMAIL -->

            <tr>
              <td height="30" valign="bottom">Phone Number <span style="color: red;">*</span>:</td>
            </tr>
            <tr>
              <td><input class="form-control" name="Phone Number" type="phonenumber" id="phoneNumber"  required></td>
            </tr> <!-- PHONE NUMBER -->

            <tr>
              <td height="30" valign="bottom">Mailing Address <span style="color: red;">*</span>:</td>
            </tr>
            <tr>
              <td height="30" valign="bottom"><input class="form-control" name="Mailing Address" type="text" id="mailingAddress" size="60"  required></td>
            </tr> <!-- MAILING ADDRESS -->

            <tr>
              <td>Purpose of Request <span style="color: red;">*</span>:</td>
            </tr>
            <tr>
              <td><input class="form-control" name="Purpose Of Request" type="text" id="purposeOfRequest" size="60"  required></td>
            </tr> <!-- PURPOSE OF REQUEST -->
            
          </tbody>
        </div>
      </table>
    
    <div class="text-center">
      <h2 style="margin-top: 30px;">Baptism Details</h2>
    </div>

    <table width="600" border="0" align="center">
      <tbody>

        <tr>
          <td height="30" colspan="2" valign="bottom"><label for="textfield7">Full Name of Baptized Individual (at time of baptism) <span style="color: red;">*</span>:</label></td>
        </tr>
        <tr>
          <td colspan="2"><input class="form-control" name="Name of Baptized Individual" type="text" id="nameOfBaptized" size="60"  required></td>
        </tr> <!-- FULL NAME OF BAPTIZED -->

        <tr>
          <td width="176" height="30" valign="bottom">Date of Birth <span style="color: red;">*</span>:</td>
          <td width="180" valign="bottom">Date of Baptism:</td>
        </tr>
        <tr>
          <td><input class="form-control" name="Date Of Birth" type="date" id="dateOfBirth"  required></td>
           <!-- DATE OF BIRTH -->
          <td><input class="form-control" name="Date of Baptism" type="date" id="dateOfBaptism"></td>
           <!-- DATE OF BAPTISM -->
        </tr>

        <tr>
          <td height="30" colspan="2" valign="bottom">Father's Name <span style="color: red;">*</span>:</td>
        </tr>
        <tr>
          <td colspan="2"><input class="form-control" name="Father's Name" type="text" id="fathersName" size="60"  required></td>
        </tr> <!-- FATHER'S NAME -->

        <tr>
          <td height="30" colspan="2" valign="bottom">Mother's  Name (include maiden name) <span style="color: red;">*</span>:</td>
        </tr>
        <tr>
          <td colspan="2"><input class="form-control" name="Mother's Name" type="text" id="mothersName" size="60"  required></td>
        </tr> <!-- MOTHER'S NAME -->

        <tr>
          <td height="30" colspan="2" valign="bottom">Name of Parish/Church Where Baptism Occurred <span style="color: red;">*</span>:</td>
        </tr>
        <tr>
          <td colspan="2"><input class="form-control" type="text" name="Parish/Church" id="parishName" size="60"  required></td>
        </tr> <!-- PARISH NAME -->

      </tbody>
    </table>

    <div style="border: 1px solid #ccc; padding: 20px; border-left: 350px solid transparent; border-right: 350px solid transparent;margin-top: 50px;padding-top: 50px;">
      <p>A copy of the baptismal certificate will only be sent and mailed to the Catholic Church of the requested. <br></p>
      <p>The copy of the baptismal certificate will be mailed to the requested Catholic Church <b>within 10-14 Business days</b> of the request.<br></p>
      <p>Person requesting a copy of a baptismal certificate for their own records must pick up the requested certificate in person from the parish office of Our Lady of Lourdes. The Certificate will be available 10-14 Business days after the online request. The parish office will notify you when the certificate is ready.<br></p>
      <p>Person requesting the baptismal certificate MUST be either the parent of the child and or the child himself or herself who needs the baptismal certificate in preparation to receive a Sacrament in the Catholic Church. <br><br>
      Request for copy of baptismal certificate only applies to Our Lady of Lourdes Parish Church. Our Landy of Lourdes Parish Chursh is not responsible for requesting baptismal certificates from other Churches.</p>
      
      <p>
        <input type="checkbox" name="checkbox" id="checkbox" required>
        <label for="checkbox">I Agree <span style="color: red;">*</span></label>
      </p>
      <p>&nbsp;</p>

      <p>I hereby authorize Out Lady of Lourdes Parish Church to release a copy of requested Baptismal/ Confirmation Certificate. <br><br>
      I agree to indemnify and hold harmless Out Lady of Lourdes Parish Church, its pastor and successors in office, and all other persons connected with them for any liability for releasing this information according to my request</p>
      
      <p>
        <input type="checkbox" name="checkbox2" id="checkbox2" required>
        <label for="checkbox2">I Agree. <span style="color: red;">*</span></label>
      </p>

      <p>
        <button type="submit" class="btn btn-primary">Next</button>
      </p>
      
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
      </div>
  </form>
</div>

