<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-09
 * Time: 14:49
 */

namespace App\Controller;

use App\Entity\Login;
use App\Entity\Users;
use App\Repository\UsersRespository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class UsersController extends AbstractController
{

    /**
     * @Route("/", name="app_welcome")
     */
    public function welcomeTome(){
        $request = Request::createFromGlobals();
        $test = $request->query->get('id');

        return $this->render('main/welcome.html.twig', array(
            'wtf' => 'ehhh'
        ));
    }

    /**
     * @Route("users/new")
     */
    public function newAction(){
        $user = new Users();
        $user->setMail('mail@mail3.com');

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return new Response('<html><body>Sucess</body></html>');

        header('/');
    }

    /**
     * @Route("/", name="app_welcome")
     */
    public function new(Request $request){
        $user = new Login();

        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('password', TextType::class)
            ->add('submit', SubmitType::class, array('label' => 'Zaloguj'))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated

            $user_name = $form['name']->getData();
            $user_pass =$form['password']->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $em = $this->getDoctrine()->getManager();
            // $em->persist($task);
            // $em->flush();

            // sprwadz czy istneije w bazie

            $db_user = $this->getDoctrine()
                ->getRepository(Users::class)
                ->findOneBy(array('mail' => $user_name, 'password' => $user_pass));



                if($db_user){

                    $session = new Session();
                    $session->set('logged', 'prawda11');
                    $session->set('user_id', $db_user->id);

                    return $this->redirectToRoute('app_game', array(
                        'testing' => $user_name . '' . $user_pass
                    ));

                } else {
                        $session = new Session();
                        $session->set('error_login', 'Niepoprawny e-mail lub hasło, podróżniku.');
                }

        }

        if($this->get('session')->get('error_login')){
            $error_login = $this->get('session')->get('error_login');
        } else {
            $error_login = null;
        }
        $this->get('session')->remove('error_login');
        return $this->render('welcome.html.twig', array(
            'form' => $form->createView(),
            'error_login' => $error_login
        ));

    }




}