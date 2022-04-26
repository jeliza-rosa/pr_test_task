<?
error_reporting(1);
ini_set('display_errors', 1);
setlocale(LC_ALL, 'ru_RU.UTF-8');

$config['host']="http://".$_SERVER['HTTP_HOST']."/";	

$config['session']['name'] = "pr_session";
$config['session']['expire'] = null;
$config['session']['host'] = null;
$config['session']['path'] = "/";

$config['app']['cache']['use'] = false;
$config['app']['cache']['host'] = '127.0.0.1';
$config['app']['cache']['port'] = 11211;
$config['app']['cache']['expire'] = 60*60;
$config['app']['cache']['prefix'] = md5($_SERVER['HTTP_HOST'])."_";

$config['app']['debug']=false;

$config['app']['log']['use']=true;

$config['template']['smarty']['version'] = "Smarty-3.1.12";
$config['template']['smarty']['cache']['use'] = false;
$config['template']['smarty']['cache']['lifetime'] = 5;
$config['template']['smarty']['cache']['dir'] = 'cache/smarty/cache/';
$config['template']['smarty']['plugins']['dir'] = 'engine/modules/template/smarty_plugins/';
$config['template']['smarty']['debug'] = false;
$config['template']['smarty']['compile'] = 'cache/smarty/compiled/';
$config['template']['smarty']['images'] = 'cache/files/';
$config['template']['path'] = "templates/default/";

$config['image']['cache']['dir'] = "cache/files/";
$config['image']['quality'] = 90;

$config['html']['title']="prCms 3.0";
$config['html']['separator']=" » ";