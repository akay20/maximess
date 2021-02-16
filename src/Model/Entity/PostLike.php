<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostLike Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $post_id
 * @property bool|null $post_like
 * @property bool|null $post_unlike
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Post $post
 */
class PostLike extends Entity
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
        'user_id' => true,
        'post_id' => true,
        'post_like' => true,
        'post_unlike' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'post' => true,
    ];
}
