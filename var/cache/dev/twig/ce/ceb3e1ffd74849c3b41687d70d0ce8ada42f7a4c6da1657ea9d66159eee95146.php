<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_8ea75ee81f3292063db8d27dc6d12108639b25cb869db75beffdc91b49c529a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>

<body>

    <nav id=\"navbar\" class=\"d-flex flex-column justify-content-start align-items-center\">

        <div id=\"nav-icon3\">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div id=\"list-container\" class=\"d-flex flex-column justify-content-center align-items-center\">

            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("beatshare");
        echo "\" title=\"Home\"><i class=\"fas fa-home\"></i></a>

            <a href=\"#\" title=\"Search\"><i class=\"fas fa-search\"></i></a>

            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\" title=\"Upload\"><i class=\"fas fa-upload\"></i></a>

            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" title=\"Profil\"><i class=\"fas fa-user\"></i></a>
        </div>

    </nav>

    <div id=\"nav-dropdown\" class=\"not-loaded\">

        <i id=\"nav-dropdown-leaver\" class=\"fas fa-chevron-left\"></i>

        <div class=\"d-flex flex-column justify-content-center align-items-center\">

            <div id=\"website-logo\" class=\"d-flex flex-column justify-content-center align-items-center\">
                <img src=\"images/Logo/logo_transparent.png\" width=\"256px\" alt=\"Logo Beatshare\">
            </div>

            <div id=\"dropdown-option\" class=\"d-flex flex-column justify-content-center align-items-center w-100\">
                ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "              
                    <a class=\"btn w-75\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
            echo "\">Publier un beat</a>
             
                    <a class=\"btn w-75\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">Profil</a>
              
                ";
        }
        // line 67
        echo "
                ";
        // line 68
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
            // line 69
            echo "
                <div class=\"form-group w-75\">
                    <a id=\"submit-login\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn w-100 m-0 mt-2\">Connexion</a>
                </div>
                
               
                    <a class=\"btn btn-outline-blue-grey waves-effect w-75\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">S'inscrire</a>
               

                ";
        } else {
            // line 79
            echo "         
                    <a class=\"btn btn-outline-danger waves-effect w-75\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
        
                ";
        }
        // line 83
        echo "            </div>


        </div>
    </div>

    ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "

    ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Beatshare";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"cdn/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"cdn/css/mdb.min.css\" rel=\"stylesheet\">

    <link rel=\"icon\" href=\"images/Logo/favicon.png\">

    ";
        // line 18
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("sidenav");
        echo "

    ";
        // line 20
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("base");
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "

    <script type=\"text/javascript\" src=\"cdn/js/jquery-3.4.1.min.js\"></script>
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\" src=\"cdn/js/popper.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    <script type=\"text/javascript\" src=\"cdn/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    <script type=\"text/javascript\" src=\"cdn/js/mdb.min.js\"></script>
    
    ";
        // line 103
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("sidenav");
        echo "

    ";
        // line 105
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("base");
        echo "
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 105,  284 => 103,  272 => 93,  262 => 92,  244 => 89,  231 => 20,  226 => 18,  216 => 10,  214 => 9,  204 => 8,  185 => 6,  173 => 108,  171 => 92,  167 => 90,  165 => 89,  157 => 83,  151 => 80,  148 => 79,  141 => 75,  134 => 71,  130 => 69,  128 => 68,  125 => 67,  119 => 64,  114 => 62,  111 => 61,  109 => 60,  90 => 44,  85 => 42,  78 => 38,  61 => 23,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Beatshare{% endblock %}</title>

    {% block stylesheets %}
    {# font awesome #}
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"cdn/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"cdn/css/mdb.min.css\" rel=\"stylesheet\">

    <link rel=\"icon\" href=\"images/Logo/favicon.png\">

    {{ encore_entry_link_tags('sidenav') }}

    {{ encore_entry_link_tags('base') }}

    {% endblock %}
</head>

<body>

    <nav id=\"navbar\" class=\"d-flex flex-column justify-content-start align-items-center\">

        <div id=\"nav-icon3\">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div id=\"list-container\" class=\"d-flex flex-column justify-content-center align-items-center\">

            <a href=\"{{ path('beatshare') }}\" title=\"Home\"><i class=\"fas fa-home\"></i></a>

            <a href=\"#\" title=\"Search\"><i class=\"fas fa-search\"></i></a>

            <a href=\"{{ path('add') }}\" title=\"Upload\"><i class=\"fas fa-upload\"></i></a>

            <a href=\"{{ path('profile') }}\" title=\"Profil\"><i class=\"fas fa-user\"></i></a>
        </div>

    </nav>

    <div id=\"nav-dropdown\" class=\"not-loaded\">

        <i id=\"nav-dropdown-leaver\" class=\"fas fa-chevron-left\"></i>

        <div class=\"d-flex flex-column justify-content-center align-items-center\">

            <div id=\"website-logo\" class=\"d-flex flex-column justify-content-center align-items-center\">
                <img src=\"images/Logo/logo_transparent.png\" width=\"256px\" alt=\"Logo Beatshare\">
            </div>

            <div id=\"dropdown-option\" class=\"d-flex flex-column justify-content-center align-items-center w-100\">
                {% if app.user %}
              
                    <a class=\"btn w-75\" href=\"{{ path('add') }}\">Publier un beat</a>
             
                    <a class=\"btn w-75\" href=\"{{ path('profile') }}\">Profil</a>
              
                {% endif %}

                {% if not app.user %}

                <div class=\"form-group w-75\">
                    <a id=\"submit-login\" href=\"{{ path('security_login') }}\" class=\"btn w-100 m-0 mt-2\">Connexion</a>
                </div>
                
               
                    <a class=\"btn btn-outline-blue-grey waves-effect w-75\" href=\"{{ path('security_registration') }}\">S'inscrire</a>
               

                {% else %}
         
                    <a class=\"btn btn-outline-danger waves-effect w-75\" href=\"{{ path('security_logout') }}\">Déconnexion</a>
        
                {% endif %}
            </div>


        </div>
    </div>

    {% block body %}{% endblock %}


    {% block javascripts %}


    <script type=\"text/javascript\" src=\"cdn/js/jquery-3.4.1.min.js\"></script>
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\" src=\"cdn/js/popper.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    <script type=\"text/javascript\" src=\"cdn/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    <script type=\"text/javascript\" src=\"cdn/js/mdb.min.js\"></script>
    
    {{ encore_entry_script_tags('sidenav') }}

    {{ encore_entry_script_tags('base') }}
    
    {% endblock %}
</body>

</html>", "base.html.twig", "C:\\Users\\Utilisateur\\Desktop\\WEB\\Guy\\beatshare\\templates\\base.html.twig");
    }
}
