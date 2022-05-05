<?php
namespace App\Domain\Entity;
require_once __DIR__ . '/../../../vendor/autoload.php';
use App\Domain\ValueObject\ContactId;
use App\Domain\ValueObject\ContactTitle;
use App\Domain\ValueObject\Email;

/**
 * ユーザーのEntity
 */
final class Contact
{
    private $id;
    private $title;
    private $email;
    private $content;

    public function __construct(
        ?ContactId $id,
        ContactTitle $title,
        Email $email,
        string $content
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->email = $email;
        $this->content = $content;
    }

    /**
     * @return ?ContactId
     */
    public function id(): ?ContactId
    {
        return $this->id;
    }

    /**
     * @return CotanctTitle
     */
    public function title(): ContactTitle
    {
        return $this->title;
    }

    /**
     * @return Email
     */
    public function email(): Email
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function content(): string
    {
        return $this->content;
    }
}
