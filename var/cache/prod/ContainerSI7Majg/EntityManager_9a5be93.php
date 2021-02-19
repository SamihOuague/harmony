<?php

namespace ContainerSI7Majg;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdce50 = null;
    private $initializera3457 = null;
    private static $publicProperties4d5ee = [
        
    ];
    public function getConnection()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getConnection', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getMetadataFactory', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getExpressionBuilder', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'beginTransaction', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getCache', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getCache();
    }
    public function transactional($func)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'transactional', array('func' => $func), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->transactional($func);
    }
    public function commit()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'commit', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->commit();
    }
    public function rollback()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'rollback', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getClassMetadata', array('className' => $className), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'createQuery', array('dql' => $dql), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'createNamedQuery', array('name' => $name), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'createQueryBuilder', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'flush', array('entity' => $entity), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'clear', array('entityName' => $entityName), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->clear($entityName);
    }
    public function close()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'close', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->close();
    }
    public function persist($entity)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'persist', array('entity' => $entity), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'remove', array('entity' => $entity), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'refresh', array('entity' => $entity), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'detach', array('entity' => $entity), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'merge', array('entity' => $entity), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'contains', array('entity' => $entity), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getEventManager', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getConfiguration', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'isOpen', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getUnitOfWork', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getProxyFactory', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'initializeObject', array('obj' => $obj), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'getFilters', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'isFiltersStateClean', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'hasFilters', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return $this->valueHolderdce50->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera3457 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderdce50) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdce50 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderdce50->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, '__get', ['name' => $name], $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        if (isset(self::$publicProperties4d5ee[$name])) {
            return $this->valueHolderdce50->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdce50;
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
        $targetObject = $this->valueHolderdce50;
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
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdce50;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdce50;
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
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, '__isset', array('name' => $name), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdce50;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdce50;
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
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, '__unset', array('name' => $name), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdce50;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdce50;
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
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, '__clone', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        $this->valueHolderdce50 = clone $this->valueHolderdce50;
    }
    public function __sleep()
    {
        $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, '__sleep', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
        return array('valueHolderdce50');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3457 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3457;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera3457 && ($this->initializera3457->__invoke($valueHolderdce50, $this, 'initializeProxy', array(), $this->initializera3457) || 1) && $this->valueHolderdce50 = $valueHolderdce50;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdce50;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdce50;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
