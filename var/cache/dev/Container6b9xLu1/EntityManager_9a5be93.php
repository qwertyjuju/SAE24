<?php

namespace Container6b9xLu1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9319d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer33775 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties833a9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getConnection', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getMetadataFactory', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getExpressionBuilder', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'beginTransaction', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getCache', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'transactional', array('func' => $func), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'commit', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->commit();
    }

    public function rollback()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'rollback', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getClassMetadata', array('className' => $className), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'createQuery', array('dql' => $dql), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'createNamedQuery', array('name' => $name), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'createQueryBuilder', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'flush', array('entity' => $entity), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'clear', array('entityName' => $entityName), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->clear($entityName);
    }

    public function close()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'close', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->close();
    }

    public function persist($entity)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'persist', array('entity' => $entity), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'remove', array('entity' => $entity), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'refresh', array('entity' => $entity), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'detach', array('entity' => $entity), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'merge', array('entity' => $entity), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'contains', array('entity' => $entity), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getEventManager', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getConfiguration', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'isOpen', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getUnitOfWork', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getProxyFactory', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'initializeObject', array('obj' => $obj), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'getFilters', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'isFiltersStateClean', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'hasFilters', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return $this->valueHolder9319d->hasFilters();
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

        $instance->initializer33775 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9319d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9319d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9319d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, '__get', ['name' => $name], $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        if (isset(self::$publicProperties833a9[$name])) {
            return $this->valueHolder9319d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9319d;

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

        $targetObject = $this->valueHolder9319d;
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
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9319d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9319d;
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
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, '__isset', array('name' => $name), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9319d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9319d;
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
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, '__unset', array('name' => $name), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9319d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9319d;
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
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, '__clone', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        $this->valueHolder9319d = clone $this->valueHolder9319d;
    }

    public function __sleep()
    {
        $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, '__sleep', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;

        return array('valueHolder9319d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer33775 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer33775;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer33775 && ($this->initializer33775->__invoke($valueHolder9319d, $this, 'initializeProxy', array(), $this->initializer33775) || 1) && $this->valueHolder9319d = $valueHolder9319d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9319d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9319d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
