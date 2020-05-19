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

/* C:\xampp\htdocs\octobercms/themes/olympos/pages/home.htm */
class __TwigTemplate_d4223bc2bf13d05db344d89d247744d65c5084a5dd45449af752801fb2ef18b2 extends \Twig\Template
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
        echo "<header id=\"header\">
  <div class=\"intro\" style=\"background: url(";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro-bg1.jpg");
        echo ") top center no-repeat; background-size: cover;\">
    <div class=\"overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 intro-text\">
            <h1>Фасоль из Таласа</h1>
            <p>Продаём органическую фасоль из Кыргызстана от производителя.<br><br>
              - НЕ СОДЕРЖИТ ГМО<br>
              - БИО ПРОДУКТ</p>
               <a href=\"#callback\" data-form=\"Получить полный прайс: Верхняя\" class=\"btn btn-custom btn-lg page-scroll open-popup-link\">Получить полный прайс</a>
            </div>
      </div>
    </div>
  </div>


</header>

<div id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12 col-md-6\">
        <div class=\"about-text\">
          <h2>Добро пожаловать в <span>TalasBean</span></h2>
          <hr>
          <p>Мы занимаемся экспортом фасоли уже 25 лет. Мы не только продаем фасоль, но и выращиваем её сами.</p>
          <p>Наша работа основыватся на 4-х принципах: принцип здоровья, принцип экологии, принцип справедливости и принцип работы.</p>
          <a href=\"#services\" class=\"btn btn-custom btn-lg page-scroll\">Показать наши услуги</a> </div>
      </div>
      <div class=\"col-xs-12 col-md-3\">
        <div class=\"about-media\"> <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-1.jpg");
        echo "\" alt=\" \"> </div>
        <div class=\"about-desc\">
          <h3>Процесс посадки фасоли</h3>
          <p>Раньше фасоль сажали именно таким образом, но благо сейчас есть спеальные оборудования.</p>
        </div>
      </div>
      <div class=\"col-xs-12 col-md-3\">
        <div class=\"about-media\"> <img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-2.jpg");
        echo "\" alt=\" \"> </div>
        <div class=\"about-desc\">
          <h3>Процесс прорастания </h3>
          <p>Фасоль прорастает в течении 3 - 4 месяцев до такого состояния.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<section class=\"s-wide s-dark s-adv\">

  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-md-3 col-sm-6\">
        <div class=\"s-adv-item\">
          <h3><span data-count=\"25\"></span> лет на рынке</h3>
          <p>25 лет успешной работы на рынке </p>
        </div>
      </div>

      <div class=\"col-md-3 col-sm-6\">
        <div class=\"s-adv-item\">
          <h3><span data-count=\"500000\"></span> тон</h3>
          <p>Более 500000 тон экспорта</p>
        </div>
      </div>

      <div class=\"col-md-3 col-sm-6\">
        <div class=\"s-adv-item\">
          <h3><span data-count=\"120\"></span> партнеров</h3>
          <p>Более 120 партнеров</p>
        </div>
      </div>

      <div class=\"col-md-3 col-sm-6\">
        <div class=\"s-adv-item\">
          <h3><span data-count=\"1\"></span> место</h3>
          <p>№ 1 по экспорту фасоли</p>
        </div>
      </div>

    </div>
  </div>

</section>

