<?php include('header.php'); ?> 
      <div class="row">
        <div class="col-md-8">
          <?php
            session_start();
              if (isset($_SESSION['error'])) {
                 echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
                 unset($_SESSION['error']);
                }
          ?>
          <form action="../process/process.php"  method="POST">
            <div class="form-group row">
              <label for="buyer_email" class="col-sm-2 col-form-label">Buyer Email <span class="text-danger">*</span> </label>
              <div class="col-sm-10">
                <input type="email" name="buyer_email" required class="form-control"  id="buyer_email">
                <span class="text-dagner"><?php echo isset($buyer_email) && empty(trim($buyer_email)) ? " Phone  cannot be empty":null;  ?></span>
              </div>
            </div>
            <div class="form-group row">
              <label for="Phone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span> </label>
              
              <div class="col-sm-10">
                 <input type="text" name="phone" required class="form-control" id="phone">
                <span class="text-dagner"><?php echo isset($phone) && empty(trim($phone)) ? " City  cannot be empty":null;  ?></span>
              </div>
            </div>
            <div class="form-group row">
              <label for="amount" class="col-sm-2 col-form-label">Amount <span class="text-danger">*</span> </label>
              <div class="col-sm-10">
                 <input type="text" name="amount" required class="form-control" id="amount">
             <span class="text-dagner"><?php echo isset($amount) && empty(trim($phone)) ? " Phone  cannot be empty":null;  ?></span>
              </div>
            </div>
            <div class="form-group row">
              <label for="buyer" class="col-sm-2 col-form-label">Buyer <span class="text-danger">*</span> </label>
              <div class="col-sm-10">
                  <input type="text" name="buyer" required class="form-control" id="buyer">
                  <span class="text-dagner"><?php echo isset($buyer) && empty(trim($buyer)) ? " Buyer cannot be empty":null;  ?></span>
              </div>
            </div>
            <div class="form-group row">
              <label for="items" class="col-sm-2 col-form-label">Items <span class="text-danger">*</span> </label>
                <div class="col-sm-10">
                 <input type="text" name="items"  required class="form-control">
                  <span class="text-dagner"><?php echo isset($items) && empty(trim($items)) ? " Items cannot be empty":null;  ?></span>
                </div>
            </div>
            <div class="form-group row">
              <label for="receipt id" class="col-sm-2 col-form-label">Receipt ID <span class="text-danger">*</span> </label>
              <div class="col-sm-10">
                  <input type="text" name="receipt_id" required class="form-control" id="receipt_id">
                  <span class="text-dagner"><?php echo isset($receipt_id) && empty(trim($receipt_id)) ? " Receipt Id cannot be empty":null;  ?></span>
              </div>
            </div>
            <div class="form-group row">
              
              <label for="city" class="col-sm-2 col-form-label">City <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                 <input type="text" name="city" required class="form-control" id="city">
                 <span class=" text-danger "> <?php echo isset($city) && empty(trim($city)) ? " City cannot be empty":'';  ?> </span>
              </div>
            </div>
            <div class="form-group row">

              <label for="entry by" class="col-sm-2 col-form-label">Entry By <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <select class="form-select" required aria-label="entry_by" name="entry_by">
                  <option selected>Open this select menu</option>
                  <option value="1">Abdullah</option>
                  <option value="2">Ahmad</option>
                </select>
                <span class=" text-danger "> <?php echo isset($entry_by) && empty($entry_by) ? " Entry cannot be empty":'';  ?> </span>
              </div>
            </div>
            <div class="form-group row">
              <label for="note" required class="col-sm-2 col-form-label">Note <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                 <textarea class="form-control" id="note" name="note" rows="3" required></textarea>
                 <span class=" text-danger "> <?php echo isset($note) && empty($note) ? " Note cannot be empty":'';  ?> </span>
              </div>
            </div>
            <div class="form-group row justify-content-center">
              <div class="col-sm-8 text-center">
                 <input type="hidden" name="submit" value="save">
                 <button type="submit" id="submit" id="submit" name="submit" class="btn btn-primary" value="save"> Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
<?php include('footer.php')?> 

