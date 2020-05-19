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

/* C:\xampp\htdocs\octobercms/themes/olympos/partials/footer.htm */
class __TwigTemplate_c29dfcdf9b9317e01ee1b2f30b0e4e9c529a37a7a4e730aad7f526f90369095a extends \Twig\Template
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
        echo "<div class=\"mfp-hide\" >


<form method=\"POST\" 
    data-request=\"onSend\"
    data-request-validate
    data-request-success=\"this.reset();\"
    class=\"popup-form callback zoom-anim-dialog white-popup \" id=\"callback\"
>
\t<div class=\"success1\">Спасибо за заявку! <br>
\t\t\tНаши менеджеры свяжутся с вами в ближайшее время.</div>

\t\t<h3>Заказать звонок</h3>
\t\t<label>
\t\t\t<span>Ваше имя:</span>
      <input type=\"text\" name=\"name\" placeholder=\"Введите ваше имя...\">
      <p data-validate-for=\"name\" class=\"help-block text-danger\"></p> 
\t\t</label>
\t\t<label>
\t\t\t<span>Ваш номер:</span>
      <input type=\"text\" name=\"phone\" placeholder=\"Введите ваш Номер...\">
      <p data-validate-for=\"phone\" class=\"help-block text-danger\"></p>
\t\t</label>
\t\t<div class=\"text-center\">
\t\t\t<button type=\"submit\" class=\"btn-custom\" data-attach-loading>Отправить заявку</button>
\t\t</div>
\t\t<input class=\"formname\" type=\"hidden\" name=\"formname\" >
\t\t<button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
</form>







</div>























<div id=\"footer\">
  <div class=\"container text-center\">
    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"social\">
        <ul>
          <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2018 Copyright: <a href=\"http://www.google.com\" rel=\"nofollow\">Search</a></p>
    </div>
  </div>
  
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/olympos/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mfp-hide\" >


<form method=\"POST\" 
    data-request=\"onSend\"
    data-request-validate
    data-request-success=\"this.reset();\"
    class=\"popup-form callback zoom-anim-dialog white-popup \" id=\"callback\"
>
\t<div class=\"success1\">Спасибо за заявку! <br>
\t\t\tНаши менеджеры свяжутся с вами в ближайшее время.</div>

\t\t<h3>Заказать звонок</h3>
\t\t<label>
\t\t\t<span>Ваше имя:</span>
      <input type=\"text\" name=\"name\" placeholder=\"Введите ваше имя...\">
      <p data-validate-for=\"name\" class=\"help-block text-danger\"></p> 
\t\t</label>
\t\t<label>
\t\t\t<span>Ваш номер:</span>
      <input type=\"text\" name=\"phone\" placeholder=\"Введите ваш Номер...\">
      <p data-validate-for=\"phone\" class=\"help-block text-danger\"></p>
\t\t</label>
\t\t<div class=\"text-center\">
\t\t\t<button type=\"submit\" class=\"btn-custom\" data-attach-loading>Отправить заявку</button>
\t\t</div>
\t\t<input class=\"formname\" type=\"hidden\" name=\"formname\" >
\t\t<button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
</form>







</div>























<div id=\"footer\">
  <div class=\"container text-center\">
    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"social\">
        <ul>
          <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
          <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2018 Copyright: <a href=\"http://www.google.com\" rel=\"nofollow\">Search</a></p>
    </div>
  </div>
  
</div>", "C:\\xampp\\htdocs\\octobercms/themes/olympos/partials/footer.htm", "");
    }
}