<div id=\"services\">
  <div class=\"container\">
    <div class=\"col-md-10 col-md-offset-1 section-title text-center\">
      <h2>Основные направления услуг</h2>
      <hr>
      <p>Все этапы услуг проходят с колоссальной точностью.</p>
    </div>
    <div class=\"row\">
      <div class=\"col-md-4 text-center\">
        <div class=\"services-item\">
           <div class=\"service-media\"> <img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/1.svg");
        echo "\" alt=\" \" class=\"img-responsive img-svg\"> </div>
        <div class=\"service-desc\">
          <h3>Выращивание высококачественной фасоли</h3>
          <p>Выращивание высококачественной фасоли и экспорт готовой продукции в другие страны является основным и главным направлением компании Talasbean. Наша компания выращивает Фасоль уже более 20 лет.</p>
        </div>
        </div>
       
      </div>
      <div class=\"col-md-4 text-center\">
         <div class=\"services-item\">
        <div class=\"service-media\"> <img src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/2.svg");
        echo "\" alt=\" \" class=\"img-responsive img-svg\"> </div>
        <div class=\"service-desc\">
          <h3>Очистка, сортировка и калибровка</h3>
          <p>Основная задача наших специалистов это предоставления натуральной и качественной фасоли для потребителей.</p>
        </div>
        </div>
      </div>
      <div class=\"col-md-4 text-center\">
        <div class=\"services-item\">
        <div class=\"service-media\"> <img src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/3.svg");
        echo "\" alt=\" \" class=\"img-responsive img-svg\"> </div>
        <div class=\"service-desc\">
          <h3>Экспорт готовой продукции</h3>
          <p>СКХ «Берен» является производителем и экспортером фасоли. С 2008 года компания экспортирует фасоль в страны ближнего и дальнего зарубежья.</p>
        </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div id=\"portfolio\">
  <div class=\"container\">
    <div class=\"section-title text-center center\">
      <h2>Сорта фасоли</h2>
      <hr>
      <p>Все предлагаемые нами сорта фасоли и процесс работы.</p>
    </div>
    <div class=\"categories\">
      <ul class=\"cat\">
        <li>
          <ol class=\"type\">
            <li><a href=\"#\" data-filter=\"*\" class=\"active\">Всё вместе</a></li>
            <li><a href=\"#\" data-filter=\".lawn\">Сорта фасоли</a></li>
            <li><a href=\"#\" data-filter=\".garden\">Процесс работы</a></li>
          </ol>
        </li>
      </ul>
      <div class=\"clearfix\"></div>
    </div>
    ";
        // line 146
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 146);
        // line 147
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 147);
        // line 148
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 148);
        // line 149
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 149);
        // line 150
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 150);
        // line 151
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 151);
        // line 152
        echo "
<div class=\"row\">
      <div class=\"portfolio-items\">

    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 157
            echo "            ";
            // line 158
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 158) == 0)) {
                // line 159
                echo "               <div class=\"col-sm-6 col-md-4 lawn\">
                  <div class=\"portfolio-item\">
                    <div class=\"hover-bg\"> <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "beanimage", [], "any", false, false, false, 161), "path", [], "any", false, false, false, 161), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 161), "html", null, true);
                echo "\" data-lightbox-gallery=\"gallery1\">
                      <div class=\"hover-text\">
                        <h4>Сорта фасоли</h4>
                      </div>
                      <img src=\"";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "beanimage", [], "any", false, false, false, 165), "path", [], "any", false, false, false, 165), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 165), "html", null, true);
                echo "\"> </a> </div>
                  </div>
                </div>
            ";
            }
            // line 169
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 169) == 1)) {
                // line 170
                echo "               <div class=\"col-sm-6 col-md-4 garden\">
                  <div class=\"portfolio-item\">
                    <div class=\"hover-bg\"> <a href=\"";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "beanimage", [], "any", false, false, false, 172), "path", [], "any", false, false, false, 172), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 172), "html", null, true);
                echo "\" data-lightbox-gallery=\"gallery1\">
                      <div class=\"hover-text\">
                        <h4>Сорта фасоли</h4>
                      </div>
                      <img src=\"";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "beanimage", [], "any", false, false, false, 176), "path", [], "any", false, false, false, 176), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 176), "html", null, true);
                echo "\"> </a> </div>
                  </div>
                </div>
            ";
            }
            // line 180
            echo "           
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "
</div>
</div>

   
  </div>
