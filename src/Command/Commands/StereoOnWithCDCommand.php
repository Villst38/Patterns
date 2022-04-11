<?php

namespace Vadim\Patterns\Command\Commands;

use Vadim\Patterns\Command\MiniProgram\Stereo;

class StereoOnWithCDCommand implements \Vadim\Patterns\Command\Command
{
    private Stereo $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }

    public function undo(): void
    {
        // TODO: Implement undo() method.
    }
}