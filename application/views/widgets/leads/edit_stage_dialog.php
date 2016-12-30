<div id="dialog-stage" title="Edit Stage">
    <h4>
        Stage
    </h4>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option12" value="Collected"
                <?php echo $lead["stage"] == "Collected" ? "checked" : ""; ?>>
            Collected
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option13" value="Invoiced"
                <?php echo $lead["stage"] == "Invoiced" ? "checked" : ""; ?>>
            Invoiced
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option14" value="Direct Bill"
                <?php echo $lead["stage"] == "Direct Bill" ? "checked" : ""; ?>>
            Direct Bill
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option15" value="Cancelled"
                <?php echo $lead["stage"] == "Cancelled" ? "checked" : ""; ?>>
            Cancelled
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option16" value="Written Up"
                <?php echo $lead["stage"] == "Written Up" ? "checked" : ""; ?>>
            Written Up
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option17" value="Return to Rep"
                <?php echo $lead["stage"] == "Return to Rep" ? "checked" : ""; ?>>
            Return to Rep
        </label>
    </div>
</div>
