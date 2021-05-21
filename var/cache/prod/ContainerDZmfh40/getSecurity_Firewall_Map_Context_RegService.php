<?php

namespace ContainerDZmfh40;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_RegService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.firewall.map.context.reg' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.firewall.map.context.reg'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.1'] ?? $container->load('getSecurity_ContextListener_1Service'));
            yield 2 => ($container->privates['security.authentication.listener.basic.reg'] ?? $container->load('getSecurity_Authentication_Listener_Basic_RegService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'reg', ($container->privates['security.authentication.basic_entry_point.reg'] ?? ($container->privates['security.authentication.basic_entry_point.reg'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area'))), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('reg', 'security.user_checker', '.security.request_matcher.3UEFixr', true, false, 'security.user.provider.concrete.our_db_provider', 'reg', 'security.authentication.basic_entry_point.reg', NULL, NULL, [0 => 'http_basic'], NULL));
    }
}
