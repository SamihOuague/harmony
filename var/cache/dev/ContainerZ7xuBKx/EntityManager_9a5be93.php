<?php

namespace ContainerZ7xuBKx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4f779 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer775a3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e533 = [
        
    ];

    public function getConnection()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getConnection', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getMetadataFactory', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getExpressionBuilder', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'beginTransaction', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getCache', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getCache();
    }

    public function transactional($func)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'transactional', array('func' => $func), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->transactional($func);
    }

    public function commit()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'commit', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->commit();
    }

    public function rollback()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'rollback', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getClassMetadata', array('className' => $className), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'createQuery', array('dql' => $dql), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'createNamedQuery', array('name' => $name), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'createQueryBuilder', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'flush', array('entity' => $entity), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'clear', array('entityName' => $entityName), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->clear($entityName);
    }

    public function close()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'close', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->close();
    }

    public function persist($entity)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'persist', array('entity' => $entity), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'remove', array('entity' => $entity), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'refresh', array('entity' => $entity), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'detach', array('entity' => $entity), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'merge', array('entity' => $entity), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getRepository', array('entityName' => $entityName), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'contains', array('entity' => $entity), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getEventManager', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getConfiguration', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'isOpen', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getUnitOfWork', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getProxyFactory', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'initializeObject', array('obj' => $obj), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'getFilters', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'isFiltersStateClean', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'hasFilters', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return $this->valueHolder4f779->hasFilters();
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

        $instance->initializer775a3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4f779) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4f779 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4f779->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, '__get', ['name' => $name], $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        if (isset(self::$publicProperties3e533[$name])) {
            return $this->valueHolder4f779->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f779;

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

        $targetObject = $this->valueHolder4f779;
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
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f779;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4f779;
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
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, '__isset', array('name' => $name), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f779;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4f779;
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
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, '__unset', array('name' => $name), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f779;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4f779;
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
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, '__clone', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        $this->valueHolder4f779 = clone $this->valueHolder4f779;
    }

    public function __sleep()
    {
        $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, '__sleep', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;

        return array('valueHolder4f779');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer775a3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer775a3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer775a3 && ($this->initializer775a3->__invoke($valueHolder4f779, $this, 'initializeProxy', array(), $this->initializer775a3) || 1) && $this->valueHolder4f779 = $valueHolder4f779;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4f779;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4f779;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
