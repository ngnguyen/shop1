<?php /*%%SmartyHeaderCode:659654f95157a712e4-54309582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff591dd7a3479661b97155a6e9ae03a39f314c80' => 
    array (
      0 => 'C:\\wamp\\www\\shop1\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1424775222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '659654f95157a712e4-54309582',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f95157b24e05_09094353',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f95157b24e05_09094353')) {function content_54f95157b24e05_09094353($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/shop1/vn/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Tìm kiếm" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Tìm kiếm</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
