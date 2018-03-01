<?php

class EntityManager_d09d739 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a985c421da21264147793 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a985c421da27403979490 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a985c421da07697362302 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getConnection', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataFactory()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getMetadataFactory', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getExpressionBuilder', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'beginTransaction', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->beginTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getCache', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'transactional', array('func' => $func), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'commit', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'rollback', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->rollback();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata($className)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'createQuery', array('dql' => $dql), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'createQueryBuilder', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function flush($entity = null)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'flush', array('entity' => $entity), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->flush($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getPartialReference($entityName, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function clear($entityName = null)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'clear', array('entityName' => $entityName), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'close', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->close();
    }

    /**
     * {@inheritDoc}
     */
    public function persist($entity)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'persist', array('entity' => $entity), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($entity)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'remove', array('entity' => $entity), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->remove($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function refresh($entity)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'refresh', array('entity' => $entity), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->refresh($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function detach($entity)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'detach', array('entity' => $entity), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function merge($entity)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'merge', array('entity' => $entity), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function copy($entity, $deep = false)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->copy($entity, $deep);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository($entityName)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getRepository($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($entity)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'contains', array('entity' => $entity), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getEventManager', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getConfiguration', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'isOpen', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getUnitOfWork', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getUnitOfWork();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->newHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getProxyFactory', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'getFilters', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'isFiltersStateClean', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'hasFilters', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return $this->valueHolder5a985c421da21264147793->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5a985c421da27403979490 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a985c421da21264147793) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a985c421da21264147793 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a985c421da21264147793->__construct($conn, $config, $eventManager);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, '__get', ['name' => $name], $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        if (isset(self::$publicProperties5a985c421da07697362302[$name])) {
            return $this->valueHolder5a985c421da21264147793->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a985c421da21264147793;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a985c421da21264147793;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a985c421da21264147793;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a985c421da21264147793;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, '__isset', array('name' => $name), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a985c421da21264147793;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a985c421da21264147793;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, '__unset', array('name' => $name), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a985c421da21264147793;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a985c421da21264147793;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, '__clone', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        $this->valueHolder5a985c421da21264147793 = clone $this->valueHolder5a985c421da21264147793;
    }

    public function __sleep()
    {
        $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, '__sleep', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;

        return array('valueHolder5a985c421da21264147793');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a985c421da27403979490 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a985c421da27403979490;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a985c421da27403979490 && ($this->initializer5a985c421da27403979490->__invoke($valueHolder5a985c421da21264147793, $this, 'initializeProxy', array(), $this->initializer5a985c421da27403979490) || 1) && $this->valueHolder5a985c421da21264147793 = $valueHolder5a985c421da21264147793;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a985c421da21264147793;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a985c421da21264147793;
    }


}
