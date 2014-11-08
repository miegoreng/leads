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
?>
  <table class="table table-striped">
  	<h1>Todays contacts</h1>
  <thead>
	  <th>id</th>
	  <th>Company</th>
	  <th>First Name</th>
	  <th>Last Name</th>
	  <th>Position</th>
	  <th>email</th>
	  <th>phone</th>
	  <th>street</th>
	  <th>City</th>
	  <th>postal_code</th>
	  <th>date</th>
	  <th>notes</th>
	  <th>date created</th>
	  <th></th>
	  <th></th>
  </thead>

<?php

if (is_array($results)) {

    foreach($results as $data) {
    	echo '<tr class="rowid">';
    	echo '<td class="id">'.$data->id.'</td>';
    	echo '<td>'.$data->company.'</td>';
    	echo '<td>'.$data->first_name.'</td>';
    	echo '<td>'.$data->last_name.'</td>';
    	echo '<td>'.$data->position.'</td>';
    	echo '<td>'.$data->email.'</td>';
    	echo '<td>'.$data->phone.'</td>';
    	echo '<td>'.$data->street.'</td>';
    	echo '<td>'.$data->city.'</td>';
    	echo '<td>'.$data->postal_code.'</td>';
    	echo '<td>'.$data->date.'</td>';
    	echo '<td>'.$data->date_created.'</td>';
    	echo '<td>  

    		 <!-- Single button -->
    			<div class="btn-group">
    			  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
    			    Update Status <span class="caret"></span>
    			  </button>
    			  <ul class="dropdown-menu" role="menu">
    			    <li>'.anchor('today/update_contact_status/lead/'.$data->id, 'Lead' , $data->id).'</li>
    			    <li><a href="#" data-toggle="modal" data-target="#callAgain">Contacted (call again)</a></li>
              <li>'.anchor('today/update_contact_status/meeting/'.$data->id, 'Meeting' , $data->id).'</li>
              <li>'.anchor('today/update_contact_status/client/'.$data->id, 'Is now client' , $data->id).'</li>
              <li>'.anchor('today/update_contact_status/onhold/'.$data->id, 'On Hold' , $data->id).'</li>
    			    <li class="divider"></li>
              <li><a href="#" data-toggle="modal" data-target="#callAgain">Contacted (call again)</a></li>
            
               <li class="divider"></li>
              <li>'.anchor('today/delete_contact/'.$data->id, 'delete' , $data->id).'</li>


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




   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
<!-- Modal -->

<?php echo form_open('today/add_contact_record'); ?>
<div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add a note</h4>
      </div>
      <div class="modal-body">
        <?php echo form_textarea($notes); ?>
      </div>
     <?php echo form_hidden('id', 'id'); ?>

 <script>
  $(document).ready(function(){ 
    rows = $(".rowid").each(function(index,value){
            user = $(value).children(".user").text();
            id = $(value).children(".id").text();
            $("id").val($(this).val());
            alert(id+'\t'+user);

    });
});
  </script>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');    ?>
      </div>
    </div>
  </div>
</div>

 <?php echo form_close();?>


<!-- Modal -->
 <?php echo form_open('today/add_contact_record'); ?>
<div class="modal fade" id="callAgain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Call again</h4>
      </div>
      <div class="modal-body">

      <?php echo form_hidden('userId', 'userId'); ?>

    <script type= text/javascript>
      $('a[data-target="#callAgain"]').click(function(e) {
      e.preventDefault();
        var userId = $(this).parents("td").siblings(":first").text();
        $('#callAgain input[type="hidden"]').val(userId);
      });
       </script>

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
<?php echo form_textarea($notes); ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');    ?>
      </div>
    </div>
  </div>
  <?php echo form_close();?>
</div>