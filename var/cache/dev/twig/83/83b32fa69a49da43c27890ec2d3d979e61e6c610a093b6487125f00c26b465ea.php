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

/* security/registration.html.twig */
class __TwigTemplate_abb6445f0b4776c0ae714aca7a155690c3cfdcd2a889ecc4ef6c6ddc2afa110b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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
<!-- Default form register -->
<section  id=\"form-section\">
  
  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
     <div id=\"form-header\" class=\"d-flex justify-content-center align-items-center\">
            <img src=\"images/Logo/logo_transparent.png\" width=\"128px\">
    </div>

  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), 'row', ["label" => "Nom d'utilisateur", "attr" => ["placeholder" => "Pseudo"]]);
        echo "
  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'row', ["label" => "Email", "attr" => ["placeholder" => "Email"], "type" => "email"]);
        echo "
  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "password", [], "any", false, false, false, 15), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "Mot de passe"]]);
        echo "
  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "confirm_password", [], "any", false, false, false, 16), 'row', ["label" => "Confirmation du mot de passe", "attr" => ["placeholder" => "Répétez le mot de passe"]]);
        echo "
  
        <div class=\"form-group\">
            <button id=\"submit-login\" type=\"submit\" class=\"btn w-100 m-0 mt-2\">S'inscrire</button>
        </div>
        
        <div class=\"form-group\">
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" class=\"btn btn-outline-blue-grey w-100 m-0 mt-2\">Déjà inscrit ?</a>
        </div>

        <div id=\"loading-animation\" class=\"d-flex justify-content-center mt-4\">
            <div class=\"spinner-border\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
       

  ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "

</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  104 => 23,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<!-- Default form register -->
<section  id=\"form-section\">
  
  {{ form_start(form) }}
     <div id=\"form-header\" class=\"d-flex justify-content-center align-items-center\">
            <img src=\"images/Logo/logo_transparent.png\" width=\"128px\">
    </div>

  {{ form_row(form.username, {'label': 'Nom d\\'utilisateur', 'attr': {'placeholder': 'Pseudo'}}) }}
  {{ form_row(form.email, {'label': 'Email', 'attr': {'placeholder': 'Email'}, 'type': 'email'}) }}
  {{ form_row(form.password, {'label': 'Mot de passe', 'attr': {'placeholder': 'Mot de passe'}}) }}
  {{ form_row(form.confirm_password, {'label': 'Confirmation du mot de passe', 'attr': {'placeholder': 'Répétez le mot de passe'}}) }}
  
        <div class=\"form-group\">
            <button id=\"submit-login\" type=\"submit\" class=\"btn w-100 m-0 mt-2\">S'inscrire</button>
        </div>
        
        <div class=\"form-group\">
            <a href=\"{{ path('security_login') }}\" class=\"btn btn-outline-blue-grey w-100 m-0 mt-2\">Déjà inscrit ?</a>
        </div>

        <div id=\"loading-animation\" class=\"d-flex justify-content-center mt-4\">
            <div class=\"spinner-border\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
       

  {{ form_end(form) }}

</section>


{% endblock %}", "security/registration.html.twig", "C:\\Users\\Utilisateur\\Desktop\\WEB\\Guy\\beatshare\\templates\\security\\registration.html.twig");
    }
}
