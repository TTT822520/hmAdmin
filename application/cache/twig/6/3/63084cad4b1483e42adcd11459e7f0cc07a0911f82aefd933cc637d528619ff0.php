<?php

/* admin/im/editExpress.html */
class __TwigTemplate_f007bfb63400dc5a595e5d57c484f886d43bc6e74cb3cb68cd888baecd339a42 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/editExpress.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {margin: 10px;}
\t.demo-carousel {height: 200px;line-height: 200px;text-align: center;}
\t.layui-table-view .layui-table {width: 100%}
\t.model {padding: 20px;}
\t.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}
</style>
";
        // line 9
        $this->loadTemplate("admin/crumbs1.html", "admin/im/editExpress.html", 9)->display($context);
        // line 10
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 30px;\">
</form>
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
\t\t\t\tlist: [{type: \"text\",name: \"编号\",display:true, field: \"id\"},
\t\t\t\t\t{type: \"text\",name: \"标题\",verify:\"tel\",field: \"title\"},
\t\t\t\t\t{type: \"text\",name: \"作者\",field: \"author\"},
\t\t\t\t\t{type: \"text\",name: \"是否热门\",field: \"ishot\"},
\t\t\t\t\t{type: \"text\",name: \"创建时间\",verify:\"tel\",field: \"create_at\"},
\t\t\t\t\t{type: \"text\",name: \"详细介绍\",field: \"content\"}
\t\t\t\t],
\t\t\t\tselectKey:\"id\",   //列字段id   例: id, product_id
//\t\t\t\tverifyData:{
//\t\t\t\t\toption: [{
//\t\t\t\t\t\tverifyDate: \"password\"
//\t\t\t\t\t}, {
//\t\t\t\t\t\tverifyDate: \"tel\"
//\t\t\t\t\t},{
//\t\t\t\t\t\tverifyDate: \"test\",
//\t\t\t\t\t\tmatch:[/\\d+\\.\\d+\\.\\d+\\.\\d+ /, '请填写正确的ip']
//\t\t\t\t\t}],
//\t\t\t\t\tel: \".layui-form\"
//\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/im/Api_express/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/im/Api_express/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/express'   //添加成功返回的页面
\t\t\t});
\t\t},
\t});
</script>
</body>
</html>



";
    }

    public function getTemplateName()
    {
        return "admin/im/editExpress.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 43,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {margin: 10px;}*/
/* 	.demo-carousel {height: 200px;line-height: 200px;text-align: center;}*/
/* 	.layui-table-view .layui-table {width: 100%}*/
/* 	.model {padding: 20px;}*/
/* 	.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <form class="layui-form" action="" style="width: 700px; padding-bottom: 30px;">*/
/* </form>*/
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
/* 				list: [{type: "text",name: "编号",display:true, field: "id"},*/
/* 					{type: "text",name: "标题",verify:"tel",field: "title"},*/
/* 					{type: "text",name: "作者",field: "author"},*/
/* 					{type: "text",name: "是否热门",field: "ishot"},*/
/* 					{type: "text",name: "创建时间",verify:"tel",field: "create_at"},*/
/* 					{type: "text",name: "详细介绍",field: "content"}*/
/* 				],*/
/* 				selectKey:"id",   //列字段id   例: id, product_id*/
/* //				verifyData:{*/
/* //					option: [{*/
/* //						verifyDate: "password"*/
/* //					}, {*/
/* //						verifyDate: "tel"*/
/* //					},{*/
/* //						verifyDate: "test",*/
/* //						match:[/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip']*/
/* //					}],*/
/* //					el: ".layui-form"*/
/* //				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/im/Api_express/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/im/Api_express/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/express'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
