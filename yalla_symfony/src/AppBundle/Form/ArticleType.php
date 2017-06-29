<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreArticle', TextType::class)
            ->add('idCategorie', EntityType::class, array(
                'class' => 'AppBundle:Categorie',
                'choice_label' => 'nomCategorie'
            ))
            ->add('fichierArticle', TextType::class)

            ->add('paragrapheArticle', TextareaType::class)
            ->add('idLangue', EntityType::class, array(
                'class' => 'AppBundle:Langue',
                'choice_label' => 'nomLangue'
            ))
            ->add('idPublication', EntityType::class, array(
                'class' => 'AppBundle:Publication',
                'choice_label' => 'nomPublication'
            ))
            ->add('idRedacteur', EntityType::class, array(
                'class' => 'AppBundle:Redacteur',
                'choice_label' => 'nomRedacteur'
            ))
            ->add('imageArticle', TextType::class);
            /*
            ->add('titreArticle')
            ->add('slugArticle')
            ->add('dateArticle')
            ->add('fichierArticle')
            ->add('paragrapheArticle');
            */
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_articles';
    }


}
