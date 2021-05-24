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

/* bitcoin.html.twig */
class __TwigTemplate_57dd59ab4bfc57caa82054b8043b7027a251c2d4fbb9ffcd9c47d5d33aaad85e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bitcoin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bitcoin.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

<h1>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h1>

<div class=\"info\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</p>

    <p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</p>
</div>

<div class=\"bitcoins\">

    <h2>Antal bitcoins:</h2>

    <h3>Datorn: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bitcoins"]) || array_key_exists("bitcoins", $context) ? $context["bitcoins"] : (function () { throw new RuntimeError('Variable "bitcoins" does not exist.', 15, $this->source); })()), "computer", [], "array", false, false, false, 15), "html", null, true);
        echo "</h3>

    <h3>Du: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bitcoins"]) || array_key_exists("bitcoins", $context) ? $context["bitcoins"] : (function () { throw new RuntimeError('Variable "bitcoins" does not exist.', 17, $this->source); })()), "human", [], "array", false, false, false, 17), "html", null, true);
        echo "</h3>

</div>

<form class=\"bitcoin-form\" action=\"\" method=\"POST\">
    <input type=\"number\" name=\"bitcoin\" id=\"bitcoin\" min=\"1\" max=\"";
        // line 22
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["bitcoins"]) || array_key_exists("bitcoins", $context) ? $context["bitcoins"] : (function () { throw new RuntimeError('Variable "bitcoins" does not exist.', 22, $this->source); })()), "human", [], "array", false, false, false, 22) / 2), "html", null, true);
        echo "\">
    <input name=\"bet\" id=\"bet\" type=\"submit\" value=\"SATSA\">
</form>

";
        // line 26
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bitcoin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  82 => 22,  74 => 17,  69 => 15,  59 => 8,  54 => 6,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html.twig') }}

<h1>{{ header }}</h1>

<div class=\"info\">
    <p>{{ message }}</p>

    <p>{{ info }}</p>
</div>

<div class=\"bitcoins\">

    <h2>Antal bitcoins:</h2>

    <h3>Datorn: {{ bitcoins[\"computer\"] }}</h3>

    <h3>Du: {{ bitcoins[\"human\"] }}</h3>

</div>

<form class=\"bitcoin-form\" action=\"\" method=\"POST\">
    <input type=\"number\" name=\"bitcoin\" id=\"bitcoin\" min=\"1\" max=\"{{bitcoins[\"human\"] / 2}}\">
    <input name=\"bet\" id=\"bet\" type=\"submit\" value=\"SATSA\">
</form>

{{ include('footer.html.twig') }}
", "bitcoin.html.twig", "C:\\Users\\jjoha\\dbwebb-kurser\\mvc\\me\\proj\\templates\\bitcoin.html.twig");
    }
}
