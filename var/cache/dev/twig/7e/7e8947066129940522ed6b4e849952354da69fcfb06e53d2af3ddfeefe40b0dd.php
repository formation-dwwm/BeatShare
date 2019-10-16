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

/* security/modify.html.twig */
class __TwigTemplate_1f43a4c022cb035825533b4860d2c4214c51fe57978e6fe88cd35f5f788b05c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/modify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/modify.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/modify.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
  <div id=\"form-header\" class=\"d-flex justify-content-center align-items-center\">
    <img src=\"images/Logo/logo_transparent.png\" width=\"128px\">
  </div>
  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "username", [], "any", false, false, false, 11), 'row', ["label" => "Nom d'utilisateur", "attr" => ["placeholder" => "Pseudo"]]);
        echo "
  ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'row', ["label" => "Email", "attr" => ["placeholder" => "Email"], "type" => "email"]);
        echo "
  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "password", [], "any", false, false, false, 13), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "Mot de passe"]]);
        echo "
  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "confirm_password", [], "any", false, false, false, 14), 'row', ["label" => "Confirmation du mot de passe", "attr" => ["placeholder" => "Répétez le mot de passe"]]);
        echo "
  
  <div class=\"form-group\">
    <button id=\"submit-login\" type=\"submit\" class=\"btn w-100 m-0 mt-2\">Modifier</button>

    <a class=\"btn btn-outline-danger btn w-100 m-0 mt-2\" id=\"delete-account-button\" data-toggle=\"modal\" data-target=\"#delete-account\">SUPPRIMER MON COMPTE</a>     
  </div>

  <div id=\"loading-animation\" class=\"d-flex justify-content-center pb-4\">
      <div class=\"spinner-border\" role=\"status\">
          <span class=\"sr-only\">Loading...</span>
      </div>
  </div>
  
  ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "


  </section>

<!-- Button trigger modal -->


<!-- Modal -->
<div class=\"modal fade\" id=\"delete-account\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">êtes vous sûr de vouloir supprimer votre compte ?</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-blue-grey\" data-dismiss=\"modal\">FERMER</button>
        <a href=\"/delete-account\" class=\"btn btn-outline-danger\">SUPPRIMER</a>
      </div>
    </div>
  </div>
</div>

</section>

<style>
    body{
        background-color: white !important;
    }
</style>

<script>
  let loading = document.getElementById('loading-animation');
  let submit = document.getElementById('submit-login');

  loading.style.setProperty('visibility', 'hidden', 'important');

  submit.addEventListener('click', () => {
      loading.style.setProperty('visibility', 'visible', 'important');
  });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  92 => 14,  88 => 13,  84 => 12,  80 => 11,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

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
    <button id=\"submit-login\" type=\"submit\" class=\"btn w-100 m-0 mt-2\">Modifier</button>

    <a class=\"btn btn-outline-danger btn w-100 m-0 mt-2\" id=\"delete-account-button\" data-toggle=\"modal\" data-target=\"#delete-account\">SUPPRIMER MON COMPTE</a>     
  </div>

  <div id=\"loading-animation\" class=\"d-flex justify-content-center pb-4\">
      <div class=\"spinner-border\" role=\"status\">
          <span class=\"sr-only\">Loading...</span>
      </div>
  </div>
  
  {{ form_end(form) }}


  </section>

<!-- Button trigger modal -->


<!-- Modal -->
<div class=\"modal fade\" id=\"delete-account\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">êtes vous sûr de vouloir supprimer votre compte ?</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-blue-grey\" data-dismiss=\"modal\">FERMER</button>
        <a href=\"/delete-account\" class=\"btn btn-outline-danger\">SUPPRIMER</a>
      </div>
    </div>
  </div>
</div>

</section>

<style>
    body{
        background-color: white !important;
    }
</style>

<script>
  let loading = document.getElementById('loading-animation');
  let submit = document.getElementById('submit-login');

  loading.style.setProperty('visibility', 'hidden', 'important');

  submit.addEventListener('click', () => {
      loading.style.setProperty('visibility', 'visible', 'important');
  });
</script>

{% endblock %}", "security/modify.html.twig", "C:\\Users\\Utilisateur\\Desktop\\WEB\\Guy\\beatshare\\templates\\security\\modify.html.twig");
    }
}
