<?php

/* project/view.html.twig */
class __TwigTemplate_d1a8efdcaf4947e427121c099bb24548591a884924b3548f9cfa5417a569f7a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/view.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'pageactuelle' => [$this, 'block_pageactuelle'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
\t\t";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/morris/morris.css"), "html", null, true);
        echo "\" />

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<h2>Votre projet : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 14, $this->source); })()), "nom", []), "html", null, true);
        echo "</h2>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_pageactuelle($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageactuelle"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 15, $this->source); })()), "nom", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 22, $this->source); })()), "nom", []), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t</header>
                                    <br>
\t\t\t\t\t\t\t\t\t<h4> Vous avez rempli ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " formulaires sur 11 pour le gros oeuvre de votre chantier. </h4>
\t\t<div class=\"row\">
\t\t\t";
        // line 27
        if (((((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 27, $this->source); })()) / 11) * 100) < 25)) {
            // line 28
            echo "\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 29
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 29, $this->source); })()) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 29, $this->source); })()) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\tEn cours
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        } elseif (((((        // line 33
(isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 33, $this->source); })()) / 11) * 100) > 25) && ((((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 33, $this->source); })()) / 11) * 100) < 75))) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 35
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 35, $this->source); })()) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 35, $this->source); })()) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\tEn cours
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 41
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 41, $this->source); })()) / 11) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (((isset($context["nbform"]) || array_key_exists("nbform", $context) ? $context["nbform"] : (function () { throw new Twig_Error_Runtime('Variable "nbform" does not exist.', 41, $this->source); })()) / 11) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t\t\t\t\tEn cours
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t";
        }
        // line 46
        echo "\t\t\t<br> <br>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-1\">
\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 51
        if (((isset($context["etudeSol"]) || array_key_exists("etudeSol", $context) ? $context["etudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "etudeSol" does not exist.', 51, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t <h2 class=\"panel-title\">Etude du sol </h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 55
        if (((isset($context["etudeSol"]) || array_key_exists("etudeSol", $context) ? $context["etudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "etudeSol" does not exist.', 55, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 56
        if (((isset($context["etudeSol"]) || array_key_exists("etudeSol", $context) ? $context["etudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "etudeSol" does not exist.', 56, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas rencore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etude-sol", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 58, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType du sol (";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudeSol"]) || array_key_exists("etudeSol", $context) ? $context["etudeSol"] : (function () { throw new Twig_Error_Runtime('Variable "etudeSol" does not exist.', 62, $this->source); })()), "typeSol", []), "html", null, true);
            echo ")
\t\t\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Préparation du terrain et l’accès</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'excavation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La toiture/tuiles</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-2\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les fondations</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-success\" id=\"panel-5\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le soubassement</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-warning\" id=\"panel-6\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">VRD (voirie et réseaux divers)</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les menuiseries extérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-3\">
\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le Plancher</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-dark\" id=\"panel-8\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'élévation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-danger\" id=\"panel-9\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" ";
        // line 181
        if (((isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 181, $this->source); })()) == null)) {
            echo " class=\"fa fa-caret-down\" ";
        } else {
            echo " class=\"fa fa-caret-up\" ";
        }
        echo "></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La charpente/couverture</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" ";
        // line 186
        if (((isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 186, $this->source); })()) != null)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 187
        if (((isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 187, $this->source); })()) == null)) {
            echo " 
\t\t\t\t\t\t\t\t\tVous n'avez pas rencore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charpente", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 189, $this->source); })()), "id", [])]), "html", null, true);
            echo "\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 191
            echo "\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de votre charpente (";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 193, $this->source); })()), "typeCharpente", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tForme de votre charpente (";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 194, $this->source); })()), "formeCharpente", []), "html", null, true);
            echo ") <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés pour votre toiture (";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["charpente"]) || array_key_exists("charpente", $context) ? $context["charpente"] : (function () { throw new Twig_Error_Runtime('Variable "charpente" does not exist.', 195, $this->source); })()), "nbMC", []), "html", null, true);
            echo ")
