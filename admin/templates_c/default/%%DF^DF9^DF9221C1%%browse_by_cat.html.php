<?php /* Smarty version 2.6.18, created on 2014-05-19 15:02:26
         compiled from browse_by_cat.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'use_macro', 'browse_by_cat.html', 1, false),array('block', 'fill_slot', 'browse_by_cat.html', 3, false),)), $this); ?>
<?php $this->_tag_stack[] = array('use_macro', array('file' => "Dataface_Main_Template.html")); $_block_repeat=true;$this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

	<?php $this->_tag_stack[] = array('fill_slot', array('name' => 'main_section')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
		<h1>分类浏览图书</h1>

		<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ctr'] => $this->_tpl_vars['category']):
?>
		<?php if ($this->_tpl_vars['ctr']%$this->_tpl_vars['per_column'] == 0): ?>
		<?php if ($this->_tpl_vars['ctr'] > 0): ?></ul></div><?php endif; ?><div style="width: 25%; float: left; margin: 0; padding: 0; padding-top: 1em; "><ul>
		<?php endif; ?>
			<li><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=books&-action=list&categories=<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo $this->_tpl_vars['category']['name']; ?>
</a> <em>(<?php echo $this->_tpl_vars['category']['num']; ?>
)</em></li>
		<?php endforeach; endif; unset($_from); ?>
		</ul></div>
		<div style="clear: both"/>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>