</div>
<div id=\"testimonials\" class=\"text-center\">
  <div class=\"overlay\">
    <div class=\"container\">
      <div class=\"section-title\">
        <h2>Факты о фасоли: </h2>
        <hr>
      </div>
      <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
          <div id=\"testimonial\" class=\"owl-carousel owl-theme\">
            <div class=\"item\">
              <p>Фасоль — рекордсмен среди растений по количеству легко усваиваемого белка. Также в ста граммах фасоли содержится примерно половина дневной нормы клетчатки, необходимой человеку. Но этим ее полезные свойства не исчерпываются. Большое количество серы, которым может похвастаться фасоль, поможет справиться с кишечными инфекциями (и в целом повысит иммунитет), а также с кожными заболеваниями, болезнями бронхов и ревматизмом. Богата фасоль и железом, без которого невозможно образование эритроцитов.</p>
            </div>
            <div class=\"item\">
              <p>Фасоль известна людям очень давно, как минимум пять тысячелетий. В китайских летописях, датированных 3000 г до н.э. уже есть упоминания о ней. По описанию древняя фасоль напоминает современный сорт маш.</p>
            </div>
            <div class=\"item\">
              <p>Всего сортов фасоли более 200. У нас распространены всего 4:<br>
                  1.красная фасоль - укрепляет иммунитет, положительно действует на пищеварительный тракт, улучшает состояние кожи;<br>
                  2.белая фасоль - укрепляет кости и зубы, так как богата кальцием и железом;<br>
                  3.фиолетовая фасоль (грузинская) - меняет цвет при варке, является источником витаминов;<br>
                  4.жёлтая фасоль - можно есть сырой, варёной и жареной, хороший источник витаминов и минералов.</p>
            </div>
            <div class=\"item\">
              <p>Фасоль питательна и хорошо хранится, поэтому она часто присутствует в рационе военнослужащих. Особенно славился любовью к фасоли Наполеон Бонапарт. Он считал, что фасоль придаёт силы мышцам и мыслей головному мозгу.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class=\"s-wide s-equipment\">


  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-md-12\">
        <h3>Ваше здоровье превыше всего</h3>
        <h3> Нашa Фасоль не содержит ГМО</h3>
      </div>
     

    </div>
    <div class=\"row\">
     
        
          <div class=\"col-md-4\">
             <div class=\"carousel-item\">
              <div class=\"carousel-wrap\">
                <div class=\"car-img-wrap\">
                  <img class=\"responsive-img\" src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg-car.png");
        echo "\" alt=\"bg-carousel\">
                  <img class=\"responsive-img img-svg\" src=\"";
        // line 244
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/clock-forward.svg");
        echo "\" alt=\"Korf\">
                </div>
                <div class=\"carousel-text\">
                  <h3>Наша миссия:</h3>
                  <p>На первое место мы ставим здоровье наших потребителей и выращиваем органически чистую фасоль. Всегда следим за качеством фасоли!</p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
              <div class=\"carousel-item\">
              <div class=\"carousel-wrap\">
                <div class=\"car-img-wrap\">
                  <img class=\"responsive-img\" src=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg-car.png");
        echo "\" alt=\"bg-carousel\">
                  <img class=\"responsive-img img-svg\" src=\"";
        // line 258
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/100-natural-badge.svg");
        echo "\" alt=\"Daikin\">
                </div>
                <div class=\"carousel-text\">
                  <h3>Наша продукция:</h3>
                  <p>Наша фасоль славится во всем мире. Наша компания с 2008 года экспортирует фасоль в страны ближнего и дальнего зарубежья.</p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"carousel-item\">
              <div class=\"carousel-wrap\">
                <div class=\"car-img-wrap\">
                  <img class=\"responsive-img\" src=\"";
        // line 271
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg-car.png");
        echo "\" alt=\"bg-carousel\">
                  <img class=\"responsive-img img-svg\" src=\"";
        // line 272
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/24-hours-phone-service.svg");
        echo "\" alt=\"Mitsubishi Electric\">
                </div>
                <div class=\"carousel-text\">
                  <h3>Свяжитесь с нами.</h3>
                  <p>Все заинтересованные компании приглашаются к сотрудничеству! Мы всегда открыты к партнерству и сотрудничеству.</p>
                </div>
              </div>
            </div>
          </div>

         

   
    </div>

  </div>

</section>

