<div class="input-section">
  <div class="form-col-title">Main Text Settings</div>
  <div class="input-group" data-preview="preview-outer" data-valid="selection" data-css="font-family" data-reset="Raleway">
    <label>Font Type:</label>
    <select id="font_family">
      <?php
        include('../processes/global.php');
        //Get Fonts
        $initialQuery = "SELECT * FROM `font_lookup` ORDER BY font_display_name ASC";
        $rows = databaseQuery($initialQuery);
        var_dump($rows);
        foreach($rows as $key => $row){
          print_r("<option value='{$row[1]}' style='font-family: {$row[1]};'>{$row[2]}</option>");
        }
       ?>
    </select>
  </div>
  <div class="input-group" data-preview="preview-nav-link" data-valid="color" data-css="color" data-reset="#3eb978">
    <label>Navigation Text Colour:</label>
    <input type="text" id="navigation_text_color">
  </div>
  <div class="input-group" data-preview="preview-title" data-valid="color" data-css="color" data-reset="#323232">
    <label>Title Text Colour:</label>
    <input type="text" id="title_text_color">
  </div>
  <div class="input-group" data-preview="preview-text" data-valid="color" data-css="color" data-reset="#323232">
    <label>Paragraph Text Colour:</label>
    <input type="text" id="paragraph_text_color">
  </div>
  <div class="input-group" data-preview="preview-body-link" data-valid="color" data-css="color" data-reset="#3eb978">
    <label>Link Text Colour:</label>
    <input type="text" id="link_text_color">
  </div>
  <div class="input-group" data-preview="preview-underlined-link" data-valid="selection" data-css="font-weight" data-reset="normal">
    <label>Link Weight:</label>
    <select id="link_weight">
      <option value="normal">Normal</option>
      <option value="bold">Bold</option>
    </select>
  </div>
  <div class="input-group" data-preview="preview-underlined-link" data-valid="checkbox" data-css="text-decoration" data-reset="none">
    <label>Link Underline:</label>
    <input type="checkbox" id="link_underline">
  </div>
</div>
