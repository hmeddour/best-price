<?php

/* default/index.html.twig */
class __TwigTemplate_18af54fe1ac4f0c7be6149510f3c9c64afa17077a18524d2fcd19f2fbcebde2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "{
\"title\": \"The Basics - Networking\",
\"description\": \"Your app fetched this from a remote endpoint!\",
\"movies\": [
{ \"title\": \"yanis\", \"releaseYear\": \"1977\"},
{ \"title\": \"hicham\", \"releaseYear\": \"1985\"},
{ \"title\": \"mabrouk\", \"releaseYear\": \"1999\"},
{ \"title\": \"mabrouk\", \"releaseYear\": \"2010\"},
{ \"title\": \"mabrouk\", \"releaseYear\": \"2014\"}
]
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\"title\": \"The Basics - Networking\",
\"description\": \"Your app fetched this from a remote endpoint!\",
\"movies\": [
{ \"title\": \"yanis\", \"releaseYear\": \"1977\"},
{ \"title\": \"hicham\", \"releaseYear\": \"1985\"},
{ \"title\": \"mabrouk\", \"releaseYear\": \"1999\"},
{ \"title\": \"mabrouk\", \"releaseYear\": \"2010\"},
{ \"title\": \"mabrouk\", \"releaseYear\": \"2014\"}
]
}
", "default/index.html.twig", "/home/hichammeddour/Bureau/ComPrix_Web/app/Resources/views/default/index.html.twig");
    }
}
