<div class="row">
<?php echo $this->Form->create(array('novalidate' => true))?>
<div class="span7">
	<?php echo $this->Form->input('News.headline', array('class'=>'span7'))?>
	<?php echo $this->Form->input('News.story', array('class'=>'span7'))?>
	<?php echo $this->Form->input('News.tags', array('class'=>'span7', 'label'=>__('Tags - comma separated')))?>

<hr>
<h4>SEO</h4>
<div><label>Slug</label></div>
<div class="input-prepend">
<span class="add-on">/news/</span>
	<?php echo $this->Form->input('News.slug', array('class'=>'span6', 'div'=>false, 'label'=>false))?>
</div>
	<?php echo $this->Form->input('News.meta_title', array('class'=>'span7'))?>
	<?php echo $this->Form->input('News.meta_keywords', array('class'=>'span7'))?>
	<?php echo $this->Form->input('News.meta_description', array('class'=>'span7'))?>
</div>

<div class="span4 offset1">
<?php echo $this->Form->input('News.published', array('options'=>array(0=>__('No'),1=>__('Yes'))))?>
<?php echo $this->Form->input('News.release_date', array('class'=>'span7'))?>

<?php echo $this->Form->input('News.expires', array('type'=>'checkbox', 'class'=>'set_expiry'))?>

<div class="archive_date"<?php if(empty($this->request->data['News']['archive_date'])) { ?> style="display:none"<?php } ?>>
<?php echo $this->Form->input('News.archive_date', array('class'=>'span7'))?>
</div>
<?php echo $this->Form->submit(__('Save changes'), array('class'=>'btn'))?>
</div>

</div>


<script>

$('.set_expiry').click( function() {
	setExpiry();
});


function setExpiry() {
	if($('.set_expiry').is(":checked")) {
		$('.archive_date').slideDown();
	} else {
		$('.archive_date').slideUp();
	}
}



</script>
<?php 
/*
echo $this->Html->script(array(
	'/vendor/ckeditor/ckeditor',
	'/vendor/ckeditor/adapters/jquery',
));
echo $this->Html->scriptBlock('$( "textarea.editor" ).ckeditor();');
 */
?>
