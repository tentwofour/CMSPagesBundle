<?php

namespace Ten24\CMSPagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Ten24\CMSPagesBundle\Form\SeparatorPageAdminType;

/**
 * SeparatorPage Mappedsuperclass
 *
 * @ORM\MappedSuperclass
 */
abstract class SeparatorPage extends AbstractPage implements HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return \Ten24\CMSPagesBundle\Form\Pages\SeparatorPageAdminType
     */
    public function getDefaultAdminType()
    {
        return new SeparatorPageAdminType();
    }

    /**
     *
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return [
            [
                'name'  => 'Content Page',
                'class' => 'Ten24\CMSPagesBundle\Entity\ContentPage'],
            [
                'name'  => 'Separator',
                'class' => 'Ten24\CMSPagesBundle\Entity\SeparatorPage']];
    }

    /**
     * Get possible page part admin configurations
     *
     * @return array
     */
    public function getPagePartAdminConfigurations()
    {
        return [];
    }

    /**
     * Get possible page templates for this page
     *
     * @return array
     */
    public function getPageTemplates()
    {
        return [
            'Ten24CMSPagesBundle:separator'];
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'Ten24CMSPagesBundle:SeparatorPage:view.html.twig';
    }
}