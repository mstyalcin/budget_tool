<?php

class EntityManager_f360865 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5a96baed70140920959524 = null;
    private $initializer5a96baed70146837171727 = null;
    private static $publicProperties5a96baed7012a373312717 = array(
        
    );
    public function getConnection()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getConnection', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getMetadataFactory', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getExpressionBuilder', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'beginTransaction', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getCache', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'transactional', array('func' => $func), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->transactional($func);
    }
    public function commit()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'commit', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->commit();
    }
    public function rollback()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'rollback', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'createQuery', array('dql' => $dql), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'createQueryBuilder', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'flush', array('entity' => $entity), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'clear', array('entityName' => $entityName), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->clear($entityName);
    }
    public function close()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'close', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->close();
    }
    public function persist($entity)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'persist', array('entity' => $entity), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'remove', array('entity' => $entity), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'refresh', array('entity' => $entity), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'detach', array('entity' => $entity), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'merge', array('entity' => $entity), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'contains', array('entity' => $entity), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getEventManager', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getConfiguration', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'isOpen', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getUnitOfWork', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getProxyFactory', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'getFilters', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'isFiltersStateClean', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'hasFilters', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return $this->valueHolder5a96baed70140920959524->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5a96baed70146837171727 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5a96baed70140920959524) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a96baed70140920959524 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5a96baed70140920959524->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, '__get', ['name' => $name], $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        if (isset(self::$publicProperties5a96baed7012a373312717[$name])) {
            return $this->valueHolder5a96baed70140920959524->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a96baed70140920959524;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder5a96baed70140920959524;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a96baed70140920959524;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5a96baed70140920959524;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, '__isset', array('name' => $name), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a96baed70140920959524;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a96baed70140920959524;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, '__unset', array('name' => $name), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a96baed70140920959524;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a96baed70140920959524;
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
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, '__clone', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        $this->valueHolder5a96baed70140920959524 = clone $this->valueHolder5a96baed70140920959524;
    }
    public function __sleep()
    {
        $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, '__sleep', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
        return array('valueHolder5a96baed70140920959524');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a96baed70146837171727 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5a96baed70146837171727;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5a96baed70146837171727 && ($this->initializer5a96baed70146837171727->__invoke($valueHolder5a96baed70140920959524, $this, 'initializeProxy', array(), $this->initializer5a96baed70146837171727) || 1) && $this->valueHolder5a96baed70140920959524 = $valueHolder5a96baed70140920959524;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a96baed70140920959524;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a96baed70140920959524;
    }
}
