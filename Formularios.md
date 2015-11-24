# Formularios

## 
#### Campos
Customización de campos
```
// En el metodo buildForm del 'Type' que define el formulario
        $builder
            ->add('label', null, array(
              'label' => 'Pregunta',
              'attr' => array(
                'size' => '400',
                'style' => 'width:400px'
              )
            ))
            ->add('description', 'textarea', array(
              'label' => 'Descripción',
              'attr' => array(
                'size' => '400',
                'style' => 'width:400px'
              )
            ))
            ->add('sort', null, array('label' => 'Orden'))
            ->add('renderLabel', null, array('label' => 'Etiqueta'))
            ->add('isRenderable', null, array('label' => 'Es etiquetable'))
            ->add('renderType', null, array('label' => 'Tipo etiqueta'))
            ->add('dateAdded', 'datetime', array('label' => 'Agregada'))
            ->add('dateUpdated', null, array('label' => 'Actualizada'))
            ->add('type', 'choice', array(
              'label' => 'Tipo',
              'choices'  => array(
                'yes-no' => 'Si o No',
                '0-10' => '0 al 10',
                'number' => 'Número',
                'text' => 'Texto',
              ),
              'required' => false,
            ))
            ->add('parent', null, array('label' => 'Padre'))
        ;
```

#### Referencias
Tipos de campos en formularios
http://symfony.com/doc/current/reference/forms/types.html

