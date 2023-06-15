<?php
/* Smarty version 3.1.46, created on 2023-05-17 04:32:12
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_6464910cda56b5_32128296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e91dcd48d787edaa87057095ca8682e8c40544dd' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/login.tpl',
      1 => 1684312331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6464910cda56b5_32128296 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css?v=3" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/logincss.css?v=2" rel="stylesheet"> <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl'] == '1') {?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style-rtl.min.css" rel="stylesheet"> <?php }?>
</head>
<body class="overflow-hidden bg-light">
<div class="wrapper no-navigation">
    <div class="sign-in-wrapper">

        <div class="card-sign-in-inner">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="login-brand text-center">
                        <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/logo.png?v=4" alt="Logo">
                    </div> <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>
 <?php }?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/post">
                        <div class="mb-4">
                            <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Address'];?>
">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
">
                        </div>
                        <div class="m-top-md p-top-sm">
                            <button class="btn btn-success block full-width" name="login" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign in'];?>
</button>
                        </div>
                        <div class="m-top-md p-top-sm">
                            <div class="text-center m-bottom-xs">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/forgot-pw"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Forgot password'];?>
</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
</body>
</html>
<?php }
}
