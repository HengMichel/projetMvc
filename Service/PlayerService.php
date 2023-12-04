<?php

namespace Service;

use Model\Entity\Player;

class PlayerService
{
    public static function destroy()
    {
        session_destroy();
    }

    public static function addMessage($type, $message)
    {
        $_SESSION["messages"][$type][] = $message;
    }

    public static function getMessages()
    {
        $messages = $_SESSION["messages"] ?? null;

        if (isset($_SESSION["messages"])) {
            unset($_SESSION["messages"]);
        }
        return $messages;
    }

    public static function authentication(Player $player)
    {
        $_SESSION["player"] = $player;
    }

    public static function isConnected()
    {
        return $_SESSION["player"] ?? false;
    }

    public static function logout()
    {
        self::destroy();
    }

    public static function isAdmin(): bool
    {
        if ($player = self::isConnected()) {
            return $player->getNiveau() == ROLE_ADMIN;
        }
        return false;
    }
}
