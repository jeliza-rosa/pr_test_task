<?php /* Smarty version Smarty-3.1.12, created on 2013-10-31 20:45:13
         compiled from "templates/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110476772652726cf9535de1-20907624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba4e79e0fca36278cfa61a3c678263298986764c' => 
    array (
      0 => 'templates/default/footer.tpl',
      1 => 1380086504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110476772652726cf9535de1-20907624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oCurrentNode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52726cf958b580_49881350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52726cf958b580_49881350')) {function content_52726cf958b580_49881350($_smarty_tpl) {?>	<?php if ($_smarty_tpl->tpl_vars['oCurrentNode']->value->getUrl()!="root"){?>
	</section>
	<?php }?>
	<nav><h2>Меню</h2></nav>
	<footer>
		<h2>Футер</h2>
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