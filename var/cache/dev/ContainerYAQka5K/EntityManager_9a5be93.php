<?php

namespace ContainerYAQka5K;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1b05b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere532a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d2e4 = [
        
    ];

    public function getConnection()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getConnection', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getMetadataFactory', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getExpressionBuilder', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'beginTransaction', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getCache', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getCache();
    }

    public function transactional($func)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'transactional', array('func' => $func), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->transactional($func);
    }

    public function commit()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'commit', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->commit();
    }

    public function rollback()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'rollback', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getClassMetadata', array('className' => $className), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'createQuery', array('dql' => $dql), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'createNamedQuery', array('name' => $name), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'createQueryBuilder', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'flush', array('entity' => $entity), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'clear', array('entityName' => $entityName), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->clear($entityName);
    }

    public function close()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'close', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->close();
    }

    public function persist($entity)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'persist', array('entity' => $entity), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'remove', array('entity' => $entity), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'refresh', array('entity' => $entity), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'detach', array('entity' => $entity), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'merge', array('entity' => $entity), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getRepository', array('entityName' => $entityName), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'contains', array('entity' => $entity), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getEventManager', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getConfiguration', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'isOpen', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getUnitOfWork', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getProxyFactory', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'initializeObject', array('obj' => $obj), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'getFilters', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'isFiltersStateClean', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'hasFilters', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return $this->valueHolder1b05b->hasFilters();
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

        $instance->initializere532a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1b05b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1b05b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1b05b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, '__get', ['name' => $name], $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        if (isset(self::$publicProperties8d2e4[$name])) {
            return $this->valueHolder1b05b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b05b;

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

        $targetObject = $this->valueHolder1b05b;
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
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b05b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1b05b;
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
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, '__isset', array('name' => $name), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b05b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1b05b;
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
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, '__unset', array('name' => $name), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b05b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1b05b;
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
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, '__clone', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        $this->valueHolder1b05b = clone $this->valueHolder1b05b;
    }

    public function __sleep()
    {
        $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, '__sleep', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;

        return array('valueHolder1b05b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere532a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere532a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere532a && ($this->initializere532a->__invoke($valueHolder1b05b, $this, 'initializeProxy', array(), $this->initializere532a) || 1) && $this->valueHolder1b05b = $valueHolder1b05b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1b05b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1b05b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
