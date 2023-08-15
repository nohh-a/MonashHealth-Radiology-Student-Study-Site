<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Moncase Entity
 *
 * @property int $id
 * @property string|null $accession_no
 * @property string $case_type
 * @property \Cake\I18n\FrozenDate $date
 * @property string $history
 * @property string $imaging
 * @property int|null $max_marks
 * @property string|null $observation
 * @property string|null $intepretation
 * @property string|null $safety
 * @property string|null $intrinsic_roles
 * @property string|null $management
 * @property string|null $anatomy
 * @property string|null $pathology
 * @property string|null $findings
 * @property string|null $diagnosis
 * @property string|null $differential_diagnosis
 * @property string|null $further_investigation
 * @property string|null $teaching_points
 * @property string|null $seen_by
 * @property string|null $tags
 * @property string $contributor
 * @property string $speciality
 * @property int|null $rating
 * @property string $author
 */
class Moncase extends Entity
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
        'accession_no' => true,
        'case_type' => true,
        'date' => true,
        'history' => true,
        'imaging' => true,
        'max_marks' => true,
        'observation' => true,
        'intepretation' => true,
        'safety' => true,
        'intrinsic_roles' => true,
        'management' => true,
        'anatomy' => true,
        'pathology' => true,
        'findings' => true,
        'diagnosis' => true,
        'differential_diagnosis' => true,
        'further_investigation' => true,
        'teaching_points' => true,
        'seen_by' => true,
        'tags' => true,
        'contributor' => true,
        'speciality' => true,
        'rating' => true,
        'author' => true,
    ];
}
