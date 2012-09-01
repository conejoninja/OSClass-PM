<?php
$conn = getConnection();
$newPMdrafts = $conn->osc_dbFetchResults("SELECT * FROM %st_pm_drafts WHERE sender_id  = '%d' ORDER BY pm_id DESC", DB_TABLE_PREFIX, osc_logged_user_id());
$countPMdrafts = count($newPMdrafts);
?>
<h2 class="tituloSeccion"><span><?php echo sprintf(__('Drafts (%s)', 'osclass_pm'), $countPMdrafts); ?></span></h2>
<div class="userColumnaIzquierda" id="dosColumnaIzquierda">
    <?php echo osc_private_user_menu() ; ?>
</div> <!-- #dosColumnaDerecha -->
<div class="userColumnaDerecha" id="dosColumnaDerecha">
<div class="content user_account">

    </div>
</div>