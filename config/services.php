<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Webgriffe\PayumLockRequestExtension\LockRequestExtension;

return static function (ContainerConfigurator $containerConfigurator) {
    $services = $containerConfigurator->services();

    $services->set('webgriffe_payum_lock_request_extension.lock_request', LockRequestExtension::class)
        ->public()
        ->args([
            service('lock.factory'),
        ])
        ->tag('payum.extension', [
            'all' => true,
            'prepend' => false,
            'alias' => 'lock_request',
        ])
    ;
};
