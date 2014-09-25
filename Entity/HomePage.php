<?php

namespace Ten24\CMSPagesBundle\Entity;

use Ten24\CMSPagesBundle\Form\HomePageAdminType;
use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;

/**
 * HomePage
 *
 * @ORM\Entity()
 * @ORM\Table(name="ten24_cms_pages_home_pages")
 */
class HomePage extends AbstractPage implements HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new HomePageAdminType();
    }

    /**
     *
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
                array(
                        'name' => 'Separator Page',
                        'class' => 'Ten24\CMSPagesBundle\Entity\SeparatorPage'),
                array(
                        'name' => 'Content Page',
                        'class' => 'Ten24\CMSPagesBundle\Entity\ContentPage'));
    }

    /**
     *
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array(
                'Ten24CMSPagesBundle:home');
    }

    /**
     *
     * @ERROR!!!
     *
     */
    public function getPageTemplates()
    {
        return array(
                'Ten24CMSPagesBundle:homepage');
    }

    /**
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'Ten24CMSPagesBundle:HomePage:view.html.twig';
    }
}
