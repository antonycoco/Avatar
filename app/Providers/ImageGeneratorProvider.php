<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 03/12/2018
 * Time: 11:24
 */

namespace App\Providers;

require __DIR__ .'/vendor/autoload.php';

use bheller\ImagesGenerator\ImagesGeneratorProvider;

$faker = Faker\Factory::create();
$faker->addProvider(new ImagesGeneratorProvider($faker));
$image = $faker->imageGenerator();
?>
<img src="<?php echo $image; ?>">