<div class=\"blog-company\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2>Новости компании</h2>
      </div>
    </div>
    <div class=\"row\">
      ";
        // line 299
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 299);
        // line 300
        echo "

    ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 303
            echo "     <div class=\"col-md-4\">
   <div class=\"thumbnail\"> 
     ";
            // line 305
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 305), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 306
                echo "                 <img alt=\"100%x200\" style=\"height: 200px; width: 100%; display: block;\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 306), "html", null, true);
                echo "\" data-holder-rendered=\"true\"> 
     
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            echo "  <div class=\"caption\"> 
       <h3><a href=\"";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 310), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 310), "html", null, true);
            echo "</a></h3> 
       <p class=\"desc\">";
            // line 311
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 311);
            echo "</p> 
       <p>
         <a href=\"";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 313), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Продолжить ...</a> 
        </p> 
      </div> 
    </div> 
  </div>
      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 320
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, false, 320), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "



 
</div>
  </div>
</div>

<div id=\"contact\" class=\"text-center\">
  <div class=\"container\">
    <div class=\"section-title text-center\">
      <h2>Наши контакты</h2>
      <p>____________</p>
      <p>Отправьте нам заявку и мы перезвоним вам в течение 20 минут.</p>
    </div>
    <div class=\"col-md-10 col-md-offset-1 contact-info\">
      <div class=\"col-md-4\">
        <h3>Адрес</h3>
        <hr>
        <div class=\"contact-item\">
          <p>г.Талас, Кыргызстан</p>
          <p>ул.Ленина, 287 </p>
        </div>
      </div>
      <div class=\"col-md-4\">
        <h3>Часы работы</h3>
        <hr>
        <div class=\"contact-item\">
          <p>08:00 - 22:00(по кыргызскому времени)</p>
        </div>
      </div>
      <div class=\"col-md-4\">
        <h3>Контакты</h3>
        <hr>
        <div class=\"contact-item\">
          <p>Телефон: +996 555201766</p>
          <p>               +996 779603314</p>
          <p>Email: akyl_talas@mail.ru</p>
        </div>
      </div>
    </div>
    <div class=\"col-md-8 col-md-offset-2\">
      <h3>Заполнить заявку</h3>
        ";
        // line 366
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 367
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/olympos/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 367,  530 => 366,  484 => 322,  475 => 320,  463 => 313,  458 => 311,  452 => 310,  449 => 309,  439 => 306,  435 => 305,  431 => 303,  426 => 302,  422 => 300,  420 => 299,  390 => 272,  386 => 271,  370 => 258,  366 => 257,  350 => 244,  346 => 243,  284 => 183,  276 => 180,  267 => 176,  258 => 172,  254 => 170,  251 => 169,  242 => 165,  233 => 161,  229 => 159,  226 => 158,  224 => 157,  220 => 156,  214 => 152,  212 => 151,  210 => 150,  208 => 149,  206 => 148,  204 => 147,  202 => 146,  169 => 116,  157 => 107,  144 => 97,  83 => 39,  73 => 32,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">
  <div class=\"intro\" style=\"background: url({{ 'assets/images/intro-bg1.jpg' | theme }}) top center no-repeat; background-size: cover;\">
    <div class=\"overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 intro-text\">
            <h1>Фасоль из Таласа</h1>
            <p>Продаём органическую фасоль из Кыргызстана от производителя.<br><br>
              - НЕ СОДЕРЖИТ ГМО<br>
              - БИО ПРОДУКТ</p>
               <a href=\"#callback\" data-form=\"Получить полный прайс: Верхняя\" class=\"btn btn-custom btn-lg page-scroll open-popup-link\">Получить полный прайс</a>
            </div>
      </div>
    </div>
  </div>


</header>

