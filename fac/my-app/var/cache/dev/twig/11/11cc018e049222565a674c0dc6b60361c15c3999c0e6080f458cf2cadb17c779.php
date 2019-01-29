<?php

/* blog/login.html.twig */
class __TwigTemplate_c1c7ed7ad918725093767538db47b8bd7198bcb663447b4885fe26122c645385 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/login.html.twig"));

        // line 3
        echo "
<html>
<head>
    <title>Login in</title>
    <style type=\"text/css\">
        *{margin: 0;padding: 0;}
        body
        {
            font-size: 20px;
        }
        a
        {
            text-decoration: none;
            color: #2647CB;
        }
        a:hover
        {
            text-decoration: underline;
            color: red;
        }
        .wrap
        {
            width: 390px;
            height: 450px;
            margin: 50px auto;
            border: 1px solid #8A8989;
            position: relative;
        }
        .main
        {
            width: 350px;
            height: 400px;
            margin: 0 auto;
        }
        .header
        {
            width: 100%;
            height: 50px;

            line-height: 50px;
            background-image: url(images/foot.png);
            background-color: rgb(247,247,247);
            background-repeat: no-repeat;
        }
        .header h3
        {   position: relative;
            display: inline-block;
            line-height: 50px;
            margin-left: 140px;
            font-size: 30px;

        }
        .header span
        {
            display: inline-block;
            float: right;
            margin: auto 15px;
            font-size: 50px;
        }

        .inputDiv
        {
            display: block;
            width: 350px;
            height: 40px;
            margin: 10px auto;
        }

        .phoneIn
        {
            display: inline-block;
            float: right;
            font-size: 14px;
            background-image: url(images/phone.png);
            background-repeat: no-repeat;
            margin: 30px 0px 10px 0px;
        }
        .smBtn
        {
            background: #2066C5;
            color: white;
            font-size: 18px;
            font-weight: bold;
            height: 50px;
            border-radius: 4px;
        }
        .smBtn:hover
        {
            background: #4067EE;
        }
        .pull-right
        {
            display: inline-block;
            float: right;

        }
        .other
        {
            width: 350px;
            padding-top: 50px;
            margin: 0 auto;
        }


        .toggleDiv
        {

            position: absolute;
            right: 0;
            bottom: 0;

            z-index: 1000;
        }

        .weima
        {
            text-align: center;
            padding-top: 50px;
            width: 390px;
            height: 400px;
        }
        .weima p
        {
            line-height: 50px;
        }

    </style>
</head>

";
        // line 134
        echo "    ";
        // line 135
        echo "        ";
        // line 136
        echo "            ";
        // line 137
        echo "        ";
        // line 138
        echo "        ";
        // line 139
        echo "        ";
        // line 140
        echo "            ";
        // line 141
        echo "                ";
        // line 142
        echo "                ";
        // line 143
        echo "            ";
        // line 144
        echo "        ";
        // line 147
        echo "<div class=\"wrap\">
    <div class=\"header\" id=\"head\">
        <h3 >Login in</h3>
    </div>
    <div class=\"main\">
<form action=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_login");
        echo "\" method=\"post\">
    <div class=\"lgD\">
    <label class=\"inputDiv\" for=\"username\">Username:</label>
    <input class=\"inputDiv\" type=\"text\" id=\"username\" name=\"username\"  />
    </div>
    <div class=\"lgD\">
    <label class=\"inputDiv\" for=\"password\">Password:</label>
    <input class=\"inputDiv\" type=\"password\" id=\"password\" name=\"password\"  />
    </div>
    ";
        // line 162
        echo "        ";
        // line 163
        echo "        ";
        // line 164
        echo "
    ";
        // line 166
        echo "    <div class=\"lgD\">
    <button class=\"inputDiv smBtn\" type=\"submit\">login</button>
    </div>
</form>
    </div>
