<?php

namespace Ten24\CMSPagesBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeparatorPage
 *
 * @ORM\Table(name="ten24_cms_pages_separator_pages")
 * @ORM\Entity
 */
class SeparatorPage extends \Kunstmaan\NodeBundle\Entity\AbstractPage implements \Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return \Ten24\CMSPagesBundle\Form\Pages\SeparatorPageAdminType
     */
    public function getDefaultAdminType()
    {
        return new \Ten24\CMSPagesBundle\Form\Pages\SeparatorPageAdminType();
    }

    /**
     *
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
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
        return array();
    }

    /**
     *
     * @ERROR!!!
     *
     */
    public function getPageTemplates()
    {
        return array(
                'Ten24CMSPagesBundle:separator');
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'Ten24CMSPagesBundle:Pages:Common/view.html.twig';
    }
}