<?php

namespace Vadim\Patterns\Observer;

class Observable
{
    protected array $observers;
    protected bool $changed = false;

    public function __construct()
    {
        $this->observers = [];
    }

    public function addObserver(Observer $o): void
    {
        $this->observers[spl_object_id($o)] = $o;
    }

    public function deleteObserver(Observer $o): void
    {
        unset($this->observers[spl_object_id($o)]);
    }

    public function notifyObservers(): void
    {
        if ($this->changed) {
            /** @var \Vadim\Patterns\Observer\Observer $o */
            foreach ($this->observers as $o) {
                $o->update($this);
            }
            $this->changed = false;
        }
    }

    public function measurementsChanged(): void
    {
        $this->setChanged();
        $this->notifyObservers();
    }

    public function setChanged()
    {
        $this->changed = true;
    }

    public function hacChanged()
    {
        return $this->changed;
    }

    public function clearChanged()
    {
        $this->changed = false;
    }
}