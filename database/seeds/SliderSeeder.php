<?php

use App\SliderContent;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider_contents = new SliderContent();
        $slider_contents->title= 'PROMOCIONES';
        $slider_contents->icon= 'icon-1557935000.png';
        $slider_contents->content= 'Un préstamo es más que un simple préstamo, es la oportunidad para crear un futuro y hacer realidad proyectos de vida como los tuyos. En Crediapoyo lo entendemos y por eso te ofrecemos un servicio cercano de acuerdo a tus necesidades.';
        $slider_contents->save();

        $slider_contents = new SliderContent();
        $slider_contents->title= 'El apoyo que necesitas';
        $slider_contents->icon= 'icon-1557934218.png';
        $slider_contents->content= 'En Crediapoyo estamos listos para hacer realidad tus sueños poniendo a tu alcance un crédito de la manera que tú te mereces: fácil, rápido, eficiente y a tu medida.';
        $slider_contents->save();

        $slider_contents = new SliderContent();
        $slider_contents->title= 'Sucursales';
        $slider_contents->icon= 'icon-1557934243.png';
        $slider_contents->content= '¡Queremos conocerte! Por eso contamos con diferentes sucursales en diferentes puntos de la República Mexicana. Te esperamos en Chiapas, Tamaulipas y Michoacán.';
        $slider_contents->save();
    }
}
