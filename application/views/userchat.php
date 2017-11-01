<div id="sb_widget"></div>

<script src="<?=base_url()?>assets/js/chat/SendBird.min.js"></script>
<script src="<?=base_url()?>assets/js/chat/build/widget.SendBird.js"></script>
<script>
var appId = '3912DE58-6A54-4A47-90FF-C2AC9088A72B';
var userId = '<?=$user[0]['fld_username']?>';
var nickname = '<?=$user[0]['fld_username']?>';
sbWidget.startWithConnect(appId, userId, nickname, function() {
	
});
</script>