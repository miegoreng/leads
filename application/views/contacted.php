<div id="mainDiv">
	<div class="table-responsive">
  <table class="table table-striped">
  <thead>
	  <th>Company</th>
	  <th>First Name</th>
	  <th>Last Name</th>
	  <th>Method of Contact</th>
	  <th>Sales Status</th>
	  <th>Last Contact</th>
  	  <th>Contact again on</th>
  	  <th>Comment</th>

  </thead>
  <?php 


if (is_array($results)) {

    foreach($results as $data) {
      echo '<tr>';
    //	echo '<td id="first">'.$data->company_id.'</td>';
     // echo '<td id="second">'.$data->employee_id.'</td>';
      echo '<td>'.$data->company.'</td>';
      echo '<td>'.$data->first_name.'</td>';
      echo '<td>'.$data->last_name.'</td>';
      echo '<td>'.$data->method_of_contact.'</td>';
      echo '<td>'.$data->sales_status.'</td>';
      echo '<td>'.$data->last_contact.'</td>';   
      echo '<td>'.$data->date.' at '.$data->time.'</td>';
      echo '<td>'.$data->notes.'</td>';


    	echo '<td>'; 
    }
  }



?>

</div>
</div>


