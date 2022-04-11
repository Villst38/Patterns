<?php

namespace Vadim\Patterns\AdapterAndFacade\Facade;

use Vadim\Patterns\AdapterAndFacade\Facade\Component;

class HomeTheaterFacade
{
    private Component\Amplifier $amp;
    private Component\Tuner $tuner;
    private Component\DvdPlayer $dvd;
    private Component\CdPlayer $cd;
    private Component\Projector $projector;
    private Component\Screen $screen;
    private Component\TheaterLights $lights;
    private Component\PopcornPopper $popper;

    public function __construct(
        Component\Amplifier $amp,
        Component\Tuner $tuner,
        Component\DvdPlayer $dvd,
        Component\CdPlayer $cd,
        Component\Projector $projector,
        Component\Screen $screen,
        Component\TheaterLights $lights,
        Component\PopcornPopper $popper
    )
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie)
    {
        $this->popper->on();
        $this->popper->pop();

        $this->lights->dim(10);

        $this->screen->down();

        $this->projector->on();
        $this->projector->wideScreenMode();

        $this->amp->on();
        $this->amp->setDvd($dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);

        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie()
    {
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}