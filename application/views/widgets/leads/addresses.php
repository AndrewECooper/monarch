<ul class="nav nav-tabs">
    <li class="active"><a href="#address-physical" data-toggle="tab">Physical Address</a></li>
    <li><a href="#address-mailing" data-toggle="tab">Mailing Address</a></li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="address-physical">
        <div class="form-group">
            <label for="physical_address">Address:</label>
            <?php echo form_input(array('id' => 'physical_address',
                "name" => "physical_address",
                'class' => 'form-control',
                "value" => $lead["physical_address"])); ?>
        </div>
        <div class="form-group">
            <label for="physical_address_city">City:</label>
            <?php echo form_input(array('id' => 'physical_address_city',
                "name" => "physical_address_city",
                'class' => 'form-control',
                "value" => $lead["physical_address_city"])); ?>
        </div>
        <div class="form-group">
            <label for="physical_address_state">State:</label>
            <?php echo form_input(array('id' => 'physical_address_state',
                "name" => "physical_address_state",
                'class' => 'form-control',
                "value" => $lead["physical_address_state"])); ?>
        </div>
        <div class="form-group">
            <label for="physical_address_zip">Zip Code:</label>
            <?php echo form_input(array('id' => 'physical_address_zip',
                "name" => "physical_address_zip",
                'class' => 'form-control',
                "value" => $lead["physical_address_zip"])); ?>
        </div>
        <div class="alert alert-warning">
            <h4>If Mailing Address is not set, the Physical Address will be used.</h4>
        </div>
    </div>

    <div class="tab-pane fade" id="address-mailing">
        <div class="form-group">
            <label for="mailing_address">Address:</label>
            <?php echo form_input(array('id' => 'mailing_address',
                "name" => "mailing_address",
                'class' => 'form-control',
                "value" => $lead["mailing_address"])); ?>
        </div>
        <div class="form-group">
            <label for="mailing_address_city">City:</label>
            <?php echo form_input(array('id' => 'mailing_address_city',
                "name" => "mailing_address_city",
                'class' => 'form-control',
                "value" => $lead["mailing_address_city"])); ?>
        </div>
        <div class="form-group">
            <label for="mailing_address_state">State:</label>
            <?php echo form_input(array('id' => 'mailing_address_state',
                "name" => "mailing_address_state",
                'class' => 'form-control',
                "value" => $lead["mailing_address_state"])); ?>
        </div>
        <div class="form-group">
            <label for="mailing_address_zip">Zip Code:</label>
            <?php echo form_input(array('id' => 'mailing_address_zip',
                "name" => "mailing_address_zip",
                'class' => 'form-control',
                "value" => $lead["mailing_address_zip"])); ?>
        </div>
        <div class="alert alert-warning">
            <h4>If Mailing Address is not set, the Physical Address will be used.</h4>
        </div>
    </div>
</div>
