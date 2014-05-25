<?php /* Smarty version 2.6.18, created on 2014-05-20 12:58:08
         compiled from audience_menu.html */ ?>
<dl id="app-menu">
	<dt>菜单</dt>
	<dd><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=books&-action=browse_by_cat">分类查看</a><dd>
	<dd><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=books&-action=find">搜索</a></dd>

	<dt>读者推荐</dt>
	<dd><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=books&-action=list">所有图书</a></dd>
	<?php $_from = $this->_tpl_vars['audiences']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['audience'] => $this->_tpl_vars['num']):
?>
	<dd><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=books&-action=list&audience=<?php echo $this->_tpl_vars['audience']; ?>
"><?php echo $this->_tpl_vars['audience']; ?>
</a> <em>(<?php echo $this->_tpl_vars['num']; ?>
)</em></dd>
	<?php endforeach; endif; unset($_from); ?>
	
	<dt>馆存</dt>
	<dd><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=books&-action=list">所有图书</a></dd>
	<?php $_from = $this->_tpl_vars['statuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status'] => $this->_tpl_vars['num']):
?>
	<dd><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=books&-action=list&status=<?php echo $this->_tpl_vars['status']; ?>
"><?php echo $this->_tpl_vars['status']; ?>
</a> <em>(<?php echo $this->_tpl_vars['num']; ?>
)</em></dd>
	<?php endforeach; endif; unset($_from); ?>
	
	<dt>帮助</dt>
	<dd><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=books&-action=wishlist_button">帮助列表</a></dd>
	
</dl>