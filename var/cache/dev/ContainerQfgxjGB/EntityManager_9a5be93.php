<?php

namespace ContainerQfgxjGB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5c039 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3248 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5284e = [
        
    ];

    public function getConnection()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getConnection', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getMetadataFactory', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getExpressionBuilder', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'beginTransaction', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getCache', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'transactional', array('func' => $func), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'commit', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->commit();
    }

    public function rollback()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'rollback', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'createQuery', array('dql' => $dql), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'createQueryBuilder', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'flush', array('entity' => $entity), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'clear', array('entityName' => $entityName), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->clear($entityName);
    }

    public function close()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'close', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->close();
    }

    public function persist($entity)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'persist', array('entity' => $entity), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'remove', array('entity' => $entity), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'refresh', array('entity' => $entity), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'detach', array('entity' => $entity), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'merge', array('entity' => $entity), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'contains', array('entity' => $entity), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getEventManager', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getConfiguration', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'isOpen', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getUnitOfWork', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getProxyFactory', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'getFilters', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'isFiltersStateClean', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'hasFilters', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return $this->valueHolder5c039->hasFilters();
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

        $instance->initializerc3248 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5c039) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5c039 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5c039->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, '__get', ['name' => $name], $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        if (isset(self::$publicProperties5284e[$name])) {
            return $this->valueHolder5c039->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c039;

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

        $targetObject = $this->valueHolder5c039;
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
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c039;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5c039;
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
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, '__isset', array('name' => $name), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c039;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5c039;
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
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, '__unset', array('name' => $name), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c039;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5c039;
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
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, '__clone', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        $this->valueHolder5c039 = clone $this->valueHolder5c039;
    }

    public function __sleep()
    {
        $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, '__sleep', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;

        return array('valueHolder5c039');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3248 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3248;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc3248 && ($this->initializerc3248->__invoke($valueHolder5c039, $this, 'initializeProxy', array(), $this->initializerc3248) || 1) && $this->valueHolder5c039 = $valueHolder5c039;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c039;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c039;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
