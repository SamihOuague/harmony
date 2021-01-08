<?php

namespace ContainerQRayaiK;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7b9fa = null;
    private $initializer6c184 = null;
    private static $publicProperties951a4 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getConnection', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getMetadataFactory', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getExpressionBuilder', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'beginTransaction', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getCache', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'transactional', array('func' => $func), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->transactional($func);
    }
    public function commit()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'commit', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->commit();
    }
    public function rollback()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'rollback', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getClassMetadata', array('className' => $className), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'createQuery', array('dql' => $dql), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'createNamedQuery', array('name' => $name), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'createQueryBuilder', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'flush', array('entity' => $entity), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'clear', array('entityName' => $entityName), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->clear($entityName);
    }
    public function close()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'close', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->close();
    }
    public function persist($entity)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'persist', array('entity' => $entity), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'remove', array('entity' => $entity), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'refresh', array('entity' => $entity), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'detach', array('entity' => $entity), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'merge', array('entity' => $entity), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'contains', array('entity' => $entity), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getEventManager', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getConfiguration', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'isOpen', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getUnitOfWork', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getProxyFactory', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'initializeObject', array('obj' => $obj), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'getFilters', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'isFiltersStateClean', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'hasFilters', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return $this->valueHolder7b9fa->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6c184 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder7b9fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7b9fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7b9fa->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, '__get', ['name' => $name], $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        if (isset(self::$publicProperties951a4[$name])) {
            return $this->valueHolder7b9fa->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b9fa;
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
        $targetObject = $this->valueHolder7b9fa;
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
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b9fa;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7b9fa;
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
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, '__isset', array('name' => $name), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b9fa;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7b9fa;
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
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, '__unset', array('name' => $name), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b9fa;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7b9fa;
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
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, '__clone', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        $this->valueHolder7b9fa = clone $this->valueHolder7b9fa;
    }
    public function __sleep()
    {
        $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, '__sleep', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
        return array('valueHolder7b9fa');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6c184 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6c184;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6c184 && ($this->initializer6c184->__invoke($valueHolder7b9fa, $this, 'initializeProxy', array(), $this->initializer6c184) || 1) && $this->valueHolder7b9fa = $valueHolder7b9fa;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7b9fa;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7b9fa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
