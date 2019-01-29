<?php

/* blog/signIn.html.twig */
class __TwigTemplate_319b9225d7224c1244ae35e9ff0c372081a03dc503b371f2a292aabc46781257 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/signIn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/signIn.html.twig"));

        // line 3
        echo "

<html>
<head>
    <title>Sign in</title>
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
<div class=\"wrap\">
    <div class=\"header\" id=\"head\">
        <h3 >Sign in</h3>
    </div>
    <div class=\"main\">

<form action=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_create");
        echo "\" method=\"post\">
    <div class=\"lgD\">
    <label  class=\"inputDiv\" for=\"username\">Username:</label>
    <input  class=\"inputDiv\" type=\"text\" id=\"username\" name=\"username\"  />
    </div>
    <div class=\"lgD\">
    <label  class=\"inputDiv\" for=\"password\">Password:</label>
    <input  class=\"inputDiv\" type=\"password\" id=\"password\" name=\"password\"  />
    </div>

    ";
        // line 149
        echo "        ";
        // line 150
        echo "        ";
        // line 151
        echo "
    ";
        // line 153
        echo "    <div class=\"lgD\">
    <button class=\"inputDiv smBtn\" type=\"submit\">sign in</button>
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
        return "blog/signIn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 153,  183 => 151,  181 => 150,  179 => 149,  166 => 138,  29 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/security/login.html.twig #}
{# ... you will probably extend your base template, like repeatInscrit.html.twig #}


<html>
<head>
    <title>Sign in</title>
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
<div class=\"wrap\">
    <div class=\"header\" id=\"head\">
        <h3 >Sign in</h3>
    </div>
    <div class=\"main\">

<form action=\"{{ path('author_create') }}\" method=\"post\">
    <div class=\"lgD\">
    <label  class=\"inputDiv\" for=\"username\">Username:</label>
    <input  class=\"inputDiv\" type=\"text\" id=\"username\" name=\"username\"  />
    </div>
    <div class=\"lgD\">
    <label  class=\"inputDiv\" for=\"password\">Password:</label>
    <input  class=\"inputDiv\" type=\"password\" id=\"password\" name=\"password\"  />
    </div>

    {##}
        {#If you want to control the URL the user#}
        {#is redirected to on success (more details below)#}

    {##}
    <div class=\"lgD\">
    <button class=\"inputDiv smBtn\" type=\"submit\">sign in</button>
    </div>
</form>
    </div>
</div>
</html>", "blog/signIn.html.twig", "/Users/shaqianqian/Desktop/m2/php/fac/my-app/templates/blog/signIn.html.twig");
    }
}
