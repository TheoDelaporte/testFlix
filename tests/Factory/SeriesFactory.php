<?php
declare(strict_types=1);

namespace App\Test\Factory;

use CakephpFixtureFactories\Factory\BaseFactory as CakephpBaseFactory;
use Faker\Generator;

/**
 * SeriesFactory
 *
 * @method \App\Model\Entity\Series getEntity()
 * @method \App\Model\Entity\Series[] getEntities()
 * @method \App\Model\Entity\Series|\App\Model\Entity\Series[] persist()
 * @method static \App\Model\Entity\Series get(mixed $primaryKey, array $options = [])
 */
class SeriesFactory extends CakephpBaseFactory
{
    /**
     * Defines the Table Registry used to generate entities with
     *
     * @return string
     */
    protected function getRootTableRegistryName(): string
    {
        return 'Series';
    }

    /**
     * Defines the factory's default values. This is useful for
     * not nullable fields. You may use methods of the present factory here too.
     *
     * @return void
     */
    protected function setDefaultTemplate(): void
    {
        $this->setDefaultData(function (Generator $faker) {
            return [
                'episode_name' => $faker->name(),
                'episode_rank' => $faker->randomNumber(8),
            ];
        })
            ->withListSerie(1);
    }

    public function withListSerie($parameter = null, int $n = 1): self
    {
        return $this->with('ListSeries', ListSeriesFactory::make($parameter, $n));
    }
}
