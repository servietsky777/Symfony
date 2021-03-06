<?php
// src/test/BlogBundle/Controller/BlogController.php
 
namespace test\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

class BlogController extends Controller
{
	public function indexAction()
	{
	  // …
	 
	  // Les articles :
	  $articles = array(
		array(
		  'titre'   => 'Mon weekend a Phi Phi Island !',
		  'id'      => 1,
		  'auteur'  => 'winzou',
		  'contenu' => 'Ce weekend était trop bien. Blabla…',
		  'date'    => new \Datetime()),
		array(
		  'titre'   => 'Repetition du National Day de Singapour',
		  'id'      => 2,
		  'auteur' => 'winzou',
		  'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
		  'date'    => new \Datetime()),
		array(
		  'titre'   => 'Chiffre d\'affaire en hausse',
		  'id'      => 3, 
		  'auteur' => 'M@teo21',
		  'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
		  'date'    => new \Datetime())
	  );
		 
	  // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
	  return $this->render('testBlogBundle:Blog:index.html.twig', array(
		'articles' => $articles
	  ));
	}
	public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    // On pourra récupérer $nombre articles depuis la BDD,
    // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    $liste = array(
      array('id' => 2, 'titre' => 'Mon dernier weekend !'),
      array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
      array('id' => 9, 'titre' => 'Petit test')
    );
     
    return $this->render('testBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }
  public function voirAction($id)
    {
  // …
 
  $article = array(
    'id'      => 1,
    'titre'   => 'Mon weekend a Phi Phi Island !',
    'auteur'  => 'winzou',
    'contenu' => 'Ce weekend était trop bien. Blabla…',
    'date'    => new \Datetime()
  );
     
  // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
  return $this->render('testBlogBundle:Blog:voir.html.twig', array(
    'article' => $article
  ));
    }
	
	public function modifierAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id
 
    // Ici, on s'occupera de la création et de la gestion du formulaire
 
    $article = array(
      'id'      => 1,
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()
    );
         
    // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
    return $this->render('testBlogBundle:Blog:modifier.html.twig', array(
      'article' => $article
    ));
	}
	
	public function ajouterAction()
  {
         
    // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
    return $this->render('testBlogBundle:Blog:ajouter.html.twig');
  }
  
  public function supprimerAction($id)
    {
  // …
 
  $article = array(
    'id'      => 1,
    'titre'   => 'Mon weekend a Phi Phi Island !',
    'auteur'  => 'winzou',
    'contenu' => 'Ce weekend était trop bien. Blabla…',
    'date'    => new \Datetime()
  );
     
  // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
  return $this->render('testBlogBundle:Blog:supprimer.html.twig', array(
    'article' => $article
  ));
    }
}