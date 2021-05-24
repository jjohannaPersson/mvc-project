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

/* book/show.html.twig */
class __TwigTemplate_9419ce08c7fb9945703843bd30a1c7f8239ecab63330d08868e017ed172f4e27 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/show.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

<h1>Böcker</h1>

<table class=\"book-table\">
    <tr>
        <th>Titel</th>
        <th>Författare</th>
        <th>ISBN</th>
        <th>Bildlänk</th>
    </tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getName", [], "method", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getAuthor", [], "method", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getIsbn", [], "method", false, false, false, 16), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getPic", [], "method", false, false, false, 17), "html", null, true);
            echo "\">Bild</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>


";
        // line 23
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "book/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  85 => 20,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  61 => 13,  57 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html.twig') }}

<h1>Böcker</h1>

<table class=\"book-table\">
    <tr>
        <th>Titel</th>
        <th>Författare</th>
        <th>ISBN</th>
        <th>Bildlänk</th>
    </tr>
    {% for book in books %}
        <tr>
            <td>{{ book.getName() }}</td>
            <td>{{ book.getAuthor() }}</td>
            <td>{{ book.getIsbn() }}</td>
            <td><a href=\"{{ book.getPic() }}\">Bild</a></td>
        </tr>
    {% endfor %}
</table>


{{ include('footer.html.twig') }}
", "book/show.html.twig", "C:\\Users\\jjoha\\dbwebb-kurser\\mvc\\me\\proj\\templates\\book\\show.html.twig");
    }
}
