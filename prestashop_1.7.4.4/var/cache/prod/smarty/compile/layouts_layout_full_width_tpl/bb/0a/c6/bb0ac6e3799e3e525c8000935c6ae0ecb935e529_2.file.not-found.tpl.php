<?php
/* Smarty version 3.1.33, created on 2018-11-12 12:27:47
  from '/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be963b3e88933_78542115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb0ac6e3799e3e525c8000935c6ae0ecb935e529' => 
    array (
      0 => '/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/themes/classic/templates/errors/not-found.tpl',
      1 => 1542013413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be963b3e88933_78542115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759985355be963b3e82794_33021179', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_8002286165be963b3e851a3_39002388 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_5620812605be963b3e86e19_06746192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_1759985355be963b3e82794_33021179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1759985355be963b3e82794_33021179',
  ),
  'search' => 
  array (
    0 => 'Block_8002286165be963b3e851a3_39002388',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_5620812605be963b3e86e19_06746192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8002286165be963b3e851a3_39002388', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5620812605be963b3e86e19_06746192', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
