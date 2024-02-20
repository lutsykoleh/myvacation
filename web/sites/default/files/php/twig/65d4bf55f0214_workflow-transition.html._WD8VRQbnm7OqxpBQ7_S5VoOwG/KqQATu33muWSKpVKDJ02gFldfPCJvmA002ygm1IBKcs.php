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

/* modules/contrib/workflow/templates/workflow-transition.html.twig */
class __TwigTemplate_c537dfe77230dfc3de557012de08e526 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<article";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 26, $this->source), "html", null, true);
        echo ">
  <div class=\"status\">
    ";
        // line 28
        echo t("From @from_state.label to @to_state.label at @time via @user.label", array("@from_state.label" => twig_get_attribute($this->env, $this->source, ($context["from_state"] ?? null), "label", [], "any", false, false, true, 28), "@to_state.label" => twig_get_attribute($this->env, $this->source, ($context["to_state"] ?? null), "label", [], "any", false, false, true, 28), "@time" => ($context["time"] ?? null), "@user.label" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "label", [], "any", false, false, true, 28), ));
        // line 29
        echo "  </div>
  ";
        // line 30
        if (($context["comment"] ?? null)) {
            // line 31
            echo "    <div class=\"comment\">
      ";
            // line 32
            echo t("Comment", array());
            echo ": ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment"] ?? null), 32, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if (($context["content"] ?? null)) {
            // line 37
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 37, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 39
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/workflow/templates/workflow-transition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 39,  70 => 37,  68 => 36,  65 => 35,  57 => 32,  54 => 31,  52 => 30,  49 => 29,  47 => 28,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/workflow/templates/workflow-transition.html.twig", "/var/www/web/modules/contrib/workflow/templates/workflow-transition.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 28, "if" => 30);
        static $filters = array("escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
