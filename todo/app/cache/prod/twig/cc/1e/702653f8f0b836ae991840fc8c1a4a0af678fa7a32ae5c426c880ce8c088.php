<?php

/* TodoBundle::tasks.html.twig */
class __TwigTemplate_cc1e702653f8f0b836ae991840fc8c1a4a0af678fa7a32ae5c426c880ce8c088 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col s8 offset-s2 tasks-col\">
        <div class=\"section\">
            <h3>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["category_title"]) ? $context["category_title"] : null), "html", null, true);
        echo "</h3>
            <p>Total tasks: ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tasks"]) ? $context["tasks"] : null)), "html", null, true);
        echo "</p>
        </div>
        <ul class=\"collection\">
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 10
            echo "                <li class=\"collection-item\"><div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo " <span class=\"date\">";
            if ($this->getAttribute($context["task"], "dueDate", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "dueDate", array()), "html", null, true);
            }
            echo "</span><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_task", array("task_id" => $this->getAttribute($context["task"], "id", array()), "category_url" => $this->getAttribute($context["task"], "categoryUrl", array()))), "html", null, true);
            echo "\" class=\"secondary-content complete-task-block\"><i class=\"secondary-content mdi-navigation-check small complete-task\"></i></a></div></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
        ";
        // line 13
        if (array_key_exists("category_url", $context)) {
            // line 14
            echo "            ";
            $this->env->loadTemplate("@Todo/newTaskForm.html.twig")->display($context);
            // line 15
            echo "        ";
        }
        // line 16
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TodoBundle::tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  61 => 15,  58 => 14,  56 => 13,  53 => 12,  38 => 10,  34 => 9,  28 => 6,  24 => 5,  19 => 2,);
    }
}
