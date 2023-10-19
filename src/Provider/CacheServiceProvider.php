<?php declare(strict_types=1);

    namespace STDW\Cache\Provider;

    use STDW\Contract\ServiceProviderAbstracted;
    use STDW\Contract\ContainerInterface;
    use STDW\Contract\CacheHandlerInterface;
    use STDW\Contract\CacheInterface;
    use STDW\Cache\Handler\NullHandler;
    use STDW\Cache\Cache;


    class CacheServiceProvider extends ServiceProviderAbstracted
    {
        public function __construct(ContainerInterface $container)
        {
            parent::__construct($container);
        }


        public function register(): void
        {
            $this->container->singleton(CacheHandlerInterface::class, NullHandler::class);
            $this->container->singleton(CacheInterface::class, Cache::class);
        }

        public function boot(): void
        {
        }

        public function terminate(): void
        {
        }
    }