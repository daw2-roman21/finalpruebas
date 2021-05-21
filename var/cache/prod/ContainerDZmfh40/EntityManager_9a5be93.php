<?php

namespace ContainerDZmfh40;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder75100 = null;
    private $initializer98378 = null;
    private static $publicPropertiesec3b5 = [
        
    ];
    public function getConnection()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getConnection', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getMetadataFactory', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getExpressionBuilder', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'beginTransaction', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getCache', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getCache();
    }
    public function transactional($func)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'transactional', array('func' => $func), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->transactional($func);
    }
    public function commit()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'commit', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->commit();
    }
    public function rollback()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'rollback', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getClassMetadata', array('className' => $className), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'createQuery', array('dql' => $dql), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'createNamedQuery', array('name' => $name), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'createQueryBuilder', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'flush', array('entity' => $entity), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'clear', array('entityName' => $entityName), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->clear($entityName);
    }
    public function close()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'close', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->close();
    }
    public function persist($entity)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'persist', array('entity' => $entity), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'remove', array('entity' => $entity), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'refresh', array('entity' => $entity), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'detach', array('entity' => $entity), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'merge', array('entity' => $entity), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getRepository', array('entityName' => $entityName), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'contains', array('entity' => $entity), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getEventManager', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getConfiguration', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'isOpen', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getUnitOfWork', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getProxyFactory', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'initializeObject', array('obj' => $obj), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'getFilters', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'isFiltersStateClean', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'hasFilters', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return $this->valueHolder75100->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer98378 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder75100) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder75100 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder75100->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, '__get', ['name' => $name], $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        if (isset(self::$publicPropertiesec3b5[$name])) {
            return $this->valueHolder75100->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75100;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder75100;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75100;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder75100;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, '__isset', array('name' => $name), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75100;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder75100;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, '__unset', array('name' => $name), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75100;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder75100;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, '__clone', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        $this->valueHolder75100 = clone $this->valueHolder75100;
    }
    public function __sleep()
    {
        $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, '__sleep', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
        return array('valueHolder75100');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer98378 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer98378;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer98378 && ($this->initializer98378->__invoke($valueHolder75100, $this, 'initializeProxy', array(), $this->initializer98378) || 1) && $this->valueHolder75100 = $valueHolder75100;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder75100;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder75100;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
