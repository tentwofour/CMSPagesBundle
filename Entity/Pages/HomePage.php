<?php

namespace Ten24\CMSPagesBundle\Entity\Pages;

use Ten24\CMSPagesBundle\Form\Pages\HomePageAdminType;
use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints as Assert;

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
                        'class' => 'Ten24\CMSPagesBundle\Entity\Pages\ContentPage'),
                array(
                        'name' => 'Content Page',
                        'class' => 'Ten24\CMSPagesBundle\Entity\Pages\ContentPage'));
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
        return 'Ten24CMSPagesBundle:Pages\HomePage:view.html.twig';
    }
}
