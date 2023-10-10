<?php

namespace ChirpChat\Model;

class User{

    public function __construct(private readonly string $userID, private readonly string $username, private readonly string $email, private readonly string $pseudo){}

    public function getUserID() : string{
        return htmlspecialchars($this->userID);
    }

    public function getUsername() : string{
        return htmlspecialchars($this->username);
    }

    public function getEmail() : string{
        return htmlspecialchars($this->email);
    }

    public function getPseudo() : string{
        return htmlspecialchars($this->pseudo);
    }


}
