<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsCategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsCategoryTable Test Case
 */
class ProductsCategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsCategoryTable
     */
    public $ProductsCategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_category'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductsCategory') ? [] : ['className' => 'App\Model\Table\ProductsCategoryTable'];
        $this->ProductsCategory = TableRegistry::get('ProductsCategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsCategory);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
