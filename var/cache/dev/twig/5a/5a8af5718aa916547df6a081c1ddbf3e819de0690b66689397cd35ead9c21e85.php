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

/* beatshare/profil.html.twig */
class __TwigTemplate_6da4c0644d23626b449cb62f670403ce5828f6e1153faecca0dc2e265e493e95 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beatshare/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beatshare/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "beatshare/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 5
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("profil");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "

<div id=\"brand-logo\" class=\"d-flex justify-content-end align-items-center w-100\"><img src=\"images/Logo/logo_transparent.png\" width=\"128px\"></div>
    <section id=\"profil-container-block\" class=\"d-flex w-100 justify-content-around align-items-start\">
    
        <div id=\"personnal-infos-container\" class=\"profil-infos d-flex flex-column align-items-center w-25 p-3\">
    
            <div style=\"min-height: 50px;\" class=\"d-flex justify-content-between align-items-center w-100\">
                <h2 class=\"profil-h2-brand\" style=\"text-align: center;\">Mon compte :</h2>
                <a class=\"btn m-0 p-2 pr-4 pl-4 d-flex justify-content-center align-items-center\"
                    id=\"modify-button\" href=\"Edition\">MODIFIER</a>
            </div>
    
            <ul class=\"list-group w-100\">
                <li class=\"list-group-item\">
                    <div class=\"md-v-line\"></div><i class=\"fas fa-user mr-4 pr-3\"></i>";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "
                </li>
                <li class=\"list-group-item\">
                    <div class=\"md-v-line\"></div><i class=\"fas fa-envelope mr-4 pr-3\"></i>";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "
                </li>
            </ul>
    
        </div>
    
        <div class=\"profil-infos d-flex flex-column justify-content-between align-items-center w-50 p-3\">
    
            <div style=\"min-height: 50px;\" class=\"d-flex justify-content-between align-items-center w-100\">
                <h2 class=\"profil-h2-brand\" style=\"text-align: center;\">Vos beats publiés :</h2>
            </div>
    
            <section id=\"profil-personnal-beats\"
                class=\"d-flex flex-column justify-content-center align-items-center m-0 pt-0 rounded mb-0 w-100\">
    
                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 45
                echo "    
                ";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, $context["article"], "artiste", [], "any", false, false, false, 46) == (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 46, $this->source); })()))) {
                    // line 47
                    echo "    
                <a id=\"personnal-beat-";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "\" tabindex=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "\" data-beat-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "\"
                    class=\"beat-personnal d-flex justify-content-start align-items-center beat-section border-bottom border-right border-left border-light p-0 w-100\"
                    img=\"images/";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "img", [], "any", false, false, false, 50), "html", null, true);
                    echo "\">
                    <img src=\"images/beatImages/";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "img", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" width=\"64px\" height=\"64px\"
                        class=\"mr-3\">";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "artiste", [], "any", false, false, false, 52), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 52), "html", null, true);
                    echo "
                    <button type=\"button\" class=\"btn btn-outline-danger waves-effect ml-auto float-right mr-3\"
                        data-toggle=\"modal\" data-target=\"#mod-";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" data-beat-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54), "html", null, true);
                    echo "\">
                        <i class=\"fas fa-times\"></i>
                    </button>
                </a>
    
                <div class=\"modal fade\" id=\"mod-";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 59), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression du beat : ";
                    // line 64
                    echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 64, $this->source); })()), "html", null, true);
                    echo " -
                                    ";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 65), "html", null, true);
                    echo "</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-around\">
    
                                <button type=\"button\" class=\"btn btn-outline-blue-grey\" data-dismiss=\"modal\">Fermer</button>
    
                                <button type=\"submit\" class=\"btn btn-outline-danger\"
                                    id=\"";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "\">Supprimer</button>
    
                            </div>
                        </div>
                    </div>
                </div>
    
    
                ";
                }
                // line 84
                echo "    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "    
            </section>
    
        </div>
    
    </section>
    
    </div>
    </div>
    </div>


