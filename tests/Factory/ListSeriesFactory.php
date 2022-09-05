<?php
declare(strict_types=1);

namespace App\Test\Factory;

use CakephpFixtureFactories\Factory\BaseFactory as CakephpBaseFactory;
use Faker\Generator;

/**
 * ListSeriesFactory
 *
 * @method \App\Model\Entity\ListSeries getEntity()
 * @method \App\Model\Entity\ListSeries[] getEntities()
 * @method \App\Model\Entity\ListSeries|\App\Model\Entity\ListSeries[] persist()
 * @method static \App\Model\Entity\ListSeries get(mixed $primaryKey, array $options = [])
 */
class ListSeriesFactory extends CakephpBaseFactory
{
    /**
     * Defines the Table Registry used to generate entities with
     *
     * @return string
     */
    protected function getRootTableRegistryName(): string
    {
        return 'ListSeries';
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
                'serie_name' => $faker->name(),
                'serie_image' => $faker->name(),
            ];
        })
            ->withCategory(1);
    }

    public function withCategory($parameter = null, int $n = 1): self
    {
        return $this->with('Categories', CategoryFactory::make($parameter, $n));
    }
}
