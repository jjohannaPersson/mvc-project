<?php

namespace Container8i8ZVxC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16974 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerabd1b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7d613 = [
        
    ];

    public function getConnection()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getConnection', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getMetadataFactory', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getExpressionBuilder', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'beginTransaction', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getCache', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getCache();
    }

    public function transactional($func)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'transactional', array('func' => $func), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->transactional($func);
    }

    public function commit()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'commit', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->commit();
    }

    public function rollback()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'rollback', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getClassMetadata', array('className' => $className), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'createQuery', array('dql' => $dql), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'createNamedQuery', array('name' => $name), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'createQueryBuilder', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'flush', array('entity' => $entity), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'clear', array('entityName' => $entityName), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->clear($entityName);
    }

    public function close()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'close', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->close();
    }

    public function persist($entity)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'persist', array('entity' => $entity), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'remove', array('entity' => $entity), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'refresh', array('entity' => $entity), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'detach', array('entity' => $entity), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'merge', array('entity' => $entity), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getRepository', array('entityName' => $entityName), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'contains', array('entity' => $entity), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getEventManager', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getConfiguration', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'isOpen', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getUnitOfWork', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getProxyFactory', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'initializeObject', array('obj' => $obj), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'getFilters', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'isFiltersStateClean', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'hasFilters', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return $this->valueHolder16974->hasFilters();
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

        $instance->initializerabd1b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16974) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16974 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16974->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, '__get', ['name' => $name], $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        if (isset(self::$publicProperties7d613[$name])) {
            return $this->valueHolder16974->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16974;

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

        $targetObject = $this->valueHolder16974;
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
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16974;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16974;
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
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, '__isset', array('name' => $name), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16974;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16974;
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
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, '__unset', array('name' => $name), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16974;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16974;
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
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, '__clone', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        $this->valueHolder16974 = clone $this->valueHolder16974;
    }

    public function __sleep()
    {
        $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, '__sleep', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;

        return array('valueHolder16974');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerabd1b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerabd1b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerabd1b && ($this->initializerabd1b->__invoke($valueHolder16974, $this, 'initializeProxy', array(), $this->initializerabd1b) || 1) && $this->valueHolder16974 = $valueHolder16974;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16974;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16974;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
