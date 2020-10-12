<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Contact;
use App\Form\Type\ContactType;
use Doctrine\ORM\EntityManagerInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request, \Swift_Mailer $mailer, UserInterface $user = null)
    {
        $contact = $user ? Contact::createFromUser($user) : Contact::create();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact->setContactedAt(new \DateTime());

            $em = $this->getDoctrine()->getManager();

            $em->persist($contact);// prepare to insert into the database
            $em->flush();// execute all SQL queries

            $message = new \Swift_Message();
            $message->setTo('contact@example.org');
            $message->setFrom([$contact->getEmail() => $contact->getFullname()]);
            $message->setSubject($contact->getSubject());
            $message->setBody($contact->getMessage());

            $mailer->send($message);

            $this->addFlash('success', 'Thank you for you message!');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/contacts", name="admin_contact_list")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $filter = $request->query->get('filter', 'all');

        $contacts = $em->getRepository(Contact::class)->findForList($filter);

        return $this->render('contact/admin/list.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * @Route("/admin/contacts/{id}", name="admin_contact_show")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function showAction(Request $request, Contact $contact)
    {
        return $this->render('contact/admin/show.html.twig', [
            'contact' => $contact,
        ]);
    }

    /**
     * @Route("/admin/contacts/{id}/process", name="admin_contact_process")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function processAction(Request $request, Contact $contact, EntityManagerInterface $em)
    {
        $response = $this->redirectToRoute('admin_contact_show', [
            'id' => $contact->getId()
        ]);

        $token = $request->query->get('token');
        if (!$this->isCsrfTokenValid('contact_process.' . $contact->getId(), $token)) {
            $this->addFlash('error', 'CSRF token invalid.');

            return $response;
        }

        if ($contact->isProcessed()) {
            $this->addFlash('warning', 'Contact already processed.');

            return $response;
        }

        $contact->setProcessedAt(new \DateTime());

        $em->flush();

        $this->addFlash('success', 'Contact sucessfully processed.');

        return $response;
    }
}
