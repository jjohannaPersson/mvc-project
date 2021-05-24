<?php

namespace ContainerMml0OH6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder76643 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer266ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties77679 = [
        
    ];

    public function getConnection()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getConnection', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getMetadataFactory', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getExpressionBuilder', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'beginTransaction', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getCache', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getCache();
    }

    public function transactional($func)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'transactional', array('func' => $func), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->transactional($func);
    }

    public function commit()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'commit', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->commit();
    }

    public function rollback()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'rollback', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getClassMetadata', array('className' => $className), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'createQuery', array('dql' => $dql), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'createNamedQuery', array('name' => $name), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'createQueryBuilder', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'flush', array('entity' => $entity), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'clear', array('entityName' => $entityName), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->clear($entityName);
    }

    public function close()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'close', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->close();
    }

    public function persist($entity)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'persist', array('entity' => $entity), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'remove', array('entity' => $entity), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'refresh', array('entity' => $entity), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'detach', array('entity' => $entity), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'merge', array('entity' => $entity), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getRepository', array('entityName' => $entityName), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'contains', array('entity' => $entity), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getEventManager', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getConfiguration', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'isOpen', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getUnitOfWork', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getProxyFactory', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'initializeObject', array('obj' => $obj), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'getFilters', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'isFiltersStateClean', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'hasFilters', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return $this->valueHolder76643->hasFilters();
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

        $instance->initializer266ff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder76643) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder76643 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder76643->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, '__get', ['name' => $name], $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        if (isset(self::$publicProperties77679[$name])) {
            return $this->valueHolder76643->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76643;

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

        $targetObject = $this->valueHolder76643;
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
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76643;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder76643;
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
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, '__isset', array('name' => $name), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76643;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder76643;
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
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, '__unset', array('name' => $name), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76643;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder76643;
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
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, '__clone', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        $this->valueHolder76643 = clone $this->valueHolder76643;
    }

    public function __sleep()
    {
        $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, '__sleep', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;

        return array('valueHolder76643');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer266ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer266ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer266ff && ($this->initializer266ff->__invoke($valueHolder76643, $this, 'initializeProxy', array(), $this->initializer266ff) || 1) && $this->valueHolder76643 = $valueHolder76643;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder76643;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder76643;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
