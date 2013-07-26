<div>
<?php echo $this->Html->link('<i class="icon-plus-sign"></i> ' . __('Add a news story'), array('action'=>'create'), array('class'=>'btn pull-right', 'escape'=>false));?> 
<h3><i class="icon-file-text-alt"></i> <?php echo __('News')?></h3>
</div>


<div class="pagination">
<?php echo $this->Paginator->numbers()?>
</div>

<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('headline','Headline');?></th>
	<th><?php echo $this->Paginator->sort('release_date','Release date');?></th>
	<th><?php echo $this->Paginator->sort('archive_date','Archive date');?></th>
	<th><?php echo $this->Paginator->sort('published','Published');?></th>
	<th><?php echo __('Action')?></th>
</tr>
<?php foreach($news as $n) { ?>
<tr>
<td><?php echo $n['News']['headline']?></td>
<td><?php echo date('d/m/Y', strtotime($n['News']['release_date']))?></td>
<td><?php echo $n['News']['archive_date']!='0000-00-00'?date('d/m/Y', strtotime($n['News']['archive_date'])):__('never');?></td>
<td>
<?php if(!empty($n['News']['published'])) { ?>
	<span class="badge badge-success"><i class="icon-ok-sign"></i></span>
<?php } ?>
</td>
<td>
<?php echo $this->Html->link(__('<i class="icon-pencil"></i>'), array('action'=>'edit', $n['News']['id']), array('class'=>'btn btn-small', 'escape'=>false));?> 

<?php echo $this->Html->link(__('<i class="icon-trash"></i>'), array('action'=>'delete', $n['News']['id']), array('class'=>'btn btn-small', 'escape'=>false),__('Are you sure that you want to delete this news story?'));?> 
</td>
</tr>

<?php } ?>
</table>

<div class="pagination">
<?php echo $this->Paginator->numbers()?>
</div>
