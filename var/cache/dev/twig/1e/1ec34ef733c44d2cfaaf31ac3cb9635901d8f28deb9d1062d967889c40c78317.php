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

/* beatshare/add.html.twig */
class __TwigTemplate_2ddcb282252dda50f6cc1afd0b74a9627b5995ee2a7413e6f475a18bcb193bb8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beatshare/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beatshare/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "beatshare/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section  id=\"form-section\">

        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["BeatForm"]) || array_key_exists("BeatForm", $context) ? $context["BeatForm"] : (function () { throw new RuntimeError('Variable "BeatForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        <div id=\"form-header\" class=\"d-flex justify-content-center align-items-center\">
            <img src=\"images/Logo/logo_transparent.png\" width=\"128px\">
        </div>
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BeatForm"]) || array_key_exists("BeatForm", $context) ? $context["BeatForm"] : (function () { throw new RuntimeError('Variable "BeatForm" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'row', ["label" => "Titre du beat :", "attr" => ["placeholder" => "Titre du beat"]]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BeatForm"]) || array_key_exists("BeatForm", $context) ? $context["BeatForm"] : (function () { throw new RuntimeError('Variable "BeatForm" does not exist.', 12, $this->source); })()), "img", [], "any", false, false, false, 12), 'row', ["label" => "Importez votre image :", "attr" => ["accept" => "image/*"]]);
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BeatForm"]) || array_key_exists("BeatForm", $context) ? $context["BeatForm"] : (function () { throw new RuntimeError('Variable "BeatForm" does not exist.', 13, $this->source); })()), "src", [], "any", false, false, false, 13), 'row', ["label" => "Importez votre fichier mp3 :", "attr" => ["accept" => "audio/*"]]);
        echo "

       <div class=\"form-group\"><button id=\"submit-login\" type=\"submit\" class=\"btn w-100 m-0 mt-2\">Ajouter</button></div>

        <div id=\"loading-animation\" class=\"d-flex justify-content-center pb-4\">
            <div class=\"spinner-border\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>

        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["BeatForm"]) || array_key_exists("BeatForm", $context) ? $context["BeatForm"] : (function () { throw new RuntimeError('Variable "BeatForm" does not exist.', 23, $this->source); })()), 'form_end');
        echo "

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "beatshare/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  88 => 13,  84 => 12,  80 => 11,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<section  id=\"form-section\">

        {{ form_start(BeatForm) }}
        <div id=\"form-header\" class=\"d-flex justify-content-center align-items-center\">
            <img src=\"images/Logo/logo_transparent.png\" width=\"128px\">
        </div>
        {{ form_row(BeatForm.title, {'label': 'Titre du beat :', 'attr': {'placeholder': 'Titre du beat'}, }) }}
        {{ form_row(BeatForm.img, {'label': 'Importez votre image :', 'attr': {'accept': 'image/*'}}) }}
        {{ form_row(BeatForm.src, {'label': 'Importez votre fichier mp3 :', 'attr': {'accept': 'audio/*'}}) }}

       <div class=\"form-group\"><button id=\"submit-login\" type=\"submit\" class=\"btn w-100 m-0 mt-2\">Ajouter</button></div>

        <div id=\"loading-animation\" class=\"d-flex justify-content-center pb-4\">
            <div class=\"spinner-border\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>

        {{ form_end(BeatForm) }}

</section>

{% endblock %}
", "beatshare/add.html.twig", "C:\\Users\\Utilisateur\\Desktop\\WEB\\Guy\\beatshare\\templates\\beatshare\\add.html.twig");
    }
}
