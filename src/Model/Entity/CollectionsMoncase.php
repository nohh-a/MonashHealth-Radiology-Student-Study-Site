<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CollectionsMoncase Entity
 *
 * @property int $id
 * @property int $collection_id
 * @property int $moncase_id
 *
 * @property \App\Model\Entity\Collection $collection
 * @property \App\Model\Entity\Moncase $moncase
 */
class CollectionsMoncase extends Entity
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
        'collection_id' => true,
        'moncase_id' => true,
        'collection' => true,
        'moncase' => true,
    ];
}
