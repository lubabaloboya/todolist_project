<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//class DefaultController extends Controller
//{
//   
//}


//namespace AppBundle\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
//
//class DefaultController extends Controller
//{
//    public function contactAction(Request $request)
//    {
//        // Create the form according to the FormType created previously.
//        // And give the proper parameters
//        $form = $this->createForm('AppBundle\Controller\Form\ContactType',null,array(
//            // To set the action use $this->generateUrl('route_identifier')
//            'action' => $this->generateUrl('myapplication_contact'),
//            'method' => 'POST'
//        ));
//
//        if ($request->isMethod('POST')) {
//            // Refill the fields in case the form is not valid.
//            $form->handleRequest($request);
//
//            if($form->isValid()){
//                // Send mail
//                if($this->sendEmail($form->getData())){
//
//                    // Everything OK, redirect to wherever you want ! :
//                    
//                    return $this->redirectToRoute('redirect_to_somewhere_now');
//                }else{
//                    // An error ocurred, handle
//                    var_dump("Errooooor :(");
//                }
//            }
//        }
//
//        return $this->render('myBundle:Default:contact.html.twig', array(
//            'form' => $form->createView()
//        ));
//    }
//
//    private function sendEmail($data){
//        $myappContactMail = 'mycontactmail@mymail.com';
//        $myappContactPassword = 'yourmailpassword';
//        
//        // In this case we'll use the ZOHO mail services.
//        // If your service is another, then read the following article to know which smpt code to use and which port
//        // http://ourcodeworld.com/articles/read/14/swiftmailer-send-mails-from-php-easily-and-effortlessly
//        $transport = \Swift_SmtpTransport::newInstance('smtp.zoho.com', 465,'ssl')
//            ->setUsername($myappContactMail)
//            ->setPassword($myappContactPassword);
//
//        $mailer = \Swift_Mailer::newInstance($transport);
//        
//        $message = \Swift_Message::newInstance("Our Code World Contact Form ". $data["subject"])
//        ->setFrom(array($myappContactMail => "Message by ".$data["name"]))
//        ->setTo(array(
//            $myappContactMail => $myappContactMail
//        ))
//        ->setBody($data["message"]."<br>ContactMail :".$data["email"]);
//        
//        return $mailer->send($message);
//    }
//}