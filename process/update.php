<?php
	require_once "../config.php";
    $db = new Database();
    $id = $_GET['id'];
 	  $data = $db->edit($id);
 	  $row = mysqli_fetch_assoc($data);

	  if (isset($_POST['update'])) {
	  	$data = [];
	  	$data['error'] = Validator::validate($_POST);
	     if (count($data['error']) > 0) {
	   		extract( $data['error']);
	   		foreach ($data['error'] as $key => $value) {
	   			session_start();
	   			$_SESSION['error'] = $key." is not valide";
	   		}
	   		// extract($data['error']);
	   		header("Location: " . $_SERVER['HTTP_REFERER']);

        }else{
            $id =  filter_input(INPUT_POST, $_POST['id'], FILTER_VALIDATE_INT);
            $id = $_POST['id'];
            $sanizedData = Validator::sanitize($_POST);
            if($sanizedData){
            	$db->update($_POST);
            	header("Location: ../frontend/index.php");
            }
        }
        exit;
	  }
?>


<form action=""  method="POST">
	<input type="hidden" value="<?php echo $row['ID']?>" name="ID">
	<div class="form-group row">
	  <label for="buyer_email" class="col-sm-2 col-form-label">Buyer Email <span class="text-danger">*</span> </label>
	  <div class="col-sm-10">
	 	 <input type="email" name="buyer_email" value="<?php echo $row['buyer_email']?>" required class="form-control"  id="buyer_email">
	 	 <span class=" text-danger "> <?php echo isset($buyer_email) && empty(trim($buyer_email)) ? " Buyer Email cannot be empty":'';  ?> </span>
	  </div>
	</div>
	<div class="form-group row">
	  <label for="Phone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span> </label>
	  <div class="col-sm-10">
	     <input type="text" name="phone" value="<?php echo $row['phone']?>" required class="form-control" id="phone">
	     <span class=" text-danger "> <?php echo isset($phone) && empty(trim($phone)) ? " Phone cannot be empty":'';  ?> </span>
	  </div>
	</div>
	<div class="form-group row">
	  <label for="amount" class="col-sm-2 col-form-label">Amount <span class="text-danger">*</span> </label>
	  <div class="col-sm-10">
	     <input type="text" name="amount" value="<?php echo $row['amount']?>" required class="form-control" id="amount">
	     <span class=" text-danger "> <?php echo isset($amount) && empty(trim($amount)) ? " Amount cannot be empty":'';  ?> </span>
	  </div>
	</div>
	<div class="form-group row">
	  <label for="buyer" class="col-sm-2 col-form-label">Buyer <span class="text-danger">*</span> </label>
	  <div class="col-sm-10">
	      <input type="text" name="buyer" value="<?php echo $row['buyer']?>"  required class="form-control" id="buyer">
	      <span class=" text-danger "> <?php echo isset($buyer) && empty(trim($buyer)) ? " Buyer cannot be empty":'';  ?> </span>
	  </div>
	</div>
	<div class="form-group row">
	  <label for="items" class="col-sm-2 col-form-label">Items <span class="text-danger">*</span> </label>
	    <div class="col-sm-10">
	     <input type="text" name="items" value="<?php echo $row['items']?>"  required class="form-control">
	     <span class=" text-danger "> <?php echo isset($items) && empty(trim($items)) ? " Items cannot be empty":'';  ?> </span>
	    </div>
	</div>
	<div class="form-group row">
	  <label for="receipt id" class="col-sm-2 col-form-label">Receipt ID <span class="text-danger">*</span> </label>
	  <div class="col-sm-10">
	      <input type="text" name="receipt_id"  value="<?php echo $row['receipt_id']?>" required class="form-control" id="receipt_id">
	      <span class=" text-danger "> <?php echo isset($receipt_id) && empty(trim($receipt_id)) ? "receipt id cannot be empty":'';  ?> </span>
	  </div>
	</div>
	<div class="form-group row">
	  <label for="city" class="col-sm-2 col-form-label">City <span class="text-danger">*</span></label>
	  <div class="col-sm-10">
	     <input type="text" name="city" value="<?php echo $row['city']?>" required class="form-control" id="city">
	     <span class=" text-danger "> <?php echo isset($city) && empty(trim($city)) ? " city cannot be empty":'';  ?> </span>
	  </div>
	</div>
	<div class="form-group row">
	  <label for="entry by" class="col-sm-2 col-form-label">Entry By <span class="text-danger">*</span></label>
	  <div class="col-sm-10">
	    <select class="form-select" required aria-label="entry_by" name="entry_by">
	      <option>Open this select menu</option>
	      <option value="1"<?php if($row['entry_by']=='1'){?>selected="selected"<?php }?>>Abdullah</option>
	      <option value="2"<?php if($row['entry_by']=='2'){?>selected="selected"<?php }?>>Ahmad</option>
	    </select>
	    <span class=" text-danger "> <?php echo isset($entry_by) && empty($entry_by) ? " Entry cannot be empty":'';  ?> </span>
	  </div>
	</div>
	<div class="form-group row">
	  <label for="note" required class="col-sm-2 col-form-label">Note <span class="text-danger">*</span></label>
	  <div class="col-sm-10">
	     <textarea class="form-control" id="note"  name="note" rows="3"><?php echo $row['note']?></textarea>
	     <span class=" text-danger "> <?php echo isset($note) && empty($note) ? " note cannot be empty":'';  ?> </span>
	  </div>
	</div>
	<div class="form-group row justify-content-center">
	  <div class="col-sm-8 text-center">
	     <input type="hidden" name="update" value="update">
	     <button type="submit" id="update" id="update"  name="update" 
	     	class="btn btn-primary" value="save"> Update</button>
	  </div>
	</div>
</form>
