<?php

/* TodoBundle:Default:index.html.twig */
class __TwigTemplate_a6af159a1f41d3f2e310bf839b772f13c32538c200c381cff29869cadcba2ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@Todo/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Todo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 6
        echo "    <div id=\"notifications\">";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notification"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>

    ";
        // line 9
        echo "    <div class=\"row main-layout\">

        ";
        // line 12
        echo "        ";
        $this->env->loadTemplate("@Todo/categories.html.twig")->display($context);
        // line 13
        echo "        ";
        // line 14
        echo "        <div class=\"col s9 tasks-col\">
            ";
        // line 15
        $this->env->loadTemplate("@Todo/tasks.html.twig")->display($context);
        // line 16
        echo "        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "TodoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  67 => 15,  64 => 14,  62 => 13,  59 => 12,  55 => 9,  42 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
