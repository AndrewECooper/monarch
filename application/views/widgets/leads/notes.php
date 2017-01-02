<h4 class="pull-left">Notes</h4>
<button class="pull-right btn btn-primary btn-xs" id="btn-add-note">Add Note</button>
<div class="form-group">

    <div>
      <textarea class="form-control" rows="3" id="lead-new-note"></textarea>
      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
    </div>
</div>

<table class="table table-condensed" id="notes-table">
    <?php foreach ($notes as $note): ?>
    <tr>
        <th class="info">
            <?php echo $note["created"]; ?>
        </th>
    </tr>
    <tr>
        <td>
            <?php echo $note["message"]; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
