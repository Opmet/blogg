<?php if ( ! defined('BASEPATH')) exit('Ingen direkt åtkomst tillåts');?>
<!-- 
     Om användaren är utloggad.
-->
<div class="container">
   <div class="row col-md-8"></div>
   <div class="row col-md-4">
      <a href="<?php echo site_url('account/login'); ?>" class="btn btn-default btn-sm" role="button">
         <span class="glyphicon glyphicon-log-in"></span> Logga in
      </a>
      <a href="<?php echo site_url('account/register'); ?>">
         <span class="">Eller registrera ny medlem.</span>
      </a>
   </div>
</div>