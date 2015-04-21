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
        // line 1
        echo "<!DOCTYPE html>
";
        // line 3
        echo "

<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Index</a></li>
          <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Add an announce</a></li>
        </ul>

        <h4>Last Announces</h4>
        ";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "
</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "        ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        // line 51
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
        return array (  127 => 51,  125 => 50,  122 => 49,  118 => 38,  115 => 37,  110 => 14,  108 => 13,  105 => 12,  99 => 10,  93 => 54,  91 => 49,  84 => 45,  76 => 39,  74 => 37,  68 => 34,  61 => 30,  57 => 29,  42 => 16,  40 => 12,  35 => 10,  26 => 3,  23 => 1,);
    }
}
