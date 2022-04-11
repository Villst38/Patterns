<?php

namespace Vadim\Patterns\Command\Commands;

use Vadim\Patterns\Command\MiniProgram\Stereo;

class StereoOffWithCDCommand implements \Vadim\Patterns\Command\Command
{
    private Stereo $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }

    public function undo(): void
    {
        // TODO: Implement undo() method.
    }
}