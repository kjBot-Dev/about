<?php
namespace kjBotModule\kjBot\about;

use kjBot\Framework\Module;
use kjBot\Framework\Message;
use kjBot\Framework\Event\MessageEvent;
use kjBot\Framework\DataStorage;

class About extends Module{
    public function process(array $args, MessageEvent $event): Message{
        return $event->sendBack(DataStorage::GetData('about.txt'));
    }
}
