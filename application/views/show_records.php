<div id="mainDiv">
	<div class="table-responsive">
  <table class="table table-striped">
  <thead>
	  <th>id</th>
	  <th>Company</th>
	  <th>First Name</th>
	  <th>Last Name</th>
	  <th>Position</th>
	  <th>email</th>
	  <th>website</th>
	  <th>linkedin</th>
	  <th>xing</th>
	  <th>phone</th>
	  <th>street</th>
	  <th>City</th>
	  <th>postal_code</th>
	  <th>date created</th>
  </thead>

<?php
foreach($results as $data) {
	echo '<tr>';
	echo '<td><a href="/show_records/record_detail/'.$data->company_id.'">'.$data->company_id.'</a></td>';	
	echo '<td><a href="/show_records/record_detail/'.$data->company_id.'">'.$data->company.'</td>';
	echo '<td>'.$data->first_name.'</td>';
	echo '<td>'.$data->last_name.'</td>';
	echo '<td>'.$data->position.'</td>';
	echo '<td><a href="mailto:'.$data->email.'">'.$data->email.'</a></td>';
	echo '<td><a href="http://'.$data->website.'" target="_blank">'.$data->website.'</a></td>';
	echo '<td><a href="http://'.$data->linkedin.'" target="_blank">Linkedin</a></td>';
	echo '<td><a href="http://'.$data->xing.'" target="_blank">XING</a></td>';
	echo "<td>".$data->phone."</td>";
	echo "<td>".$data->street."</td>";
	echo "<td>".$data->city."</td>";
	echo "<td>".$data->plz."</td>";
	echo "<td>".$data->date_created."</td>";
    echo "</tr>";


}
?>
   <p><?php echo $links; ?></p>

</div>
</div>


