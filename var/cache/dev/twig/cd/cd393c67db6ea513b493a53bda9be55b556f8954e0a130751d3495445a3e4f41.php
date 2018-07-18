<?php

/* login/index.html.twig */
class __TwigTemplate_806c7dc512799a6ce322cc30cc2924916efa499035bca2713baf81cc3de428e2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <form class=\"form-signin text-center\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
      <img class=\"mb-4\" src=\"https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
      ";
        // line 12
        if ( !(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "token", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "token", array())))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "token", array())) : (false))) {
            // line 13
            echo "        <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>

        ";
            // line 15
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 15, $this->source); })())) {
                // line 16
                echo "          <div class=\"alert alert-danger\">
              ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 17, $this->source); })()), "messageKey", array()), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 20
            echo "
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Name\" required autofocus>
        <input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        <p class=\"mt-5 mb-3 text-muted\">&copy; 2017-2018</p>
      ";
        } else {
            // line 26
            echo "        <h1 class=\"h3 mb-3 font-weight-normal\">You are already logged in</h1>
      ";
        }
        // line 28
        echo "      
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 28,  110 => 26,  102 => 20,  96 => 17,  93 => 16,  91 => 15,  87 => 13,  85 => 12,  80 => 10,  77 => 9,  68 => 8,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}

    <form class=\"form-signin text-center\" action=\"{{ path('login') }}\" method=\"POST\">
      <img class=\"mb-4\" src=\"https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
      {% if not app.user.token??false %}
        <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>

        {% if error %}
          <div class=\"alert alert-danger\">
              {{ error.messageKey }}
          </div>
        {% endif %}

        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Name\" required autofocus>
        <input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        <p class=\"mt-5 mb-3 text-muted\">&copy; 2017-2018</p>
      {% else %}
        <h1 class=\"h3 mb-3 font-weight-normal\">You are already logged in</h1>
      {% endif %}
      
    </form>

{% endblock %}
", "login/index.html.twig", "/Users/okara/Work/digicode/symfony/bank/templates/login/index.html.twig");
    }
}
