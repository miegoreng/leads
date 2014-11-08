

<?php 




        foreach($query as $data) {
        $company_id =  $data->company_id;
        $employee_id  = $data->employee_id;

        echo $company_id;
        echo $employee_id;
    }


 



$employee_id = array(
       'name'        => 'employee_id',
       'id' => 'employee_id',
       'value' => $employee_id,
       'type' => 'text',
    );

$company_id = array(
       'name'        => 'company_id',
       'id' => 'company_id',
       'value' => $company_id,
       'type' => 'text',
    );

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
    'class' => 'form-control',
    'type' => 'text',
    'id' => '',
     'placeholder' => 'Write something', 
     'name' => 'notes',    

);

?>

  <div class="page-header">
        <h1>Thumbnails</h1>
      </div>

 <?php echo form_open('add_data/add_date_time'); ?>


<h2>Add User</h2>
       <?php echo form_input($company_id); ?>

    <?php echo form_input($employee_id); ?>



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
        <?php echo form_label('Notes','', $labelattributes); ?>
        <?php echo form_textarea($notes); ?>
        <?php echo form_error('notes'); ?>
    </div>


	<?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');	   ?>		 
  	<?php echo form_close();?>

