<?php

namespace Ten24\CMSPagesBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * SeparatorPageAdminType
 */
class SeparatorPageAdminType extends \Kunstmaan\NodeBundle\Form\PageAdminType
{

    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting form the
     * top most type. Type extensions can further modify the form.
     *
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     *
     * @see FormTypeExtensionInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder,
                              array $options)
    {
        parent::buildForm($builder, $options);
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
                                   'data_class' => '\Ten24\CMSPagesBundle\Entity\SeparatorPage'
                               ]);
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'ten24cmspages_separatorpage';
    }
}