<div id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12 col-md-6\">
        <div class=\"about-text\">
          <h2>Добро пожаловать в <span>TalasBean</span></h2>
          <hr>
          <p>Мы занимаемся экспортом фасоли уже 25 лет. Мы не только продаем фасоль, но и выращиваем её сами.</p>
          <p>Наша работа основыватся на 4-х принципах: принцип здоровья, принцип экологии, принцип справедливости и принцип работы.</p>
          <a href=\"#services\" class=\"btn btn-custom btn-lg page-scroll\">Показать наши услуги</a> </div>
      </div>
      <div class=\"col-xs-12 col-md-3\">
        <div class=\"about-media\"> <img src=\"{{ 'assets/images/about-1.jpg' | theme }}\" alt=\" \"> </div>
        <div class=\"about-desc\">
          <h3>Процесс посадки фасоли</h3>
          <p>Раньше фасоль сажали именно таким образом, но благо сейчас есть спеальные оборудования.</p>
        </div>
      </div>
      <div class=\"col-xs-12 col-md-3\">
        <div class=\"about-media\"> <img src=\"{{ 'assets/images/about-2.jpg' | theme }}\" alt=\" \"> </div>
        <div class=\"about-desc\">
          <h3>Процесс прорастания </h3>
          <p>Фасоль прорастает в течении 3 - 4 месяцев до такого состояния.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<section class=\"s-wide s-dark s-adv\">

  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-md-3 col-sm-6\">
        <div class=\"s-adv-item\">
          <h3><span data-count=\"25\"></span> лет на рынке</h3>
          <p>25 лет успешной работы на рынке </p>
        </div>
      </div>

      <div class=\"col-md-3 col-sm-6\">
        <div class=\"s-adv-item\">
          <h3><span data-count=\"500000\"></span> тон</h3>
          <p>Более 500000 тон экспорта</p>
        </div>
      </div>

      <div class=\"col-md-3 col-sm-6\">
        <div class=\"s-adv-item\">
          <h3><span data-count=\"120\"></span> партнеров</h3>
          <p>Более 120 партнеров</p>
        </div>
      </div>

      <div class=\"col-md-3 col-sm-6\">
        <div class=\"s-adv-item\">
          <h3><span data-count=\"1\"></span> место</h3>
          <p>№ 1 по экспорту фасоли</p>
        </div>
      </div>

    </div>
  </div>

</section>

<div id=\"services\">
  <div class=\"container\">
    <div class=\"col-md-10 col-md-offset-1 section-title text-center\">
      <h2>Основные направления услуг</h2>
      <hr>
      <p>Все этапы услуг проходят с колоссальной точностью.</p>
    </div>
    <div class=\"row\">
      <div class=\"col-md-4 text-center\">
        <div class=\"services-item\">
           <div class=\"service-media\"> <img src=\"{{ 'assets/images/services/1.svg' | theme }}\" alt=\" \" class=\"img-responsive img-svg\"> </div>
        <div class=\"service-desc\">
          <h3>Выращивание высококачественной фасоли</h3>
          <p>Выращивание высококачественной фасоли и экспорт готовой продукции в другие страны является основным и главным направлением компании Talasbean. Наша компания выращивает Фасоль уже более 20 лет.</p>
        </div>
        </div>
       
      </div>
      <div class=\"col-md-4 text-center\">
         <div class=\"services-item\">
        <div class=\"service-media\"> <img src=\"{{ 'assets/images/services/2.svg' | theme }}\" alt=\" \" class=\"img-responsive img-svg\"> </div>
        <div class=\"service-desc\">
          <h3>Очистка, сортировка и калибровка</h3>
          <p>Основная задача наших специалистов это предоставления натуральной и качественной фасоли для потребителей.</p>
        </div>
        </div>
      </div>
      <div class=\"col-md-4 text-center\">
        <div class=\"services-item\">
        <div class=\"service-media\"> <img src=\"{{ 'assets/images/services/3.svg' | theme }}\" alt=\" \" class=\"img-responsive img-svg\"> </div>
        <div class=\"service-desc\">
          <h3>Экспорт готовой продукции</h3>
          <p>СКХ «Берен» является производителем и экспортером фасоли. С 2008 года компания экспортирует фасоль в страны ближнего и дальнего зарубежья.</p>
        </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div id=\"portfolio\">
  <div class=\"container\">
    <div class=\"section-title text-center center\">
      <h2>Сорта фасоли</h2>
      <hr>
      <p>Все предлагаемые нами сорта фасоли и процесс работы.</p>
    </div>
    <div class=\"categories\">
      <ul class=\"cat\">
        <li>
          <ol class=\"type\">
            <li><a href=\"#\" data-filter=\"*\" class=\"active\">Всё вместе</a></li>
            <li><a href=\"#\" data-filter=\".lawn\">Сорта фасоли</a></li>
            <li><a href=\"#\" data-filter=\".garden\">Процесс работы</a></li>
          </ol>
        </li>
      </ul>
      <div class=\"clearfix\"></div>
    </div>
    {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<div class=\"row\">
      <div class=\"portfolio-items\">

    {% for record in records %}
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% if record.type == 0 %}
               <div class=\"col-sm-6 col-md-4 lawn\">
                  <div class=\"portfolio-item\">
                    <div class=\"hover-bg\"> <a href=\"{{record.beanimage.path}}\" title=\"{{record.title}}\" data-lightbox-gallery=\"gallery1\">
                      <div class=\"hover-text\">
                        <h4>Сорта фасоли</h4>
                      </div>
                      <img src=\"{{record.beanimage.path}}\" class=\"img-responsive\" alt=\"{{record.title}}\"> </a> </div>
                  </div>
                </div>
            {% endif %}
            {% if record.type == 1 %}
               <div class=\"col-sm-6 col-md-4 garden\">
                  <div class=\"portfolio-item\">
                    <div class=\"hover-bg\"> <a href=\"{{record.beanimage.path}}\" title=\"{{record.title}}\" data-lightbox-gallery=\"gallery1\">
                      <div class=\"hover-text\">
                        <h4>Сорта фасоли</h4>
                      </div>
                      <img src=\"{{record.beanimage.path}}\" class=\"img-responsive\" alt=\"{{record.title}}\"> </a> </div>
                  </div>
                </div>
            {% endif %}
           
        
    {% endfor %}

