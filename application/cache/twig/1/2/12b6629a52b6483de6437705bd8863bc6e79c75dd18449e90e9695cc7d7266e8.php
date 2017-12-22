<?php

/* admin/product/editService.html */
class __TwigTemplate_849c74f4564825d71badabe633173c49897ec622d8b2f63af3a5537cff1bb762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("admin/iheader.html", "admin/product/editService.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {margin: 10px;}
\t.demo-carousel {height: 200px;line-height: 200px;text-align: center;}
\t.layui-table-view .layui-table {width: 100%}
\t.model {padding: 20px;}
\t.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}
\t
</style>
";
        // line 10
        $this->loadTemplate("admin/crumbs1.html", "admin/product/editService.html", 10)->display($context);
        // line 11
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 720px; padding-bottom: 30px;\">
</form>
<script src=\"/resource/admin/js/jslib/citys.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initFrom();
\t\t},
\t\tinitFrom: function() {
\t\t\thm.showAddEdit({
\t\t\t\tel: \".layui-form\",
\t\t\t\tlist: [{type: \"text\",name: \"id\", display:true,field: \"id\"},
\t\t\t\t\t{type: \"text\",name: \"名称\",field: \"name\"},
\t\t\t\t\t{type: \"text\",name: \"服务简介\", field: \"title\"},
\t\t\t\t\t{type: \"text\",name: \"服务内容\",field: \"content\",},
\t\t\t\t\t{type: \"select\",name: \"服务类型\",field: \"type\",sOption: {0: \"虚拟服务\",1: \"实体服务\"}},  //city:['北京','北京','东城区']
\t\t\t\t\t{type: \"select\",name: \"限制次数\",field: \"is_limit_num\",sOption: {0: \"不限制\",1: \"限制\"}},
\t\t\t\t\t//{type: \"citySelect\",name: \"服务类型\",block:true,field: \"type\",sOption: {0: \"虚拟服务\",1: \"实体服务\"},city:true},  //city:['北京','北京','东城区']
\t\t\t\t\t//{type: \"select\",name: \"投资方式\",field: \"um_provider.invest_type\", url:\"http://www.my-haimai.com/admin/api_user\",colKey:\"uid\",colName:\"username\"},  //异步获取数据的时候
\t\t\t\t\t{type: \"upload\",name: \"图片\",field: \"pics\",verify:\"required\",uploadUrl:\"http://www.my-haimai.com/api/api_common/upload_file\"},
\t\t\t\t\t{type: \"upload\",name: \"图标\",field: \"icon\",uploadUrl:\"http://www.my-haimai.com/api/api_common/upload_file\"},
\t\t\t\t],
\t\t\t\tselectKey:\"id\",   //列字段id   例: id, product_id
\t\t\t\tverifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"password\"
\t\t\t\t\t}, {
\t\t\t\t\t\tverifyDate: \"tel\"
\t\t\t\t\t},{
\t\t\t\t\t\tverifyDate: \"test\",
\t\t\t\t\t\tmatch:[/\\d+\\.\\d+\\.\\d+\\.\\d+ /, '请填写正确的ip']
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索*/
\t\t\t\tinfoUrl:\"/admin/Api_product/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/Api_product/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/product/service',   //添加成功返回的页面
\t\t\t});
\t\t},
\t});
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/editService.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 50,  33 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {margin: 10px;}*/
/* 	.demo-carousel {height: 200px;line-height: 200px;text-align: center;}*/
/* 	.layui-table-view .layui-table {width: 100%}*/
/* 	.model {padding: 20px;}*/
/* 	.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}*/
/* 	*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <form class="layui-form" action="" style="width: 720px; padding-bottom: 30px;">*/
/* </form>*/
/* <script src="/resource/admin/js/jslib/citys.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* 		initFrom: function() {*/
/* 			hm.showAddEdit({*/
/* 				el: ".layui-form",*/
/* 				list: [{type: "text",name: "id", display:true,field: "id"},*/
/* 					{type: "text",name: "名称",field: "name"},*/
/* 					{type: "text",name: "服务简介", field: "title"},*/
/* 					{type: "text",name: "服务内容",field: "content",},*/
/* 					{type: "select",name: "服务类型",field: "type",sOption: {0: "虚拟服务",1: "实体服务"}},  //city:['北京','北京','东城区']*/
/* 					{type: "select",name: "限制次数",field: "is_limit_num",sOption: {0: "不限制",1: "限制"}},*/
/* 					//{type: "citySelect",name: "服务类型",block:true,field: "type",sOption: {0: "虚拟服务",1: "实体服务"},city:true},  //city:['北京','北京','东城区']*/
/* 					//{type: "select",name: "投资方式",field: "um_provider.invest_type", url:"http://www.my-haimai.com/admin/api_user",colKey:"uid",colName:"username"},  //异步获取数据的时候*/
/* 					{type: "upload",name: "图片",field: "pics",verify:"required",uploadUrl:"http://www.my-haimai.com/api/api_common/upload_file"},*/
/* 					{type: "upload",name: "图标",field: "icon",uploadUrl:"http://www.my-haimai.com/api/api_common/upload_file"},*/
/* 				],*/
/* 				selectKey:"id",   //列字段id   例: id, product_id*/
/* 				verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "password"*/
/* 					}, {*/
/* 						verifyDate: "tel"*/
/* 					},{*/
/* 						verifyDate: "test",*/
/* 						match:[/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip']*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*//* */
/* 				infoUrl:"/admin/Api_product/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/Api_product/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/product/service',   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
