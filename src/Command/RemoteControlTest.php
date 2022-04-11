<?php

namespace Vadim\Patterns\Command;

use Vadim\Patterns\Command\Commands\CeilingFanHighCommand;
use Vadim\Patterns\Command\Commands\CeilingFanMediumCommand;
use Vadim\Patterns\Command\Commands\CeilingFanOffCommand;
use Vadim\Patterns\Command\Commands\CeilingFanOnCommand;
use Vadim\Patterns\Command\Commands\GarageDoorCloseCommand;
use Vadim\Patterns\Command\Commands\GarageDoorOpenCommand;
use Vadim\Patterns\Command\Commands\HottubOffCommand;
use Vadim\Patterns\Command\Commands\HottubOnCommand;
use Vadim\Patterns\Command\Commands\LightOffCommand;
use Vadim\Patterns\Command\Commands\LightOnCommand;
use Vadim\Patterns\Command\Commands\MacroCommand;
use Vadim\Patterns\Command\Commands\StereoOffWithCDCommand;
use Vadim\Patterns\Command\Commands\StereoOnWithCDCommand;
use Vadim\Patterns\Command\Commands\TVOffCommand;
use Vadim\Patterns\Command\Commands\TVOnCommand;
use Vadim\Patterns\Command\MiniProgram\CeilingFan;
use Vadim\Patterns\Command\MiniProgram\GarageDoor;
use Vadim\Patterns\Command\MiniProgram\Hottub;
use Vadim\Patterns\Command\MiniProgram\Light;
use Vadim\Patterns\Command\MiniProgram\Stereo;
use Vadim\Patterns\Command\MiniProgram\TV;

class RemoteControlTest
{
    public static function main()
    {
        // self::test1();
        // self::test2();
        // self::test3();
        self::test4();
    }

    /**
     * Тест 14-ти кнопок
     */
    private static function test1(): void
    {
        // Клиент
        $remoteControl = new RemoteControl();

        // Устройства
        $livingRoomLight = new Light('Гостиная');
        $kitchenLight = new Light('Кухня');
        $ceilingFan = new CeilingFan('Гостиная');
        $garageDoor = new GarageDoor('');
        $stereo = new Stereo('Гостиная');


        // Связывающая сущность Клиента и объекта который будет выполнять понятные ему действия
        // $lightOn = new LightOnCommand($light);

        // Создание команд для управления освещением.
        $livingRoomLightOn = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);
        $kitchenLightOn = new LightOnCommand($kitchenLight);
        $kitchenLightOff = new LightOffCommand($kitchenLight);

        //Создание команд для управления потолочным вентилятором.
        $ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
        $ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

        //Создание команд для управления дверью гаража.
        $garageDoorOn = new GarageDoorOpenCommand($garageDoor);
        $garageDoorOff = new GarageDoorCloseCommand($garageDoor);

        //Создание команд для управления стереосистемой.
        $stereoOn = new StereoOnWithCDCommand($stereo);
        $stereoOff = new StereoOffWithCDCommand($stereo);

        //Готовые команды связываются с ячейками пульта.
        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
        $remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
        $remoteControl->setCommand(2, $garageDoorOn, $garageDoorOff);
        $remoteControl->setCommand(3, $ceilingFanOn, $ceilingFanOff);
        $remoteControl->setCommand(4, $stereoOn, $stereoOff);

        //Метод toString() выводит список ячеек и связанных с ними команд.
        echo $remoteControl;

        //Пульт готов к проверке! Перебираем все ячейки, и для каждой ячейки имитируем нажатие кнопок «вкл» и «выкл».
        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);
        $remoteControl->onButtonWasPushed(1);
        $remoteControl->offButtonWasPushed(1);
        $remoteControl->onButtonWasPushed(2);
        $remoteControl->offButtonWasPushed(2);
        $remoteControl->onButtonWasPushed(3);
        $remoteControl->offButtonWasPushed(3);
        $remoteControl->onButtonWasPushed(4);
        $remoteControl->offButtonWasPushed(4);
    }

    /**
     * Тест кнопки отмены последнего действия
     */
    private static function test2(): void
    {
        $remoteControl = new RemoteControl();

        $livingRoomLight = new Light('Гостиная');

        $livingRoomLightOn = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);

        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);

        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);
        echo $remoteControl;
        $remoteControl->undoButtonWasPushed();
        $remoteControl->offButtonWasPushed(0);
        $remoteControl->onButtonWasPushed(0);
        echo $remoteControl;
        $remoteControl->undoButtonWasPushed();
    }

    private static function test3(): void
    {
        $remoteControl = new RemoteControl();

        $ceilingFan = new CeilingFan('Гостиная');

        $ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
        $ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
        $ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

        $remoteControl->setCommand(0, $ceilingFanHigh, $ceilingFanOff);
        $remoteControl->setCommand(1, $ceilingFanMedium, $ceilingFanOff);

        $remoteControl->onButtonWasPushed(0); // Высокая
        $remoteControl->offButtonWasPushed(0); // Отключил
        echo $remoteControl;
        $remoteControl->undoButtonWasPushed(); // Высокая

        $remoteControl->onButtonWasPushed(1); // Средняя
        echo $remoteControl;
        $remoteControl->undoButtonWasPushed(); // Высокая
    }

    private static function test4(): void
    {
        $remoteControl = new RemoteControl();

        $light = new Light('Гостиная');
        $tv = new TV('Гостиная');
        $stereo = new Stereo('Гостиная');
        $hottub = new Hottub();

        $lightOn = new LightOnCommand($light);
        $stereoOn = new StereoOnWithCDCommand($stereo);
        $tvOn = new TVOnCommand($tv);
        $hottubOn = new HottubOnCommand($hottub);

        $lightOff = new LightOffCommand($light);
        $stereoOff = new StereoOffWithCDCommand($stereo);
        $tvOff = new TVOffCommand($tv);
        $hottubOff = new HottubOffCommand($hottub);

        $partyOnMacro = new MacroCommand([$lightOn, $stereoOn, $tvOn, $hottubOn]);
        $partyOffMacro = new MacroCommand([$lightOff, $stereoOff, $tvOff, $hottubOff]);

        $remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);
        echo $remoteControl;
        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);
    }
}