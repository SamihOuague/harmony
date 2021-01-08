<?php

namespace ContainerKvP7wxH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder52392 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1633d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties41e9a = [
        
    ];

    public function getConnection()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getConnection', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getMetadataFactory', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getExpressionBuilder', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'beginTransaction', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getCache', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'transactional', array('func' => $func), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->transactional($func);
    }

    public function commit()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'commit', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->commit();
    }

    public function rollback()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'rollback', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getClassMetadata', array('className' => $className), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'createQuery', array('dql' => $dql), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'createNamedQuery', array('name' => $name), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'createQueryBuilder', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'flush', array('entity' => $entity), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'clear', array('entityName' => $entityName), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->clear($entityName);
    }

    public function close()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'close', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->close();
    }

    public function persist($entity)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'persist', array('entity' => $entity), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'remove', array('entity' => $entity), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'refresh', array('entity' => $entity), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'detach', array('entity' => $entity), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'merge', array('entity' => $entity), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'contains', array('entity' => $entity), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getEventManager', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getConfiguration', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'isOpen', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getUnitOfWork', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getProxyFactory', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'initializeObject', array('obj' => $obj), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'getFilters', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'isFiltersStateClean', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'hasFilters', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return $this->valueHolder52392->hasFilters();
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

        $instance->initializer1633d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder52392) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder52392 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder52392->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, '__get', ['name' => $name], $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        if (isset(self::$publicProperties41e9a[$name])) {
            return $this->valueHolder52392->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52392;

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

        $targetObject = $this->valueHolder52392;
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
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52392;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder52392;
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
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, '__isset', array('name' => $name), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52392;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder52392;
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
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, '__unset', array('name' => $name), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52392;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder52392;
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
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, '__clone', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        $this->valueHolder52392 = clone $this->valueHolder52392;
    }

    public function __sleep()
    {
        $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, '__sleep', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;

        return array('valueHolder52392');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1633d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1633d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1633d && ($this->initializer1633d->__invoke($valueHolder52392, $this, 'initializeProxy', array(), $this->initializer1633d) || 1) && $this->valueHolder52392 = $valueHolder52392;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder52392;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder52392;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
