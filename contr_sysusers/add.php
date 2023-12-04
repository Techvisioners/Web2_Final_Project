<!-- ADD MODAL -->
<div class="button-add">

  <!-- BUTTON FOR INCLUDE -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPopupID"
    data-bs-whatever="@mdo">CREATE ADMIN ACCOUNT</button>

  <!-- CALL MODAL -->
  <div class="modal fade" id="modalPopupID" tabindex="-1" aria-labelledby="modalPopupTitleLabel" aria-hidden="true">

    <!-- MODAL DIALOG LAYOUT -->
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- MODAL HEADER -->
        <div class="modal-header">
          <h5 class="modal-title" id="modalPopupTitleLabel"><b>CREATE ADMIN ACCOUNT</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- MODAL BODY -->
        <div class="modal-body">
          <!-- MODAL FORM -->
          <form method="POST" action="add_execute.php" enctype="multipart/form-data">

          <div class="">
            <label for="recipient-username" class="col-form-label">Username</label>
            <input type="text" class="form-control" id="recipient-username" name="Username" required onkeypress="return event.charCode !== 32">
          </div>

            <div class="">
              <label for="recipient-email" class="col-form-label">Email</label>
              <input type="email" class="form-control" id="recipient-email" name="Email" required onkeypress="return event.charCode !== 32">
              <small id="emailHelp" class="form-text small text-muted">Please enter a valid email address.</small>
            </div>

            <div class="">
              <label for="recipient-password" class="col-form-label">Password</label>
              <input type="password" class="form-control" id="recipient-password" name="Password" autocomplete="off" required onkeypress="return event.charCode !== 32">
            </div>

            <div class="">
              <label for="recipient-confirm-password" class="col-form-label">Confirm Password</label>
              <input type="password" class="form-control" id="recipient-confirm-password" name="ConfirmPassword" autocomplete="off" required onkeypress="return event.charCode !== 32">
            </div>

            <!-- MODAL FOOTER BUTTONS -->
            <div class="modal-footer">
              <!-- BUTTON TO SUBMIT FORM -->
              <button type="submit" name="submit" class="btn btn-primary">CREATE ADMIN ACCOUNT</button>
            </div>

          </form>

        </div> <!-- END OF MODAL BODY -->

      </div>
    </div>
  </div> <!-- END OF MODAL DIALOG -->

</div> <!-- END OF button-add DIV -->