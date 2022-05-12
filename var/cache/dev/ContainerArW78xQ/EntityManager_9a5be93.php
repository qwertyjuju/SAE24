<?php

namespace ContainerArW78xQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfa526 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer47447 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties68742 = [
        
    ];

    public function getConnection()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getConnection', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getMetadataFactory', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getExpressionBuilder', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'beginTransaction', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getCache', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getCache();
    }

    public function transactional($func)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'transactional', array('func' => $func), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'wrapInTransaction', array('func' => $func), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'commit', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->commit();
    }

    public function rollback()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'rollback', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getClassMetadata', array('className' => $className), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'createQuery', array('dql' => $dql), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'createNamedQuery', array('name' => $name), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'createQueryBuilder', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'flush', array('entity' => $entity), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'clear', array('entityName' => $entityName), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->clear($entityName);
    }

    public function close()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'close', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->close();
    }

    public function persist($entity)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'persist', array('entity' => $entity), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'remove', array('entity' => $entity), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'refresh', array('entity' => $entity), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'detach', array('entity' => $entity), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'merge', array('entity' => $entity), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getRepository', array('entityName' => $entityName), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'contains', array('entity' => $entity), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getEventManager', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getConfiguration', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'isOpen', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getUnitOfWork', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getProxyFactory', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'initializeObject', array('obj' => $obj), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'getFilters', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'isFiltersStateClean', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'hasFilters', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return $this->valueHolderfa526->hasFilters();
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

        $instance->initializer47447 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfa526) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfa526 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfa526->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, '__get', ['name' => $name], $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        if (isset(self::$publicProperties68742[$name])) {
            return $this->valueHolderfa526->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa526;

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

        $targetObject = $this->valueHolderfa526;
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
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa526;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfa526;
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
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, '__isset', array('name' => $name), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa526;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfa526;
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
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, '__unset', array('name' => $name), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa526;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfa526;
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
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, '__clone', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        $this->valueHolderfa526 = clone $this->valueHolderfa526;
    }

    public function __sleep()
    {
        $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, '__sleep', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;

        return array('valueHolderfa526');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer47447 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer47447;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer47447 && ($this->initializer47447->__invoke($valueHolderfa526, $this, 'initializeProxy', array(), $this->initializer47447) || 1) && $this->valueHolderfa526 = $valueHolderfa526;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfa526;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfa526;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
