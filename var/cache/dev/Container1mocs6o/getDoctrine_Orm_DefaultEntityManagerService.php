<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

$a = new \Doctrine\ORM\Configuration();

$b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
$b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, [0 => ($this->targetDirs[3].'/src/AppBundle/Entity')]), 'AppBundle\\Entity');

$a->setEntityNamespaces(['AppBundle' => 'AppBundle\\Entity']);
$a->setMetadataCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] : $this->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService.php')) && false ?: '_'});
$a->setQueryCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] : $this->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService.php')) && false ?: '_'});
$a->setResultCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] : $this->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService.php')) && false ?: '_'});
$a->setMetadataDriverImpl($b);
$a->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$a->setProxyNamespace('Proxies');
$a->setAutoGenerateProxyClasses(true);
$a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
$a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$a->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : ($this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))) && false ?: '_'});
$a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load('getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $a);

${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : ($this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))) && false ?: '_'}->configure($instance);

return $instance;
