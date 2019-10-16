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

/* security/login.html.twig */
class __TwigTemplate_545323f0d9c973cc07c13509743c4a5b9ab5dd7a0db142beb88f5dc825731a94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

    <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
        
        <div id=\"form-header\" class=\"d-flex justify-content-center align-items-center\">
            <img src=\"images/Logo/logo_transparent.png\" width=\"128px\">
        </div>

        <div>
            <label>Email :</label>
                <input type=\"email\" required name=\"_username\" placeholder=\"Email\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
        </div>

        <div>
            <label>Mot de passe :</label>
                <input type=\"password\" required name=\"_password\" placeholder=\"Mot de passe\">
        </div>

        <div>
            <button id=\"submit-login\" type=\"submit\" class=\"btn w-100 m-0 mt-2\">Connexion</button>
        </div>

        <div id=\"loading-animation\" class=\"d-flex justify-content-center mt-4\">
            <div class=\"spinner-border\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
    </form>

  

        ";
        // line 36
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "            <div class=\"alert alert-danger w-75\" style=\"position: absolute; top: 0; margin-left: 12.5%;\">Email ou mot de passe invalide</div>
        ";
        }
        // line 39
        echo "
</section>

<script>

    let loading = document.getElementById('loading-animation');
    let submit = document.getElementById('submit-login');

    loading.style.setProperty('visibility', 'hidden', 'important');

    submit.addEventListener('click', () => {
        loading.style.setProperty('visibility', 'visible', 'important');
    });


    window.addEventListener('load', () => scrollFunction());

    function scrollFunction() {

    let navbar = document.querySelector('.navbar');
    let search = document.getElementById('wrap');
    let hamburger = document.getElementsByClassName('burgerMenu'); 
    let navbarBrand = document.getElementById('navbar-brand');

    hamburger.forEach(element => {
        element.style.setProperty('background', '#37474f', 'important');
    });
    navbar.style.backgroundColor = \"white\";
    navbar.style.setProperty('box-shadow', '0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12)', 'important');
    navbar.style.setProperty('transition', '700ms', 'important');
    search.style.setProperty('visibility', 'visible', 'important');
    navbarBrand.style.color = \"#37474f\";
    }

</script>

<style>

    body{
        background-color: white !important;
    }
    
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  110 => 37,  108 => 36,  84 => 15,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<section  id=\"form-section\">

    <form action=\"{{ path('security_login') }}\" method=\"post\">
        
        <div id=\"form-header\" class=\"d-flex justify-content-center align-items-center\">
            <img src=\"images/Logo/logo_transparent.png\" width=\"128px\">
        </div>

        <div>
            <label>Email :</label>
                <input type=\"email\" required name=\"_username\" placeholder=\"Email\" value=\"{{ last_username }}\">
        </div>

        <div>
            <label>Mot de passe :</label>
                <input type=\"password\" required name=\"_password\" placeholder=\"Mot de passe\">
        </div>

        <div>
            <button id=\"submit-login\" type=\"submit\" class=\"btn w-100 m-0 mt-2\">Connexion</button>
        </div>

        <div id=\"loading-animation\" class=\"d-flex justify-content-center mt-4\">
            <div class=\"spinner-border\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
    </form>

  

        {% if error %}
            <div class=\"alert alert-danger w-75\" style=\"position: absolute; top: 0; margin-left: 12.5%;\">Email ou mot de passe invalide</div>
        {% endif %}

</section>

<script>

    let loading = document.getElementById('loading-animation');
    let submit = document.getElementById('submit-login');

    loading.style.setProperty('visibility', 'hidden', 'important');

    submit.addEventListener('click', () => {
        loading.style.setProperty('visibility', 'visible', 'important');
    });


    window.addEventListener('load', () => scrollFunction());

    function scrollFunction() {

    let navbar = document.querySelector('.navbar');
    let search = document.getElementById('wrap');
    let hamburger = document.getElementsByClassName('burgerMenu'); 
    let navbarBrand = document.getElementById('navbar-brand');

    hamburger.forEach(element => {
        element.style.setProperty('background', '#37474f', 'important');
    });
    navbar.style.backgroundColor = \"white\";
    navbar.style.setProperty('box-shadow', '0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12)', 'important');
    navbar.style.setProperty('transition', '700ms', 'important');
    search.style.setProperty('visibility', 'visible', 'important');
    navbarBrand.style.color = \"#37474f\";
    }

</script>

<style>

    body{
        background-color: white !important;
    }
    
</style>

{% endblock %}

", "security/login.html.twig", "C:\\Users\\Utilisateur\\Desktop\\WEB\\Guy\\beatshare\\templates\\security\\login.html.twig");
    }
}
