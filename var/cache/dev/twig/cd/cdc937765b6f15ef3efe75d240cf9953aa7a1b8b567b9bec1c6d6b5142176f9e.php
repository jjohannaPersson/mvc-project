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

/* high_score/highscore.html.twig */
class __TwigTemplate_cc8a8b9a0fc88d03dd864b8ef82b1f7bb99e867c45c35692b58f1d10115e8802 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "high_score/highscore.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "high_score/highscore.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

<h1>HighScore</h1>

<div class=\"highscore\">
    <h2>Sortera enligt</h2>

    <a class=\"sort\" href=\"./\">Vunna rundor</a>
    <a class=\"sort\" href=\"highscore/bitcoins\">Bitcoins</a>
</div>

<table class=\"book-table\">
    <tr>
        <th>Plats</th>
        <th>Antal vunna rundor</th>
        <th>Antal bitcoins</th>
    </tr>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["highscore"]) || array_key_exists("highscore", $context) ? $context["highscore"] : (function () { throw new RuntimeError('Variable "highscore" does not exist.', 18, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "getScore", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "getBitcoin", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>


";
        // line 28
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "high_score/highscore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  108 => 25,  91 => 22,  87 => 21,  83 => 20,  80 => 19,  63 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html.twig') }}

<h1>HighScore</h1>

<div class=\"highscore\">
    <h2>Sortera enligt</h2>

    <a class=\"sort\" href=\"./\">Vunna rundor</a>
    <a class=\"sort\" href=\"highscore/bitcoins\">Bitcoins</a>
</div>

<table class=\"book-table\">
    <tr>
        <th>Plats</th>
        <th>Antal vunna rundor</th>
        <th>Antal bitcoins</th>
    </tr>
    {% for score in highscore %}
        <tr>
            <td>{{ loop.index }}</td>
            <td>{{ score.getScore() }}</td>
            <td>{{ score.getBitcoin() }}</td>
        </tr>
    {% endfor %}
</table>


{{ include('footer.html.twig') }}
", "high_score/highscore.html.twig", "C:\\Users\\jjoha\\dbwebb-kurser\\mvc\\me\\proj\\templates\\high_score\\highscore.html.twig");
    }
}
