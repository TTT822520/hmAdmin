<?php

/* front/hmtong/hmtentity-vip.html */
class __TwigTemplate_9a9a63164b8c7f17afe182a70e4d05a8a7d6f92320cbb53c81dfa7e1d47a362f extends Twig_Template
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
        echo "<script src=\"/resource/front/js/jquery.min.js\"></script>
<div class=\"entity-vip\" style=\"display: none\">


    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sthy"]) ? $context["sthy"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 6
            echo "            <div class=\"cjvip-cont\">
        <div class=\"cjvip-tit\">
            <h3>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "grade", array(), "array"), "html", null, true);
            echo "</h3>
            <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo " <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array(), "array"), "html", null, true);
            echo "</span> 折</h4>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title2", array(), "array"), "html", null, true);
            echo "</p>
        </div>
        <div class=\"cjvipshow clear\">
            <div class=\"cardinfo\">
                <h4>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "grade", array(), "array"), "html", null, true);
            echo "</h4>
                <p>享受您的尊贵</p>
                <div><img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "img1", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></div>
            </div>
            <div class=\"lunbopic\">

            </div>

        </div>
        <div class=\"zsItem clear\">
            <p>赠送项目：</p>
            <ul class=\"clear\">
                <li><i></i>茶水<span> 免费 </span>饮用</li>
                <li style=\"width: 300px\"><i></i>赠送 <span> 1 </span> 杯咖啡</li>
                <li><i></i>赠送黑白A4打印、复印单店共计 <span> 10 </span>张，5店可享</li>
                <li style=\"width: 300px\"><i></i>会客室每店每次免费使用 <span> 2 </span> 小时</li>
                <li><i></i>会议室每店每周免费使用 <span> 1 </span> 小时，不累计</li>
                <li style=\"width: 300px\"><i></i>赠送总额<span> 3150+ </span>元</li>
                <li><i></i>最大可获得<span> 10000 </span>积分（积分可用于实体消费）</li>
                <li style=\"width: 300px\"><i></i>获取平台海量资源权限</li>
            </ul>
            <div class=\"moreinfo clear\">
                <div class=\"zxbt\">咨询我们，了解更多</div>
                <div class=\"detailbt\"><a href=\"/Hmtong/hmtVipOrderDetails\">查看详情</a></div>
                <p>咨询服务电话：<span>400-822-3230</span></p>
            </div>
        </div>
        <p class=\"title2\">加入会员可获资源</p>

        <div class=\"vip\">
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "get_res", array(), "array"));
            foreach ($context['_seq'] as $context["key2"] => $context["item2"]) {
                // line 45
                echo "            <div>
                <p>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "num", array(), "array"), "html", null, true);
                echo "</p>
                ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "title", array(), "array"), "html", null, true);
                echo "
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['item2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "







    <div class=\"contact-cont\">
        <p class=\"contacttit\">亲，以上没有符合您需求的，可提交您的需求，我们可以自定义为您提供服务！<br/> 或电联我们<span>";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
        echo "</span></p>
        <ul >
            <li style=\"height:160px;margin-bottom: 30px;padding-left: 86px \"><i style=\"top:18px;left: 30px;\"><img src=\"/resource/front/images/pencil.png\" alt=\"\"></i><textarea placeholder=\"填写您的需求。\"></textarea></li>
            <li style=\"margin-bottom:20px;\"><i style=\"top:18px;left: 34px;\"><img src=\"/resource/front/images/acct.png\" alt=\"\"></i><input type=\"text\" placeholder=\"联系人\"></li>
            <li style=\"margin-bottom:41px;\"><i style=\"top:14px;left: 39px;\"><img src=\"/resource/front/images/phone.png\" alt=\"\"></i><input type=\"text\" placeholder=\"联系电话\"></li>
        </ul>
        <div id=\"subBt\">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交</div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "front/hmtong/hmtentity-vip.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 62,  114 => 53,  106 => 50,  97 => 47,  93 => 46,  90 => 45,  86 => 44,  55 => 16,  50 => 14,  43 => 10,  37 => 9,  33 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <script src="/resource/front/js/jquery.min.js"></script>*/
/* <div class="entity-vip" style="display: none">*/
/* */
/* */
/*     {% for key,item in sthy %}*/
/*             <div class="cjvip-cont">*/
/*         <div class="cjvip-tit">*/
/*             <h3>{{item['grade']}}</h3>*/
/*             <h4>{{item['title']}} <span>{{item['discount']}}</span> 折</h4>*/
/*             <p>{{item['title2']}}</p>*/
/*         </div>*/
/*         <div class="cjvipshow clear">*/
/*             <div class="cardinfo">*/
/*                 <h4>{{item['grade']}}</h4>*/
/*                 <p>享受您的尊贵</p>*/
/*                 <div><img src="{{item['img1']}}" alt=""></div>*/
/*             </div>*/
/*             <div class="lunbopic">*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="zsItem clear">*/
/*             <p>赠送项目：</p>*/
/*             <ul class="clear">*/
/*                 <li><i></i>茶水<span> 免费 </span>饮用</li>*/
/*                 <li style="width: 300px"><i></i>赠送 <span> 1 </span> 杯咖啡</li>*/
/*                 <li><i></i>赠送黑白A4打印、复印单店共计 <span> 10 </span>张，5店可享</li>*/
/*                 <li style="width: 300px"><i></i>会客室每店每次免费使用 <span> 2 </span> 小时</li>*/
/*                 <li><i></i>会议室每店每周免费使用 <span> 1 </span> 小时，不累计</li>*/
/*                 <li style="width: 300px"><i></i>赠送总额<span> 3150+ </span>元</li>*/
/*                 <li><i></i>最大可获得<span> 10000 </span>积分（积分可用于实体消费）</li>*/
/*                 <li style="width: 300px"><i></i>获取平台海量资源权限</li>*/
/*             </ul>*/
/*             <div class="moreinfo clear">*/
/*                 <div class="zxbt">咨询我们，了解更多</div>*/
/*                 <div class="detailbt"><a href="/Hmtong/hmtVipOrderDetails">查看详情</a></div>*/
/*                 <p>咨询服务电话：<span>400-822-3230</span></p>*/
/*             </div>*/
/*         </div>*/
/*         <p class="title2">加入会员可获资源</p>*/
/* */
/*         <div class="vip">*/
/*             {% for key2,item2 in item['get_res'] %}*/
/*             <div>*/
/*                 <p>{{item2['num']}}</p>*/
/*                 {{item2['title']}}*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     <div class="contact-cont">*/
/*         <p class="contacttit">亲，以上没有符合您需求的，可提交您的需求，我们可以自定义为您提供服务！<br/> 或电联我们<span>{{tel}}</span></p>*/
/*         <ul >*/
/*             <li style="height:160px;margin-bottom: 30px;padding-left: 86px "><i style="top:18px;left: 30px;"><img src="/resource/front/images/pencil.png" alt=""></i><textarea placeholder="填写您的需求。"></textarea></li>*/
/*             <li style="margin-bottom:20px;"><i style="top:18px;left: 34px;"><img src="/resource/front/images/acct.png" alt=""></i><input type="text" placeholder="联系人"></li>*/
/*             <li style="margin-bottom:41px;"><i style="top:14px;left: 39px;"><img src="/resource/front/images/phone.png" alt=""></i><input type="text" placeholder="联系电话"></li>*/
/*         </ul>*/
/*         <div id="subBt">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交</div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
