<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Security\Core\Security;
use App\Entity\File;

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
     * @Route("/imprimer", name="imprimer")
     */
    public function imprimer(Request $request): Response
    {
        $fichier = $request->request->get('fichier');
        return $this->render('artmath/imprimer.html.twig',[
            'fichier'=>$fichier
        ]);
    }


    /**
     * @Route("/oeuvressauvees", name="oeuvressauvees")
     */
    public function oeuvressauvees(Security $security, EntityManagerInterface $manager): Response
    {
        $user = $security->getUser();
        if($user){
            $files=$user->getFiles();
        }
        else{
            $files=[];
        }
        return $this->render('artmath/oeuvressaved.html.twig',[
            'files'=> $files,
        ]);
    }

    /**
     * @Route("/delete_img", name="delete_img")
     */
    public function delete_img(Security $security, EntityManagerInterface $manager, Request $request): Response
    {
        $fichierid = $request->request->get('delete');
        $fichier = $manager->getRepository(File::class)->find($fichierid);
        $nomfichier = preg_replace( "/\r|\n/", "", $fichier->getLoc());
        unlink($nomfichier);
        $manager->remove($fichier);
        $manager->flush();
        return $this->redirectToRoute('oeuvressauvees');
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
        $taille = $request -> query -> get("taille") ;
        $nb_curves = $request -> query -> get("nb_curves") ;
        $nb_groups = $request -> query -> get("nb_groups");
        $amp = $request -> query -> get("amp");
        $ecart = $request -> query -> get("ecart");
        $couleur = $request -> query -> get("couleur");
        return $this->render('artmath/oeuvre_perso.html.twig', [
            'fichier' => $fichier,
            'taille' => $taille,
            'nb_curves' => $nb_curves,
            'nb_groups' => $nb_groups,
            'amp' => $amp,
            'ecart'=>$ecart,
            'couleur'=>$couleur,
        ]);
    }

    /**
     * @Route("/oeuvre_perso2", name="app_oeuvre_perso2")
     */
    public function oeuvre_perso2(Request $request): Response
    {
        $fichier = $request->query->get('fichier');
        $taille = $request -> query -> get("taille") ;
        $nb_pol = $request -> query -> get("nb_pol") ;
        return $this->render('artmath/oeuvre_perso2.html.twig', [
            'fichier' => $fichier,
            'taille' => $taille,
            'nb_pol' => $nb_pol,
        ]);
    }

    /**
     * @Route("/calculer_koch", name="calculer_koch")
     */
    public function calculer_koch(Request $request, Security $security, EntityManagerInterface $manager): Response
    {
        // Récupère les paramètres issus du formulaire (on indique le champ name)
        $dimension = $request -> request -> get("dimension") ;
        // Pour les boutons : si appui contenu champ value sinon NULL
        $calculer  = $request -> request -> get("calculer");
        $imprimer  = $request -> request -> get("imprimer");
        $user = $security->getUser();
        if ($user){
            $username = $user->getUsername();
        }
        else{
            $username = "";
        }    
        $out = $this->create_pyprocess("koch.py", $dimension, $username);
        if ($user){
            $fichier = new File();
            $fichier->setLoc($out);
            $fichier->setIduser($user);
            $manager->persist($fichier);
            $manager->flush();
        }
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
    public function calculer_nee_carre(Request $request, Security $security, EntityManagerInterface $manager): Response
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
        $user = $security->getUser();
        if ($user){
            $username = $user->getUsername();
        }
        else{
            $username = "";
        }   
        $out = $this->create_pyprocess("nees_carre.py", $amp_hasard, $amp_rot, $nb_col, $nb_lignes, $taille, $remplissage, $username);
        if ($user){
            $fichier = new File();
            $fichier->setLoc($out);
            $fichier->setIduser($user);
            $manager->persist($fichier);
            $manager->flush();
        }
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
    public function calculer_suite_carre(Request $request, Security $security, EntityManagerInterface $manager): Response
    {
        // Récupère les paramètres issus du formulaire (on indique le champ name)
        $decalage = $request -> request -> get("decalage") ;
        $nb_carres = $request -> request -> get("nb_carres") ;
        $taille = $request -> request -> get("taille");
        $remplissage = $request -> request -> get("remplissage");
        // Pour les boutons : si appui contenu champ value sinon NULL
        $calculer  = $request -> request -> get("calculer");
        $imprimer  = $request -> request -> get("imprimer");
        $user = $security->getUser();
        if ($user){
            $username = $user->getUsername();
        }
        else{
            $username = "";
        } 
        $out = $this->create_pyprocess("suite_carres.py", $taille, $remplissage, $nb_carres, $decalage, $username);
        if ($user){
            $fichier = new File();
            $fichier->setLoc($out);
            $fichier->setIduser($user);
            $manager->persist($fichier);
            $manager->flush();
        }
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

    /**
     * @Route("/calculer_oeuvre ", name="calculer_oeuvre")
     */
    public function calculer_oeuvre(Request $request, Security $security, EntityManagerInterface $manager): Response
    {
        // Récupère les paramètres issus du formulaire (on indique le champ name)
        $taille = $request -> request -> get("taille") ;
        $nb_curves = $request -> request -> get("nb_curves") ;
        $nb_groups = $request -> request -> get("nb_groups");
        $amp = $request -> request -> get("amp");
        $ecart = $request -> request -> get("ecart");
        $couleur = $request -> request -> get("couleur");
        // Pour les boutons : si appui contenu champ value sinon NULL
        $calculer  = $request -> request -> get("calculer");
        $imprimer  = $request -> request -> get("imprimer");
        $user = $security->getUser();
        if ($user){
            $username = $user->getUsername();
        }
        else{
            $username = "";
        }    
        $out = $this->create_pyprocess("oeuvre.py", $taille, $nb_curves, $nb_groups, $ecart, $amp, $couleur, $username);
        if ($user){
            $fichier = new File();
            $fichier->setLoc($out);
            $fichier->setIduser($user);
            $manager->persist($fichier);
            $manager->flush();
        }
        // A t'on appuyé sur calculer ?
        if ($calculer!=NULL)
            return $this->redirectToRoute('app_oeuvre_perso', [
                'fichier' => $out,
                'taille' => $taille,
                'nb_curves' => $nb_curves,
                'nb_groups' => $nb_groups,
                'amp' => $amp,
                'ecart'=>$ecart,
                'couleur'=>$couleur,
            ]);
        else {
            // On a appuyé sur imprimer
            return $this->render('artmath/imprimer.html.twig', [
                'fichier' => $out,
            ]);
        }
    }

    /**
     * @Route("/calculer_oeuvre2 ", name="calculer_oeuvre2")
     */
    public function calculer_oeuvre2(Request $request, Security $security, EntityManagerInterface $manager): Response
    {
        // Récupère les paramètres issus du formulaire (on indique le champ name)
        $taille = $request -> request -> get("taille") ;
        $nb_pol = $request -> request -> get("nb_pol") ;
        // Pour les boutons : si appui contenu champ value sinon NULL
        $calculer  = $request -> request -> get("calculer");
        $imprimer  = $request -> request -> get("imprimer");
        $user = $security->getUser();
        if ($user){
            $username = $user->getUsername();
        }
        else{
            $username = "";
        }
        $out = $this->create_pyprocess("oeuvre2.py", $taille, $nb_pol, $username);
        if ($user){
            $fichier = new File();
            $fichier->setLoc($out);
            $fichier->setIduser($user);
            $manager->persist($fichier);
            $manager->flush();
        }
        if ($calculer!=NULL)
            return $this->redirectToRoute('app_oeuvre_perso2', [
                'fichier' => $out,
                'taille' => $taille,
                'nb_pol' => $nb_pol,
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
