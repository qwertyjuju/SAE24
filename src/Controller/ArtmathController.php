<?php

/**************************************************************
 * Site symfony : Art Mathématique - courbe de koch           *
 **************************************************************
 * (c) F. BONNARDOT, 28 Février 2022                          *
 * This code is given as is without warranty of any kind.     *
 * In no event shall the authors or copyright holder be liable*
 *    for any claim damages or other liability.               *
 **************************************************************/

namespace App\Controller;

// Inclus par défaut par Symfony
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Récupération des données d'un formulaire
use Symfony\Component\HttpFoundation\Request;

// Exécution d'un process (ici fonction python)
// Doc : https://symfony.com/doc/current/components/process.html
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

// Pour renvoyer un fichier directement
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Config\Definition\Exception\Exception;

class ArtmathController extends AbstractController
{
    /**
     * @Route("/", name="racine")
     */
    public function racine() : Response
    {
        // Redirige vers /artmath si on va sur le site sans
        //  indiquer le nom de la route
        return $this->render('artmath/index.html.twig');
    }

    /**
     * @Route("/koch", name="app_koch")
     */
    public function koch($fichier='', $dimension='0'): Response
    {
        return $this->render('artmath/koch.html.twig', [
            'fichier' => $fichier,
            'dimension' => $dimension,
        ]);
    }
    
    /**
     * @Route("/nee_carre", name="app_nee_carre")
     */
    public function nee_carre(): Response
    {
        return $this->render('artmath/nee_carre.html.twig', [
            'fichier' => '',
        ]);
    }

    /**
     * @Route("/calculer_koch", name="calculer_koch")
     */
    public function calculer_koch(Request $request): Response
    {
        // Récupère les paramètres issus du formulaire (on indique le champ name)
        $dimension = $request -> request -> get("dimension") ;
        // Pour les boutons : si appui contenu champ value sinon NULL
        $calculer  = $request -> request -> get("calculer");
        $imprimer  = $request -> request -> get("imprimer");    
        $out = $this->create_pyprocess("koch.py", $dimension);
        // A t'on appuyé sur calculer ?
        if ($calculer!=NULL)
            return $this->redirectToRoute('app_koch', [
                'fichier' => $out,
                'dimension' => $dimension,
            ]);
        else {
            // On a appuyé sur imprimer
            return $this->render('artmath/imprimer.html.twig', [
                'fichier' => $out,
            ]);
        }
    }

    /**
     * @Route("/calculer_nee_carre ", name="calculer_nee_carre")
     */
    public function calculer_nee_carre(Request $request): Response
    {
        // Récupère les paramètres issus du formulaire (on indique le champ name)
        $amp_hasard = $request -> request -> get("amp_hasard") ;
        $amp_rot = $request -> request -> get("amp_rot") ;
        $nb_col = $request -> request -> get("nb_col") ;
        $nb_lignes = $request -> request -> get("nb_lignes") ;
        $taille = $request -> request -> get("taille");
        $remplissage = $request -> request -> get("remplissage");
        // Pour les boutons : si appui contenu champ value sinon NULL
        $calculer  = $request -> request -> get("calculer");
        $imprimer  = $request -> request -> get("imprimer");    
        $out = $this->create_pyprocess("nees_carre.py", $amp_hasard, $amp_rot, $nb_col, $nb_lignes, $taille, $remplissage);
        // A t'on appuyé sur calculer ?
        if ($calculer!=NULL)
            return $this->render('artmath/nee_carre.html.twig', [
                'fichier' => $out,
            ]);
        else {
            // On a appuyé sur imprimer
            return $this->render('artmath/imprimer.html.twig', [
                'fichier' => $out,
            ]);
        }
    }

    public function create_pyprocess(...$args){
        // Appelle le script Python passer en premier argument qui se trouve dans le répertoire /public
        array_unshift($args,'python3');
        $process = new Process($args);
        $process -> run();
        // Récupère la valeur de retour renvoyé par le script python
        $output=$process->getOutput();
        if (!$process->isSuccessful())
            throw new ProcessException("Erreur lors de l'éxécution du script Python :<br>".$process->getErrorOutput());
        return $output;
    }
}


class ProcessException extends Exception {}
