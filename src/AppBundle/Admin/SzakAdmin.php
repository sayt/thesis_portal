<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use AppBundle\Entity\Intezmeny\Szak;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SzakAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("name", TextType::class, array("translation_domain" => "User" ))
            ->add("short_name", TextType::class, array("translation_domain" => "User" ))
            ->add("kar", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Kar',
                "property" => "name",
            ))
            ->add("status", ChoiceType::class, array(
                "translation_domain" => "User",
                "choices"  => array(
                    true => "Aktív",
                    false => "Passiv",
                ),
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add("name")
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add("kar.name", null, array( "label" => "Kar"))
            ->add("short_name", null, array( "label" => "Szak röviden"))
            ->addIdentifier("name", null, array( "label" => "Szak"))
        ;
    }

    public function toString($object)
    {
        return $object instanceof Szak
            ? $object->getName()
            : 'Szak'; // shown in the breadcrumb on the create view
    }
}