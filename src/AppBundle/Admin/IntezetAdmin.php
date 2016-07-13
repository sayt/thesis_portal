<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use AppBundle\Entity\Intezmeny\Intezet;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class IntezetAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("name", TextType::class, array("translation_domain" => "User" ))
            ->add("short_name", TextType::class, array("translation_domain" => "User" ))
            ->add("szak", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Szak',
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
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add("szak.kar.name", null, array( "label" => "Kar"))
            ->add("szak.name", null, array( "label" => "Szak"))
            ->add("short_name", null, array( "label" => "Intezet röviden"))
            ->addIdentifier("name", null, array( "label" => "Intezet"))
            ->add("status")
        ;
    }

    public function toString($object)
    {
        return $object instanceof Intezet
            ? $object->getName()
            : 'Intezet'; // shown in the breadcrumb on the create view
    }
}