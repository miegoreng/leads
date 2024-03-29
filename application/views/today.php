<?php 

$labelattributes = array(
    'class' => 'control-label',
);

$date = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'date',
     'placeholder' => 'When to call', 
     'name' => 'date',    
);


$time = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'time',
     'placeholder' => 'Time', 
     'name' => 'time',    
);



$notes = array(
     'name'        => 'notes',
      'id'          => 'notes',
      'rows'        => '20',
      'cols'        => '20',
      'style'       => '',
      'class'     => 'form-control',

  );


$addNote = array(
      'class'     => 'form-control',
      'type' => 'text',
      'id'          => 'addNote',
      'name' => 'addNote',
  );

$addNote2 = array(
      'class'     => 'form-control',
      'type' => 'text',
      'id'          => 'addNote2',
      'name' => 'addNote2',
  );


$company_id = array(
      'class'     => 'form-control',
      'type' => 'text',
      'id'          => 'company_id',
      'name' => 'company_id',
  );

$employee_id = array(
      'class'     => 'form-control',
      'type' => 'text',
      'id'          => 'employee_id',
      'name' => 'employee_id',
  );

$options = array(
        'phone' => 'phone', 
        'email' => 'email', 
        'xing' => 'xing', 
        'linkedin' => 'linkedin', 
        'meeting' => 'meeting', 
        'postal_mail' => 'postal_mail', 
        );



?>
<div id="mainDiv">
  <table class="table table-striped">
  	<h1>Todays contacts</h1>
  <thead>
	  <th>id(C)</th>
    <th>id(E)</th>
	  <th>Company</th>
	  <th>First Name</th>
	  <th>Last Name</th>
	  <th>Position</th>
	  <th>email</th>
	  <th>phone</th>

	  <th>date</th>
        <th>time</th>
	  <th>notes</th>
	  <th>last contact</th>
	  <th></th>
	  <th></th>
  </thead>


<?php




if (is_array($results)) {

    foreach($results as $data) {
    	echo '<tr>';
    	echo '<td id="first">'.$data->company_id.'</td>';
      echo '<td id="second">'.$data->employee_id.'</td>';
    	echo '<td>'.$data->company.'</td>';
    	echo '<td>'.$data->first_name.'</td>';
    	echo '<td>'.$data->last_name.'</td>';
    	echo '<td>'.$data->position.'</td>';
    	echo '<td>'.$data->email.'</td>';
    	echo '<td>'.$data->phone.'</td>';
      echo '<td style="white-space:nowrap">'.$data->date.'</td>';
      echo '<td style="white-space:nowrap">'.$data->time.'</td>';
      echo '<td>'.$data->notes.'</td>';
      echo '<td style="white-space:nowrap">'.$data->last_contact.'</td>';

    	echo '<td>  

    		 <!-- Single button -->
    			<div class="btn-group">
    			  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
    			    Update Status <span class="caret"></span>
    			  </button>
    			  <ul class="dropdown-menu" role="menu">
    			    <li>'.anchor('today/update_contact_status/lead/'.$data->company_id, 'Lead' , $data->company_id).'</li>
    			    <li><a href="#" data-toggle="modal" data-target="#callAgain">Add Contact Summary</a></li>
              <li>'.anchor('today/update_contact_status/meeting/'.$data->company_id, 'Meeting' , $data->company_id).'</li>
              <li>'.anchor('today/update_contact_status/client/'.$data->company_id, 'Is now client' , $data->company_id).'</li>
              <li>'.anchor('today/update_contact_status/onhold/'.$data->company_id, 'On Hold' , $data->company_id).'</li>
    			    <li class="divider"></li>
              <li><a href="#" data-toggle="modal" data-target="#callAgain">Contacted (call again)</a></li>
            
               <li class="divider"></li>
              <li>'.anchor('today/delete_contact/'.$data->company_id, 'delete' , $data->company_id).'</li>


    			  </ul>
    			</div>
      		   </td>';
      	echo '<td>'.'<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addNote">Add Note</button>'.'</td>';
        echo '</tr>';
     
}

} else {

  echo '  <div class="alert alert-danger">
          <strong>Oh snap!</strong> Nothing todo for today! </div> ';


}

?>
</table>
</div>



   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
<!-- Modal -->

<div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <?php echo form_open('today/add_contact_record'); ?>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add a note</h4>
      </div>
      <div class="modal-body">
        <?php echo form_textarea($notes); ?>
      </div>

      <?php echo form_input($company_id); ?>
      <?php echo form_input($employee_id); ?>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');    ?>

      <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="callAgain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <?php echo form_open('today/add_contact_record'); ?>

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Call again</h4>
      </div>
      <div class="modal-body">




      <div class="form-group">
        <?php echo form_label('Date','', $labelattributes); ?>
        <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
        <?php echo form_input($date); ?>
                   <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        <?php echo form_error('Date'); ?>
         </div> 
     </div>
 
  

    <div class="form-group">
        <?php echo form_label('Time','', $labelattributes); ?>
                <div class="input-group date form_time col-md-12" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
        <?php echo form_input($time); ?>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
        <?php echo form_error('Time'); ?>
         </div> 
     </div>

    <div class="form-group">
        <?php echo form_dropdown('method_of_contact', $options, '', 'class="form-control"') ?>
         </div> 
     </div> 
    
      <?php echo form_textarea($notes); ?>
            <?php echo form_input($company_id); ?>
      <?php echo form_input($employee_id); ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');    ?>
      </div>
    </div>
  </div>
  <?php echo form_close();?>
</div>





    <script type="text/javascript">
      $('button[data-target="#addNote"]').click(function() {
      var company_id = $(this).parent().siblings(":first").text();
      var employee_id = $(this).parent().siblings(":first").next().text();

      $('#addNote input[name="company_id"]').val(company_id);
      $('#addNote input[name="employee_id"]').val(employee_id);

      });

      $('a[data-target="#callAgain"]').click(function(e) {
      e.preventDefault();
      var company_id = $(this).parents("td").siblings(":first").text();
      var employee_id = $(this).parents("td").siblings(":first").next().text();

      $('#callAgain input[name="company_id"]').val(company_id);
      $('#callAgain input[name="employee_id"]').val(employee_id);

      });
      </script>