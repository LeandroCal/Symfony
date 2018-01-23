<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    //para añadir rutas
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

    //para redireccionar
    use Symfony\Component\HttpFoundation\RedirectResponse;

    //leer ficheros
    use Symfony\Component\HttpFoundation\File\File;

    //abrir fichero directamente en el navegador
    use Symfony\Component\HttpFoundation\ResponseHeaderBag;

    //sessiones
    use Symfony\Component\HttpFoundation\Session\SessionInterface;

    //peticion
    use Symfony\Component\HttpFoundation\Request;


    class BlogController extends Controller
    {

        /**
        * @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"}, defaults={"page"=1})
        */
        public function list(SessionInterface $session, $page)
        {

          //session
          $session->set('foo', 'bar');

          return new Response(
              "<html><body>". $session->get('foo') ."</body></html>"
          );

          //trae fichero
          return $this->file('../static/hola.txt', 'hola',ResponseHeaderBag::DISPOSITION_INLINE);

          //muestra json
          return $this->json(array('username' => 'jane.doe'));

          //manda error 404
          throw $this->createNotFoundException('The product does not exist');

          //redirecciona a otra ruta
          return $this->redirectToRoute('lucky_number');

          $page;
          $content = "<h3>Página: " . $page . "</h3><ul>";
          for($i = 1; $i <= 10; $i++){
            $content .= "<li>Entrada $i </li>";
          }
          $content .= "</ul>";
            return new Response(
                "<html><body>$content</body></html>"
            );
        }

        /**
        * @Route("/blog/{entryName}", name="blog_show")
        */
        public function show($entryName)
        {

          $url = $this->generateUrl(
                'blog_show',
                array('entryName' => $entryName)
                );

            return new Response(
                '<html><body>Entrada: ' . $entryName . '<br> url: ' . $url . '</body></html>'
            );
        }

        /**
        * @Route("/blog/{entryName}/{entryId}", name="blog_show_by_id")
        */
        public function showById($entryId)
        {
          $url = $this->generateUrl('blog_list', array(
                'page' => $entryId,
                'category' => 'Symfony',
            ), UrlGeneratorInterface::ABSOLUTE_URL);

           return new Response(
               '<html><body>Entrada: ' . $entryId . '<br>url: ' . $url . '</body></html>'
           );
        }

    }
?>
