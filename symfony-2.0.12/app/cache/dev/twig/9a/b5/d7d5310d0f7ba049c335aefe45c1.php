<?php

/* WebProfilerBundle:Profiler:layout.html.twig */
class __TwigTemplate_9ab5d7d5310d0f7ba049c335aefe45c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:toolbar", array("token" => $this->getContext($context, "token"), "position" => "normal"), array());
        // line 6
        echo "
    <div id=\"content\">
        ";
        // line 8
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 9
        echo "
        ";
        // line 10
        if ($this->getContext($context, "profile")) {
            // line 11
            echo "            <div id=\"resume\">
                <p>
                    <strong><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
            echo "</a></strong>
                    <span class=\"date\">
                        <strong>by ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "ip"), "html", null, true);
            echo "</strong> at <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "time"), "r"), "html", null, true);
            echo "</strong>
                    </span>
                </p>
            </div>
        ";
        }
        // line 20
        echo "
        <div id=\"main\">

            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 26
        $this->displayBlock('panel', $context, $blocks);
        // line 27
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 30
        if (array_key_exists("templates", $context)) {
            // line 31
            echo "                        <ul id=\"menu_profiler\">
                            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 33
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 34
                echo "                                ";
                if (($this->getContext($context, "menu") != "")) {
                    // line 35
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    if (($this->getContext($context, "name") == $this->getContext($context, "panel"))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
                    echo "\">";
                    echo $this->getContext($context, "menu");
                    echo "</a>
                                    </li>
                                ";
                }
                // line 39
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "                        </ul>
                    ";
        }
        // line 42
        echo "                    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array(), array());
        // line 43
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $this->getContext($context, "token")));
        // line 44
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
