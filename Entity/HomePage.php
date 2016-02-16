<?php

namespace Ten24\CMSPagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Ten24\CMSPagesBundle\Form\HomePageAdminType;

/**
 * HomePage Superclass
 *
 * @ORM\MappedSuperclass
 */
abstract class HomePage extends AbstractPage implements HasPageTemplateInterface
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
        return [
            [
                'name'  => 'Content Page',
                'class' => 'Ten24\CMSPagesBundle\Entity\ContentPage'],
            [
                'name'  => 'Separator',
                'class' => 'Ten24\CMSPagesBundle\Entity\SeparatorPage'],];
    }

    /**
     *
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return [
            'Ten24CMSPagesBundle:home'];
    }

    /**
     * @return array
     */
    public function getPageTemplates()
    {
        return [
            'Ten24CMSPagesBundle:default-one-column',
            'Ten24CMSPagesBundle:default-two-column-left',
            'Ten24CMSPagesBundle:default-two-column-right',
            'Ten24CMSPagesBundle:homepage'];
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
