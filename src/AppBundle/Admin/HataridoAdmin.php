<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Felhasznalo\User;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class HataridoAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("name", TextType::class, array("translation_domain" => "User" ))
            ->add("description", TextType::class, array( "translation_domain" => "User" ))
            ->add("kezdete", DateTimeType::class, array(
                'placeholder' => array(
                    'year' => date("Y"),
                    'month' => date("M"),
                    'day' => date("d"),
                    'hour' => '23',
                    'minute' => '59',
                    'second' => '00',
                )))
            ->add("vege", DateTimeType::class, array(
                'placeholder' => array(
                    'year' => date("Y"),
                    'month' => (date("m") <= 9) ? "Dec" : "6",
                    'day' => date("d"),
                    'hour' => '23',
                    'minute' => '59',
                    'second' => '00',
            )))
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
            ->addIdentifier("name")
            ->add("description")
            ->add("kezdete")
            ->add("vege")
            ->add("status")
        ;
    }


}