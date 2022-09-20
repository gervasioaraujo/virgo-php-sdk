<?php

namespace LiquidoBrl\VirgoPhpSdk\Service;

class LiquidoBrlPayInService
{

    public function createLiquidoPixPayIn()
    {
        try {
            $pixResponse = "PIX Test from Virgo PHP SDK";
            return $pixResponse;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
