<?php

namespace MailPoetDoctrineProxies\__CG__\MailPoet\Entities;

if (!defined('ABSPATH')) exit;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class NewsletterEntity extends \MailPoet\Entities\NewsletterEntity implements \MailPoetVendor\Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
        return parent::__get($name);
    }





    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'hash', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'subject', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'type', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'senderAddress', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'senderName', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'status', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'replyToAddress', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'replyToName', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'preheader', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'body', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'sentAt', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'unsubscribeToken', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'gaCampaign', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'parent', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'children', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'newsletterSegments', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'options', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'queues', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'id', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'updatedAt', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'deletedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'hash', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'subject', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'type', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'senderAddress', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'senderName', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'status', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'replyToAddress', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'replyToName', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'preheader', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'body', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'sentAt', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'unsubscribeToken', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'gaCampaign', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'parent', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'children', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'newsletterSegments', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'options', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'queues', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'id', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'updatedAt', '' . "\0" . 'MailPoet\\Entities\\NewsletterEntity' . "\0" . 'deletedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (NewsletterEntity $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getHash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHash', []);

        return parent::getHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setHash($hash)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHash', [$hash]);

        return parent::setHash($hash);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubject', []);

        return parent::getSubject();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubject($subject)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubject', [$subject]);

        return parent::setSubject($subject);
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
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getSenderAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSenderAddress', []);

        return parent::getSenderAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setSenderAddress($senderAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSenderAddress', [$senderAddress]);

        return parent::setSenderAddress($senderAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getSenderName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSenderName', []);

        return parent::getSenderName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSenderName($senderName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSenderName', [$senderName]);

        return parent::setSenderName($senderName);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getReplyToAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReplyToAddress', []);

        return parent::getReplyToAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setReplyToAddress($replyToAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReplyToAddress', [$replyToAddress]);

        return parent::setReplyToAddress($replyToAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getReplyToName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReplyToName', []);

        return parent::getReplyToName();
    }

    /**
     * {@inheritDoc}
     */
    public function setReplyToName($replyToName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReplyToName', [$replyToName]);

        return parent::setReplyToName($replyToName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreheader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreheader', []);

        return parent::getPreheader();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreheader($preheader)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreheader', [$preheader]);

        return parent::setPreheader($preheader);
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody($body)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', [$body]);

        return parent::setBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function getSentAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSentAt', []);

        return parent::getSentAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSentAt($sentAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSentAt', [$sentAt]);

        return parent::setSentAt($sentAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnsubscribeToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnsubscribeToken', []);

        return parent::getUnsubscribeToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getGaCampaign()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGaCampaign', []);

        return parent::getGaCampaign();
    }

    /**
     * {@inheritDoc}
     */
    public function setGaCampaign($gaCampaign)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGaCampaign', [$gaCampaign]);

        return parent::setGaCampaign($gaCampaign);
    }

    /**
     * {@inheritDoc}
     */
    public function setUnsubscribeToken($unsubscribeToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnsubscribeToken', [$unsubscribeToken]);

        return parent::setUnsubscribeToken($unsubscribeToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent($parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsletterSegments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletterSegments', []);

        return parent::getNewsletterSegments();
    }

    /**
     * {@inheritDoc}
     */
    public function getSegmentIds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegmentIds', []);

        return parent::getSegmentIds();
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', []);

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function getOption(string $name): ?\MailPoet\Entities\NewsletterOptionEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOption', [$name]);

        return parent::getOption($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionValue(string $name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptionValue', [$name]);

        return parent::getOptionValue($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getQueues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQueues', []);

        return parent::getQueues();
    }

    /**
     * {@inheritDoc}
     */
    public function getLatestQueue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatestQueue', []);

        return parent::getLatestQueue();
    }

    /**
     * {@inheritDoc}
     */
    public function getGlobalStyle(string $category, string $style): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGlobalStyle', [$category, $style]);

        return parent::getGlobalStyle($category, $style);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcessedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessedAt', []);

        return parent::getProcessedAt();
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

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt($deletedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

}