\t\t\t\t\t\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"button\">Valider</button>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 216
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 217
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 217,  427 => 216,  400 => 197,  395 => 195,  391 => 194,  387 => 193,  383 => 191,  378 => 189,  373 => 187,  367 => 186,  355 => 181,  236 => 64,  231 => 62,  227 => 60,  222 => 58,  217 => 56,  211 => 55,  200 => 51,  193 => 46,  183 => 41,  180 => 40,  170 => 35,  167 => 34,  165 => 33,  156 => 29,  153 => 28,  151 => 27,  146 => 25,  140 => 22,  134 => 18,  125 => 17,  107 => 15,  87 => 14,  74 => 10,  70 => 9,  66 => 8,  60 => 5,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"/dashboard-layout.html.twig\" %}

\t\t{% block head %}

\t\t{{ parent() }}

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('resources/assets/vendor/morris/morris.css') }}\" />

\t\t{% endblock %}

\t\t\t\t{% block title %}<h2>Votre projet : {{projet.nom}}</h2>{% endblock %}
\t\t\t\t{% block pageactuelle %}{{projet.nom}}{% endblock %}

\t\t\t\t\t{% block body %}

\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">{{projet.nom}}</h2>
\t\t\t\t\t\t\t\t\t</header>
                                    <br>
\t\t\t\t\t\t\t\t\t<h4> Vous avez rempli {{nbform}} formulaires sur 11 pour le gros oeuvre de votre chantier. </h4>
\t\t<div class=\"row\">
\t\t\t{% if (nbform/11)*100 < 25 %}
\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"{{(nbform/11)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/11)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\tEn cours
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% elseif (nbform/11)*100 > 25 and (nbform/11)*100 < 75 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"{{(nbform/11)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/11)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\tEn cours
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-striped light active m-md\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"{{(nbform/11)*100}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{(nbform/11)*100}}%;\">
\t\t\t\t\t\t\t\t\t\t\tEn cours
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<br> <br>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-1\">
\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if etudeSol == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t <h2 class=\"panel-title\">Etude du sol </h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if etudeSol != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if etudeSol == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas rencore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('etude-sol', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType du sol ({{etudeSol.typeSol}})
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-secondary\" id=\"panel-2\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Préparation du terrain et l’accès</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-tertiary\" id=\"panel-3\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'excavation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"panel panel-primary\" id=\"panel-1\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La toiture/tuiles</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-2\">
\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les fondations</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-success\" id=\"panel-5\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le soubassement</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-warning\" id=\"panel-6\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">VRD (voirie et réseaux divers)</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"panel panel-quartenary\" id=\"panel-4\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Les menuiseries extérieures</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\" data-plugin-portlet id=\"portlet-3\">
\t\t\t\t\t\t\t<section class=\"panel panel-info\" id=\"panel-7\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Le Plancher</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-dark\" id=\"panel-8\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">L'élévation</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"panel panel-danger\" id=\"panel-9\" data-portlet-item>
\t\t\t\t\t\t\t\t<header class=\"panel-heading portlet-handler\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" {% if charpente == null %} class=\"fa fa-caret-down\" {% else %} class=\"fa fa-caret-up\" {% endif %}></a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">La charpente/couverture</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" {% if charpente != null %} style=\"display: none;\" {% endif %}>
\t\t\t\t\t\t\t\t\t{% if charpente == null %} 
\t\t\t\t\t\t\t\t\tVous n'avez pas rencore rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('charpente', {'id': projet.id}) }}\"> Cliquez ici pour le remplir.</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tVous avez déjà rempli ce formulaire. <br>
\t\t\t\t\t\t\t\t\tRécapitulatif : <br>
\t\t\t\t\t\t\t\t\tType de votre charpente ({{charpente.typeCharpente}}) <br>
\t\t\t\t\t\t\t\t\tForme de votre charpente ({{charpente.formeCharpente}}) <br>
\t\t\t\t\t\t\t\t\tNombre de mètres carrés pour votre toiture ({{charpente.nbMC}})
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"button\">Valider</button>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t{% endblock %}

\t\t{% block javascripts %}

\t\t{% endblock %}
", "project/view.html.twig", "/opt/lampp/htdocs/Symfony/templates/project/view.html.twig");
    }
}
