<?php

namespace AppBundle\Admin\Felhasznalo;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class UserRoleConnectAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("user", null, array(
                "class" => 'AppBundle\Entity\Felhasznalo\User',
                "property" => "name",
            ))
            ->add("role", null, array(
                "class" => 'AppBundle\Entity\Felhasznalo\Role',
                "property" => "name"
            ))
            ->add("ervenyessegkezdete", DateTimeType::class, array())
            ->add("ervenyessegvege", DateTimeType::class, array())
            ->add("modositoUser", null, array(
                "class" => 'AppBundle\Entity\Felhasznalo\User',
                "property" => "name",
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
//        $datagridMapper
//            ->add("user", null, array(), "entity", array(
//                "class" => 'AppBundle\Entity\Felhasznalo\User',
//                "property" => "name",
//            ))
//            ->add("role", null, array(), "entity", array(
//                "class" => 'AppBundle\Entity\Felhasznalo\Role',
//                "property" => "name",
//            ))
//        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add("user.name", "entity", array(
                "class" => 'AppBundle\Entity\Felhasznalo\User',
                "property" => "name"
            ))
            ->add("role.name", null, array(
                "class" => 'AppBundle\Entity\Felhasznalo\Role',
                "property" => "name",
            ))
            ->add("ervenyessegkezdete" , "datetime", array(
                "format" => "Y-m-d H:i",
            ))
            ->add("ervenyessegvege" , "datetime", array(
                "format" => "Y-m-d H:i",
            ))
            ->add("enabled")
            ->add("modositoUser.name", "entity", array(
                "class" => 'AppBundle\Entity\Felhasznalo\User',
                "property" => "name"
            ))
        ;
    }

//    public function toString($object)
//    {
//        return $object instanceof User
//            ? $object->getName()
//            : "User"; // shown in the breadcrumb on the create view
//    }
}