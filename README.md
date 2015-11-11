# SymfonyDeveloper

## Entity query

-- INICIAMOS UN REPOSITORIO
$repository = $this->getDoctrine()->getRepository('AppBundle:Product');

-- CONSULTAS
// Un producto coinciden nombre y precio
$product = $repository->findOneBy(
    array('name' => 'foo', 'price' => 19.99)
);

// Todos los productos hallando el nombre ordenados por pecio
$products = $repository->findBy(
    array('name' => 'foo'),
    array('price' => 'ASC')
);

-- REGISTRO
$product = new Product();
$product->setName('A Foo Bar');
$product->setPrice('19.99');
$product->setDescription('Lorem ipsum dolor');

$em = $this->getDoctrine()->getManager();
$em->persist($product);
$em->flush();
