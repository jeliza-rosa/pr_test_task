$(function(){
	var block = $("#params-portlet");
	if( block.length && block.data("node") && block.data("component") ){
		loadNodeParams(block.data("component"), block.data("node"));
	}
})