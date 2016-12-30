<div class="form-group">
    <label for="company_name">Company Name:</label>
    <?php echo form_input(array('id' => 'company_name',
            "name" => "company_name",
            'class' => 'form-control',
            "value" => $lead["company_name"])); ?>
</div>
<div class="form-group">
    <label for="company_name">Line of Business:</label>
    <?php echo form_input(array('id' => 'line_of_business',
            "name" => "line_of_business",
            'class' => 'form-control',
            "value" => $lead["line_of_business"])); ?>
</div>
<div class="form-group">
    <label for="contact_first_name">First Name:</label>
    <?php echo form_input(array('id' => 'contact_first_name',
            "name" => "contact_first_name",
            'class' => 'form-control',
            "value" => $lead["contact_first_name"])); ?>
</div>
<div class="form-group">
    <label for="contact_last_name">Last Name:</label>
    <?php echo form_input(array('id' => 'contact_last_name',
            "name" => "contact_last_name",
            'class' => 'form-control',
            "value" => $lead["contact_last_name"])); ?>
</div>
<div class="form-group">
    <label for="contact_email">Email:</label>
    <?php echo form_input(array('id' => 'contact_email',
            "name" => "contact_email",
            'class' => 'form-control',
            "value" => $lead["contact_email"])); ?>
</div>
<div class="form-group">
    <label for="primary_phone">Primary Phone:</label>
    <?php echo form_input(array('id' => 'primary_phone',
            "name" => "primary_phone",
            'class' => 'form-control',
            "value" => $lead["primary_phone"])); ?>
</div>
<div class="form-group">
    <label for="alternate_phone">Alternate Phone:</label>
    <?php echo form_input(array('id' => 'alternate_phone',
            "name" => "alternate_phone",
            'class' => 'form-control',
            "value" => $lead["alternate_phone"])); ?>
</div>
