<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:04:06
  from '/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/admin124x0runc/themes/default/template/controllers/geolocation/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beae7e600f034_91851613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beb66bee4e16cf92fa895a5139323a11512d4f1f' => 
    array (
      0 => '/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/admin124x0runc/themes/default/template/controllers/geolocation/helpers/options/options.tpl',
      1 => 1542013412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beae7e600f034_91851613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7185938785beae7e6002442_66222930', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13944187505beae7e600ad53_00819948', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "field"} */
class Block_7185938785beae7e6002442_66222930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_7185938785beae7e6002442_66222930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'checkbox_table') {?>
				<div class="well margin-form" style="height: 300px; overflow-y: auto;">
			<table class="table" style="border-spacing : 0; border-collapse : collapse;">
				<thead>
					<tr>
						<th><input type="checkbox" name="checkAll" onclick="checkDelBoxes(this.form, 'countries[]', this.checked)" /></th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['list'], 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
						<tr>
							<td><input type="checkbox" name="countries[]" value="<?php echo $_smarty_tpl->tpl_vars['country']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']];?>
" <?php if (in_array(strtoupper($_smarty_tpl->tpl_vars['country']->value['iso_code']),$_smarty_tpl->tpl_vars['allowed_countries']->value)) {?>checked="checked"<?php }?> /></td>
							<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country']->value['name'],'html','UTF-8' ));?>
</td>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "field"} */
/* {block "input"} */
class Block_13944187505beae7e600ad53_00819948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_13944187505beae7e600ad53_00819948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'textarea_newlines') {?>
		<div class="col-lg-9">
			<textarea name=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 cols="<?php echo $_smarty_tpl->tpl_vars['field']->value['cols'];?>
" rows="<?php echo $_smarty_tpl->tpl_vars['field']->value['rows'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['value'],';',"\n"),'html','UTF-8' ));?>
</textarea>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
