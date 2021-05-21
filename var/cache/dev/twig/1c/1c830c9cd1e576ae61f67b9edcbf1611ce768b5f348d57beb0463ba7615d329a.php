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

/* dice.html.twig */
class __TwigTemplate_ef64369069bb1668b0009ea2d629153d08b999566619c9e8037a70cca9c91a46 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dice.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "/header.html.twig");
        echo "

<h1>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h1>

<p>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</p>

<p>Dice!</p>

<p>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["dieLastRoll"]) || array_key_exists("dieLastRoll", $context) ? $context["dieLastRoll"] : (function () { throw new RuntimeError('Variable "dieLastRoll" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</p>

<p>DiceHand!</p>

<p>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["diceHandRoll"]) || array_key_exists("diceHandRoll", $context) ? $context["diceHandRoll"] : (function () { throw new RuntimeError('Variable "diceHandRoll" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</p>

<p>Graphic</p>
<p class=\"dice-utf8\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graphicDices"]) || array_key_exists("graphicDices", $context) ? $context["graphicDices"] : (function () { throw new RuntimeError('Variable "graphicDices" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 18
            echo "        <i class=\" ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"></i>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</p>

";
        // line 22
        echo twig_include($this->env, $context, "/footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 20,  78 => 18,  74 => 17,  67 => 13,  60 => 9,  53 => 5,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('/header.html.twig') }}

<h1>{{ header }}</h1>

<p>{{ message }}</p>

<p>Dice!</p>

<p>{{ dieLastRoll }}</p>

<p>DiceHand!</p>

<p>{{ diceHandRoll }}</p>

<p>Graphic</p>
<p class=\"dice-utf8\">
    {% for value in graphicDices %}
        <i class=\" {{ value }}\"></i>
    {% endfor %}
</p>

{{ include('/footer.html.twig') }}
", "dice.html.twig", "C:\\Users\\jjoha\\dbwebb-kurser\\mvc\\me\\orm\\templates\\dice.html.twig");
    }
}
