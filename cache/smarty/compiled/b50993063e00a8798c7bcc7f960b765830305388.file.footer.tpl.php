<?php /* Smarty version Smarty-3.1.12, created on 2014-02-13 11:55:27
         compiled from "templates/custom/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29328624752fc5e4f49eb29-04695831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50993063e00a8798c7bcc7f960b765830305388' => 
    array (
      0 => 'templates/custom/footer.tpl',
      1 => 1392269243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29328624752fc5e4f49eb29-04695831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oCurrentNode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52fc5e4f4dbad5_45361222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fc5e4f4dbad5_45361222')) {function content_52fc5e4f4dbad5_45361222($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/function.hook.php';
?>	<?php if ($_smarty_tpl->tpl_vars['oCurrentNode']->value->getUrl()!="root"){?>
	</section>
	<?php }?>
	<nav><h2>Меню</h2></nav>
	<footer>
		<h2>Футер</h2>
		<?php echo smarty_function_hook(array('hookgroup'=>"footer-menu"),$_smarty_tpl);?>

		Создание сайта - <a href="http://vprioritete.ru/" target="_blank">ИК Приоритет</a>
	</footer>
</div>





<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21873286 = new Ya.Metrika({id:21873286,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21873286" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html><?php }} ?>