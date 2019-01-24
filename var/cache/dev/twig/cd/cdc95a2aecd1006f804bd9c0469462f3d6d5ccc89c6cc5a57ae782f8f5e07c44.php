<?php

/* index.html.twig */
class __TwigTemplate_9e2222f6d62841d153bd4db33c53a8aba574ccdcaaee3c2ab8b1c8a0e858fa10 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <header>
    ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "  </header>
    <body>
      ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Astronomie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    <div id=\"sidebar\">
        ";
        // line 13
        $this->loadTemplate("site/menus.html.twig", "index.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "      <div id=\"content\">
          <p>Créé en 1998 par un groupe de passionnés, c'est lors de l'éclipse totale de Soleil du 11 Aout, qu'il ouvrit réellement ses portes. Le Club d'Astronomie de Signy-L'Abbaye a pour but de promouvoir et de faire découvrir la culture scientifique dans les alentours de Signy-L'Abbaye ( Ardennes).
Aujourd'hui, en 2006, notre club compte une trentaine de membres et travaille en collaboration avec le Club Oméga Ardennes Astronomie situé à Rumigny. Depuis plusieurs années désormais, le club sort ses instruments lors des manifestations locales afin de faire découvrir les merveilles du ciel à tout le public.

Grande manifestation annuelle, La nuit des Etoiles, réunit à chaque fois une centaine de participants lorsque le temps le permet. Pour la Nuit des Etoiles 2003, le club d'Astronomie de Signy-L'Abbaye a décidé de s'associer à l'événement national en collaboration avec Ciel et Espace. L'augmentation de la communication due à cette collaboration a permis de réunir plus de 200 personnes en deux jours ! Avec des conditions d'observations tout à fait favorables, Mars et les étoiles filantes ont ravi le public !

Mais le club d'astronomie ne se résume pas à la Nuit des Etoiles, le premier vendredi du mois, les membres se réunissent afin d'observer, de discuter et aussi d'appréhender des phénomènes célestes tels que les phases des lunes, les saisons, les coordonnées... Toutes ces réunions se passent dans la joie et la bonne humeur, dans le local du club à la médiathèque ou à l'Observatoire de Lalobbe afin de profiter des 300 mm du télescope \"Maison\".

Vous voulez découvrir le ciel, comprendre les phénomènes célestes, observer pendant de longues heures Jupiter et les Anneaux de Saturne ou tout simplement jeter un coup d'oeil curieux dans l'oculaire d'un instrument, n'hésitez pas à nous rejoindre ! Nous vous accueillerons avec le plus grand des plaisirs ! Adultes comme enfants.

La cotisation annuelle s'élève à 6 Euros pour les Adultes et à 3 Euros pour les enfants.
Restez attentif dans les journaux locaux pour connaître le programme de nos animations ou contactez le Syndicat d'initiative de Signy-l'Abbaye.

Nous sommes à l'écoute de vos suggestions et remarques ! Un simple message fait toujours plaisir !
De la même manière, si vous apercevez un bug, une erreur, signalez-la !</p>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 19,  134 => 18,  123 => 14,  121 => 13,  118 => 12,  109 => 11,  96 => 7,  87 => 6,  69 => 5,  57 => 36,  55 => 18,  51 => 16,  49 => 11,  45 => 9,  43 => 6,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Astronomie{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('build/css/style.css')}}\">
        {% endblock %}
    </head>
    <header>
    {% block header %}
    <div id=\"sidebar\">
        {% include 'site/menus.html.twig' %}
    </div>
    {% endblock %}
  </header>
    <body>
      {% block body %}
      <div id=\"content\">
          <p>Créé en 1998 par un groupe de passionnés, c'est lors de l'éclipse totale de Soleil du 11 Aout, qu'il ouvrit réellement ses portes. Le Club d'Astronomie de Signy-L'Abbaye a pour but de promouvoir et de faire découvrir la culture scientifique dans les alentours de Signy-L'Abbaye ( Ardennes).
Aujourd'hui, en 2006, notre club compte une trentaine de membres et travaille en collaboration avec le Club Oméga Ardennes Astronomie situé à Rumigny. Depuis plusieurs années désormais, le club sort ses instruments lors des manifestations locales afin de faire découvrir les merveilles du ciel à tout le public.

Grande manifestation annuelle, La nuit des Etoiles, réunit à chaque fois une centaine de participants lorsque le temps le permet. Pour la Nuit des Etoiles 2003, le club d'Astronomie de Signy-L'Abbaye a décidé de s'associer à l'événement national en collaboration avec Ciel et Espace. L'augmentation de la communication due à cette collaboration a permis de réunir plus de 200 personnes en deux jours ! Avec des conditions d'observations tout à fait favorables, Mars et les étoiles filantes ont ravi le public !

Mais le club d'astronomie ne se résume pas à la Nuit des Etoiles, le premier vendredi du mois, les membres se réunissent afin d'observer, de discuter et aussi d'appréhender des phénomènes célestes tels que les phases des lunes, les saisons, les coordonnées... Toutes ces réunions se passent dans la joie et la bonne humeur, dans le local du club à la médiathèque ou à l'Observatoire de Lalobbe afin de profiter des 300 mm du télescope \"Maison\".

Vous voulez découvrir le ciel, comprendre les phénomènes célestes, observer pendant de longues heures Jupiter et les Anneaux de Saturne ou tout simplement jeter un coup d'oeil curieux dans l'oculaire d'un instrument, n'hésitez pas à nous rejoindre ! Nous vous accueillerons avec le plus grand des plaisirs ! Adultes comme enfants.

La cotisation annuelle s'élève à 6 Euros pour les Adultes et à 3 Euros pour les enfants.
Restez attentif dans les journaux locaux pour connaître le programme de nos animations ou contactez le Syndicat d'initiative de Signy-l'Abbaye.

Nous sommes à l'écoute de vos suggestions et remarques ! Un simple message fait toujours plaisir !
De la même manière, si vous apercevez un bug, une erreur, signalez-la !</p>
        </div>
        {% endblock %}
    </body>
</html>
", "index.html.twig", "/home/sebastien/Bureau/astrosigny/templates/index.html.twig");
    }
}
