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

/* histogram/histogram.html.twig */
class __TwigTemplate_c5756b4032cb45ed5cbf8f61ae9ce7df79c0e0ed71d0ec3d270f674def742053 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histogram/histogram.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histogram/histogram.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

<h1>Histogram</h1>

<p>Histogram över spelares vinnande poäng över 15</p>

<div class=\"histogram\">
    <div class=\"histogram-row\">15:
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histogram"]) || array_key_exists("histogram", $context) ? $context["histogram"] : (function () { throw new RuntimeError('Variable "histogram" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
            // line 10
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["points"], "getPoints", [], "method", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 11
                echo "                    ";
                if ((0 === twig_compare($context["p"], 15))) {
                    // line 12
                    echo "                        <div class=\"dot\"> </div>
                    ";
                }
                // line 14
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
    <div class=\"histogram-row\">16:
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histogram"]) || array_key_exists("histogram", $context) ? $context["histogram"] : (function () { throw new RuntimeError('Variable "histogram" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["points"], "getPoints", [], "method", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 20
                echo "                    ";
                if ((0 === twig_compare($context["p"], 16))) {
                    // line 21
                    echo "                        <div class=\"dot\"> </div>
                    ";
                }
                // line 23
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
    <div class=\"histogram-row\">17:
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histogram"]) || array_key_exists("histogram", $context) ? $context["histogram"] : (function () { throw new RuntimeError('Variable "histogram" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
            // line 28
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["points"], "getPoints", [], "method", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 29
                echo "                    ";
                if ((0 === twig_compare($context["p"], 17))) {
                    // line 30
                    echo "                        <div class=\"dot\"> </div>
                    ";
                }
                // line 32
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
    <div class=\"histogram-row\">18:
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histogram"]) || array_key_exists("histogram", $context) ? $context["histogram"] : (function () { throw new RuntimeError('Variable "histogram" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["points"], "getPoints", [], "method", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 38
                echo "                    ";
                if ((0 === twig_compare($context["p"], 18))) {
                    // line 39
                    echo "                        <div class=\"dot\"> </div>
                    ";
                }
                // line 41
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
    <div class=\"histogram-row\">19:
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histogram"]) || array_key_exists("histogram", $context) ? $context["histogram"] : (function () { throw new RuntimeError('Variable "histogram" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
            // line 46
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["points"], "getPoints", [], "method", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 47
                echo "                    ";
                if ((0 === twig_compare($context["p"], 19))) {
                    // line 48
                    echo "                        <div class=\"dot\"> </div>
                    ";
                }
                // line 50
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
    <div class=\"histogram-row\">20:
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histogram"]) || array_key_exists("histogram", $context) ? $context["histogram"] : (function () { throw new RuntimeError('Variable "histogram" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
            // line 55
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["points"], "getPoints", [], "method", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 56
                echo "                    ";
                if ((0 === twig_compare($context["p"], 20))) {
                    // line 57
                    echo "                        <div class=\"dot\"> </div>
                    ";
                }
                // line 59
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
    <div class=\"histogram-row\">21:
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histogram"]) || array_key_exists("histogram", $context) ? $context["histogram"] : (function () { throw new RuntimeError('Variable "histogram" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
            // line 64
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["points"], "getPoints", [], "method", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 65
                echo "                    ";
                if ((0 === twig_compare($context["p"], 21))) {
                    // line 66
                    echo "                        <div class=\"dot\"> </div>
                    ";
                }
                // line 68
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </div>
</div>


";
        // line 74
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "histogram/histogram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 74,  274 => 70,  268 => 69,  262 => 68,  258 => 66,  255 => 65,  250 => 64,  246 => 63,  242 => 61,  236 => 60,  230 => 59,  226 => 57,  223 => 56,  218 => 55,  214 => 54,  210 => 52,  204 => 51,  198 => 50,  194 => 48,  191 => 47,  186 => 46,  182 => 45,  178 => 43,  172 => 42,  166 => 41,  162 => 39,  159 => 38,  154 => 37,  150 => 36,  146 => 34,  140 => 33,  134 => 32,  130 => 30,  127 => 29,  122 => 28,  118 => 27,  114 => 25,  108 => 24,  102 => 23,  98 => 21,  95 => 20,  90 => 19,  86 => 18,  82 => 16,  76 => 15,  70 => 14,  66 => 12,  63 => 11,  58 => 10,  54 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html.twig') }}

<h1>Histogram</h1>

<p>Histogram över spelares vinnande poäng över 15</p>

<div class=\"histogram\">
    <div class=\"histogram-row\">15:
        {% for points in histogram %}
                {% for p in points.getPoints() %}
                    {% if p == 15 %}
                        <div class=\"dot\"> </div>
                    {% endif %}
                {% endfor %}
        {% endfor %}
    </div>
    <div class=\"histogram-row\">16:
        {% for points in histogram %}
                {% for p in points.getPoints() %}
                    {% if p == 16 %}
                        <div class=\"dot\"> </div>
                    {% endif %}
                {% endfor %}
        {% endfor %}
    </div>
    <div class=\"histogram-row\">17:
        {% for points in histogram %}
                {% for p in points.getPoints() %}
                    {% if p == 17 %}
                        <div class=\"dot\"> </div>
                    {% endif %}
                {% endfor %}
        {% endfor %}
    </div>
    <div class=\"histogram-row\">18:
        {% for points in histogram %}
                {% for p in points.getPoints() %}
                    {% if p == 18 %}
                        <div class=\"dot\"> </div>
                    {% endif %}
                {% endfor %}
        {% endfor %}
    </div>
    <div class=\"histogram-row\">19:
        {% for points in histogram %}
                {% for p in points.getPoints() %}
                    {% if p == 19 %}
                        <div class=\"dot\"> </div>
                    {% endif %}
                {% endfor %}
        {% endfor %}
    </div>
    <div class=\"histogram-row\">20:
        {% for points in histogram %}
                {% for p in points.getPoints() %}
                    {% if p == 20 %}
                        <div class=\"dot\"> </div>
                    {% endif %}
                {% endfor %}
        {% endfor %}
    </div>
    <div class=\"histogram-row\">21:
        {% for points in histogram %}
                {% for p in points.getPoints() %}
                    {% if p == 21 %}
                        <div class=\"dot\"> </div>
                    {% endif %}
                {% endfor %}
        {% endfor %}
    </div>
</div>


{{ include('footer.html.twig') }}
", "histogram/histogram.html.twig", "C:\\Users\\jjoha\\dbwebb-kurser\\mvc\\me\\proj\\templates\\histogram\\histogram.html.twig");
    }
}
