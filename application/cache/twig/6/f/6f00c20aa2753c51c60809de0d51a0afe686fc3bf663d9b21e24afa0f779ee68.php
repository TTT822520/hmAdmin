<?php

/* admin/currency/product_service.html */
class __TwigTemplate_41312901b5d84ee2410467ac74965ce193e27f1c5c6cf61c7d3d447d287829c0 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/product_service.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/product_service.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/product_service.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a> 
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"examine\">审批</a>
</script>
<script>
    ykp.defineClass(['element', \"jquery\", 'laytpl'], {
        init: function () {
            var it = this;
            //初始化列表
            it.initTabel();
        },
        initTabel: function () {
            hm.load(function (option) {
                var table = option.table;
                var public = option.public;
                public.showTable({
                    topTool: {
                        btnArr: [
                        {title: \"添加\",type: \"add\"},
                        {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                        {title: \"高级搜索\", type: \"hSearch\"},
                        {title: \"导入\", type: \"improt\"},
                        {title: \"导出\", type: \"export\", }
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"pm_product_service-id\", width: 80, sort: true, title: \"id\", type: \"\", sear: \"pm_product_service-id\"},
                        {field: \"pm_product_service_type-name\", width: 80, title: \"类型id\", type: \"select\", sear: \"pm_product_service-type_id\",url:\"/admin/pm/api_pro_ser_type/grid\",colKey:'id',colName:'name'},
                        {field: \"pm_product_service-name\", width: 80, title: \"产品名称\", type: \"\", sear: \"pm_product_service-name\"},
                        {field: \"pm_product_service-vist_num\", width: 100, title: \"访问量\", type: \"\", sear: \"pm_product_service-vist_num\"},
                        {field: \"um_company-company_name\", width: 200, title: \"公司名称\", type: \"select\", sear: \"pm_product_service-company_id\",url:\"/admin/api_company/grid\",colKey:'id',colName:'company_name'},
                        {field: \"pm_product_service-pic\", width: 150, title: \"详情图片\", type: \"image\", sear: \"\"},
                        {field: \"pm_product_service-status\", width: 150, title: \"审批状态\", type: \"select\", sear: \"pm_product_service-status\",enum: {0:\"待审批\",1:\"审批成功\",2:\"审批失败\"},examine:true},
                        {field: \"pm_product_service-examine_time\", width: 150, title: \"审批时间\", type: \"time\", sear: \"pm_product_service-examine_time\"},
                        {field: \"pm_product_service-price\", width: 100, title: \"市场价\", type: \"\", sear: \"pm_product_service-price\"},
                        {field: \"pm_product_service-v_price\", width: 100, title: \"会员价\", sear: \"pm_product_service-v_price\"},
                        {field: \"pm_product_service-buy_point\", width: 120, title: \"买点\", type: \"\", sear: \"pm_product_service-buy_point\"},
                        {field: \"pm_product_service-collect_num\", width: 120, title: \"收藏量\", type: \"\", sear: \"pm_product_service-collect_num\"},
                        {field: \"pm_product_service-introduce\", width: 120, title: \"产品介绍\", type: \"\", sear: \"pm_product_service-collect_num\"},
                        {field: \"right\", width: 200, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/pm/Api_product_service/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"pm_product_service-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                        \t{type: \"edit\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/editproduct_service?id='},
                           {type: \"detail\", url: '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/infoProductService?id='},
                            {type: \"examine\", url: '/admin/pm/Api_product_service/change_status'},
                             {type: \"del\", url: '/admin/pm/Api_product_service/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                        \t{type: \"add\",url: '";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/addproduct_service'},
                        \t{type: \"plDel\",url: '/admin/pm/Api_product_service/delete'},
                            {type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });

        }
    });
</script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "admin/currency/product_service.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 70,  94 => 63,  90 => 62,  75 => 50,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a> */
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="examine">审批</a>*/
/* </script>*/
/* <script>*/
/*     ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化列表*/
/*             it.initTabel();*/
/*         },*/
/*         initTabel: function () {*/
/*             hm.load(function (option) {*/
/*                 var table = option.table;*/
/*                 var public = option.public;*/
/*                 public.showTable({*/
/*                     topTool: {*/
/*                         btnArr: [*/
/*                         {title: "添加",type: "add"},*/
/*                         {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                         {title: "高级搜索", type: "hSearch"},*/
/*                         {title: "导入", type: "improt"},*/
/*                         {title: "导出", type: "export", }*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "pm_product_service-id", width: 80, sort: true, title: "id", type: "", sear: "pm_product_service-id"},*/
/*                         {field: "pm_product_service_type-name", width: 80, title: "类型id", type: "select", sear: "pm_product_service-type_id",url:"/admin/pm/api_pro_ser_type/grid",colKey:'id',colName:'name'},*/
/*                         {field: "pm_product_service-name", width: 80, title: "产品名称", type: "", sear: "pm_product_service-name"},*/
/*                         {field: "pm_product_service-vist_num", width: 100, title: "访问量", type: "", sear: "pm_product_service-vist_num"},*/
/*                         {field: "um_company-company_name", width: 200, title: "公司名称", type: "select", sear: "pm_product_service-company_id",url:"/admin/api_company/grid",colKey:'id',colName:'company_name'},*/
/*                         {field: "pm_product_service-pic", width: 150, title: "详情图片", type: "image", sear: ""},*/
/*                         {field: "pm_product_service-status", width: 150, title: "审批状态", type: "select", sear: "pm_product_service-status",enum: {0:"待审批",1:"审批成功",2:"审批失败"},examine:true},*/
/*                         {field: "pm_product_service-examine_time", width: 150, title: "审批时间", type: "time", sear: "pm_product_service-examine_time"},*/
/*                         {field: "pm_product_service-price", width: 100, title: "市场价", type: "", sear: "pm_product_service-price"},*/
/*                         {field: "pm_product_service-v_price", width: 100, title: "会员价", sear: "pm_product_service-v_price"},*/
/*                         {field: "pm_product_service-buy_point", width: 120, title: "买点", type: "", sear: "pm_product_service-buy_point"},*/
/*                         {field: "pm_product_service-collect_num", width: 120, title: "收藏量", type: "", sear: "pm_product_service-collect_num"},*/
/*                         {field: "pm_product_service-introduce", width: 120, title: "产品介绍", type: "", sear: "pm_product_service-collect_num"},*/
/*                         {field: "right", width: 200, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/pm/Api_product_service/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "pm_product_service-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                         	{type: "edit",url: '{{base_url}}admin/currency/editproduct_service?id='},*/
/*                            {type: "detail", url: '{{base_url}}admin/currency/infoProductService?id='},*/
/*                             {type: "examine", url: '/admin/pm/Api_product_service/change_status'},*/
/*                              {type: "del", url: '/admin/pm/Api_product_service/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                         	{type: "add",url: '{{base_url}}admin/currency/addproduct_service'},*/
/*                         	{type: "plDel",url: '/admin/pm/Api_product_service/delete'},*/
/*                             {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
