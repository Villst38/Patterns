<?php

namespace Vadim\Patterns\Observer;

interface Observer
{
    public function update(Observable $obs, ...$args): void;
}