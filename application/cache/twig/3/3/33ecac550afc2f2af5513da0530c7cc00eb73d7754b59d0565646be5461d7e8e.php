<?php

/* admin/currency/edit_coupon_config.html */
class __TwigTemplate_27548803ee3146599839af7ab15549f18e549e8ce1068e7a5c85009df4ce0909 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/edit_coupon_config.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/edit_coupon_config.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"主键\",display:true, field: \"pm_coupon_config.id\"},
\t\t\t\t\t{type: \"text\",name: \"优惠券名称\",verify:\"tel\",field: \"pm_coupon_config.name\"},
\t\t\t\t\t{type: \"text\",name: \"优惠券金额\",field: \"pm_coupon_config.amount\"},
\t\t\t\t\t{type: \"time\",name: \"优惠券有效期开始时间\",field: \"spm_coupon_config.tart_time\"},
\t\t\t\t\t{type: \"time\",name: \"优惠券有效期结束时间\",verify:\"tel\",field: \"pm_coupon_config.end_time\"},
\t\t\t\t\t{type: \"text\",name: \"产品的源id\",field: \"pm_coupon_config.sid\"},
\t\t\t\t\t{type: \"text\",name: \"分类id\",field: \"pm_coupon_config.cateid\"},
\t\t\t\t\t{type: \"text\",name: \"标签\",verify:\"tel\",field: \"pm_coupon_config.tag\"},
\t\t\t\t\t{type: \"text\",name: \"优惠券类型\",field: \"pm_coupon_config.type\"},
\t\t\t\t\t{type: \"text\",name: \"订单满多少钱可以使用该优惠券\",field: \"pm_coupon_config.limit_amount\"},
\t\t\t\t\t{type: \"text\",name: \"生成了多少个优惠券\",verify:\"tel\",field: \"pm_coupon_config.gen_num\"},
\t\t\t\t\t{type: \"text\",name: \"创建人\",field: \"am_admin.creator_id\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",field: \"pm_coupon_config.create_at\"}
\t\t\t\t],
\t\t\t\tselectKey:\"pm_coupon_config.id\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/pm/Api_coupon_config/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/pm/Api_coupon_config/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/currency/pm_coupon_config'   //添加成功返回的页面
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
        return "admin/currency/edit_coupon_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 50,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "主键",display:true, field: "pm_coupon_config.id"},*/
/* 					{type: "text",name: "优惠券名称",verify:"tel",field: "pm_coupon_config.name"},*/
/* 					{type: "text",name: "优惠券金额",field: "pm_coupon_config.amount"},*/
/* 					{type: "time",name: "优惠券有效期开始时间",field: "spm_coupon_config.tart_time"},*/
/* 					{type: "time",name: "优惠券有效期结束时间",verify:"tel",field: "pm_coupon_config.end_time"},*/
/* 					{type: "text",name: "产品的源id",field: "pm_coupon_config.sid"},*/
/* 					{type: "text",name: "分类id",field: "pm_coupon_config.cateid"},*/
/* 					{type: "text",name: "标签",verify:"tel",field: "pm_coupon_config.tag"},*/
/* 					{type: "text",name: "优惠券类型",field: "pm_coupon_config.type"},*/
/* 					{type: "text",name: "订单满多少钱可以使用该优惠券",field: "pm_coupon_config.limit_amount"},*/
/* 					{type: "text",name: "生成了多少个优惠券",verify:"tel",field: "pm_coupon_config.gen_num"},*/
/* 					{type: "text",name: "创建人",field: "am_admin.creator_id"},*/
/* 					{type: "time",name: "创建时间",field: "pm_coupon_config.create_at"}*/
/* 				],*/
/* 				selectKey:"pm_coupon_config.id",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/pm/Api_coupon_config/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/pm/Api_coupon_config/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/currency/pm_coupon_config'   //添加成功返回的页面*/
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
/* */
