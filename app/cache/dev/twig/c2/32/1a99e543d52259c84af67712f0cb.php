<?php

/* ChamicBudgetBundle:Default:index.html.twig */
class __TwigTemplate_c2321a99e543d52259c84af67712f0cb extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "ChamicBudgetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
