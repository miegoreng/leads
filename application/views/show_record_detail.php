<?php 
foreach($query as $data) {

$company_id =  $data->company_id;
$employee_id  = $data->employee_id;
}
echo $company_id;
?>

	<div class="col-md-3">
		<ul class="pager">
		<?php 
$next = $this->uri->segment(3, 0)+1;
$previous = $this->uri->segment(3, 0)-1;
 echo '<li class="previous">'.anchor(base_url('show_records/record_detail/'.$previous), 'Previous', 'class="btn btn-default"')."</li>";
 echo '<li class="next">'.anchor(base_url('show_records/record_detail/'.$next), 'Next', 'class="btn btn-default"')."</li>";
?>


</ul>
	</div>
	<div class="col-md-offset-11">
	 <div class="btn-group">
	  <button type="button" class="btn btn-danger">Action</button>
	  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
	    <span class="caret"></span>
	    <span class="sr-only">Toggle Dropdown</span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	    <li><?php echo anchor('show_records/edit_record/'.$company_id, 'Edit Records');?></li>
   	    <li><?php echo anchor('show_records/delete_company/'.$company_id, 'Delete Compnay');?></li>
   	    <li><?php echo anchor('show_records/delete_employee/'.$employee_id, 'Delete Contact (employee)');?></li>

	    <li class="divider"></li>
	    <li><a href="#">Add Note</a></li>
	    <li><a href="#">Add Contact Record</a></li>

	  </ul>

	</div>
</div>


		<?php

		if (is_array($query)) {

			echo '<div class="table-responsive">
				  <table class="table">
					<thead>
					    <th class="col-sm-2"></th>
					    <th class="col-sm-10"></th>
					</thead>
					<tbody>';

			foreach($query as $data) {
				echo '<tr>';
				echo '<td>Company ID</td>';
				echo '<td><b>'.$data->company_id.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Company</td>';
				echo '<td><b>'.$data->company.'</b></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<td>Employee ID</td>';
				echo '<td><b>'.$data->employee_id.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>First Name</td>';
				echo '<td><b>'.$data->first_name.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Last Name </td>';
				echo '<td><b>'.$data->last_name.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Position</td>';
				echo '<td><b>'.$data->position.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>E-Mail</td>';
				echo '<td><b>'.$data->email.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Linkedin</td>';
				echo '<td><b>'.$data->linkedin.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Xing</td>';
				echo '<td><b>'.$data->xing.'</b></td>';
				echo '</tr>';	

				echo '<tr>';
				echo '<td>Phone</td>';
				echo '<td><b>'.$data->phone.'</b></td>';
				echo '</tr>';


				echo '<tr>';
				echo '<td>Street</td>';
				echo '<td><b>'.$data->street.'</b></td>';
				echo '</tr>';	

				echo '<tr>';
				echo '<td>PLZ</td>';
				echo '<td><b>'.$data->plz.'</b></td>';
				echo '</tr>';	

				echo '<tr>';
				echo '<td>City</td>';
				echo '<td><b>'.$data->city.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Date Created</td>';
				echo '<td><b>'.$data->date_created.'</b></td>';
				echo '</tr>';


				echo '</tbody>
					  </table>
					  </div>';

			} 
		}else {

				 echo '<div class="alert alert-danger">NO RECORDS FOUND </div> ';
			}
	

			?>


	
<hr/>

<h2>Contact Record</h2>


<?php 
if (is_array($query)) {
foreach($query as $data) {
	echo '<div class="well"><dl>';
	echo ' <dt>Date/Time: '.$data->date.' : '.$data->time.'</dt>';
	echo '<dd>'.$data->notes.'</dd>';
	echo '</dl></div>';
	}
	};

?>


</div>