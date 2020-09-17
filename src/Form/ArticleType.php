<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('prix')
            ->add('date_reserv')
            ->add('date_retour')
            ->add('status')
            ->add('lieu_achat')
            ->add('reference')
            ->add('date_achat')
            ->add('fin_garantie')
            ->add('conseil_entretien')
            ->add('photo_ticket')
            ->add('manuel_utilisation')
            ->add('categorie_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
