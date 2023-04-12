<?php include('header.php')?> 
  <div class="row">
    <div class="col-sm-12">
    	<div class="m-2">
	        <form action="" method="GET" id="search_form">
	            <input type="text" name="search_id"  id="search_value" placeholder="search by id" required>
	            <input type="submit" name="search"  class="btn btn-success btn-sm mb-1" value="search" id="search" >
	        </form>
	    </div>
    	<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Receipt Id</th>
		      <th scope="col">Items</th>
		      <th scope="col">Phone</th>
		      <th scope="col">Amount</th>
		      <th scope="col">Buyer</th>
		      <th scope="col">Buyer Email</th>
		      <th scope="col">City</th>
		      <th scope="col">Entry By</th>
		      <th scope="col">Action</th>

		    </tr>
		  </thead>
		  <tbody>
		  	<?php require 'table-data.php' ?>
		  </tbody>
		</table>
    </div>
  </div>
  <div id="message-alert"></div>
<?php include('footer.php')?> 
   
  