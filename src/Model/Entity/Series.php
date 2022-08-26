<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Series Entity
 *
 * @property int $id
 * @property string $episode_name
 * @property int $episode_rank
 * @property int $listSerie_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ListSeries $list_series
 */
class Series extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'episode_name' => true,
        'episode_rank' => true,
        'listSerie_id' => true,
        'created' => true,
        'modified' => true,
        'list_series' => true,
    ];
}
