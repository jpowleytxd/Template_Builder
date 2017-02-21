<div class="body-view-outer">
  <div class="body-view-title">Activity Log:</div>
  <?php for($i = 0; $i <= 10; $i++){?>
  <div class="activity-outer" data-template="1">
    <div class="activity-information">
      <div class="activity-date"><?php echo date('jS M y g:i A') ?></div>
      <div class="activity-author">Jorden Powley</div>
      <div class="activity-description">Created Template Style</div>
    </div>
    <div class="activity-button-group">
      <div class="activity-button activity-edit" id="activity-edit" data-template="1">E</div>
      <div class="activity-button activity-view" id="activity-view" data-template="1">V</div>
    </div>
  </div>
  <div class="activity-outer" data-template="2">
    <div class="activity-information">
      <div class="activity-date"><?php echo date('jS M y g:i A') ?></div>
      <div class="activity-author">Jorden Powley</div>
      <div class="activity-description">Edited Template Style</div>
    </div>
    <div class="activity-button-group">
      <div class="activity-button activity-edit" id="activity-edit" data-template="2">E</div>
      <div class="activity-button activity-view" id="activity-view" data-template="2">V</div>
    </div>
  </div>
  <?php } ?>
</div>
