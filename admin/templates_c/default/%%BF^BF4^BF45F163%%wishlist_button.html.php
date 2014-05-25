<?php /* Smarty version 2.6.18, created on 2014-04-28 12:23:21
         compiled from wishlist_button.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'use_macro', 'wishlist_button.html', 1, false),array('block', 'fill_slot', 'wishlist_button.html', 3, false),array('block', 'abs', 'wishlist_button.html', 24, false),)), $this); ?>
<?php $this->_tag_stack[] = array('use_macro', array('file' => "Dataface_Main_Template.html")); $_block_repeat=true;$this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

	<?php $this->_tag_stack[] = array('fill_slot', array('name' => 'main_column')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
		<h1>The Library Wishlist Toolbar Button</h1>
		<p>The Library Wishlist Toolbar Button is a button that you can add to your browser toolbar to be able to easily add books that you see to your library's wish list.
		</p>
		
		<h3>How it works</h3>
		
		<ol>
			<li>You install the wishlist button on your browser toolbar.  See <a href="#install-wishlist">here</a> for installation instructions.</li>
			<li>You browse the internet on your favourite book sites (e.g. Amazon, Chapters, WTS, etc..), and when you see
			a book that you like, you click the "Add to Wishlist" button on your browser's toolbar.</li>
			<li>A form appears allowing you to select the book and add your own comments and tags.</li>
			<li>Click "Submit", and the book will automatically be saved to the Librarian DB database.</li>
		</ol>
		
		<a name="install-wishlist"/>
		<h3>Installing the Wishlist Toolbar Button</h3>
		
		<h4>In Firefox or Safari:</h4>
		<p>Drag the link below up to your browser links bar (or toolbar):</p>
		<p><a href="javascript:function f()<?php echo '{'; ?>
var%20script=document.createElement('script');script.src='<?php $this->_tag_stack[] = array('abs', array()); $_block_repeat=true;$this->_plugins['block']['abs'][0][0]->abs($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['abs'][0][0]->abs($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>?-action=add_book_remotely';script.type='text/javascript';var%20head=document.getElementsByTagName('head');head[0].appendChild(script);<?php echo '}'; ?>
;f();" title="Add to Wishlist">Add to Wishlist</a></p>
		
		<h4>In Internet Explorer:</h4>
		<p>Right click on the link below and select "Add to Favorites".  Then select Create In "Links".  This will show you a standard security warning.  Just click OK.  Then the button should be added to your links bar.</p>
		<p><a href="javascript:function f()<?php echo '{'; ?>
var%20script=document.createElement('script');script.src='<?php $this->_tag_stack[] = array('abs', array()); $_block_repeat=true;$this->_plugins['block']['abs'][0][0]->abs($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['abs'][0][0]->abs($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>?-action=add_book_remotely';script.type='text/javascript';var%20head=document.getElementsByTagName('head');head[0].appendChild(script);<?php echo '}'; ?>
;f();" title="Add to Wishlist">Add to Wishlist</a></p>
	
		<h3>Using the Wishlist Toolbar Button</h3>
		
		<p>After the button has been installed, you can navigate to the book info page for any book
		on virtually any book website, and easily add that book to your wishlist.</p>
		
		<h4>Learning by Example</h4>
		
		<ol>
			<li>Go to the Amazon page for the "Reason for God" book by Tim Keller <a href="http://www.amazon.com/Reason-God-Belief-Age-Skepticism/dp/0525950494" target="_blank">here</a>.
			<div><img src="http://media.weblite.ca/files/photos/Picture%2022.png?max_width=500"/></div>
			</li>
			<li>Click on your "Add to Wishlist" button on your browser toolbar. <b>Note that you may be prompted for a password.  Please use your username/password for the Library Database.</b>
			<div><img src="http://media.weblite.ca/files/photos/Picture%202-4.png?max_width=640"/></div>
			</li>
			<li>In the form that appears, select the first instance of "Reason For God" that shows up in the "Select Book" select list.
				<div><img src="http://media.weblite.ca/files/photos/Picture%202-5.png?max_width=640"/></div>
			</li>
			<li>This should fill in most of the fields with the associated information about the book.
				<div><img src="http://media.weblite.ca/files/photos/Picture%202-6.png?max_width=640"/></div>
			</li>
			<li>Edit or add categories or tags in the "Categories/tags" field.  This field gives you auto-complete hints based on categories that currently exist in the system.  Add as many as you like.
				<div><img src="http://media.weblite.ca/files/photos/Picture%2026.png?max_width=640"/></div>
			</li>
			<li>Add comments, or modify any of the other fields, then click submit.</li>
			<li>You should receive a success message, with an option to view the resulting entry in the library database.
				<div><img src="http://media.weblite.ca/files/photos/Picture%2027.png?max_width=640"/></div>
			</li>
		</ol>
		
		<p>That's all there is to it.</p>
		
	
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>