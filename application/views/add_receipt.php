

<?php 
$labelattributes = array(
    'class' => 'control-label',
);

$what = array(
       'name'        => 'what',
       'id' => 'what',
       'type' => 'text',
       'class' => 'form-control input-lg'
    );

$betrag = array(
       'name'        => 'betrag',
       'id' => 'betrag',
       'type' => 'number',
       'class' => 'form-control input-lg'
    );

$belegdatum = array(
       'name'        => 'belegdatum',
       'id' => 'betrag',
       'type' => 'date',
       'class' => 'form-control input-lg'
    );

$belegnummer = array(
       'name'        => 'belegnummer',
       'id' => 'betrag',
       'type' => 'number',
       'class' => 'form-control input-lg'
    );

$bankkonto = array(
        'Privat 1' => 'Privat 1',
        'Privat 2' => 'Privat 2',
        'GmbH Postkonto' => 'GmbH Postkonto',
   );

$buchhaltungskonten = array(
        'bitte wählen' => '---',
        'Maschinen, EDV, Mobiliar' => 'Maschinen, EDV, Mobiliar',

   );

$bemerkung = array(  
      'size' => '10',
      'maxlength' => '300', 
      'name' => 'bemerkung',
       'class' => 'form-control input-lg'
       );

$bestand = array(
        'Einname' => 'Einname',
        'Ausgabe' => 'Ausgabe',
   );

?>


 <?php echo form_open('add_data/add_company_info'); ?>


<h2>Add Company Info</h2>

<div class="form-group">
      <?php echo form_label('Was','', $labelattributes); ?>
      <?php echo form_input($what); ?>
    <?php echo form_error('what'); ?>
</div>

<div class="form-group">
      <?php echo form_label('Betrag','', $labelattributes); ?>
      <?php echo form_input($betrag); ?>
    <?php echo form_error('betrag'); ?>
</div>

<div class="form-group">
      <?php echo form_label('Belegdatum','', $labelattributes); ?>
      <?php echo form_input($belegdatum); ?>
    <?php echo form_error('belegdatum'); ?>
</div>


<div class="form-group">
      <?php echo form_label('Belegnummer','', $labelattributes); ?>
      <?php echo form_input($belegnummer); ?>
    <?php echo form_error('Belegnummer'); ?>
</div>

<div class="form-group">
      <?php echo form_label('Bank-konto','', $labelattributes); ?>
      <?php echo form_dropdown('bankkonto',$bankkonto, '', 'class="form-control input-lg" id="bankkonto"' ); ?>
    <?php echo form_error('Belegnummer'); ?>
</div>

<div class="form-group">
      <?php echo form_label('Soll','', $labelattributes); ?>
      <?php echo form_dropdown('buchhaltungskonten',$buchhaltungskonten, '', 'class="form-control input-lg" id="buchhaltungskonten"' ); ?>
    <?php echo form_error('Belegnummer'); ?>
</div>

<div class="form-group">
      <?php echo form_label('Haben','', $labelattributes); ?>
      <?php echo form_dropdown('buchhaltungskonten',$buchhaltungskonten, '', 'class="form-control input-lg" id="buchhaltungskonten"' ); ?>
    <?php echo form_error('Belegnummer'); ?>
</div>

<div class="form-group">
  <?php echo form_label('Bemerkung','', $labelattributes); ?>
      <?php echo form_textarea($bemerkung); ?>
    <?php echo form_error('bemerkung'); ?>
</div>

<div class="form-group">
      <?php echo form_label('Einnamen oder Ausgaben','', $labelattributes); ?>
      <?php echo form_dropdown('bestand',$bestand, '', 'class="form-control input-lg" id="buchhaltungskonten"' ); ?>
    <?php echo form_error('bestand'); ?>
</div>

	   <?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');	   ?>		 
  	<?php echo form_close();?>

