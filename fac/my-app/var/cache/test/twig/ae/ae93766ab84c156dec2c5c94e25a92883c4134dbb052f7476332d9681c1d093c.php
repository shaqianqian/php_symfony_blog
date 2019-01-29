<?php

/* blog/blog.html.twig */
class __TwigTemplate_01fbc47dc83567c05eee0d4764ec22d069bebb7103572a28569e9b9835d3bdff extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

    <!-- jQuery library -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <!-- Latest compiled JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    ";
        // line 18
        echo "    ";
        // line 19
        echo "
    <style type=\"text/css\">
        *{ margin: 0; padding: 0; }

        table.dataintable {
            margin-top:15px;
            border-collapse:collapse;
            border:1px solid #aaa;
            width:50%;
        }
        .inputDiv
        {
            display: block;
            width: 400px;

        }
        .inputBtn
        {
            display: block;
            width: 100px;

        }
        .main
        {
            width: 700px;
            height: 400px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<div class=\"main\">
    <div class=\"leftbox\">
<table border=\"1\" class=\"dataintable\">
    <tr>
        <th>Title</th>
        <th>Article</th>
        <th>modifie </th>
        <th>delete </th>

    </tr>
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "        ";
            // line 63
            echo "        <tr>
            <form action=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifie");
            echo "\" method=\"post\">
                <td>

                    <input class=\"inputBtn\" type=\"text\" name=\"title";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", array(), "method"), "html", null, true);
            echo "\" id=\"title";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", array(), "method"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTitle", array(), "method"), "html", null, true);
            echo "\" />

                </td>
                <td><input  class=\"inputDiv\" type=\"text\" id=\"body";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", array(), "method"), "html", null, true);
            echo "\" name=\"body";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", array(), "method"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getBody", array(), "method"), "html", null, true);
            echo "\"/>
                </td>
                <input id=\"artilceID\" type=\"hidden\"  name=\"artilceID\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", array(), "method"), "html", null, true);
            echo "\"/>
                <input id=\"author\"  name=\"author\" type=\"hidden\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "\">
                <td>
                    <button class=\"inputBtn\" type=\"submit\">modifie</button></td>


            </form>
            <td>
                <form action=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete");
            echo "\" method=\"post\">
                    <input id=\"author\"  name=\"author\" type=\"hidden\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 81, $this->source); })()), "html", null, true);
            echo "\">
                    <input id=\"artilceID\" type=\"hidden\"  name=\"artilceID\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", array(), "method"), "html", null, true);
            echo "\"/>
                    <button class=\"inputBtn\"  type=\"submit\">delete</button>
                </form>
            </td>

        </tr>
        ";
            // line 89
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "</table>

    </div>
    <div class=\"rightbox\">
<form action=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
        echo "\" method=\"post\">
    <label for=\"title\" id=\"test\">Title:</label>
    <textarea rows=\"1\" cols=\"30\" id=\"title\" name=\"title\"></textarea>

    <label for=\"body\">Body:</label>
    <textarea rows=\"1\" cols=\"30\" id=\"body\" name=\"body\"></textarea>
    <input id=\"author\"  name=\"author\" type=\"hidden\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 102
        echo "    ";
        // line 103
        echo "    ";
        // line 104
        echo "
    ";
        // line 106
        echo "    <button type=\"submit\">new blog</button>

</form>
";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "</div>
</div>
</body>
<script type=\"text/javascript\">
    function f() {
        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 116
            echo "        ";
            // line 117
            echo "        console.log(document.getElementById(\"body\" +";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", array(), "method"), "html", null, true);
            echo ").innerText);
        ";
            // line 119
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        // console.log(document.getElementById(\"body3\"))
        // for (let item in  articles )
        //     // console.log(document)
        // { console.log(document.getElementById(\"body\"+item.getId()));}
        ";
        // line 126
        echo "
    }

