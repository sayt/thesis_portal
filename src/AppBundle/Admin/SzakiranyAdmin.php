<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use AppBundle\Entity\Intezmeny\Szakirany;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class SzakiranyAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("name", TextType::class, array("translation_domain" => "User"))
            ->add("intezet", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Intezet',
                "property" => "name",
            ))
            ->add("user", EntityType::class, array(
                "class" => 'AppBundle\Entity\Felhasznalo\User',
                "property" => "name",
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->innerJoin('u.role', 'r')
                        ->Where("r.name LIKE '%oktató%'")
                    ;
                }
            ))
            ->add("targy", null, array(
                "class" => 'AppBundle\Entity\Intezmeny\Targy',
                "property" => "name",
            ))
            ->add("status", ChoiceType::class, array(
                "translation_domain" => "User",
                "choices" => array(
                    true => "Aktív",
                    false => "Passiv",
                ),
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add("name");
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add("intezet.szak.kar.name", null, array("label" => "Kar"))
            ->add("intezet.szak.name", null, array("label" => "Szak"))
            ->add("intezet.name", null, array("label" => "Intézet"))
            ->addIdentifier("name", null, array("label" => "Szakirány"))
            ->add("user.name")
            ;
    }

    public function toString($object)
    {
        return $object instanceof Szakirany
            ? $object->getName()
            : 'Szakirany'; // shown in the breadcrumb on the create view
    }
}