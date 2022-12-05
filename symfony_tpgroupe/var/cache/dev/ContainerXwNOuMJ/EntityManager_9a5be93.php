<?php

namespace ContainerXwNOuMJ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5f38a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb4464 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties30e65 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getConnection', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getMetadataFactory', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getExpressionBuilder', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'beginTransaction', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getCache', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'transactional', array('func' => $func), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'commit', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->commit();
    }

    public function rollback()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'rollback', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'createQuery', array('dql' => $dql), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'createQueryBuilder', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'flush', array('entity' => $entity), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'clear', array('entityName' => $entityName), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->clear($entityName);
    }

    public function close()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'close', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->close();
    }

    public function persist($entity)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'persist', array('entity' => $entity), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'remove', array('entity' => $entity), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'refresh', array('entity' => $entity), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'detach', array('entity' => $entity), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'merge', array('entity' => $entity), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'contains', array('entity' => $entity), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getEventManager', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getConfiguration', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'isOpen', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getUnitOfWork', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getProxyFactory', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'getFilters', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'isFiltersStateClean', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'hasFilters', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return $this->valueHolder5f38a->hasFilters();
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

        $instance->initializerb4464 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder5f38a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f38a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5f38a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, '__get', ['name' => $name], $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        if (isset(self::$publicProperties30e65[$name])) {
            return $this->valueHolder5f38a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f38a;

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

        $targetObject = $this->valueHolder5f38a;
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
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f38a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5f38a;
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
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, '__isset', array('name' => $name), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f38a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5f38a;
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
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, '__unset', array('name' => $name), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f38a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5f38a;
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
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, '__clone', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        $this->valueHolder5f38a = clone $this->valueHolder5f38a;
    }

    public function __sleep()
    {
        $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, '__sleep', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;

        return array('valueHolder5f38a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb4464 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb4464;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb4464 && ($this->initializerb4464->__invoke($valueHolder5f38a, $this, 'initializeProxy', array(), $this->initializerb4464) || 1) && $this->valueHolder5f38a = $valueHolder5f38a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f38a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f38a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
