<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SavesFixture
 */
class SavesFixture extends TestFixture
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
                'id' => 1,
                'user_id' => '75e0ca33-ab8d-4cbc-88d6-2331d1d7cde8',
                'moncase_id' => 1,
            ],
        ];
        parent::init();
    }
}
