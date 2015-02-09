<?php

/* TodoBundle::categories.html.twig */
class __TwigTemplate_843e69f9768658be137f8d244dcb4c3dfd69916617e82b5f1e60c2bffab5a76c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"col s3 categories-col\">
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("show_all");
        echo "\"><h3 class=\"title\">Categories</h3></a>
    <ul class=\"collection\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "            <a class=\"collection-item ";
            if ((array_key_exists("category_url", $context) && ((isset($context["category_url"]) ? $context["category_url"] : null) == $this->getAttribute($context["category"], "url", array())))) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category", array("category_url" => $this->getAttribute($context["category"], "url", array()))), "html", null, true);
            echo "\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
                <span class=\"secondary-content\" onclick=\"window.location.href='";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_category", array("category_url" => $this->getAttribute($context["category"], "url", array()))), "html", null, true);
            echo "'; return false;\"><i class=\"secondary-content mdi-content-clear remove-category-button pink-text lighten-1\"></i></span>
                ";
            // line 9
            if (($this->getAttribute($context["category"], "tasksTotal", array()) != "0")) {
                // line 10
                echo "                    <span class=\"badge new\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "tasksTotal", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 12
            echo "            </a>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>
    <div class=\"row new-category-row\">
        <form action=\"\" id=\"formNewCategory\" method=\"POST\">
            <div class=\"input-field col s9\">
                <input type=\"text\" id=\"category_title\" name=\"category_title\"/>
                <label for=\"category_title\">New category title</label>
            </div>
            <div class=\"col s3\">
                <label for=\"new-category\">
                    <a class=\"waves-effect waves-light btn teal accent-4 new-category\">New</a>
                </label>
            </div>
            <input type=\"submit\" id=\"new-category\" class=\"hide\"/>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TodoBundle::categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  56 => 12,  50 => 10,  48 => 9,  44 => 8,  40 => 7,  31 => 6,  27 => 5,  22 => 3,  19 => 2,);
    }
}
