<?php 


if (is_array($results)) {

    foreach($results as $data) {


    $company_id = $data->company_id;
    $employee_id = $data->employee_id;
    $company_form = $data->company; 
    $company_email = $data->email;
    $website_form = $data->website;
    $phone_form = $data->phone;
    $street_form = $data->street;
    $plz_form = $data->plz;
    $city_form = $data->city;
    $city_form = $data->city;
    $first_name_form = $data->first_name;
    $last_name_form = $data->last_name;
    $position_form = $data->position;
    $email_form = $data->email;
    $linkedin_form = $data->linkedin;
    $xing_form =$data->xing;
    $phone_form = $data->phone;

    }
}



$labelattributes = array(
    'class' => 'control-label',
);

$company = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'company',
    'name' => 'company',   
    'value' => $company_form,

);


$email = array(
    'class' => 'form-control',
    'type' => 'email',
    'id' => 'email',
    'name' => 'email',    
    'placeholder' => 'Enter email',
    'value' => $company_email,

);


$website = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'website',
    'name' => 'website',    
    'placeholder' => 'Enter Website',
    'value' => $website_form,


);



$phone = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'phone',
    'name' => 'phone',    
    'placeholder' => 'Enter Phone',
    'value' => $phone_form,
);


$street = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => '',
     'placeholder' => 'Street', 
     'name' => 'street',  
     'value' => $street_form,  
);



$city = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => '',
     'placeholder' => 'City', 
     'name' => 'city',    
     'value' => $city_form,  


);
$plz = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'plz',
     'placeholder' => 'postal code', 
     'name' => 'plz',    
     'value' => $plz_form,  

);


$first_name = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'first_name',
    'name' => 'first_name',    
    'placeholder' => 'Enter First Name',
    'value' => $first_name_form,

);


$last_name = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'last_name',
    'name' => 'last_name',    
    'placeholder' => 'Enter Last Name',
    'value' => $last_name_form,


);

$position = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'position',
    'name' => 'position',    
    'placeholder' => 'Position',
    'value' => $position_form,

);

$email = array(
    'class' => 'form-control',
    'type' => 'email',
    'id' => 'email',
    'name' => 'email',    
    'placeholder' => 'Enter email',
    'value' => $email_form,
);




$linkedin = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'linkedin',
    'name' => 'linkedin',    
    'placeholder' => 'Enter Linkedin',
    'value' => $linkedin_form,
);


$xing = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'xing',
    'name' => 'xing',    
    'placeholder' => 'Enter xing',
    'value' => $xing_form,
);


$phone = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'phone',
    'name' => 'phone',    
    'placeholder' => 'Enter Phone',

);


?>
<h1>company info</h1>
  	<?php echo form_open('show_records/update_company');?>
    <?php echo form_hidden('company_id', $company_id);?>

    <div class="form-group">
        <?php echo form_label('company','', $labelattributes); ?>
        <?php echo form_input($company, set_value($company_form)); ?>
        <?php echo form_error('company'); ?>
    </div>
     <div class="form-group">
        <?php echo form_label('email','', $labelattributes); ?>
        <?php echo form_input($email); ?>
        <?php echo form_error('email'); ?>
    </div>

     <div class="form-group">
        <?php echo form_label('website','', $labelattributes); ?>
        <?php echo form_input($website); ?>
        <?php echo form_error('website'); ?>
    </div>
     <div class="form-group">
        <?php echo form_label('Phone','', $labelattributes); ?>
        <?php echo form_input($phone); ?>
        <?php echo form_error('Phone'); ?>
    </div>

     <div class="form-group">
        <?php echo form_label('street','', $labelattributes); ?>
        <?php echo form_input($street); ?>
        <?php echo form_error('street'); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Postal Code','', $labelattributes); ?>
        <?php echo form_input($plz); ?>
        <?php echo form_error('Postal Code'); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('city','', $labelattributes); ?>
        <?php echo form_input($city); ?>
        <?php echo form_error('stadt'); ?>
    </div>
    <?php  echo form_submit('submit', 'Update Company Info', 'class="btn btn-default btn-lg", type="button"');      ?>        
    <?php echo form_close();?>

    <hr/>

    <h2>Personal Information</h2>

    <?php echo form_open('show_records/update_employee');?>
    <?php echo form_hidden('employee_id', $employee_id);?>

     <div class="form-group">
        <?php echo form_label('first name','', $labelattributes); ?>
        <?php echo form_input($first_name); ?>
        <?php echo form_error('first_name'); ?>
    </div>

        <div class="form-group">
        <?php echo form_label('last name','', $labelattributes); ?>
        <?php echo form_input($last_name); ?>
        <?php echo form_error('last_name'); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('position','', $labelattributes); ?>
        <?php echo form_input($position); ?>
        <?php echo form_error('position'); ?>
    </div>

     <div class="form-group">
        <?php echo form_label('email','', $labelattributes); ?>
        <?php echo form_input($email); ?>
        <?php echo form_error('email'); ?>
    </div>



    <div class="form-group">
        <?php echo form_label('linked','', $labelattributes); ?>
        <?php echo form_input($linkedin); ?>
        <?php echo form_error('linked'); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('xing','', $labelattributes); ?>
        <?php echo form_input($xing); ?>
        <?php echo form_error('xing'); ?>
    </div>

     <div class="form-group">
        <?php echo form_label('Phone','', $labelattributes); ?>
        <?php echo form_input($phone); ?>
        <?php echo form_error('Phone'); ?>
    </div>

    <?php  echo form_submit('submit', 'Update Employee Info', 'class="btn btn-default btn-lg", type="button"');      ?>        
    <?php echo form_close();?>


    <br/><br/><br/>