<?php
class User
{
    private ?string $middlename = null;

    public function __construct(private string $name, private string $surname, private string $data){
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getSurname(): string 
    {
        return $this->surname;
    }

    public function getData(): Date 
    {
        return $this->data;
    }

    public function getMiddleName(): ?string
    {
        return $this->middlename;
    }

    public function setMiddleName(string $middlename): void
    {
        $this->middlename = $middlename;
    }
}

$user1 = new User(surname: 'Мельников ', name: 'Даниил ', data:'2001-03-12');
$user2 = new User('Настя', 'Иванова', '2003-05-13');
$user3 = new User('Никита', 'Славянов', '2002-09-02');

echo $user1->getSurname();
echo $user1->getName();
$user1->setMiddleName('Дмитриевич');
echo $user1->getMiddleName();
