<?php include('dashboardHeader.php'); ?>

<body data-page="createcert">

    <div class="pagetitle">
      <h1>Create Certificate</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Create Certificate</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <form action="index.php?m=requestformmop" method="POST">
                <h5 class="card-title">Requester's Information</h5>
                
                <table width="650">
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

                <h5 class="card-title">Baptism Details</h5>

                <table width="650">
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

                <div class="row mb-3">
                  <div class="col-sm-10" style="padding-top: 24px;">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

</body>

<?php include('dashboardFooter.php'); ?>