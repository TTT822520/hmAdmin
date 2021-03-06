<?php

/* admin/order/iofficeOrder.html */
class __TwigTemplate_7f5c21cdbe71b405985e9357305a70ad5c41e9218da2006eab75d68fe66f322a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/order/iofficeOrder.html", 1)->display($context);
        // line 2
        echo "<style>
\t.layui-laydate{
\t\ttop: 297px !important;
\t}
</style>
";
        // line 7
        $this->loadTemplate("admin/crumbs.html", "admin/order/iofficeOrder.html", 7)->display($context);
        // line 8
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 9
        $this->loadTemplate("admin/import.html", "admin/order/iofficeOrder.html", 9)->display($context);
        // line 10
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                            {title: \"高级搜索\", type: \"hSearch\", },
                            {title: \"导入\", type: \"improt\", },
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"om_iof_order-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"om_iof_order-id\"},
                        {field: \"om_iof_order-code\", width: 80, title: \"订单号\", type: \"\", sear: \"om_iof_order-code\"},
                        {field: \"om_iof_order-scode\", width: 80, title: \"源订单号\", type: \"\", sear: \"om_iof_order-scode\",},
                        {field: \"om_iof_order-price\", width: 150, title: \"订单金额\", type: \"\", sear: \"om_iof_order-price\"},
                        {field: \"um_user-username\", width: 150, title: \"用户ID\", type: \"\", sear: \"om_iof_order-uid\"},
                        {field: \"om_iof_order-status\", width: 80, title: \"订单状态\", type: \"select\", sear: \"om_iof_order-status\", enum: {0: \"未付款\", 1: \"已付款\"}},
                        {field: \"om_iof_order-pay_type\", width: 150, title: \"支付方式\", type: \"select\", sear: \"om_iof_order-type\", enum: {0: \"微信\", 1: \"支付宝\",2:\"对公转帐\"}},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"om_iof_order-type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"om_iof_order-shop_id\", width: 150, title: \"店铺id\", sear: \"om_iof_order-shop_id\"},
                        {field: \"om_iof_order-ip\", width: 200, sort: true, title: \"IP地址\", type: \"\", sear: \"om_iof_order-ip\"},
                        {field: \"om_iof_order-pay_time\", width: 200, sort: true, title: \"支付时间\", type: \"time\", sear: \"om_iof_order-pay_time\"},
//                      {field: \"om_iof_order-creator\", width: 200, sort: true, title: \"创建人\", type: \"\", sear: \"om_iof_order-creator\"},
                        {field: \"om_iof_order-service_start\", width: 150, sort: true, title: \"服务开始时间\", type: \"time\", sear: \"om_iof_order-service_start\"},
                        {field: \"om_iof_order-service_end\", width: 150, sort: true, title: \"服务结束时间\", type: \"time\", sear: \"om_iof_order-service_end\"},
                        {field: \"om_iof_order-create_at\", width: 200, sort: true, title: \"创建时间\", type: \"time\", sear: \"om_iof_order-create_at\"},
                        {field: \"om_iof_order-floor_room_info\", width: 200, sort: true, title: \"楼层房号信息\", type: \"\", sear: \"om_iof_order-floor_room_info\"},
                        {field: \"om_iof_order-remark\", width: 200, sort: true, title: \"备注\", type: \"\", sear: \"om_iof_order-remark\"},
                        {field: \"om_iof_order-goods_list_ids\", width: 200, title: \"房号里的增值服务清单()\", type: \"\", sear: \"om_iof_order-goods_list_ids\"},
                        {field: \"om_iof_order-goods_list_price\", width: 200,title: \"房号里的增值服务总价\", type: \"\", sear: \"om_iof_order-goods_list_price\"},
                        {field: \"om_iof_order-product_id\", width: 200,title: \"产品ID\", type: \"\", sear: \"om_iof_order-product_id\"},
                        
                       
                       {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_iof_order/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"om_iof_order-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/order/ioffice_order_info?id='},
                        ]
                    },
                    topBtnActive: {
                        Event: [
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

</html>";
    }

    public function getTemplateName()
    {
        return "admin/order/iofficeOrder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	.layui-laydate{*/
/* 		top: 297px !important;*/
/* 	}*/
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                             {title: "高级搜索", type: "hSearch", },*/
/*                             {title: "导入", type: "improt", },*/
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "om_iof_order-id", width: 80, sort: true, title: "ID", type: "", sear: "om_iof_order-id"},*/
/*                         {field: "om_iof_order-code", width: 80, title: "订单号", type: "", sear: "om_iof_order-code"},*/
/*                         {field: "om_iof_order-scode", width: 80, title: "源订单号", type: "", sear: "om_iof_order-scode",},*/
/*                         {field: "om_iof_order-price", width: 150, title: "订单金额", type: "", sear: "om_iof_order-price"},*/
/*                         {field: "um_user-username", width: 150, title: "用户ID", type: "", sear: "om_iof_order-uid"},*/
/*                         {field: "om_iof_order-status", width: 80, title: "订单状态", type: "select", sear: "om_iof_order-status", enum: {0: "未付款", 1: "已付款"}},*/
/*                         {field: "om_iof_order-pay_type", width: 150, title: "支付方式", type: "select", sear: "om_iof_order-type", enum: {0: "微信", 1: "支付宝",2:"对公转帐"}},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "om_iof_order-type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "om_iof_order-shop_id", width: 150, title: "店铺id", sear: "om_iof_order-shop_id"},*/
/*                         {field: "om_iof_order-ip", width: 200, sort: true, title: "IP地址", type: "", sear: "om_iof_order-ip"},*/
/*                         {field: "om_iof_order-pay_time", width: 200, sort: true, title: "支付时间", type: "time", sear: "om_iof_order-pay_time"},*/
/* //                      {field: "om_iof_order-creator", width: 200, sort: true, title: "创建人", type: "", sear: "om_iof_order-creator"},*/
/*                         {field: "om_iof_order-service_start", width: 150, sort: true, title: "服务开始时间", type: "time", sear: "om_iof_order-service_start"},*/
/*                         {field: "om_iof_order-service_end", width: 150, sort: true, title: "服务结束时间", type: "time", sear: "om_iof_order-service_end"},*/
/*                         {field: "om_iof_order-create_at", width: 200, sort: true, title: "创建时间", type: "time", sear: "om_iof_order-create_at"},*/
/*                         {field: "om_iof_order-floor_room_info", width: 200, sort: true, title: "楼层房号信息", type: "", sear: "om_iof_order-floor_room_info"},*/
/*                         {field: "om_iof_order-remark", width: 200, sort: true, title: "备注", type: "", sear: "om_iof_order-remark"},*/
/*                         {field: "om_iof_order-goods_list_ids", width: 200, title: "房号里的增值服务清单()", type: "", sear: "om_iof_order-goods_list_ids"},*/
/*                         {field: "om_iof_order-goods_list_price", width: 200,title: "房号里的增值服务总价", type: "", sear: "om_iof_order-goods_list_price"},*/
/*                         {field: "om_iof_order-product_id", width: 200,title: "产品ID", type: "", sear: "om_iof_order-product_id"},*/
/*                         */
/*                        */
/*                        {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_iof_order/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "om_iof_order-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/order/ioffice_order_info?id='},*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
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
