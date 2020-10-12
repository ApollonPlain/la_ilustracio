<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Form\Type\UserRegistrationType;
use App\Form\Type\UserUpdatePasswordType;
use App\Form\Type\UserEditProfileType;
use Ramsey\Uuid\Uuid;

class UserController extends AbstractController
{
    /**
     * @Route("/update-password", name="update_password")
     */
    public function updatePasswordAction(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $em, UserInterface $user)
    {
        $form = $this->createForm(UserUpdatePasswordType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('new_password')->getData();

            $password = $passwordEncoder->encodePassword($user, $plainPassword);
            $user->setPassword($password);

            $em->flush();// execute all SQL queries

            $this->addFlash('success', 'Password updated!');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('user/update_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $em)
    {
        //$user = new User((string) Uuid::uuid4());
        $user = new User();

        $form = $this->createForm(UserRegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRegisteredAt(new \DateTime());
            $user->setIsAdmin(false);

            $plainPassword = $form->get('password')->getData();

            $password = $passwordEncoder->encodePassword($user, $plainPassword);
            $user->setPassword($password);

            $em->persist($user);// prepare to insert into the database
            $em->flush();// execute all SQL queries

            $this->addFlash('success', 'Welcome!');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

     /**
     * @Route("/user/{id}/edit", name="edit_profile")
     */
    public function editProfileAction(Request $request, User $user)
    {
        $form = $this->createForm(UserEditProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Profile updated!');

            return $this->redirectToRoute('profile');
        }

        return $this->render('user/edit_profile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('user/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

     /**
     * @Route("/admin/users", name="admin_user_list")
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $filter = $request->query->get('filter', 'all');
        $users = $em->getRepository(User::class)->findForList($filter);

        return $this->render('user/admin/list.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/admin/users/{id}", name="admin_user_show")
     * @Security("is_granted('ROLE_ADMIN')")
     */
     public function showAction(Request $request, User $user)
     {
         return $this->render('user/admin/show.html.twig', [
             'user' => $user,
         ]);
     }

     /**
     * @Route("/admin/users/{id}/edit", name="admin_user_edit")
     */
    public function editAction(Request $request, User $user)
    {
        $form = $this->createForm(UserEditProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'User updated!');

            return $this->redirectToRoute('admin_user_list');
        }

        return $this->render('user/admin/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/profile/", name="profile")
     */
    public function profileAction(Request $request)
    {
        return $this->render('user/profile.html.twig');
    }
}
