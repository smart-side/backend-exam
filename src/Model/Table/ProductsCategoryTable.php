<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsCategory Model
 *
 * @method \App\Model\Entity\ProductsCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductsCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsCategory findOrCreate($search, callable $callback = null)
 */
class ProductsCategoryTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('products_category');
        $this->displayField('id_product');
        $this->primaryKey(['id_product', 'id_category']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_product')
            ->allowEmpty('id_product', 'create');

        $validator
            ->integer('id_category')
            ->allowEmpty('id_category', 'create');

        return $validator;
    }
}
