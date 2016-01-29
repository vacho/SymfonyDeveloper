# Doctrine

## Guía doctrine: Creacion bases de datos, entidades, campos
http://symfony.com/doc/current/book/doctrine.html

## Relación entre entidades
http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html

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

//Consulta con joins
$query = $em->createQuery('
    SELECT q
    FROM GuumoCallBundle:Question q
    LEFT JOIN GuumoCallBundle:Ring r
        WITH q.ring = r.id
    LEFT JOIN GuumoCallBundle:InfoRequest ir
        WITH q.infoRequest = ir.id
    WHERE
    r.customer = :customer_id
    ORDER BY ir.sort ASC
')
->setParameter('customer_id', $Customer->getId());
$questionAnswer = $query->getResult();

//DQL busqueda en array y formato alterno
$questions_ids = $request->get("checkChildren");
$qb = $em->createQueryBuilder();
$qb->select('ir');
$qb->from('GuumoCallBundle:InfoRequest', 'ir');
$qb->where($qb->expr()->in('ir.id', $questions_ids));
$requests = $qb->getQuery()->getResult();
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
#### Consultas directas a la base de datos
```
$con = $this->getDoctrine()->getConnection("default");

$resInser = $con->query("INSERT INTO external_purchase VALUES (
null, '$event_id', '$origen', '$name', '$surname', '$phone', '$email',
'$url', '$origin', '$charterCode', '$charterCoupon', $isCharter, '$transaction_id' );");


$con = $this->getDoctrine()->getConnection("default");
$sql = "
  SELECT * FROM ring  
  WHERE user_id = " . $coach . " AND 
  date >= '$dateIni' AND 
  date <= '$dateFin' 
  ORDER BY date ASC
";

$arrayRings = $con->query($sql)->fetchAll();
$rings = array();
for($i = 0; $i < count($arrayRings); $i++) {
    $idRing = $arrayRings[$i]['id'];
    $dateAux = new \DateTime($arrayRings[$i]['date']);
    $rings[$i]['hour'] = $dateAux->format('H:i');
    ...
}

```

#### console
```
Imprimir en comando el ambiente
$output->writeln($this->getContainer()->get('kernel')->getEnvironment());
```
