<?php defined('C5_EXECUTE') or die(_("Access Denied."));
$form = Loader::helper('form');
 ?> 

<fieldset><legend>Setup</legend>
<div style="margin-top:8px;">

<label for="theme"><?php echo t('Select the theme jQuery UI should use')?></label>
<select name="theme">
  <option value="black-tie"      <?php if ($bObj->theme == "black-tie")      echo "selected" ?> >Black Tie</option>
  <option value="blitzer"        <?php if ($bObj->theme == "blitzer")        echo "selected" ?> >Blitzer</option>
  <option value="cupertino"      <?php if ($bObj->theme == "cupertino")      echo "selected" ?> >Cupertino</option>
  <option value="dark-hive"      <?php if ($bObj->theme == "dark-hive")      echo "selected" ?> >Dark Hive</option>
  <option value="dot-luv"        <?php if ($bObj->theme == "dot-luv")        echo "selected" ?> >Dot Luv</option>
  <option value="eggplant"       <?php if ($bObj->theme == "eggplant")       echo "selected" ?> >Eggplant</option>
  <option value="excite-bike"    <?php if ($bObj->theme == "excite-bike")    echo "selected" ?> >Excite Bike</option>
  <option value="flick"          <?php if ($bObj->theme == "flick")          echo "selected" ?> >Flick</option>
  <option value="hot-sneaks"     <?php if ($bObj->theme == "hot-sneaks")     echo "selected" ?> >Hot Sneaks</option>
  <option value="humanity"       <?php if ($bObj->theme == "humanity")       echo "selected" ?> >Humanity</option>
  <option value="le-frog"        <?php if ($bObj->theme == "le-frog")        echo "selected" ?> >Le Frog</option>
  <option value="mint-choc"      <?php if ($bObj->theme == "mint-choc")      echo "selected" ?> >Mint Choc</option>
  <option value="overcast"       <?php if ($bObj->theme == "overcast")       echo "selected" ?> >Overcast</option>
  <option value="pepper-grinder" <?php if ($bObj->theme == "pepper-grinder") echo "selected" ?> >Pepper Grinder</option>
  <option value="redmond"        <?php if ($bObj->theme == "redmond")        echo "selected" ?> >Redmond</option>
  <option value="smoothness"     <?php if ($bObj->theme == "smoothness")     echo "selected" ?> >Smoothness</option>
  <option value="south-street"   <?php if ($bObj->theme == "south-street")   echo "selected" ?> >South Street</option>
  <option value="start"          <?php if ($bObj->theme == "start")          echo "selected" ?> >Start</option>
  <option value="sunny"          <?php if ($bObj->theme == "sunny")          echo "selected" ?> >Sunny</option>
  <option value="swanky-purse"   <?php if ($bObj->theme == "swanky-purse")   echo "selected" ?> >Swanky Purse</option>
  <option value="trontastic"     <?php if ($bObj->theme == "trontastic")     echo "selected" ?> >Trontastic</option>
  <option value="ui-darkness"    <?php if ($bObj->theme == "ui-darkness")    echo "selected" ?> >UI Darkness</option>
  <option value="ui-lightness"   <?php if ($bObj->theme == "ui-lightness")   echo "selected" ?> >UI Lightness</option>
  <option value="vader"          <?php if ($bObj->theme == "vader")          echo "selected" ?> >Vader</option>  
</select> 
<br/>
</div>
<div style="margin-top:8px;">

<label for="jscontent"><?php echo t('Enter the javascript that should be executed automatically to use jQuery UI')?></label>
 <?php echo $form->textarea("jscontent", $jscontent, array('rows' => 8, 'cols' => 50)); ?>
<br/>
</div>

</fieldset>


<fieldset><legend>Advanced</legend>
<div style="margin-top:8px;">
<label for="includespecificjquery"><?php echo t('Use jQuery library included in block?')?></label>
<select name="includespecificjquery">
  <option value="false"  <?php if ($bObj->includespecificjquery == "false")  echo "selected" ?> >No (most compatible)</option>
  <option value="true"  <?php if ($bObj->includespecificjquery == "true")  echo "selected" ?> >Yes (most stable)</option>
</select>
<br/>
</div>
</fieldset> 

<div class="ccm-spacer" style="margin-bottom:16px;"></div>