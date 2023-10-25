<?php

namespace App\Controller;

use App\Entity\Question;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\HandleForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    #[Route('/', name: 'form')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $questions = $entityManager->getRepository(Question::class)->findAll();

        if (!isset($questions)) {
           return new Response('Ошибка! Вопросы не найдены!', 400);
        }

        shuffle($questions);

        return $this->render('form/index.html.twig', [
            'questions' => $questions
        ]);
    }

    #[Route('/handle_form', name: 'handle_form')]
    public function handle(HandleForm $service, Request $request): Response
    {
        $submittedToken = $request->request->get('token');

        if (!$this->isCsrfTokenValid('form-submit', $submittedToken)) {
            return new Response('Ошибка формы!', 400);
        }

        $result = $service->handle($request);

        return $this->render('form/result.html.twig', [
            'correctQuestions' => $result[0],
            'incorrectQuestions' => $result[1],
        ]);
    }
}
