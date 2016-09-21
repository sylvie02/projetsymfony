<?php
 namespace article\ArticleBundle\Form\Type;

 use Symfony\Component\Form\AbstractType;
 use Symfony\Component\Form\FormBuilderInterface;
 use Symfony\Component\OptionResolver\OptionResolver;

 use Symfony\Component\Form\Extension\Core\Type\TextType;
 use Symfony\Component\Form\Extension\Core\Type\TextareaType;
 use Symfony\Component\Form\Extension\Core\Type\SubmitType;

 class ArticleType extends AbstractType{

   public function buildForm(FormBuilderInterface $builder,array $options){
      $builder
        ->add('title', TextType::class)
        ->add('content', TextareaType::class)
        ->add('preview', TextType::class)
        ->add('save', SubmitType::class,[
                "label" => "enregistrer"
        ])
      ;

   }

   public function configureOption(OptionResolver $resolver){
      $resorver->setDefaults(array(

      ));
   }
 }
