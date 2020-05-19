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

/* C:\xampp\htdocs\octobercms/plugins/watchlear/contact/components/contactform/default.htm */
class __TwigTemplate_c5e58d6f30fda39b087b98a5411c8acea56f54fcd8af19d631529ed529895f52 extends \Twig\Template
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
        echo "<form method=\"POST\" 
    data-request=\"onSend\"
    data-request-validate
    data-request-success=\"this.reset(); alert('Спасибо')\"
    id=\"contactForm\"
>
  <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"form-group \">
                
                 <label for=\"name\">Имя</label>
              <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Имя\">
              <p data-validate-for=\"name\" class=\"help-block text-danger\"></p> 
            </div>

            
            
          </div>
          <div class=\"col-md-6\">
            <div class=\"form-group\">
                 <label for=\"phone\">Номер</label>
              <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Номер\" >
              <p data-validate-for=\"phone\" class=\"help-block text-danger\"></p>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
            <label for=\"content\">Сообщение</label>
          <textarea name=\"content\" id=\"content\" class=\"form-control\" rows=\"4\" placeholder=\"Сообщение\" ></textarea>
          <p  data-validate-for=\"content\"  class=\"help-block text-danger\"></p>
        </div>
        <input class=\"formname\" type=\"hidden\" name=\"formname\" value=\"Контакт: Футер\">
        <button type=\"submit\" class=\"btn btn-custom btn-lg\" data-attach-loading>Отправить заявку</button>
</form>



 ";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/plugins/watchlear/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"POST\" 
    data-request=\"onSend\"
    data-request-validate
    data-request-success=\"this.reset(); alert('Спасибо')\"
    id=\"contactForm\"
>
  <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"form-group \">
                
                 <label for=\"name\">Имя</label>
              <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Имя\">
              <p data-validate-for=\"name\" class=\"help-block text-danger\"></p> 
            </div>

            
            
          </div>
          <div class=\"col-md-6\">
            <div class=\"form-group\">
                 <label for=\"phone\">Номер</label>
              <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Номер\" >
              <p data-validate-for=\"phone\" class=\"help-block text-danger\"></p>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
            <label for=\"content\">Сообщение</label>
          <textarea name=\"content\" id=\"content\" class=\"form-control\" rows=\"4\" placeholder=\"Сообщение\" ></textarea>
          <p  data-validate-for=\"content\"  class=\"help-block text-danger\"></p>
        </div>
        <input class=\"formname\" type=\"hidden\" name=\"formname\" value=\"Контакт: Футер\">
        <button type=\"submit\" class=\"btn btn-custom btn-lg\" data-attach-loading>Отправить заявку</button>
</form>



 ", "C:\\xampp\\htdocs\\octobercms/plugins/watchlear/contact/components/contactform/default.htm", "");
    }
}
