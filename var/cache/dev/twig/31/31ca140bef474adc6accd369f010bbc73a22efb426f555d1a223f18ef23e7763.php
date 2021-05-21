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

/* play21.html.twig */
class __TwigTemplate_ebb2e8ee4f06f10b3b4cda8707a03e8d3ab8b84ca1f4753f87eff824f553f273 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "play21.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "play21.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

<h1>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h1>

<h2>Du har bettat ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["betBitcoins"]) || array_key_exists("betBitcoins", $context) ? $context["betBitcoins"] : (function () { throw new RuntimeError('Variable "betBitcoins" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " bitcoins på att du vinner</h2>

<p>
    Din poäng: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 8, $this->source); })()), "human", [], "array", false, false, false, 8), "html", null, true);
        echo "
    <p class=\"dice-utf8\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 11
            echo "            <i class=\" ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"></i>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </p>
    ";
        // line 14
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 14, $this->source); })()), "human", [], "array", false, false, false, 14), 21))) {
            // line 15
            echo "        <h3>Grattis!</h3>
    ";
        }
        // line 17
        echo "</p>
<p>
    Datorns poäng: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 19, $this->source); })()), "computer", [], "array", false, false, false, 19), "html", null, true);
        echo "
</p>

";
        // line 22
        if ((0 === twig_compare((isset($context["roundIsOver"]) || array_key_exists("roundIsOver", $context) ? $context["roundIsOver"] : (function () { throw new RuntimeError('Variable "roundIsOver" does not exist.', 22, $this->source); })()), false))) {
            // line 23
            echo "    <form action=\"\" method=\"POST\">
        <input name=\"roll\" id=\"roll\" type=\"submit\" value=\"Kasta\"></input>
    </form>

    <form action=\"\" method=\"POST\">
        <input name=\"stay\" id=\"stay\" type=\"submit\" value=\"Stanna\"></input>
    </form>
";
        } else {
            // line 31
            echo "        <p><h3>Vinnaren är: ";
            echo twig_escape_filter($this->env, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "</h3></p>
        <form action=\"\" method=\"POST\">
            <input name=\"play-again\" id=\"play-again\" type=\"submit\" value=\"Spela igen\"></input>
        </form>
";
        }
        // line 36
        echo "
    <p>
        Dina vunna rundor: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wonRounds"]) || array_key_exists("wonRounds", $context) ? $context["wonRounds"] : (function () { throw new RuntimeError('Variable "wonRounds" does not exist.', 38, $this->source); })()), "human", [], "array", false, false, false, 38), "html", null, true);
        echo "
    </p>
    <p>
        Datorns vunna rundor: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wonRounds"]) || array_key_exists("wonRounds", $context) ? $context["wonRounds"] : (function () { throw new RuntimeError('Variable "wonRounds" does not exist.', 41, $this->source); })()), "computer", [], "array", false, false, false, 41), "html", null, true);
        echo "
    </p>

<form action=\"highscore/create\" method=\"POST\">
    <input name=\"highscore\" id=\"highscore\" type=\"submit\" value=\"Spara till HighScore\"></input>
</form>

<form action=\"\" method=\"POST\">
    <input name=\"new-game\" id=\"new-game\" type=\"submit\" value=\"Nollställ poängen och starta en ny omgång\"></input>
</form>

";
        // line 52
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "play21.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 52,  127 => 41,  121 => 38,  117 => 36,  108 => 31,  98 => 23,  96 => 22,  90 => 19,  86 => 17,  82 => 15,  80 => 14,  77 => 13,  68 => 11,  64 => 10,  59 => 8,  53 => 5,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html.twig') }}

<h1>{{ header }}</h1>

<h2>Du har bettat {{ betBitcoins }} bitcoins på att du vinner</h2>

<p>
    Din poäng: {{ scores[\"human\"] }}
    <p class=\"dice-utf8\">
        {% for value in class %}
            <i class=\" {{ value }}\"></i>
        {% endfor %}
    </p>
    {% if scores[\"human\"] == 21 %}
        <h3>Grattis!</h3>
    {% endif %}
</p>
<p>
    Datorns poäng: {{ scores[\"computer\"] }}
</p>

{% if roundIsOver == false %}
    <form action=\"\" method=\"POST\">
        <input name=\"roll\" id=\"roll\" type=\"submit\" value=\"Kasta\"></input>
    </form>

    <form action=\"\" method=\"POST\">
        <input name=\"stay\" id=\"stay\" type=\"submit\" value=\"Stanna\"></input>
    </form>
{% else %}
        <p><h3>Vinnaren är: {{ winner }}</h3></p>
        <form action=\"\" method=\"POST\">
            <input name=\"play-again\" id=\"play-again\" type=\"submit\" value=\"Spela igen\"></input>
        </form>
{% endif %}

    <p>
        Dina vunna rundor: {{ wonRounds[\"human\"] }}
    </p>
    <p>
        Datorns vunna rundor: {{ wonRounds[\"computer\"] }}
    </p>

<form action=\"highscore/create\" method=\"POST\">
    <input name=\"highscore\" id=\"highscore\" type=\"submit\" value=\"Spara till HighScore\"></input>
</form>

<form action=\"\" method=\"POST\">
    <input name=\"new-game\" id=\"new-game\" type=\"submit\" value=\"Nollställ poängen och starta en ny omgång\"></input>
</form>

{{ include('footer.html.twig') }}
", "play21.html.twig", "C:\\Users\\jjoha\\dbwebb-kurser\\mvc\\me\\proj\\templates\\play21.html.twig");
    }
}
