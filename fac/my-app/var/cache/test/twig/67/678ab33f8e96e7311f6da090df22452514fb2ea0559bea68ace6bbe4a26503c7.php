<?php

/* blog/index.html.twig */
class __TwigTemplate_5b1399ebe7e3973513551b828d846656bbe849b52f35364acbf0e71df282d81a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "<html>
<head>
    <title>Sign in</title>
    <style type=\"text/css\">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-size: 20px;
        }

        a {
            text-decoration: none;
            color: #2647CB;
        }

        a:hover {
            text-decoration: underline;
            color: red;
        }

        .wrap {
            width: 390px;
            height: 450px;
            margin: 50px auto;
            border: 1px solid #8A8989;
            position: relative;
        }

        .main {
            width: 100px;
            height: 400px;
            margin: 0 auto;
        }

        .header {
            width: 100%;
            height: 50px;

            line-height: 50px;
            background-image: url(images/foot.png);
            background-color: rgb(247, 247, 247);
            background-repeat: no-repeat;
        }

        .header h3 {
            position: relative;
            display: inline-block;
            line-height: 50px;
            margin-left: 650px;
            font-size: 30px;

        }

        .header span {
            display: inline-block;
            float: right;
            margin: auto 15px;
            font-size: 50px;
        }

        .inputDiv {
            display: block;
            width: 350px;
            height: 40px;
            margin: 10px auto;
        }

        .phoneIn {
            display: inline-block;
            float: right;
            font-size: 14px;
            background-image: url(images/phone.png);
            background-repeat: no-repeat;
            margin: 30px 0px 10px 0px;
        }

        .smBtn {
            background: #2066C5;
            color: white;
            font-size: 18px;
            font-weight: bold;
            height: 50px;
            border-radius: 4px;
        }

        .smBtn:hover {
            background: #4067EE;
        }

        .pull-right {
            display: inline-block;
            float: right;

        }

        .other {
            width: 350px;
            padding-top: 50px;
            margin: 0 auto;
        }

        .toggleDiv {

            position: absolute;
            right: 0;
            bottom: 0;

            z-index: 1000;
        }

        .weima {
            text-align: center;
            padding-top: 50px;
            width: 390px;
            height: 400px;
        }

        .weima p {
            line-height: 50px;
        }

        .title3 {     
             color: transparent;   
             background-color: black;   
             text-shadow: rgba(255, 255, 255, 0.5) 0 5px 6px, rgba(255, 255, 255, 0.2) 1px 3px 3px;     
             -webkit-background-clip: text;
        }
    </style>
</head>
<div class=\"header\">
    <h3 class=\"title3\">BLOG</h3>

</div>
<div class=\"main\">
    ";
        // line 141
        $this->displayBlock('body', $context, $blocks);
        // line 155
        echo "</div>
</html>/
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 141
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 142
        echo "        <nav class=\"navbar navbar-default navbar-static-top\">
            <div id=\"navbar\" class=\"collapse navbar-collapse pull-right\">
                <ul class=\"nav navbar-nav\">
                    ";
        // line 146
        echo "                    <li class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign");
        echo "\">Sign in</a></li>
                    ";
        // line 148
        echo "                    ";
        // line 149
        echo "                    <li class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a></li>
                    ";
        // line 151
        echo "                </ul>
            </div>
        </nav>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  212 => 151,  207 => 149,  205 => 148,  200 => 146,  195 => 142,  186 => 141,  174 => 155,  172 => 141,  33 => 4,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends 'repeatInscrit.html.twig' %}#}

{#{% block title %}Hello {{ controller_name }}!{% endblock %}#}
<html>
<head>
    <title>Sign in</title>
    <style type=\"text/css\">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-size: 20px;
        }

        a {
            text-decoration: none;
            color: #2647CB;
        }

        a:hover {
            text-decoration: underline;
            color: red;
        }

        .wrap {
            width: 390px;
            height: 450px;
            margin: 50px auto;
            border: 1px solid #8A8989;
            position: relative;
        }

        .main {
            width: 100px;
            height: 400px;
            margin: 0 auto;
        }

        .header {
            width: 100%;
            height: 50px;

            line-height: 50px;
            background-image: url(images/foot.png);
            background-color: rgb(247, 247, 247);
            background-repeat: no-repeat;
        }

        .header h3 {
            position: relative;
            display: inline-block;
            line-height: 50px;
            margin-left: 650px;
            font-size: 30px;

        }

        .header span {
            display: inline-block;
            float: right;
            margin: auto 15px;
            font-size: 50px;
        }

        .inputDiv {
            display: block;
            width: 350px;
            height: 40px;
            margin: 10px auto;
        }

        .phoneIn {
            display: inline-block;
            float: right;
            font-size: 14px;
            background-image: url(images/phone.png);
            background-repeat: no-repeat;
            margin: 30px 0px 10px 0px;
        }

        .smBtn {
            background: #2066C5;
            color: white;
            font-size: 18px;
            font-weight: bold;
            height: 50px;
            border-radius: 4px;
        }

        .smBtn:hover {
            background: #4067EE;
        }

        .pull-right {
            display: inline-block;
            float: right;

        }

        .other {
            width: 350px;
            padding-top: 50px;
            margin: 0 auto;
        }

        .toggleDiv {

            position: absolute;
            right: 0;
            bottom: 0;

            z-index: 1000;
        }

        .weima {
            text-align: center;
            padding-top: 50px;
            width: 390px;
            height: 400px;
        }

        .weima p {
            line-height: 50px;
        }

        .title3 {     
             color: transparent;   
             background-color: black;   
             text-shadow: rgba(255, 255, 255, 0.5) 0 5px 6px, rgba(255, 255, 255, 0.2) 1px 3px 3px;     
             -webkit-background-clip: text;
        }
    </style>
</head>
<div class=\"header\">
    <h3 class=\"title3\">BLOG</h3>

</div>
<div class=\"main\">
    {% block body %}
        <nav class=\"navbar navbar-default navbar-static-top\">
            <div id=\"navbar\" class=\"collapse navbar-collapse pull-right\">
                <ul class=\"nav navbar-nav\">
                    {#{% if app.user %}#}
                    <li class=\"active\"><a href=\"{{ path(\"sign\") }}\">Sign in</a></li>
                    {#<li><a href=\"{{ logout_url(\"secured_area\") }}\">Logout</a></li>#}
                    {#{% else %}#}
                    <li class=\"active\"><a href=\"{{ path(\"login\") }}\">Login</a></li>
                    {#{% endif %}#}
                </ul>
            </div>
        </nav>
    {% endblock %}
</div>
</html>/
", "blog/index.html.twig", "/Users/shaqianqian/Desktop/m2/php/fac/my-app/templates/blog/index.html.twig");
    }
}
