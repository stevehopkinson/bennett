<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity
 *
 * @property int $id
 * @property int $steam_id
 * @property string $persona_name
 * @property string $profile_url
 * @property string $avatar
 * @property string $avatar_medium
 * @property string $avatar_full
 * @property string $persona_state
 * @property string $community_visible_state
 * @property string $profile_state
 * @property \Cake\I18n\Time $last_logoff
 * @property string $comment_permission
 *
 * @property \App\Model\Entity\Steam $steam
 */
class Player extends Entity
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
}
