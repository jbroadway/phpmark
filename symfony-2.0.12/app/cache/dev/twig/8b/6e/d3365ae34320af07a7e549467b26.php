<?php

/* SensioDistributionBundle::Configurator/form.html.twig */
class __TwigTemplate_8b6ed3365ae34320af07a7e549467b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_rows' => array($this, 'block_field_rows'),
            'field_row' => array($this, 'block_field_row'),
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_field_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_field_label($context, array $blocks = array())
    {
        // line 25
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 27
        if ($this->getContext($context, "required")) {
            // line 28
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 30
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
