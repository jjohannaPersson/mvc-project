<?php

namespace Container5BWnxTy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder45fdb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8e5a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdab6b = [
        
    ];

    public function getConnection()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getConnection', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getMetadataFactory', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getExpressionBuilder', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'beginTransaction', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getCache', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'transactional', array('func' => $func), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->transactional($func);
    }

    public function commit()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'commit', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->commit();
    }

    public function rollback()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'rollback', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getClassMetadata', array('className' => $className), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'createQuery', array('dql' => $dql), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'createNamedQuery', array('name' => $name), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'createQueryBuilder', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'flush', array('entity' => $entity), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'clear', array('entityName' => $entityName), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->clear($entityName);
    }

    public function close()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'close', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->close();
    }

    public function persist($entity)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'persist', array('entity' => $entity), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'remove', array('entity' => $entity), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'refresh', array('entity' => $entity), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'detach', array('entity' => $entity), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'merge', array('entity' => $entity), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'contains', array('entity' => $entity), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getEventManager', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getConfiguration', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'isOpen', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getUnitOfWork', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getProxyFactory', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'initializeObject', array('obj' => $obj), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'getFilters', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'isFiltersStateClean', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'hasFilters', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return $this->valueHolder45fdb->hasFilters();
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

        $instance->initializer8e5a8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder45fdb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder45fdb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder45fdb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, '__get', ['name' => $name], $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        if (isset(self::$publicPropertiesdab6b[$name])) {
            return $this->valueHolder45fdb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45fdb;

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

        $targetObject = $this->valueHolder45fdb;
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
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45fdb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder45fdb;
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
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, '__isset', array('name' => $name), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45fdb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder45fdb;
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
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, '__unset', array('name' => $name), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45fdb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder45fdb;
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
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, '__clone', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        $this->valueHolder45fdb = clone $this->valueHolder45fdb;
    }

    public function __sleep()
    {
        $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, '__sleep', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;

        return array('valueHolder45fdb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8e5a8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8e5a8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8e5a8 && ($this->initializer8e5a8->__invoke($valueHolder45fdb, $this, 'initializeProxy', array(), $this->initializer8e5a8) || 1) && $this->valueHolder45fdb = $valueHolder45fdb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder45fdb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder45fdb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
