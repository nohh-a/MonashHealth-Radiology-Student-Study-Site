<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CollectionsMoncasesFixture
 */
class CollectionsMoncasesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'collection_id' => 1,
                'moncase_id' => 1,
            ],
        ];
        parent::init();
    }
}
