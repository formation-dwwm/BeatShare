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

/* beatshare/index.html.twig */
class __TwigTemplate_b4d34537378d8a9b3f3166b4d0acd264b78a1543770dd2c3c556c1dca5e7d235 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beatshare/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beatshare/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "beatshare/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("index");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<main id=\"main\">
    <div id=\"welcome-container\">
        <div id=\"brand-logo\" class=\"d-flex justify-content-end align-items-center\"><img src=\"images/Logo/logo_transparent.png\" width=\"128px\"></div>
        
        <h1>Bienvenue sur Beatshare, écoutez, uploadez, enregistrez <br>
         vos beats et partagez les avec la communauté !</h1>

        <form class=\"search-container w-75\">
            <input type=\"text\" id=\"search-bar\" placeholder=\"Rechercher un beat...\">
            <a href=\"#\"><i class=\"fas fa-search search-icon\"></i></a>
        </form>

        
        <div id=\"cards-component-container\" class=\"d-flex justify-content-around align-items-end\">
            
                    <img src=\"images/cards/headphone.png\" width=\"256px\">
             
                    <img src=\"images/cards/upload.png\" width=\"256px\">
          
                    <img src=\"images/cards/microphone.png\" width=\"256px\">
            
        </div>
    </div>

    <div id=\"separator\" class=\"d-flex flex-column justify-content-center align-items-center\">

        <div class=\"w-100 mb-3\"><h1>Inscrivez-vous ou connectez vous pour profiter de toutes les fonctionnalités</h1></div>

        <div class=\"w-100 d-flex align-items-center justify-content-center mt-3\">
            <a class=\"btn\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\">Inscription</a>
                    
            <a class=\"btn\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Connexion</a>
        </div>

    </div>

    <div id=\"beat-mp3-bank\" class=\"d-flex flex-wrap justify-content-center align-items-start\">
        <div id=\"last-news\" class=\"w-100 d-flex justify-content-center align-items-center\"><i class=\"fas fa-music\"></i><h1>Dernières nouveautés</h1></div>
        
        <card-component imgSrc=\"./images/cards/headphones.jpg\" >
                    <p slot=\"content\">
                        Selectionnez un beat dans la liste à droite pour l'écouter ! 
                    </p>
                <ul slot=\"actions\">
                    <li text=\"Some action\" value=1></li>
                    <li text=\"Some action2\" value=2></li>
                    <li text=\"Some action3\" value=3></li>
                </ul>
            </card-component>
         
        <section id=\"main-list-audio\" class=\"d-flex flex-column justify-content-center align-items-center rounded w-50\">
       
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 65
            echo "    
            <a id=\"beat-";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\" tabindex=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\" class=\"d-flex justify-content-start align-items-center beat-section border-bottom border-left border-light p-0 w-100\"
                beat=\"beat/";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 67), "html", null, true);
            echo ".mp3\" img=\"images/beatImages/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "img", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
                <img class=\"beat-images\" src=\"images/beatImages/";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "img", [], "any", false, false, false, 68), "html", null, true);
            echo "\" width=\"64px\" height=\"64px\" class=\"mr-3\">
                ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "artiste", [], "any", false, false, false, 69), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 69), "html", null, true);
            echo "
    
                <button type=\"button\" class=\"btn ml-auto float-right d-flex align-items-center justify-content-center listBtn\">
                <i class=\"fas fa-plus\"></i>
                </button>
            </a>
    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    
        </section>
    
    </div>
    
     <audio-player songSrc=\"\" songTitle=\"\" songAuthor=\"\" songImg=\"\"></audio-player>
</main>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 90
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("audioplayer");
        echo "
    ";
        // line 91
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("cards");
        echo "
    ";
        // line 92
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("index");
        echo "
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "beatshare/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 92,  255 => 91,  251 => 90,  246 => 89,  236 => 88,  217 => 77,  201 => 69,  197 => 68,  191 => 67,  185 => 66,  182 => 65,  178 => 64,  154 => 43,  149 => 41,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Beatshare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('index') }}
{% endblock %}

{% block body %}

<main id=\"main\">
    <div id=\"welcome-container\">
        <div id=\"brand-logo\" class=\"d-flex justify-content-end align-items-center\"><img src=\"images/Logo/logo_transparent.png\" width=\"128px\"></div>
        
        <h1>Bienvenue sur Beatshare, écoutez, uploadez, enregistrez <br>
         vos beats et partagez les avec la communauté !</h1>

        <form class=\"search-container w-75\">
            <input type=\"text\" id=\"search-bar\" placeholder=\"Rechercher un beat...\">
            <a href=\"#\"><i class=\"fas fa-search search-icon\"></i></a>
        </form>

        
        <div id=\"cards-component-container\" class=\"d-flex justify-content-around align-items-end\">
            
                    <img src=\"images/cards/headphone.png\" width=\"256px\">
             
                    <img src=\"images/cards/upload.png\" width=\"256px\">
          
                    <img src=\"images/cards/microphone.png\" width=\"256px\">
            
        </div>
    </div>

    <div id=\"separator\" class=\"d-flex flex-column justify-content-center align-items-center\">

        <div class=\"w-100 mb-3\"><h1>Inscrivez-vous ou connectez vous pour profiter de toutes les fonctionnalités</h1></div>

        <div class=\"w-100 d-flex align-items-center justify-content-center mt-3\">
            <a class=\"btn\" href=\"{{ path('security_registration') }}\">Inscription</a>
                    
            <a class=\"btn\" href=\"{{ path('security_login') }}\">Connexion</a>
        </div>

    </div>

    <div id=\"beat-mp3-bank\" class=\"d-flex flex-wrap justify-content-center align-items-start\">
        <div id=\"last-news\" class=\"w-100 d-flex justify-content-center align-items-center\"><i class=\"fas fa-music\"></i><h1>Dernières nouveautés</h1></div>
        
        <card-component imgSrc=\"./images/cards/headphones.jpg\" >
                    <p slot=\"content\">
                        Selectionnez un beat dans la liste à droite pour l'écouter ! 
                    </p>
                <ul slot=\"actions\">
                    <li text=\"Some action\" value=1></li>
                    <li text=\"Some action2\" value=2></li>
                    <li text=\"Some action3\" value=3></li>
                </ul>
            </card-component>
         
        <section id=\"main-list-audio\" class=\"d-flex flex-column justify-content-center align-items-center rounded w-50\">
       
            {% for article in articles %}
    
            <a id=\"beat-{{ article.id }}\" tabindex=\"{{ article.id }}\" class=\"d-flex justify-content-start align-items-center beat-section border-bottom border-left border-light p-0 w-100\"
                beat=\"beat/{{article.title}}.mp3\" img=\"images/beatImages/{{article.img}}\">
                <img class=\"beat-images\" src=\"images/beatImages/{{article.img}}\" width=\"64px\" height=\"64px\" class=\"mr-3\">
                {{ article.artiste }} - {{ article.title }}
    
                <button type=\"button\" class=\"btn ml-auto float-right d-flex align-items-center justify-content-center listBtn\">
                <i class=\"fas fa-plus\"></i>
                </button>
            </a>
    
            {% endfor %}
    
        </section>
    
    </div>
    
     <audio-player songSrc=\"\" songTitle=\"\" songAuthor=\"\" songImg=\"\"></audio-player>
</main>


{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags('audioplayer') }}
    {{ encore_entry_script_tags('cards') }}
    {{ encore_entry_script_tags('index') }}
 {% endblock %}", "beatshare/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\WEB\\Guy\\beatshare\\templates\\beatshare\\index.html.twig");
    }
}
