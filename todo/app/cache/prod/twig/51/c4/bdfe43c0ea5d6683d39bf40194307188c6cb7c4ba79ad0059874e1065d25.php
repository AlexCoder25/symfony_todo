<?php

/* TodoBundle::newTaskForm.html.twig */
class __TwigTemplate_51c4bdfe43c0ea5d6683d39bf40194307188c6cb7c4ba79ad0059874e1065d25 extends Twig_Template
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
        // line 1
        echo "<form class=\"input-field\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_task", array("category_url" => (isset($context["category_url"]) ? $context["category_url"] : null))), "html", null, true);
        echo "\" id=\"formNewTask\" method=\"POST\">
    <div class=\"input-field col s10\">
        <i class=\"mdi-editor-mode-edit prefix\"></i>
        <input type=\"text\" name=\"task_title\" id=\"icon_prefix2\"/>
        <label for=\"icon_prefix2\">Create new task</label>
    </div>
    <div class=\"input-field col s2\">
        <i class=\"mdi-device-access-time prefix\"></i>
        <input type=\"date\" name=\"task_date\" id=\"task_date\" class=\"datepicker\" id=\"icon_prefix3\" placeholder=\"Set date\" value=\"\">
        <label for=\"icon_prefix3\"></label>
    </div>
    <input type=\"submit\" class=\"hide\"/>
</form>
";
    }

    public function getTemplateName()
    {
        return "TodoBundle::newTaskForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
