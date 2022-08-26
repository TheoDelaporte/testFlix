<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SeriesFixture
 */
class SeriesFixture extends TestFixture
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
                'episode_name' => 'Lorem ipsum dolor sit amet',
                'episode_rank' => 1,
                'listSerie_id' => 1,
                'created' => '2022-08-16 14:16:19',
                'modified' => '2022-08-16 14:16:19',
            ],
        ];
        parent::init();
    }
}