";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 103
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("profil");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "beatshare/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 103,  265 => 102,  255 => 101,  232 => 86,  225 => 84,  213 => 75,  200 => 65,  196 => 64,  188 => 59,  178 => 54,  171 => 52,  167 => 51,  163 => 50,  154 => 48,  151 => 47,  149 => 46,  146 => 45,  142 => 44,  124 => 29,  118 => 26,  101 => 11,  99 => 10,  96 => 9,  86 => 8,  74 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
{{ parent() }}
{{ encore_entry_link_tags('profil') }}
{% endblock %}

{% block body %}

{% if  app.user %}


<div id=\"brand-logo\" class=\"d-flex justify-content-end align-items-center w-100\"><img src=\"images/Logo/logo_transparent.png\" width=\"128px\"></div>
    <section id=\"profil-container-block\" class=\"d-flex w-100 justify-content-around align-items-start\">
    
        <div id=\"personnal-infos-container\" class=\"profil-infos d-flex flex-column align-items-center w-25 p-3\">
    
            <div style=\"min-height: 50px;\" class=\"d-flex justify-content-between align-items-center w-100\">
                <h2 class=\"profil-h2-brand\" style=\"text-align: center;\">Mon compte :</h2>
                <a class=\"btn m-0 p-2 pr-4 pl-4 d-flex justify-content-center align-items-center\"
                    id=\"modify-button\" href=\"Edition\">MODIFIER</a>
            </div>
    
            <ul class=\"list-group w-100\">
                <li class=\"list-group-item\">
                    <div class=\"md-v-line\"></div><i class=\"fas fa-user mr-4 pr-3\"></i>{{ username }}
                </li>
                <li class=\"list-group-item\">
                    <div class=\"md-v-line\"></div><i class=\"fas fa-envelope mr-4 pr-3\"></i>{{ email }}
                </li>
            </ul>
    
        </div>
    
        <div class=\"profil-infos d-flex flex-column justify-content-between align-items-center w-50 p-3\">
    
            <div style=\"min-height: 50px;\" class=\"d-flex justify-content-between align-items-center w-100\">
                <h2 class=\"profil-h2-brand\" style=\"text-align: center;\">Vos beats publiés :</h2>
            </div>
    
            <section id=\"profil-personnal-beats\"
                class=\"d-flex flex-column justify-content-center align-items-center m-0 pt-0 rounded mb-0 w-100\">
    
                {% for article in articles %}
    
                {% if article.artiste == username %}
    
                <a id=\"personnal-beat-{{ article.id }}\" tabindex=\"{{ article.id }}\" data-beat-id=\"{{ article.id }}\"
                    class=\"beat-personnal d-flex justify-content-start align-items-center beat-section border-bottom border-right border-left border-light p-0 w-100\"
                    img=\"images/{{article.img}}\">
                    <img src=\"images/beatImages/{{article.img}}\" width=\"64px\" height=\"64px\"
                        class=\"mr-3\">{{ article.artiste }} - {{ article.title }}
                    <button type=\"button\" class=\"btn btn-outline-danger waves-effect ml-auto float-right mr-3\"
                        data-toggle=\"modal\" data-target=\"#mod-{{ article.id }}\" data-beat-id=\"{{ article.id }}\">
                        <i class=\"fas fa-times\"></i>
                    </button>
                </a>
    
                <div class=\"modal fade\" id=\"mod-{{ article.id }}\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression du beat : {{ username }} -
                                    {{ article.title }}</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-around\">
    
                                <button type=\"button\" class=\"btn btn-outline-blue-grey\" data-dismiss=\"modal\">Fermer</button>
    
                                <button type=\"submit\" class=\"btn btn-outline-danger\"
                                    id=\"{{ article.id }}\">Supprimer</button>
    
                            </div>
                        </div>
                    </div>
                </div>
    
    
                {% endif %}
    
                {% endfor %}
    
            </section>
    
        </div>
    
    </section>
    
    </div>
    </div>
    </div>


{% endif %}
{% endblock %}

{% block javascripts %}
{{ parent() }}
{{ encore_entry_script_tags('profil') }}
{% endblock %}", "beatshare/profil.html.twig", "C:\\Users\\Utilisateur\\Desktop\\WEB\\Guy\\beatshare\\templates\\beatshare\\profil.html.twig");
    }
}
