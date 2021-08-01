<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PessoasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class PessoasTableTest extends TestCase
{

    public $Pessoas;

    public $fixtures = [
        'app.pessoas',
        'app.users'
    ];

    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pessoas') ? [] : ['className' => PessoasTable::class];
        $this->Pessoas = TableRegistry::getTableLocator()->get('Pessoas', $config);
    }

    public function tearDown()
    {
        unset($this->Pessoas);

        parent::tearDown();
    }

    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
