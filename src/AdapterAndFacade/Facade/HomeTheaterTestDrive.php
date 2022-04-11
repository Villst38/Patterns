<?php

namespace Vadim\Patterns\AdapterAndFacade\Facade;

class HomeTheaterTestDrive
{
    public static function main(): void
    {
        $home = new HomeTheaterFacade(
            new Component\Amplifier(),
            new Component\Tuner(),
            new Component\DvdPlayer(),
            new Component\CdPlayer(),
            new Component\Projector(),
            new Component\Screen(),
            new Component\TheaterLights(),
            new Component\PopcornPopper()
        );

        $home->watchMovie('Фильм');
        $home->endMovie();
    }
}