<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use AppBundle\Entity\Intezmeny\Kar;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class KarAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("name", TextType::class, array("translation_domain" => "User" ))
            ->add("short_name", TextType::class, array("translation_domain" => "User" ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier("name", null, array("translation_domain" => "User" ))
            ->addIdentifier("short_name", null, array("translation_domain" => "User" ))
        ;
    }

    public function toString($object)
    {
        return $object instanceof Kar
            ? $object->getName()
            : 'Kar'; // shown in the breadcrumb on the create view
    }
}