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
              ),
              'required' => false,
            ))
            ->add('sort', null, array('label' => 'Orden'))
            ->add('renderLabel', null, array('label' => 'Etiqueta'))
            ->add('active', null, array('label' => 'Activo'))
            ->add('dateAdded', 'datetime', array(
              'widget' => 'single_text',
              'attr' => array('class' => 'datetime'),
              'required' => false,
              'read_only' => true,
            ))
            ->add('dateUpdated', 'datetime', array(
              'widget' => 'single_text',
              'attr' => array('class' => 'datetime'),
              'required' => false,
              'read_only' => true,
            ))
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
Selector calendario con hora con jquery calendar
```
//Se necesita tener datetimepicker.js incluido
        ->add('dateAdded', 'datetime', array(
              'widget' => 'single_text',
              'format' => 'dd-MM-yyyy',
              'attr' => array('class' => 'datetime')
        ))
```

#### Referencias
Tipos de campos en formularios
http://symfony.com/doc/current/reference/forms/types.html

Transformar campos antes que haga submit
http://symfony.com/doc/master/cookbook/form/data_transformers.html

Modificación dinámica de formularios
http://symfony.com/doc/master/cookbook/form/dynamic_form_modification.html

