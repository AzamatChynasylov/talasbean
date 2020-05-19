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

/* C:\xampp\htdocs\octobercms/themes/olympos/partials/header.htm */
class __TwigTemplate_1aa191b1b6e1e67a86787ec1721977c388330fc5efb5e28947cda0b2e829cb1d extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"> <span class=\"sr-only\">Переключение</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
      <a class=\"navbar-brand page-scroll\" href=\"/#page-top\">TalasBean</a> </div>
    
  
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"/#about\" class=\"page-scroll\">О нас</a></li>
        <li><a href=\"/#services\" class=\"page-scroll\">Наши услуги</a></li>
        <li><a href=\"/#portfolio\" class=\"page-scroll\">Наша продукция</a></li>
        <li><a href=\"/#testimonials\" class=\"page-scroll\">Информация</a></li>
        <li><a href=\"/#contact\" class=\"page-scroll\">Контакты</a></li>
        <li><a href=\"#callback\" class=\"callbackh open-popup-link\" data-form=\"Заказать обратный звонок: Верхняя\" data-text=\"Заказать звонок\">Заказать обратный звонок</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/olympos/partials/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"> <span class=\"sr-only\">Переключение</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
      <a class=\"navbar-brand page-scroll\" href=\"/#page-top\">TalasBean</a> </div>
    
  
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"/#about\" class=\"page-scroll\">О нас</a></li>
        <li><a href=\"/#services\" class=\"page-scroll\">Наши услуги</a></li>
        <li><a href=\"/#portfolio\" class=\"page-scroll\">Наша продукция</a></li>
        <li><a href=\"/#testimonials\" class=\"page-scroll\">Информация</a></li>
        <li><a href=\"/#contact\" class=\"page-scroll\">Контакты</a></li>
        <li><a href=\"#callback\" class=\"callbackh open-popup-link\" data-form=\"Заказать обратный звонок: Верхняя\" data-text=\"Заказать звонок\">Заказать обратный звонок</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>", "C:\\xampp\\htdocs\\octobercms/themes/olympos/partials/header.htm", "");
    }
}
