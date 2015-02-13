<?php
namespace PMC\MainBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;

class MenuBuilder
{
    private $factory;
    private $translator;
    private $securityContext;

    /**
     * @param FactoryInterface $factory
     * @param TranslatorInterface $translator
     * @param SecurityContext $securityContext
     */
    public function __construct(FactoryInterface $factory, TranslatorInterface $translator,SecurityContextInterface  $securityContext )
    {
        $this->factory = $factory;
        $this->translator = $translator;
        if (isset($securityContext)) {
            $this->securityContext = $securityContext;
        }
    }

    /**
     * @param Request $request
     * @return \Knp\Menu\ItemInterface
     */
    public function createMainMenu(Request $request)
    {
        $user = $this->securityContext->getToken()->getUser();


        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav navbar-nav navbar-right'));
        $menu->addChild('index', array('route' => 'pmc_main_index'));

        if($this->securityContext->isGranted('IS_AUTHENTICATED_FULLY'))
            $menu->addChild($user->getUsername(), ['route' => 'sonata_user_profile_show','routeParameters' => array('id' => $user->getId())]);
        else
            $menu->addChild('login', array('route' => 'sonata_user_security_login'));

        return $menu;
    }


}
