<?php

/* ::layout.html.twig */
class __TwigTemplate_876ef300fbee5620996bea8194ebf778f713e81a9e221ae328e1ce89702fc661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>The K-App</h1>
      
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Index</a></li>
          <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Add an announce</a></li>
        </ul>

        <h4>Last Announces</h4>
        ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "        ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        // line 50
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  122 => 49,  119 => 48,  115 => 37,  112 => 36,  107 => 13,  105 => 12,  102 => 11,  96 => 9,  90 => 53,  88 => 48,  81 => 44,  73 => 38,  71 => 36,  65 => 33,  58 => 29,  54 => 28,  39 => 15,  37 => 11,  32 => 9,  23 => 2,);
    }
}
