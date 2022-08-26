<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ListSeriesFixture
 */
class ListSeriesFixture extends TestFixture
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
                'serie_name' => 'Lorem ipsum dolor sit amet',
                'serie_image' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-08-16 14:16:10',
                'modified' => '2022-08-16 14:16:10',
            ],
        ];
        parent::init();
    }
}
