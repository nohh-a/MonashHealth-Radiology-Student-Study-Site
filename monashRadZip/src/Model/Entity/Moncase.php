<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Moncase Entity
 *
 * @property int $id
 * @property string $image_url
 * @property string|null $accession_no
 * @property string|null $case_type
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string|null $imaging
 * @property string|null $diagnosis
 * @property string|null $differential_diagnosis
 * @property string|null $findings
 * @property string|null $teaching_points
 * @property string|null $specialty
 * @property string|null $history
 * @property int|null $max_marks
 * @property string|null $observation
 * @property string|null $intepretation
 * @property string|null $safety
 * @property string|null $intrinsic_roles
 * @property string|null $management
 * @property string|null $anatomy
 * @property string|null $pathology
 * @property string|null $further_investigation
 * @property string|null $seen_by
 * @property string|null $tags
 * @property string|null $contributor
 * @property int|null $rating
 * @property string|null $author
 * @property string $archive_status
 * @property string $saved_status
 * @property string $saved_author
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
        'image_url' => true,
        'accession_no' => true,
        'case_type' => true,
        'date' => true,
        'imaging' => true,
        'diagnosis' => true,
        'differential_diagnosis' => true,
        'findings' => true,
        'teaching_points' => true,
        'specialty' => true,
        'history' => true,
        'max_marks' => true,
        'observation' => true,
        'intepretation' => true,
        'safety' => true,
        'intrinsic_roles' => true,
        'management' => true,
        'anatomy' => true,
        'pathology' => true,
        'further_investigation' => true,
        'seen_by' => true,
        'tags' => true,
        'contributor' => true,
        'rating' => true,
        'author' => true,
        'archive_status' => true,
        'saved_status' => true,
        'saved_author' => true,
    ];
}
