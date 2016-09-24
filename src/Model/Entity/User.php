<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $pass
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
    
//    protected function _setPassword($value)
//    {
//        $this->log($value);
//        $hasher = new DefaultPasswordHasher();
//        $this->log($hasher);
//        return $hasher->hash($value);
//    }
//    
//    protected function _setPass($value)
//    {
//        $this->log($value);
//        $hasher = new DefaultPasswordHasher();
//        $this->log($hasher);
//        return $hasher->hash($value);
//    }
}
