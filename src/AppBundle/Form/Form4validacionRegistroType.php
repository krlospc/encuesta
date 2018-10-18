<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class Form4validacionRegistroType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dep')->add('sie')->add('numBoleta')->add('nomInstitucioneducativa')->add('nombres')->add('paterno')->add('materno')->add('fechaRegistro')->add('antiguedad')->add('cargo')->add('telefono')->add('promovidos20161')->add('promovidos20162')->add('promovidos20163')->add('promovidos20164')->add('promovidos20165')->add('promovidos20166')->add('promovidos2016Total')->add('reprobados20161')->add('reprobados20162')->add('reprobados20163')->add('reprobados20164')->add('reprobados20165')->add('reprobados20166')->add('reprobados2016Total')->add('abandono20161')->add('abandono20162')->add('abandono20163')->add('abandono20164')->add('abandono20165')->add('abandono20166')->add('abandono2016Total')->add('traslado20161')->add('traslado20162')->add('traslado20163')->add('traslado20164')->add('traslado20165')->add('traslado20166')->add('traslado2016Total')->add('noincorporados20161')->add('noincorporados20162')->add('noincorporados20163')->add('noincorporados20164')->add('noincorporados20165')->add('noincorporados20166')->add('noincorporados2016Total')->add('matricula20161')->add('matricula20162')->add('matricula20163')->add('matricula20164')->add('matricula20165')->add('matricula20166')->add('matricula2016Total')->add('promovidos20171')->add('promovidos20172')->add('promovidos20173')->add('promovidos20174')->add('promovidos20175')->add('promovidos20176')->add('promovidos2017Total')->add('reprobados20171')->add('reprobados20172')->add('reprobados20173')->add('reprobados20174')->add('reprobados20175')->add('reprobados20176')->add('reprobados2017Total')->add('abandono20171')->add('abandono20172')->add('abandono20173')->add('abandono20174')->add('abandono20175')->add('abandono20176')->add('abandono2017Total')->add('traslado20171')->add('traslado20172')->add('traslado20173')->add('traslado20174')->add('traslado20175')->add('traslado20176')->add('traslado2017Total')->add('noincorporados20171')->add('noincorporados20172')->add('noincorporados20173')->add('noincorporados20174')->add('noincorporados20175')->add('noincorporados20176')->add('noincorporados2017Total')->add('matricula20171')->add('matricula20172')->add('matricula20173')->add('matricula20174')->add('matricula20175')->add('matricula20176')->add('matricula2017Total');
        $builder->get('nomInstitucioneducativa')
            ->addModelTransformer(new CallbackTransformer(
                function ($nomInstitucioneducativa) {
                    // transform to uppercase
                    return mb_strtoupper($nomInstitucioneducativa, 'UTF-8');
                },
                function ($nomInstitucioneducativa) {
                    // transform the string back to an array
                    return mb_strtoupper($nomInstitucioneducativa, 'UTF-8');
                }
            ))
        ;
        $builder->get('nombres')
            ->addModelTransformer(new CallbackTransformer(
                function ($nombres) {
                    // transform to uppercase
                    return mb_strtoupper($nombres, 'UTF-8');
                },
                function ($nombres) {
                    // transform the string back to an array
                    return mb_strtoupper($nombres, 'UTF-8');
                }
            ))
        ;
        $builder->get('paterno')
            ->addModelTransformer(new CallbackTransformer(
                function ($paterno) {
                    // transform to uppercase
                    return mb_strtoupper($paterno, 'UTF-8');
                },
                function ($paterno) {
                    // transform the string back to an array
                    return mb_strtoupper($paterno, 'UTF-8');
                }
            ))
        ;
        $builder->get('materno')
            ->addModelTransformer(new CallbackTransformer(
                function ($materno) {
                    // transform to uppercase
                    return mb_strtoupper($materno, 'UTF-8');
                },
                function ($materno) {
                    // transform the string back to an array
                    return mb_strtoupper($materno, 'UTF-8');
                }
            ))
        ;
        $builder->get('antiguedad')
            ->addModelTransformer(new CallbackTransformer(
                function ($antiguedad) {
                    // transform to uppercase
                    return mb_strtoupper($antiguedad, 'UTF-8');
                },
                function ($antiguedad) {
                    // transform the string back to an array
                    return mb_strtoupper($antiguedad, 'UTF-8');
                }
            ))
        ;
        $builder->get('cargo')
            ->addModelTransformer(new CallbackTransformer(
                function ($cargo) {
                    // transform to uppercase
                    return mb_strtoupper($cargo, 'UTF-8');
                },
                function ($cargo) {
                    // transform the string back to an array
                    return mb_strtoupper($cargo, 'UTF-8');
                }
            ))
        ;
        $builder->get('telefono')
            ->addModelTransformer(new CallbackTransformer(
                function ($telefono) {
                    // transform to uppercase
                    return mb_strtoupper($telefono, 'UTF-8');
                },
                function ($telefono) {
                    // transform the string back to an array
                    return mb_strtoupper($telefono, 'UTF-8');
                }
            ))
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Form4validacionRegistro'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_form4validacionregistro';
    }


}
