<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->createQuestion1($manager);
        $this->createQuestion2($manager);
        $this->createQuestion3($manager);
        $this->createQuestion4($manager);
        $this->createQuestion5($manager);
        $this->createQuestion6($manager);
        $this->createQuestion7($manager);
        $this->createQuestion8($manager);
        $this->createQuestion9($manager);
        $this->createQuestion10($manager);

        $manager->flush();
    }

    public function createQuestion1($manager): void
    {
        $question = new Question();
        $question->setText('1 + 1 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('3');
        $answer->setIsCorrect(false);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('2');
        $answer2->setIsCorrect(true);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('0');
        $answer3->setIsCorrect(false);
        $answer3->setQuestion($question);
        $manager->persist($answer3);
    }

    public function createQuestion2($manager): void
    {
        $question = new Question();
        $question->setText('2 + 2 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('4');
        $answer->setIsCorrect(true);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('3 + 1');
        $answer2->setIsCorrect(true);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('10');
        $answer3->setIsCorrect(false);
        $answer3->setQuestion($question);
        $manager->persist($answer3);
    }

    public function createQuestion3($manager): void
    {
        $question = new Question();
        $question->setText('3 + 3 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('1 + 5');
        $answer->setIsCorrect(true);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('1');
        $answer2->setIsCorrect(false);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('6');
        $answer3->setIsCorrect(true);
        $answer3->setQuestion($question);
        $manager->persist($answer3);

        $answer4 = new Answer();
        $answer4->setText('2 + 4');
        $answer4->setIsCorrect(true);
        $answer4->setQuestion($question);
        $manager->persist($answer4);
    }

    public function createQuestion4($manager): void
    {
        $question = new Question();
        $question->setText('4 + 4 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('8');
        $answer->setIsCorrect(true);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('4');
        $answer2->setIsCorrect(false);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('0');
        $answer3->setIsCorrect(false);
        $answer3->setQuestion($question);
        $manager->persist($answer3);

        $answer4 = new Answer();
        $answer4->setText('0 + 8');
        $answer4->setIsCorrect(true);
        $answer4->setQuestion($question);
        $manager->persist($answer4);
    }

    public function createQuestion5($manager): void
    {
        $question = new Question();
        $question->setText('5 + 5 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('6');
        $answer->setIsCorrect(false);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('18');
        $answer2->setIsCorrect(false);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('10');
        $answer3->setIsCorrect(true);
        $answer3->setQuestion($question);
        $manager->persist($answer3);

        $answer4 = new Answer();
        $answer4->setText('9');
        $answer4->setIsCorrect(false);
        $answer4->setQuestion($question);
        $manager->persist($answer4);

        $answer5 = new Answer();
        $answer5->setText('0');
        $answer5->setIsCorrect(false);
        $answer5->setQuestion($question);
        $manager->persist($answer5);
    }

    public function createQuestion6($manager): void
    {
        $question = new Question();
        $question->setText('6 + 6 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('3');
        $answer->setIsCorrect(false);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('9');
        $answer2->setIsCorrect(false);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('0');
        $answer3->setIsCorrect(false);
        $answer3->setQuestion($question);
        $manager->persist($answer3);

        $answer4 = new Answer();
        $answer4->setText('12');
        $answer4->setIsCorrect(true);
        $answer4->setQuestion($question);
        $manager->persist($answer4);

        $answer5 = new Answer();
        $answer5->setText('5 + 7');
        $answer5->setIsCorrect(true);
        $answer5->setQuestion($question);
        $manager->persist($answer5);
    }

    public function createQuestion7($manager): void
    {
        $question = new Question();
        $question->setText('7 + 7 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('5');
        $answer->setIsCorrect(false);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('14');
        $answer2->setIsCorrect(true);
        $answer2->setQuestion($question);
        $manager->persist($answer2);
    }

    public function createQuestion8($manager): void
    {
        $question = new Question();
        $question->setText('8 + 8 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('16');
        $answer->setIsCorrect(true);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('12');
        $answer2->setIsCorrect(false);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('9');
        $answer3->setIsCorrect(false);
        $answer3->setQuestion($question);
        $manager->persist($answer3);

        $answer4 = new Answer();
        $answer4->setText('5');
        $answer4->setIsCorrect(false);
        $answer4->setQuestion($question);
        $manager->persist($answer4);
    }

    public function createQuestion9($manager): void
    {
        $question = new Question();
        $question->setText('9 + 9 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('18');
        $answer->setIsCorrect(true);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('9');
        $answer2->setIsCorrect(false);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('17 + 1');
        $answer3->setIsCorrect(true);
        $answer3->setQuestion($question);
        $manager->persist($answer3);

        $answer4 = new Answer();
        $answer4->setText('2 + 16');
        $answer4->setIsCorrect(true);
        $answer4->setQuestion($question);
        $manager->persist($answer4);
    }

    public function createQuestion10($manager): void
    {
        $question = new Question();
        $question->setText('10 + 10 =');
        $manager->persist($question);

        $answer = new Answer();
        $answer->setText('0');
        $answer->setIsCorrect(false);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer2 = new Answer();
        $answer2->setText('2');
        $answer2->setIsCorrect(false);
        $answer2->setQuestion($question);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setText('8');
        $answer3->setIsCorrect(false);
        $answer3->setQuestion($question);
        $manager->persist($answer3);

        $answer4 = new Answer();
        $answer4->setText('20');
        $answer4->setIsCorrect(true);
        $answer4->setQuestion($question);
        $manager->persist($answer4);
    }
}
