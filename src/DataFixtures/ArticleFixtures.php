<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Articles;
use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {

            $article = new Articles();
            $article->setTitle('Voitur volante')
                    ->setDescription("Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry $i")
                    ->setImage('http://placehold.it/350x150')
                    ->setCreatedAt(new \DateTimeImmutable())
                    ->setContent('Lorem Ipsum is simply dummy
                    text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry took a galley
                    of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, 
                    but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised
                    in the 1960s with the release of Letraset sheets containi');

            $manager->persist($article);
        }


        $manager->flush();
    }
}
