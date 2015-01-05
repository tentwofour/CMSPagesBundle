<?php

namespace Ten24\CMSPagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;
use Ten24\CMSPagesBundle\Form\ContentPageAdminType;

/**
 * ContentPage Superclass
 *
 * @ORM\MappedSuperclass()
 */
abstract class ContentPage extends AbstractPage implements HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new ContentPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
            array(
                'name'  => 'Content Page',
                'class' => 'Ten24\CMSPagesBundle\Entity\ContentPage'
            ),
            array(
                'name'  => 'Separator',
                'class' => 'Ten24\CMSPagesBundle\Entity\SeparatorPage'
            ),
        );
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array(
            'Ten24CMSPagesBundle:main',
            'Ten24CMSPagesBundle:sidebar'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array(
            'Ten24CMSPagesBundle:default-one-column',
            'Ten24CMSPagesBundle:default-two-column-left',
            'Ten24CMSPagesBundle:default-two-column-right'
        );
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'Ten24CMSPagesBundle:ContentPage:view.html.twig';
    }
}