</div>
</div>

   
  </div>
</div>
<div id=\"testimonials\" class=\"text-center\">
  <div class=\"overlay\">
    <div class=\"container\">
      <div class=\"section-title\">
        <h2>Факты о фасоли: </h2>
        <hr>
      </div>
      <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
          <div id=\"testimonial\" class=\"owl-carousel owl-theme\">
            <div class=\"item\">
              <p>Фасоль — рекордсмен среди растений по количеству легко усваиваемого белка. Также в ста граммах фасоли содержится примерно половина дневной нормы клетчатки, необходимой человеку. Но этим ее полезные свойства не исчерпываются. Большое количество серы, которым может похвастаться фасоль, поможет справиться с кишечными инфекциями (и в целом повысит иммунитет), а также с кожными заболеваниями, болезнями бронхов и ревматизмом. Богата фасоль и железом, без которого невозможно образование эритроцитов.</p>
            </div>
            <div class=\"item\">
              <p>Фасоль известна людям очень давно, как минимум пять тысячелетий. В китайских летописях, датированных 3000 г до н.э. уже есть упоминания о ней. По описанию древняя фасоль напоминает современный сорт маш.</p>
            </div>
            <div class=\"item\">
              <p>Всего сортов фасоли более 200. У нас распространены всего 4:<br>
                  1.красная фасоль - укрепляет иммунитет, положительно действует на пищеварительный тракт, улучшает состояние кожи;<br>
                  2.белая фасоль - укрепляет кости и зубы, так как богата кальцием и железом;<br>
                  3.фиолетовая фасоль (грузинская) - меняет цвет при варке, является источником витаминов;<br>
                  4.жёлтая фасоль - можно есть сырой, варёной и жареной, хороший источник витаминов и минералов.</p>
            </div>
            <div class=\"item\">
              <p>Фасоль питательна и хорошо хранится, поэтому она часто присутствует в рационе военнослужащих. Особенно славился любовью к фасоли Наполеон Бонапарт. Он считал, что фасоль придаёт силы мышцам и мыслей головному мозгу.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class=\"s-wide s-equipment\">


  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-md-12\">
        <h3>Ваше здоровье превыше всего</h3>
        <h3> Нашa Фасоль не содержит ГМО</h3>
      </div>
     

    </div>
    <div class=\"row\">
     
        
          <div class=\"col-md-4\">
             <div class=\"carousel-item\">
              <div class=\"carousel-wrap\">
                <div class=\"car-img-wrap\">
                  <img class=\"responsive-img\" src=\"{{ 'assets/images/bg-car.png' | theme }}\" alt=\"bg-carousel\">
                  <img class=\"responsive-img img-svg\" src=\"{{ 'assets/images/partners/clock-forward.svg' | theme }}\" alt=\"Korf\">
                </div>
                <div class=\"carousel-text\">
                  <h3>Наша миссия:</h3>
                  <p>На первое место мы ставим здоровье наших потребителей и выращиваем органически чистую фасоль. Всегда следим за качеством фасоли!</p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
              <div class=\"carousel-item\">
              <div class=\"carousel-wrap\">
                <div class=\"car-img-wrap\">
                  <img class=\"responsive-img\" src=\"{{ 'assets/images/bg-car.png' | theme }}\" alt=\"bg-carousel\">
                  <img class=\"responsive-img img-svg\" src=\"{{ 'assets/images/partners/100-natural-badge.svg' | theme }}\" alt=\"Daikin\">
                </div>
                <div class=\"carousel-text\">
                  <h3>Наша продукция:</h3>
                  <p>Наша фасоль славится во всем мире. Наша компания с 2008 года экспортирует фасоль в страны ближнего и дальнего зарубежья.</p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"carousel-item\">
              <div class=\"carousel-wrap\">
                <div class=\"car-img-wrap\">
                  <img class=\"responsive-img\" src=\"{{ 'assets/images/bg-car.png' | theme }}\" alt=\"bg-carousel\">
                  <img class=\"responsive-img img-svg\" src=\"{{ 'assets/images/partners/24-hours-phone-service.svg' | theme }}\" alt=\"Mitsubishi Electric\">
                </div>
                <div class=\"carousel-text\">
                  <h3>Свяжитесь с нами.</h3>
                  <p>Все заинтересованные компании приглашаются к сотрудничеству! Мы всегда открыты к партнерству и сотрудничеству.</p>
                </div>
              </div>
            </div>
          </div>

         

   
    </div>

  </div>

