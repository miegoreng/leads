
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
	    <li><a href="#">Edit Record</a></li>
	    <li><a href="#">Delete Record</a></li>
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
				echo '<td>Company</td>';
				echo '<td><b>'.$data->company.'</b></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Vorname</td>';
				echo '<td>'.$data->first_name.'</td>';
				echo '</tr>';


				echo '<tr>';
				echo '<td>Nachname</td>';
				echo '<td>'.$data->last_name.'</td>';
				echo '</tr>';


				echo '<tr>';
				echo '<td>Position</td>';
				echo '<td>'.$data->position.'</td>';
				echo '</tr>';


				echo '<tr>';
				echo '<td>Email</td>';
				echo '<td><a href="mailto:'.$data->email.'">'.$data->email.'</a></td>';
				echo '</tr>';


				echo '<tr>';
				echo '<td>Website</td>';
				echo '<td><a href="'.$data->website.'">'.$data->website.'</a></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Linkedin</td>';
				echo '<td><a href="'.$data->linkedin.'">'.$data->linkedin.'</a></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Xing</td>';
				echo '<td><a href="'.$data->xing.'">'.$data->xing.'</a></td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Phone</td>';
				echo '<td>'.$data->phone.'</td>';
				echo '</tr>';


				echo '<tr>';
				echo '<td>Street</td>';
				echo '<td>'.$data->street.'</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>Postal Code</td>';
				echo '<td>'.$data->postal_code.'</td>';
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
<?php 
foreach($query as $data) {
echo $data->date.'<br>';
echo $data->time.'<br>';
echo $data->notes.'<br>';
echo $data->method_of_contact.'<br>';
}

?>
<h2>Contact Record</h2>

<div class="well">
<dl>
  <dt>taesrteast</dt>
  <dd>asdfasdfasdf</dd>
</dl>
</div>

<div class="well">
<dl>
  <dt>taesrteast</dt>
  <dd>asdfasdfasdf</dd>
</dl>
</div>


<div class="well">
<dl>
  <dt>taesrteast</dt>
  <dd>asdfasdfasdf</dd>
</dl>
</div>