<?php 

namespace App\Services;

use Psr\Log\LoggerInterface;

class GiftService {

public  $gifts = ['flowers', 'books', 'piano', 'money' ];

public function __construct(LoggerInterface $logger)
{
    $logger->info('randomized gifts');
    shuffle($this->gifts);
}

}