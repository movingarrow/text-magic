<?php

namespace App\Service;

use App\Entity\FormResults;
use App\Entity\Question;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class HandleForm
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(Request $request): array
    {
        $correctQuestions = [];
        $incorrectQuestions = [];

        $questions = $this->entityManager->getRepository(Question::class)->findAll();

        foreach ($questions as $question) {

            $track = ['correct' => false, 'incorrect' => false];

            foreach ($question->getAnswers() as $answer) {

                $index = $question->getId() . '-' . $answer->getId();

                // if answer is incorrect and user answers it wrongly
                if (!$answer->getIsCorrect() && $request->request->get($index) === 'on') {
                    $track['incorrect'] = true;
                    break;
                }

                // if answer is a correct and user answers it correctly
                if ($answer->getIsCorrect() && $request->request->get($index) === 'on') {
                    $track['correct'] = true;
                }
            }

            // check if there is a single correct answer and zero wrong answers
            // then add question to correctQuestion array and vise versa
            if ($track['correct'] && !$track['incorrect']) {
                $correctQuestions[] = $question->getText();
            } else {
                $incorrectQuestions[] = $question->getText();
            }
        }

        // Store results in db
        $this->storeResults($correctQuestions, $incorrectQuestions);

        return [$correctQuestions, $incorrectQuestions];
    }

    private function storeResults(array $correctQuestions, array $incorrectQuestions): void
    {
        $result = new FormResults();
        $result->setCorrectAnswers($correctQuestions);
        $result->setIncorrectAnswers($incorrectQuestions);

        $this->entityManager->persist($result);
        $this->entityManager->flush();
    }
}
