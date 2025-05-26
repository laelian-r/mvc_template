<?php

namespace App;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\InvalidArgumentException;
use App\Models\HomeManager;

include 'src/config/config.php';

final class HomeTest extends TestCase
{

    protected $homeManager;

    /**
     * @before
     */
    public function initTestEnvironment()
    {
        $this->homeManager = new HomeManager();
    }




    public function testModels(): void
    {
        // assertEquals compare la valeur que j'ai rentré ('2') avec la valeur attendue que j'ai dans la base de données ('roule')
        // la fonction findTest est une fonction créée dans le HomeManager pour récupérer l'id de la chanson 'roule'
        $this->assertEquals('2', $this->homeManager->findTest('roule'));
    }

    public function testModels3(): void
    {
        // Cette ligne compte le nombre d'utilisateurs qui sont associés à l'email 'test@email.com' et le compare avec 1
        // La fonction getEmailUnique est une fonction créée dans le HomeManager pour récupérer un utilisateur par email
        $this->assertCount(1, $this->chansonManager->getEmailUnique('test@email.com'));
    }
}