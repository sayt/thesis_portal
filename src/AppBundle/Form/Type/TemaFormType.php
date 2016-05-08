<?php
namespace AppBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityRepository;

class TemaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("hun_name", TextType::class)
            ->add("eng_name", TextType::class)
            ->add("szak", EntityType::class, array(
                "class" => 'AppBundle\Entity\Intezmeny\Szak',
                "property" => "name",
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('sz')
                        ->innerJoin('sz.kar', 'k')
/*????*/                        ->Where("k.id = 1")
                        ;
                }
            ))
            ->add("language", ChoiceType::class, array(
                "choices" => array(
                    "hun" => "Magyar",
                    "eng" => "Angol",
                )
            ))
            ->add("hallgato_szam", ChoiceType::class, array(
                "choices" => array(
                    "1" => 1,
                    "2" => 2,
                    "3" => 3,
                    "4" => 4,
                    "5" => 5,
                )
            ))
            ->add("description", TextareaType::class)
            ->add("titkos", ChoiceType::class, array(
                "choices" => array(
                    "0" => "Nem",
                    "1" => "Igen",
                )
            ))
            ->add("create", SubmitType::class)
        ;
    }

}