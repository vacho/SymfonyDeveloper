# SymfonyDeveloper

## Entity query

#### INICIAMOS UN REPOSITORIO
```
$em = $this->getContainer()->get('doctrine')->getManager();
$repository = $em->getRepository('AppBundle:Product');
```

#### CONSULTAS
Un producto por su id
```
$product = $repository->find(5442);
```

Un producto coinciden nombre y precio
```
$product = $repository->findOneBy(
    array('name' => 'foo', 'price' => 19.99)
);
```
Todos los productos hallando el nombre ordenados por pecio
```
$products = $repository->findBy(
    array('name' => 'foo'),
    array('price' => 'ASC')
);
```
Consultas con la flexibilidad de DQL
```
$query = $em->createQuery(
    'SELECT p
    FROM AppBundle:Product p
    WHERE p.price > :price
    ORDER BY p.price ASC'
)->setParameter('price', '19.99');

$products = $query->getResult();
//Para obtener un sólo resultado
//$product = $query->setMaxResults(1)->getOneOrNullResult();


$deadlineMessage = new \DateTime();
$toleranceMessage = 8760; //1 año en horas
$deadlineMessage->modify("-$toleranceMessage hours");

$query = $em->createQuery(
    "SELECT a
    FROM TaronEventBundle:Assistant a
    WHERE
    (
    a.isAttended IS NULL OR
    a.isAttended = FALSE
    )
    AND
    a.time > :limitDate
")->setParameter('limitDate', $deadlineMessage->format('Y-m-d H:i:s'));
$assistants = $query->getResult();
```
#### REGISTRO
```
$product = new Product();
$product->setName('A Foo Bar');
$product->setPrice('19.99');
$product->setDescription('Lorem ipsum dolor');

$em = $this->getDoctrine()->getManager();
$em->persist($product);
$em->flush();
```
