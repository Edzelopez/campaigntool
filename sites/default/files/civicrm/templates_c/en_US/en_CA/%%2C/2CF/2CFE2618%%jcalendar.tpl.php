<?php /* Smarty version 2.6.27, created on 2013-09-30 17:25:41
         compiled from CRM/common/jcalendar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'CRM/common/jcalendar.tpl', 29, false),array('modifier', 'crmAddClass', 'CRM/common/jcalendar.tpl', 43, false),array('block', 'ts', 'CRM/common/jcalendar.tpl', 67, false),)), $this); ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['batchUpdate']): ?><?php echo ''; ?><?php $this->assign('elementId', $this->_tpl_vars['form']['field'][$this->_tpl_vars['elementIndex']][$this->_tpl_vars['elementName']]['id']); ?><?php echo ''; ?><?php $this->assign('tElement', ((is_array($_tmp=$this->_tpl_vars['elementName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_time') : smarty_modifier_cat($_tmp, '_time'))); ?><?php echo ''; ?><?php $this->assign('timeElement', "field_".($this->_tpl_vars['elementIndex'])."_".($this->_tpl_vars['elementName'])."_time"); ?><?php echo ''; ?><?php echo $this->_tpl_vars['form']['field'][$this->_tpl_vars['elementIndex']][$this->_tpl_vars['elementName']]['html']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['elementIndex']): ?><?php echo ''; ?><?php $this->assign('elementId', $this->_tpl_vars['form'][$this->_tpl_vars['elementName']][$this->_tpl_vars['elementIndex']]['id']); ?><?php echo ''; ?><?php $this->assign('timeElement', ((is_array($_tmp=$this->_tpl_vars['elementName'])) ? $this->_run_mod_handler('cat', true, $_tmp, "_time.".($this->_tpl_vars['elementIndex'])) : smarty_modifier_cat($_tmp, "_time.".($this->_tpl_vars['elementIndex'])))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elementName']][$this->_tpl_vars['elementIndex']]['html']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['blockId'] && $this->_tpl_vars['blockSection']): ?><?php echo ''; ?><?php $this->assign('elementId', $this->_tpl_vars['form'][$this->_tpl_vars['blockSection']][$this->_tpl_vars['blockId']][$this->_tpl_vars['elementName']]['id']); ?><?php echo ''; ?><?php $this->assign('tElement', ($this->_tpl_vars['elementName'])."_time"); ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['blockSection']][$this->_tpl_vars['blockId']][$this->_tpl_vars['elementName']]['html']; ?><?php echo ''; ?><?php $this->assign('timeElement', ($this->_tpl_vars['blockSection'])."_".($this->_tpl_vars['blockId'])."_".($this->_tpl_vars['elementName'])."_time"); ?><?php echo ''; ?><?php if ($this->_tpl_vars['tElement']): ?><?php echo '&nbsp;&nbsp;'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['blockSection']][$this->_tpl_vars['blockId']][$this->_tpl_vars['tElement']]['label']; ?><?php echo '&nbsp;&nbsp;'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form'][$this->_tpl_vars['blockSection']][$this->_tpl_vars['blockId']][$this->_tpl_vars['tElement']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'six') : smarty_modifier_crmAddClass($_tmp, 'six')); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('elementId', $this->_tpl_vars['form'][$this->_tpl_vars['elementName']]['id']); ?><?php echo ''; ?><?php $this->assign('timeElement', ((is_array($_tmp=$this->_tpl_vars['elementName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_time') : smarty_modifier_cat($_tmp, '_time'))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elementName']]['html']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('displayDate', ((is_array($_tmp=$this->_tpl_vars['elementId'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_display') : smarty_modifier_cat($_tmp, '_display'))); ?><?php echo ''; ?><?php if ($this->_tpl_vars['action'] != 1028): ?><?php echo '<input type="text" name="'; ?><?php echo $this->_tpl_vars['displayDate']; ?><?php echo '" id="'; ?><?php echo $this->_tpl_vars['displayDate']; ?><?php echo '" class="dateplugin" autocomplete="off"/>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['batchUpdate'] && $this->_tpl_vars['timeElement'] && $this->_tpl_vars['tElement']): ?><?php echo '&nbsp;&nbsp;'; ?><?php echo $this->_tpl_vars['form']['field'][$this->_tpl_vars['elementIndex']][$this->_tpl_vars['tElement']]['label']; ?><?php echo '&nbsp;&nbsp;'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['field'][$this->_tpl_vars['elementIndex']][$this->_tpl_vars['tElement']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'six') : smarty_modifier_crmAddClass($_tmp, 'six')); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['timeElement'] && ! $this->_tpl_vars['tElement']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['form'][$this->_tpl_vars['timeElement']]['label']): ?><?php echo '&nbsp;&nbsp;'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['timeElement']]['label']; ?><?php echo '&nbsp;&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form'][$this->_tpl_vars['timeElement']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'six') : smarty_modifier_crmAddClass($_tmp, 'six')); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['action'] != 1028): ?><?php echo '<span class="crm-clear-link">(<a href="#" onclick="clearDateTime( \''; ?><?php echo $this->_tpl_vars['elementId']; ?><?php echo '\' ); return false;">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'clear'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a>)</span>'; ?><?php endif; ?><?php echo '<script type="text/javascript">'; ?><?php echo '
    cj( function() {
      '; ?><?php echo 'var element_date   = "#'; ?><?php echo $this->_tpl_vars['displayDate']; ?><?php echo '";'; ?><?php if ($this->_tpl_vars['timeElement']): ?><?php echo 'var element_time  = "#'; ?><?php echo $this->_tpl_vars['timeElement']; ?><?php echo '";var time_format   = cj( element_time ).attr(\'timeFormat\');'; ?><?php echo '
              cj(element_time).timeEntry({ show24Hours : time_format, spinnerImage: \'\' });
          '; ?><?php echo ''; ?><?php endif; ?><?php echo 'var currentYear = new Date().getFullYear();var alt_field   = \'#'; ?><?php echo $this->_tpl_vars['elementId']; ?><?php echo '\';cj( alt_field ).hide();var date_format = cj( alt_field ).attr(\'format\');var altDateFormat = \'mm/dd/yy\';'; ?><?php echo '
      switch ( date_format ) {
        case \'dd-mm\':
        case \'mm/dd\':
            altDateFormat = \'mm/dd\';
            break;
      }

      if ( !( ( date_format == \'M yy\' ) || ( date_format == \'yy\' ) || ( date_format == \'yy-mm\' ) ) ) {
          cj( element_date ).addClass( \'dpDate\' );
      }

      '; ?><?php echo 'var yearRange   = currentYear - parseInt( cj( alt_field ).attr(\'startOffset\') );yearRange  += \':\';yearRange  += currentYear + parseInt( cj( alt_field ).attr(\'endOffset\'  ) );'; ?><?php echo '

      var lcMessage = '; ?><?php echo '"'; ?><?php echo $this->_tpl_vars['config']->lcMessages; ?><?php echo '"'; ?><?php echo ';
      var localisation = lcMessage.split(\'_\');
      var dateValue = cj(alt_field).val( );
      cj(element_date).datepicker({
                                    closeAtTop        : true,
                                    dateFormat        : date_format,
                                    changeMonth       : true,
                                    changeYear        : true,
                                    altField          : alt_field,
                                    altFormat         : altDateFormat,
                                    yearRange         : yearRange,
                                    regional          : localisation[0]
                                });

      // set default value to display field, setDefault param for datepicker
      // is not working hence using below logic
      // parse the date
      var displayDateValue = cj.datepicker.parseDate( altDateFormat, dateValue );

      // format date according to display field
      displayDateValue = cj.datepicker.formatDate( date_format, displayDateValue );
      cj( element_date).val( displayDateValue );

      cj(element_date).click( function( ) {
          hideYear( this );
      });
      cj(\'.ui-datepicker-trigger\').click( function( ) {
          hideYear( cj(this).prev() );
      });
    });

    function hideYear( element ) {
        var format = cj( element ).attr(\'format\');
        if ( format == \'dd-mm\' || format == \'mm/dd\' ) {
            cj(".ui-datepicker-year").css( \'display\', \'none\' );
        }
    }

    function clearDateTime( element ) {
        cj(\'input#\' + element + \',input#\' + element + \'_time\' + \',input#\' + element + \'_display\').val(\'\');
    }
    '; ?><?php echo '</script>'; ?>
