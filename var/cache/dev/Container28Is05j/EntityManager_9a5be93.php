<?php

namespace Container28Is05j;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6546e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfc3e0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc1c1a = [
        
    ];

    public function getConnection()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getConnection', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getMetadataFactory', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getExpressionBuilder', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'beginTransaction', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getCache', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'transactional', array('func' => $func), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->transactional($func);
    }

    public function commit()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'commit', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->commit();
    }

    public function rollback()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'rollback', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getClassMetadata', array('className' => $className), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'createQuery', array('dql' => $dql), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'createNamedQuery', array('name' => $name), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'createQueryBuilder', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'flush', array('entity' => $entity), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'clear', array('entityName' => $entityName), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->clear($entityName);
    }

    public function close()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'close', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->close();
    }

    public function persist($entity)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'persist', array('entity' => $entity), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'remove', array('entity' => $entity), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'refresh', array('entity' => $entity), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'detach', array('entity' => $entity), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'merge', array('entity' => $entity), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'contains', array('entity' => $entity), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getEventManager', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getConfiguration', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'isOpen', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getUnitOfWork', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getProxyFactory', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'initializeObject', array('obj' => $obj), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'getFilters', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'isFiltersStateClean', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'hasFilters', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return $this->valueHolder6546e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfc3e0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6546e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6546e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6546e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, '__get', ['name' => $name], $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        if (isset(self::$publicPropertiesc1c1a[$name])) {
            return $this->valueHolder6546e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6546e;

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

        $targetObject = $this->valueHolder6546e;
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
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6546e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6546e;
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
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, '__isset', array('name' => $name), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6546e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6546e;
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
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, '__unset', array('name' => $name), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6546e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6546e;
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
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, '__clone', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        $this->valueHolder6546e = clone $this->valueHolder6546e;
    }

    public function __sleep()
    {
        $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, '__sleep', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;

        return array('valueHolder6546e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfc3e0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfc3e0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfc3e0 && ($this->initializerfc3e0->__invoke($valueHolder6546e, $this, 'initializeProxy', array(), $this->initializerfc3e0) || 1) && $this->valueHolder6546e = $valueHolder6546e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6546e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6546e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
