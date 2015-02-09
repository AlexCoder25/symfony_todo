<?php

/* @Todo/layout.html.twig */
class __TwigTemplate_2db49e4906d42ed82a512597ee0ff262648e3548d27a38dfc94826b91363fe4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bf37576_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bf37576_0") : $this->env->getExtension('assets')->getAssetUrl("css/bf37576_part_1_main_1.css");
            // line 10
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "bf37576"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bf37576") : $this->env->getExtension('assets')->getAssetUrl("css/bf37576.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "</head>
<body>

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
<script src=\"//code.jquery.com/jquery-2.1.3.min.js\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/bin/materialize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/waves.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/forms.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/toasts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/dropdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/cards.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/collapsible.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/forms.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/hammer.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/materialbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/velocity.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/date_picker/picker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/date_picker/picker.date.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/todo/js/app.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@Todo/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 15,  126 => 6,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 16,  60 => 15,  55 => 12,  41 => 10,  37 => 9,  33 => 8,  28 => 6,  21 => 1,);
    }
}
