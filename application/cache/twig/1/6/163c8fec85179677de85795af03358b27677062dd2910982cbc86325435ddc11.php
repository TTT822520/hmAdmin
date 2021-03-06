<?php

/* admin/currency/frame.html */
class __TwigTemplate_f7e2ce33cf1cfb43c8f175e55d6d71e2fbdd68571f409d010bfe739b64c260a9 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/frame.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/frame.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/frame.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
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
                       btnArr: [{title: \"添加\", type: \"add\"},
                       {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
                         \t{title: \"导出\", type: \"export\" }
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"name\", width: 80, title: \"判断字段\", type: \"\", sear: \"name\"},
                        {field: \"title\", width: 80, title: \"标题名称\", type: \"\", sear: \"title\"},
                        {field: \"type\", width: 80, title: \"类型\", type: \"select\", sear: \"type\", enum: {0: \"其他\", 1: \"顶部导航\", 2: \"关于我们\", 3: \"商务合作\", 4: \"隐私策略\", 5: \"帮助中心\"}},
                        {field: \"url\", width: 80, title: \"网址url\", type: \"\", sear: \"url\"},
                        {field: \"picture\", width: 80, title: \"图片\", type: \"image\", sear: \"\"},
                        {field: \"is_show\", width: 80, title: \"是否显示\", type: \"select\", sear: \"is_show\", enum: {0: \"否\", 1: \"是\"}},
                        {field: \"sort\", width: 150, title: \"排序\", type: \"\", sear: \"sort\"},
                        {field: \"remark\", width: 150, title: \"备注\", type: \"\", sear: \"remark\"},
                        {field: \"right\", width: 160, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/api_frame/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                         Event: [{type: \"edit\", url: '/admin/currency/editFrame?id='},
                            {type: \"detail\", url: '/admin/currency/infoFrame?id='},
                            {type: \"del\", url: '/admin/pm/api_frame/delete'}
                        ]
                    },
                   topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/currency/addFrame'},
                        {type: \"plDel\",url: '/admin/pm/api_frame/delete'}
                           // {type: \"improt\", url: \"/upload\"},
                           // {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });

        }
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/currency/frame.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
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
/*                        btnArr: [{title: "添加", type: "add"},*/
/*                        {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                          	{title: "导出", type: "export" }*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "name", width: 80, title: "判断字段", type: "", sear: "name"},*/
/*                         {field: "title", width: 80, title: "标题名称", type: "", sear: "title"},*/
/*                         {field: "type", width: 80, title: "类型", type: "select", sear: "type", enum: {0: "其他", 1: "顶部导航", 2: "关于我们", 3: "商务合作", 4: "隐私策略", 5: "帮助中心"}},*/
/*                         {field: "url", width: 80, title: "网址url", type: "", sear: "url"},*/
/*                         {field: "picture", width: 80, title: "图片", type: "image", sear: ""},*/
/*                         {field: "is_show", width: 80, title: "是否显示", type: "select", sear: "is_show", enum: {0: "否", 1: "是"}},*/
/*                         {field: "sort", width: 150, title: "排序", type: "", sear: "sort"},*/
/*                         {field: "remark", width: 150, title: "备注", type: "", sear: "remark"},*/
/*                         {field: "right", width: 160, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/api_frame/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                          Event: [{type: "edit", url: '/admin/currency/editFrame?id='},*/
/*                             {type: "detail", url: '/admin/currency/infoFrame?id='},*/
/*                             {type: "del", url: '/admin/pm/api_frame/delete'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/currency/addFrame'},*/
/*                         {type: "plDel",url: '/admin/pm/api_frame/delete'}*/
/*                            // {type: "improt", url: "/upload"},*/
/*                            // {type: "export", url: "/upload"}*/
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
