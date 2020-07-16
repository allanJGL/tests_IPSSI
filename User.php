<?php


class User
{
    private string $name;
    private string $firstname;
    private string $mail;
    private int $age;

    public function __construct(string $name, string $firstname, string $mail, int $age)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->mail = $mail;
        $this->age = $age;
    }

    public function isNameValid()
    {
        if ($this->name !== "") {
            return true;
        }

    }

    public function isFirstnameValid()
    {
        if ($this->firstname !== "") {
            return true;
        }
    }

    public function isAgeValid()
    {
        if ($this->age !== null && $this->age >= 13) {
            return true;
        }
    }

    public function isEmailValid()
    {
        if (filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
    }

    public function isValid() {
        if ($this->isNameValid() && $this->isFirstnameValid() && $this->isAgeValid() && $this->isEmailValid()) {
            return true;
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }


}
