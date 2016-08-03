<?php

namespace AppBundle\Admin\Felhasznalo;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Felhasznalo\User;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("username", TextType::class, array("translation_domain" => "User" ))
            ->add("name", TextType::class, array("translation_domain" => "User" ))
            ->add("email", TextType::class, array( "translation_domain" => "User" ))
            ->add("plainPassword", "repeated", array(
                "type" => "password",
                "options" => array("translation_domain" => "User"),
            ))
            ->add("hallgatoi_torzskonyvi_szam", TextType::class, array( "translation_domain" => "User" ))
            ->add("phone_number", TextType::class, array( "translation_domain" => "User" ))
            ->add("enabled", ChoiceType::class, array(
                "translation_domain" => "User",
                "choices"  => array(
                    true => "Aktív",
                    false => "Passiv",
                ),
            ))
            ->add("kar", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Kar',
                "property" => "name",
            ))
            ->add("role", null, array(
                "class" => 'AppBundle\Entity\Felhasznalo\Role',
                "property" => "name"
            ))
            ->add("roles")
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add("username")
            ->add("name")
            ->add("kar", null, array(), "entity", array(
                "class" => 'AppBundle\Entity\Intezmeny\Kar',
                "property" => "name",
            ))
            ->add("targy", null, array(), "entity", array(
                "class" => 'AppBundle\Entity\Intezmeny\Targy',
                "property" => "name",
            ))
            ->add("role", null, array(), "entity", array(
                "class" => 'AppBundle\Entity\Felhasznalo\Role',
                "property" => "name",
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier("username")
            ->add("name")
            ->add("email")
            ->add("kar.name", "entity", array(
                "class" => 'AppBundle\Entity\Intezmeny\Kar',
                "property" => "name",
                "label" => "Kar"
            ))
            ->add("targy.name", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Targy',
                "property" => "name",
                "label" => "Tárgy",
            ))
            ->add("hallgatoi_torzskonyvi_szam", null, array(
                "sortable" => true
            ))
            ->add("phone_number")
            ->add("last_login" , "datetime", array(
                "format" => "Y-m-d H:i",
                "label" => "Utolsó bejelentkezés",
            ))
            ->add("role.name", "entity", array(
                "class" =>'AppBundle\Entity\Felhasznalo\Role',
                "property" => "name",
            ))
            ->add("enabled")
        ;
    }

    public function toString($object)
    {
        return $object instanceof User
            ? $object->getName()
            : "User"; // shown in the breadcrumb on the create view
    }
}