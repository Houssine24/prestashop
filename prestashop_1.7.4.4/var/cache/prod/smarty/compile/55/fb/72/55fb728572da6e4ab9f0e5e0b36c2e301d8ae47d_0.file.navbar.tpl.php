<?php
/* Smarty version 3.1.33, created on 2018-11-13 09:46:15
  from '/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/modules/welcome/views/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea8f572cbc22_11127467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55fb728572da6e4ab9f0e5e0b36c2e301d8ae47d' => 
    array (
      0 => '/home/simoccauch30/Documents/Simplon/Public/prestaShop/prestashop_1.7.4.4/modules/welcome/views/navbar.tpl',
      1 => 1542098742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bea8f572cbc22_11127467 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-navbar bootstrap">
  <div class="row text">
    <div class="col-md-8">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</a>
  </div>
</div>
<?php }
}