</div>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 166,  205 => 164,  203 => 163,  201 => 162,  189 => 152,  182 => 147,  180 => 144,  178 => 143,  176 => 142,  174 => 141,  172 => 140,  170 => 139,  168 => 138,  166 => 137,  164 => 136,  162 => 135,  160 => 134,  29 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/security/login.html.twig #}
{# ... you will probably extend your base template, like repeatInscrit.html.twig #}

<html>
<head>
    <title>Login in</title>
    <style type=\"text/css\">
        *{margin: 0;padding: 0;}
        body
        {
            font-size: 20px;
        }
        a
        {
            text-decoration: none;
            color: #2647CB;
        }
        a:hover
        {
            text-decoration: underline;
            color: red;
        }
        .wrap
        {
            width: 390px;
            height: 450px;
            margin: 50px auto;
            border: 1px solid #8A8989;
            position: relative;
        }
        .main
        {
            width: 350px;
            height: 400px;
            margin: 0 auto;
        }
        .header
        {
            width: 100%;
            height: 50px;

            line-height: 50px;
            background-image: url(images/foot.png);
            background-color: rgb(247,247,247);
            background-repeat: no-repeat;
        }
        .header h3
        {   position: relative;
            display: inline-block;
            line-height: 50px;
            margin-left: 140px;
            font-size: 30px;

        }
        .header span
        {
            display: inline-block;
            float: right;
            margin: auto 15px;
            font-size: 50px;
        }

        .inputDiv
        {
            display: block;
            width: 350px;
            height: 40px;
            margin: 10px auto;
        }

        .phoneIn
        {
            display: inline-block;
            float: right;
            font-size: 14px;
            background-image: url(images/phone.png);
            background-repeat: no-repeat;
            margin: 30px 0px 10px 0px;
        }
        .smBtn
        {
            background: #2066C5;
            color: white;
            font-size: 18px;
            font-weight: bold;
            height: 50px;
            border-radius: 4px;
        }
        .smBtn:hover
        {
            background: #4067EE;
        }
        .pull-right
        {
            display: inline-block;
            float: right;

        }
        .other
        {
            width: 350px;
            padding-top: 50px;
            margin: 0 auto;
        }


        .toggleDiv
        {

            position: absolute;
            right: 0;
            bottom: 0;

            z-index: 1000;
        }

        .weima
        {
            text-align: center;
            padding-top: 50px;
            width: 390px;
            height: 400px;
        }
        .weima p
        {
            line-height: 50px;
        }

    </style>
</head>

{#<body>#}
{#<form>#}
    {#<div id=\"log_image\">#}
        {#<div id=\"titel_text\">#}
            {#<img id=titel_img src=\"header_logo.gif\">#}
        {#</div>#}
        {#<img id=\"log\" src=\"login.gif\"  >#}
        {#<div id=\"text_box\">#}
            {#<div>用户名: <input type=\"text\"></dvi>#}
                {#<div>密  码: <input type=\"password\"></div>#}
                {#<div> 验证码: <input type=\"text\"><img src=\"yan.bmp\" style=\"position:relative;top: 5px\"><input type=\"button\" value=\"登录\"></div>#}
            {#</div>#}
        {#</div>#}
{#</form>#}
{#</body>#}
<div class=\"wrap\">
    <div class=\"header\" id=\"head\">
        <h3 >Login in</h3>
    </div>
    <div class=\"main\">
<form action=\"{{ path('author_login') }}\" method=\"post\">
    <div class=\"lgD\">
    <label class=\"inputDiv\" for=\"username\">Username:</label>
    <input class=\"inputDiv\" type=\"text\" id=\"username\" name=\"username\"  />
    </div>
    <div class=\"lgD\">
    <label class=\"inputDiv\" for=\"password\">Password:</label>
    <input class=\"inputDiv\" type=\"password\" id=\"password\" name=\"password\"  />
    </div>
    {##}
        {#If you want to control the URL the user#}
        {#is redirected to on success (more details below)#}

    {##}
    <div class=\"lgD\">
    <button class=\"inputDiv smBtn\" type=\"submit\">login</button>
    </div>
</form>
    </div>
</div>
</html>", "blog/login.html.twig", "/Users/shaqianqian/Desktop/m2/php/fac/my-app/templates/blog/login.html.twig");
    }
}