</script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 109,  271 => 6,  253 => 5,  239 => 126,  233 => 121,  226 => 119,  221 => 117,  219 => 116,  215 => 115,  208 => 110,  206 => 109,  201 => 106,  198 => 104,  196 => 103,  194 => 102,  190 => 100,  181 => 94,  175 => 90,  169 => 89,  160 => 82,  156 => 81,  152 => 80,  142 => 73,  138 => 72,  129 => 70,  119 => 67,  113 => 64,  110 => 63,  108 => 62,  104 => 61,  60 => 19,  58 => 18,  44 => 7,  42 => 6,  38 => 5,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

    <!-- jQuery library -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <!-- Latest compiled JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    {#<!-- Custom CSS File -->#}
    {#<script src=\"css/style.css\"></script>#}

    <style type=\"text/css\">
        *{ margin: 0; padding: 0; }

        table.dataintable {
            margin-top:15px;
            border-collapse:collapse;
            border:1px solid #aaa;
            width:50%;
        }
        .inputDiv
        {
            display: block;
            width: 400px;

        }
        .inputBtn
        {
            display: block;
            width: 100px;

        }
        .main
        {
            width: 700px;
            height: 400px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<div class=\"main\">
    <div class=\"leftbox\">
<table border=\"1\" class=\"dataintable\">
    <tr>
        <th>Title</th>
        <th>Article</th>
        <th>modifie </th>
        <th>delete </th>

    </tr>
    {% for item in articles %}
        {#<p> {{item.getTitle()}}</p>#}
        <tr>
            <form action=\"{{ path('modifie') }}\" method=\"post\">
                <td>

                    <input class=\"inputBtn\" type=\"text\" name=\"title{{ item.getId() }}\" id=\"title{{ item.getId() }}\" value=\"{{ item.getTitle() }}\" />

                </td>
                <td><input  class=\"inputDiv\" type=\"text\" id=\"body{{ item.getId() }}\" name=\"body{{ item.getId() }}\" value=\"{{ item.getBody() }}\"/>
                </td>
                <input id=\"artilceID\" type=\"hidden\"  name=\"artilceID\" value=\"{{item.getId()}}\"/>
                <input id=\"author\"  name=\"author\" type=\"hidden\" value=\"{{ author }}\">
                <td>
                    <button class=\"inputBtn\" type=\"submit\">modifie</button></td>


            </form>
            <td>
                <form action=\"{{ path('delete') }}\" method=\"post\">
                    <input id=\"author\"  name=\"author\" type=\"hidden\" value=\"{{ author }}\">
                    <input id=\"artilceID\" type=\"hidden\"  name=\"artilceID\" value=\"{{item.getId()}}\"/>
                    <button class=\"inputBtn\"  type=\"submit\">delete</button>
                </form>
            </td>

        </tr>
        {#<p> {{ username[1].getTitle()}}</p>#}
    {% endfor %}
</table>

    </div>
    <div class=\"rightbox\">
<form action=\"{{ path('post') }}\" method=\"post\">
    <label for=\"title\" id=\"test\">Title:</label>
    <textarea rows=\"1\" cols=\"30\" id=\"title\" name=\"title\"></textarea>

    <label for=\"body\">Body:</label>
    <textarea rows=\"1\" cols=\"30\" id=\"body\" name=\"body\"></textarea>
    <input id=\"author\"  name=\"author\" type=\"hidden\" value=\"{{ author }}\">
    {##}
    {#If you want to control the URL the user#}
    {#is redirected to on success (more details below)#}

    {##}
    <button type=\"submit\">new blog</button>

</form>
{% block javascripts %}{% endblock %}
</div>
</div>
</body>
<script type=\"text/javascript\">
    function f() {
        {% for item in articles %}
        {#console.log({{ item.getId()}});#}
        console.log(document.getElementById(\"body\" +{{ item.getId() }}).innerText);
        {#let text=document.getElementById(\"body\"+{{item.getId()}}).innerText;#}

        {% endfor %}
        // console.log(document.getElementById(\"body3\"))
        // for (let item in  articles )
        //     // console.log(document)
        // { console.log(document.getElementById(\"body\"+item.getId()));}
        {#console.log(\"body\" +{{ item.getId() }})#}

    }

</script>
</html>", "blog/blog.html.twig", "/Users/shaqianqian/Desktop/m2/php/fac/my-app/templates/blog/blog.html.twig");
    }
}
