<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \AppBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'libelle', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'codebarres', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'marque', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'type', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'note', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'poids', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'couleur', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'taille', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'id'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'libelle', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'codebarres', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'marque', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'type', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'note', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'poids', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'couleur', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'taille', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'id'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', [$libelle]);

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', []);

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodebarres($codebarres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodebarres', [$codebarres]);

        return parent::setCodebarres($codebarres);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodebarres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodebarres', []);

        return parent::getCodebarres();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarque($marque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarque', [$marque]);

        return parent::setMarque($marque);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarque()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarque', []);

        return parent::getMarque();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoids($poids)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoids', [$poids]);

        return parent::setPoids($poids);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoids()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoids', []);

        return parent::getPoids();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouleur($couleur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouleur', [$couleur]);

        return parent::setCouleur($couleur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouleur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouleur', []);

        return parent::getCouleur();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaille($taille)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaille', [$taille]);

        return parent::setTaille($taille);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaille', []);

        return parent::getTaille();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

}
