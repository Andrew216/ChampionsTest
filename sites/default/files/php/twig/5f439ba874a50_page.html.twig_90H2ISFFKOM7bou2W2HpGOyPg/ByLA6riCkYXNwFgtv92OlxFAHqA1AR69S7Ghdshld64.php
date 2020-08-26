<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/myTestBase/page.html.twig */
class __TwigTemplate_18e04603b58d23130e6dbc5d250b54c334053745151157f1c186ead431958932 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width-device-width, initial\">
    <title>My base Html</title>
    <link rel=\"stylesheet\" href=\"style.css\">
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,900;1,300&display=swap\" rel=\"stylesheet\">
  </head>
  <body>
<section>
";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar", [])), "html", null, true);
        echo "
  <div class=\"menu\">
<div class=\"logo\">
  <img src=\"images/Webathon_logo.png\" alt=\"\">

  </div>
  <ul>
    <a href=\"#\"><li> About Us</li></a>
    <a href=\"#\"><li> Product</li></a>
    <a href=\"#\"><li> Careers</li></a>
    <a href=\"#\"><li> Contact</li></a>
  </ul>


    </div>
</section>

<section class=\"herosection\">
";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "land", [])), "html", null, true);
        echo "
  <div class=\"land\">
<div class=\"heading\">
  Your new website <br/> solution
  <p> Become <b>successful</b> with our
    <br/>integerated web packages.</p>

    <a type=\"button\" class=\"button\">Learn more</a>
    <div class=\"flex-container\">
      <div> <img src=\"images/Webathon_segment.png\" alt=\"\"> <p><b>Segment</b> your data  effectively</p></div>
      <div> <img src=\"images/Webathon_distribute.png\" alt=\"\"><p><b>Distribute</b> tasks to  your team</p></div>
      <div> <img src=\"images/Webathon_manage.png\" alt=\"\"> <p><b>Manage</b> your  workflow</p></div>
    </div>

</div>

  </div>
</section>
<section class=\"separator\">

</section>
<section>
  ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "article", [])), "html", null, true);
        echo "

  </article>}}
  <div class=\"grid-container\">
    <div class=\"grid-item\">
    <p> <b> Increase Output <br> Efficiency </b> <br>
       Our web products brings your online presense to the 21st century. No more degradation of work output</p>
    </div>
    <div class=\"grid-item\"><img src=\"images/Webathon_tech girl.png\" alt=\"\"></div>


  </div>
</section>
<section style=\"background-color:#D6D6D6\">
  <div class=\"grid-container\">
    <div class=\"grid-item\"><img src=\"images/Webathon_family around computer.png\" alt=\"\"></div>


    <div class=\"grid-item\">
       <p style=\"text-align:right\"><b> Earn the respect <br> of your peers</b><br>
  9 in 10 of our customers report a stronger reputation among their colleagues, friends and family</p>
    </div>


  </div>
</section>

<section>
  <div class=\"grid-container\">
    <div class=\"grid-item\">
    <p>  <b> Follow your <br> dreams </b><br>
     The tide is high and you're holding on. we want to be your one web service provider.</p>
    </div>
    <div class=\"grid-item\"><img src=\"images/Webathon_handshake.png\" alt=\"\"></div>


  </div>
</section>
<section style=\"background-color:#3C2F18;\">
  ";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
<div class=\"Footer-grid-container\">
  <div class=\"grid-item\">About us
    <ul>
      <li>Who we are </li>
      <li>Our goal </li>
      </ul>
  </div>
  <div class=\"grid-item\">products
    <ul>
      <li>Web solution</li>
      <li>Web tool</li>
      <li>Basic package </li>
      <li>Pro package </li>
      </ul>
  </div>
  <div class=\"grid-item\">Careers
    <ul>
      <li>Internal </li>
      <li>Freelance</li>
      </ul>
  </div>
  <div class=\"grid-item\">Social
    <ul>
      <li>Facebook</li>
      <li>Twitter</li>
      <li>Instagram</li>
      </ul>
   </div>
  <div class=\"grid-item\">Contact

    <ul>
      <li>Customer support </li>
      <li>Business </li>
      </ul>
  </div>
</div>
<br/>
<br/>
<div style=\"padding-left:100px; color:#fff; font-size:16px;\">
<img src=\"images/Webathon_logo.png\" alt=\"\"><br/>
This is some made up copyright stuff. Our lawyers are working round the clock to ensure this<br/>
text remains so our editors don't have to bother keeping up to date.

</div>

</section>



  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/myTestBase/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 91,  114 => 52,  89 => 30,  68 => 12,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/myTestBase/page.html.twig", "/Applications/MAMP/htdocs/drupal/themes/myTestBase/page.html.twig");
    }
}
