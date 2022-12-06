<?php

namespace ContainerQzRir0v;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere924d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera6339 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3423c = [
        
    ];

    public function getConnection()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getConnection', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getMetadataFactory', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getExpressionBuilder', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'beginTransaction', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getCache', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getCache();
    }

    public function transactional($func)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'transactional', array('func' => $func), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'wrapInTransaction', array('func' => $func), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'commit', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->commit();
    }

    public function rollback()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'rollback', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getClassMetadata', array('className' => $className), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'createQuery', array('dql' => $dql), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'createNamedQuery', array('name' => $name), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'createQueryBuilder', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'flush', array('entity' => $entity), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'clear', array('entityName' => $entityName), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->clear($entityName);
    }

    public function close()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'close', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->close();
    }

    public function persist($entity)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'persist', array('entity' => $entity), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'remove', array('entity' => $entity), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'refresh', array('entity' => $entity), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'detach', array('entity' => $entity), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'merge', array('entity' => $entity), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getRepository', array('entityName' => $entityName), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'contains', array('entity' => $entity), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getEventManager', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getConfiguration', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'isOpen', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getUnitOfWork', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getProxyFactory', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'initializeObject', array('obj' => $obj), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'getFilters', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'isFiltersStateClean', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'hasFilters', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return $this->valueHoldere924d->hasFilters();
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

        $instance->initializera6339 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere924d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere924d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere924d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, '__get', ['name' => $name], $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        if (isset(self::$publicProperties3423c[$name])) {
            return $this->valueHoldere924d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere924d;

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

        $targetObject = $this->valueHoldere924d;
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
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere924d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere924d;
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
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, '__isset', array('name' => $name), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere924d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere924d;
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
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, '__unset', array('name' => $name), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere924d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere924d;
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
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, '__clone', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        $this->valueHoldere924d = clone $this->valueHoldere924d;
    }

    public function __sleep()
    {
        $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, '__sleep', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;

        return array('valueHoldere924d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera6339 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera6339;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera6339 && ($this->initializera6339->__invoke($valueHoldere924d, $this, 'initializeProxy', array(), $this->initializera6339) || 1) && $this->valueHoldere924d = $valueHoldere924d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere924d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere924d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
