<div id="dialog-status" title="Edit Status">
    <h4>
        Status
    </h4>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option1" value="New Lead"
                <?php echo $lead["status"] == "New Lead" ? "checked" : ""; ?>>
            New Lead
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option2" value="Left Message Machine"
                <?php echo $lead["status"] == "Left Message Machine" ? "checked" : ""; ?>>
            Left Message Machine
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option3" value="Left Message Person"
                <?php echo $lead["status"] == "Left Message Person" ? "checked" : ""; ?>>
            Left Message Person
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option4" value="Spoke With"
                <?php echo $lead["status"] == "Spoke With" ? "checked" : ""; ?>>
            Spoke With
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option5" value="Sent Email"
                <?php echo $lead["status"] == "Sent Email" ? "checked" : ""; ?>>
            Sent Email
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option6" value="Sent Fax"
                <?php echo $lead["status"] == "Sent Fax" ? "checked" : ""; ?>>
            Sent Fax
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option7" value="No Sale"
                <?php echo $lead["status"] == "No Sale" ? "checked" : ""; ?>>
            No Sale
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option8" value="Disconnected"
                <?php echo $lead["status"] == "Disconnected" ? "checked" : ""; ?>>
            Disconnected
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option9" value="Sold"
                <?php echo $lead["status"] == "Sold" ? "checked" : ""; ?>>
            Sold
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option10" value="Government"
                <?php echo $lead["status"] == "Government" ? "checked" : ""; ?>>
            Government
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option11" value="No Answer"
                <?php echo $lead["status"] == "No Answer" ? "checked" : ""; ?>>
            No Answer
        </label>
    </div>
</div>
