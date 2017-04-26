<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * @property int $id
 * @property int $appid
 * @property string $name
 * @property string $version
 * @property string $img_icon_url
 * @property string $img_logo_url
 */
class Game extends Entity
{

    /**
     * @var array
     */
    protected $_accessible = [
        '*' => false
    ];
}
