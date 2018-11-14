<?php
/* Smarty version 3.1.33, created on 2018-11-12 14:30:30
  from '/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/admin124x0runc/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be980760e84a1_44643990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a533bd907dbd5102233475585a9550e6bcf6a914' => 
    array (
      0 => '/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/admin124x0runc/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1542013412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be980760e84a1_44643990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4881918035be980760e74e8_52337529', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_4881918035be980760e74e8_52337529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_4881918035be980760e74e8_52337529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