</section>

<div class=\"blog-company\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2>Новости компании</h2>
      </div>
    </div>
    <div class=\"row\">
      {% set posts = blogPosts.posts %}


    {% for post in posts %}
     <div class=\"col-md-4\">
   <div class=\"thumbnail\"> 
     {% for image in post.featured_images|slice(0,1) %}
                 <img alt=\"100%x200\" style=\"height: 200px; width: 100%; display: block;\" src=\"{{image.path}}\" data-holder-rendered=\"true\"> 
     
            {% endfor %}
  <div class=\"caption\"> 
       <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3> 
       <p class=\"desc\">{{ post.summary|raw }}</p> 
       <p>
         <a href=\"{{ post.url }}\" class=\"btn btn-primary\" role=\"button\">Продолжить ...</a> 
        </p> 
      </div> 
    </div> 
  </div>
      
    {% else %}
        <li class=\"no-data\">{{ blogPosts.noPostsMessage }}</li>
    {% endfor %}




 
</div>
  </div>
</div>

<div id=\"contact\" class=\"text-center\">
  <div class=\"container\">
    <div class=\"section-title text-center\">
      <h2>Наши контакты</h2>
      <p>____________</p>
      <p>Отправьте нам заявку и мы перезвоним вам в течение 20 минут.</p>
    </div>
    <div class=\"col-md-10 col-md-offset-1 contact-info\">
      <div class=\"col-md-4\">
        <h3>Адрес</h3>
        <hr>
        <div class=\"contact-item\">
          <p>г.Талас, Кыргызстан</p>
          <p>ул.Ленина, 287 </p>
        </div>
      </div>
      <div class=\"col-md-4\">
        <h3>Часы работы</h3>
        <hr>
        <div class=\"contact-item\">
          <p>08:00 - 22:00(по кыргызскому времени)</p>
        </div>
      </div>
      <div class=\"col-md-4\">
        <h3>Контакты</h3>
        <hr>
        <div class=\"contact-item\">
          <p>Телефон: +996 555201766</p>
          <p>               +996 779603314</p>
          <p>Email: akyl_talas@mail.ru</p>
        </div>
      </div>
    </div>
    <div class=\"col-md-8 col-md-offset-2\">
      <h3>Заполнить заявку</h3>
        {% component 'contactform' %}
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\octobercms/themes/olympos/pages/home.htm", "");
    }
}
