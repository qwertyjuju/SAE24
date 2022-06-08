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
     * @Route("/cr", name="app_cr")
     */
    public function cr(): Response
    {
        return $this->render('artmath/cr.html.twig');
    }

    /**
     * @Route("/koch", name="app_koch")
     */
    public function koch(Request $request): Response
    {
        $fichier = $request->query->get('fichier');
        $dimension = $request->query->get('dimension');
        return $this->render('artmath/koch.html.twig', [
            'fichier' => $fichier,
            'dimension' => $dimension,
        ]);
    }
    
    /**
     * @Route("/nee_carre", name="app_nee_carre")
     */
    public function nee_carre(Request $request): Response
    {
        $fichier = $request->query->get('fichier');
        $amp_hasard = $request -> query -> get("amp_hasard") ;
        $amp_rot = $request -> query -> get("amp_rot") ;
        $nb_col = $request -> query -> get("nb_col") ;
        $nb_lignes = $request -> query -> get("nb_lignes") ;
        $taille = $request -> query -> get("taille");
        $remplissage = $request -> query -> get("remplissage");
        return $this->render('artmath/nee_carre.html.twig', [
            'fichier' => $fichier,
            'amp_hasard' => $amp_hasard,
            'amp_rot' => $amp_rot,
            'nb_col' => $nb_col,
            'nb_lignes' => $nb_lignes,
            'taille' => $taille,
            'remplissage' => $remplissage,
        ]);
    }

    /**
     * @Route("/suite_carre", name="app_suite_carre")
     */
    public function suite_carre(Request $request): Response
    {
        $fichier = $request->query->get('fichier');
        $nb_carres = $request -> query -> get("nb_carres") ;
        $decalage = $request -> query -> get("decalage") ;
        $taille = $request -> query -> get("taille");
        $remplissage = $request -> query -> get("remplissage");
        return $this->render('artmath/suite_carre.html.twig', [
            'fichier' => $fichier,
            'nb_carres' => $nb_carres,
            'decalage' => $decalage,
            'taille' => $taille,
            'remplissage' => $remplissage,
        ]);
    }
    
    /**
     * @Route("/oeuvre_perso", name="app_oeuvre_perso")
     */
    public function oeuvre_perso(Request $request): Response
    {
        $fichier = $request->query->get('fichier');
        return $this->render('artmath/oeuvre_perso.html.twig', [
            'fichier' => $fichier,
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
        $amp_rot = $request -> request -> get("amp_rot");
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
            return $this->redirectToRoute('app_nee_carre', [
                'fichier' => $out,
                'amp_hasard' => $amp_hasard,
                'amp_rot' => $amp_rot,
                'nb_col' => $nb_col,
                'nb_lignes' => $nb_lignes,
                'taille' => $taille,
                'remplissage' => $remplissage,
            ]);
        else {
            // On a appuyé sur imprimer
            return $this->render('artmath/imprimer.html.twig', [
                'fichier' => $out,
            ]);
        }
    }

    /**
     * @Route("/calculer_suite_carre ", name="calculer_suite_carre")
     */
    public function calculer_suite_carre(Request $request): Response
    {
        // Récupère les paramètres issus du formulaire (on indique le champ name)
        $decalage = $request -> request -> get("decalage") ;
        $nb_carres = $request -> request -> get("nb_carres") ;
        $taille = $request -> request -> get("taille");
        $remplissage = $request -> request -> get("remplissage");
        // Pour les boutons : si appui contenu champ value sinon NULL
        $calculer  = $request -> request -> get("calculer");
        $imprimer  = $request -> request -> get("imprimer");    
        $out = $this->create_pyprocess("suite_carres.py", $taille, $remplissage, $nb_carres, $decalage);
        // A t'on appuyé sur calculer ?
        if ($calculer!=NULL)
            return $this->redirectToRoute('app_suite_carre', [
                'fichier' => $out,
                'decalage' => $decalage,
                'nb_carres' => $nb_carres,
                'taille' => $taille,
                'remplissage' => $remplissage,
            ]);
        else {
            // On a appuyé sur imprimer
            return $this->render('artmath/imprimer.html.twig', [
                'fichier' => $out,
            ]);
        }
    }

    public function create_pyprocess(...$args){
        array_unshift($args,'python3');
        $process = new Process($args);
        $process -> run();
        $output=$process->getOutput();
        if (!$process->isSuccessful())
            throw new Exception("Erreur lors de l'éxécution du script Python :<br>".$process->getErrorOutput());
        return $output;
    }
}
