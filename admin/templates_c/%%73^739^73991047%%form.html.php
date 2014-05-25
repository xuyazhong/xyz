<?php /* Smarty version 2.6.18, created on 2014-04-28 12:17:53
         compiled from xataface/forgot_password/form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'use_macro', 'xataface/forgot_password/form.html', 1, false),array('block', 'fill_slot', 'xataface/forgot_password/form.html', 2, false),array('block', 'translate', 'xataface/forgot_password/form.html', 8, false),array('modifier', 'escape', 'xataface/forgot_password/form.html', 5, false),)), $this); ?>
<?php $this->_tag_stack[] = array('use_macro', array('file' => "Dataface_Main_Template.html")); $_block_repeat=true;$this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('fill_slot', array('name' => 'main_section')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
		<div class="forgot-password-form">
			<div class="portalMessage status-message" <?php if (! $this->_tpl_vars['error']): ?>style="display:none"<?php endif; ?>><?php if ($this->_tpl_vars['error']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></div>
			<script src="<?php echo $this->_tpl_vars['ENV']['DATAFACE_URL']; ?>
/js/jquery.packed.js"></script>
			<script src="<?php echo $this->_tpl_vars['ENV']['DATAFACE_URL']; ?>
/js/forgot_password.js"></script>
			<h1><?php $this->_tag_stack[] = array('translate', array('id' => "forgot_password.heading")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Request Password Reset<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h1>
			
			<div class="forgot-password-form-fields">
				<select id="reset-password-by">
					<option value="email"><?php $this->_tag_stack[] = array('translate', array('id' => "forgot_password.options.email")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>My Email Address is:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
					<option value="username"><?php $this->_tag_stack[] = array('translate', array('id' => "forgot_password.options.username")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>My username is:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
				</select>
				
				<input type="text" id="email-or-username"/>
				
				<input type="button" id="submit-button" value="<?php $this->_tag_stack[] = array('translate', array('id' => "templates.Dataface_submit_translation.LABEL_SUBMIT")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/>
                                
                                <p><a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-action=login"><?php $this->_tag_stack[] = array('translate', array('id' => "forgot_password.login_now")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Login Now<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p>
			</div>
		
		</div>
	
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>