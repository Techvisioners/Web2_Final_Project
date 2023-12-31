<!-- ADD MODAL -->
<div class="button-add">

  <!-- BUTTON FOR INCLUDE -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPopupID"
    data-bs-whatever="@mdo">ADD MEMBER</button>

  <!-- CALL MODAL -->
  <div class="modal fade" id="modalPopupID" tabindex="-1" aria-labelledby="modalPopupTitleLabel" aria-hidden="true">

    <!-- MODAL DIALOG LAYOUT -->
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- MODAL HEADER -->
        <div class="modal-header">
          <h5 class="modal-title" id="modalPopupTitleLabel"><b>ADD MEMBER</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- MODAL BODY -->
        <div class="modal-body">
          <!-- MODAL FORM -->
          <form method="POST" action="add_execute.php" enctype="multipart/form-data">

            <div class="">
              <label for="recipient-name" class="col-form-label">Image</label>
              <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img" required>
            </div>

            <div class="">
              <label for="recipient-name" class="col-form-label">Name</label>
              <input type="text" class="form-control" id="recipient-name" name="Name" required>
            </div>

            <!-- <div class="">
              <label for="recipient-name" class="col-form-label">Email</label>
              <input type="text" class="form-control" id="recipient-name" name="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
            </div> -->

            <div class="">
               <label for="recipient-name" class="col-form-label">Email</label>
               <input type="email" class="form-control" id="recipient-name" name="Email" required onkeypress="return event.charCode !== 32">
               <small id="emailHelp" class="form-text small text-muted">Please enter a valid email address.</small>
            </div>

            <div class="">
              <label for="recipient-name" class="col-form-label">Phone</label>
              <input type="tel" class="form-control" id="recipient-phone" name="Phone" pattern="(\+63|0)9\d{9}" required maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 11);">
              <small id="phoneHelp" class="form-text small text-muted">Please enter a valid phone number.</small>
            </div>

            <div class="">
              <label for="recipient-name" class="col-form-label">Age</label>
              <input type="text" class="form-control" id="recipient-name" name="Age" required maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 3);">
            </div>

            <div class="">
              <label for="organization-select" class="col-form-label">Organization</label>
              <select class="form-control" id="organization-select" name="Organization" required>
                <option value="">Select an organization</option>

                <!-- GETTING SELECT DATA FROM DATABASE AND POPULATE TO DROPDOWNS -->
                <?php
                include '../conn.php';
                $orgQuery = mysqli_query($conn, "SELECT Name FROM organizations");

                if ($orgQuery) {
                  while ($row = mysqli_fetch_assoc($orgQuery)) {
                    echo '<option value="' . htmlspecialchars($row['Name']) . '">' . htmlspecialchars($row['Name']) . '</option>';
                  }
                  mysqli_free_result($orgQuery);
                } else {
                  echo "Error: " . mysqli_error($conn);
                }
                ?>
              </select>
            </div>

            <!-- MODAL FOOTER BUTTONS -->
            <div class="modal-footer">
              <!-- BUTTON TO SUBMIT FORM -->
              <button type="submit" name="submit" class="btn btn-primary">ADD MEMBER</button>
            </div>

          </form>

        </div> <!-- END OF MODAL BODY -->

      </div>
    </div>
  </div> <!-- END OF MODAL DIALOG -->

</div> <!-- END OF button-add DIV -->