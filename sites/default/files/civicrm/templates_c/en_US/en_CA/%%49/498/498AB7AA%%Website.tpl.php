<?php /* Smarty version 2.6.27, created on 2013-10-04 13:12:21
         compiled from CRM/Contact/Form/Edit/Website.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Form/Edit/Website.tpl', 32, false),array('function', 'help', 'CRM/Contact/Form/Edit/Website.tpl', 33, false),array('modifier', 'crmAddClass', 'CRM/Contact/Form/Edit/Website.tpl', 42, false),)), $this); ?>

<?php if (! $this->_tpl_vars['addBlock']): ?>
<tr>
    <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Website<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        &nbsp;&nbsp;<?php echo smarty_function_help(array('id' => "id-website",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

    </td>
    <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Website Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td colspan="2"></td>
    <td id="Website-Primary" class="hiddenElement"></td>
</tr>
<?php endif; ?>

<tr id="Website_Block_<?php echo $this->_tpl_vars['blockId']; ?>
">
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['website'][$this->_tpl_vars['blockId']]['url']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'url') : smarty_modifier_crmAddClass($_tmp, 'url')); ?>
&nbsp;</td>
    <td><?php echo $this->_tpl_vars['form']['website'][$this->_tpl_vars['blockId']]['website_type_id']['html']; ?>
</td>
    <td colspan="3"><?php if ($this->_tpl_vars['blockId'] > 1): ?> <a href="#" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Website Block<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onClick="removeBlock('Website','<?php echo $this->_tpl_vars['blockId']; ?>
'); return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a><?php endif; ?></td>
</tr>
<?php if (! $this->_tpl_vars['addBlock']): ?>
<tr>
<td colspan="4">
&nbsp;&nbsp;<a href="#" title=<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> onClick="buildAdditionalBlocks( 'Website', '<?php echo $this->_tpl_vars['className']; ?>
');return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add another website<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
</td>
</tr>
<?php endif; ?>
