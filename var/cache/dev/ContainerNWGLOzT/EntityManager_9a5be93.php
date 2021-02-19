<?php

namespace ContainerNWGLOzT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderac9de = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0e6f4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesac3ee = [
        
    ];

    public function getConnection()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getConnection', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getMetadataFactory', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getExpressionBuilder', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'beginTransaction', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getCache', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'transactional', array('func' => $func), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->transactional($func);
    }

    public function commit()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'commit', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->commit();
    }

    public function rollback()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'rollback', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getClassMetadata', array('className' => $className), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'createQuery', array('dql' => $dql), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'createNamedQuery', array('name' => $name), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'createQueryBuilder', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'flush', array('entity' => $entity), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'clear', array('entityName' => $entityName), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->clear($entityName);
    }

    public function close()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'close', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->close();
    }

    public function persist($entity)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'persist', array('entity' => $entity), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'remove', array('entity' => $entity), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'refresh', array('entity' => $entity), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'detach', array('entity' => $entity), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'merge', array('entity' => $entity), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'contains', array('entity' => $entity), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getEventManager', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getConfiguration', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'isOpen', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getUnitOfWork', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getProxyFactory', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'initializeObject', array('obj' => $obj), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'getFilters', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'isFiltersStateClean', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'hasFilters', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return $this->valueHolderac9de->hasFilters();
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

        $instance->initializer0e6f4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderac9de) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderac9de = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderac9de->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, '__get', ['name' => $name], $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        if (isset(self::$publicPropertiesac3ee[$name])) {
            return $this->valueHolderac9de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac9de;

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

        $targetObject = $this->valueHolderac9de;
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
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac9de;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderac9de;
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
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, '__isset', array('name' => $name), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac9de;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderac9de;
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
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, '__unset', array('name' => $name), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac9de;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderac9de;
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
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, '__clone', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        $this->valueHolderac9de = clone $this->valueHolderac9de;
    }

    public function __sleep()
    {
        $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, '__sleep', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;

        return array('valueHolderac9de');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0e6f4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0e6f4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0e6f4 && ($this->initializer0e6f4->__invoke($valueHolderac9de, $this, 'initializeProxy', array(), $this->initializer0e6f4) || 1) && $this->valueHolderac9de = $valueHolderac9de;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderac9de;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderac9de;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
