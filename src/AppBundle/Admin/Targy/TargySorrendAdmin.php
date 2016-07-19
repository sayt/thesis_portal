<?php

namespace AppBundle\Admin\Targy;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Felhasznalo\User;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\Type\Filter\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TargySorrendAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("elozotargy", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Targy',
                "property" => "name",
            ))
            ->add("targy", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Targy',
                "property" => "name",
            ))
            ->add("kovetkezotargy", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Targy',
                "property" => "name",
            ))
            ->add("kar", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Kar',
                "property" => "name",
            ))
            ->add("szak", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Szak',
                "property" => "name",
            ))
            ->add("ervenyessegkezdete", DateTimeType::class, array())
            ->add("ervenyessegvege", DateTimeType::class, array())
            ->add("modositoUser", EntityType::class , array(
                "class" => 'AppBundle\Entity\Felhasznalo\User',
                "property" => "username",
            ))

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier("targy")
        ;
    }


}